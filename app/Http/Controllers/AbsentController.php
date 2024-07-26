<?php

namespace App\Http\Controllers;

use App\Exports\AbsentExport;
use App\Models\Absent;
use App\Models\Classroom;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AbsentController extends Controller
{
    public function index()
    {
        $carbonDate = Carbon::parse($_GET["filterDate"] ?? now());

        $absentsQuery = Absent::whereDate('created_at', $carbonDate)->with("user");

        if (isset($_GET["filterClass"]) && $_GET["filterClass"] !== "") {
            $classroomId = $_GET["filterClass"];
            $absentsQuery->whereHas('user', fn($query) => $query->where('classroom_id', $classroomId));
        }

        $absents = $absentsQuery->latest()->get();

        $now = Carbon::now('Asia/Jakarta');
        $eightAM = Carbon::today('Asia/Jakarta')->setTime(23, 0, 0);

        $user = auth()->guard("teacher")->user() ? null : 
                (auth()->guard("parent")->user() 
                ? auth()->guard("parent")->user()->user_id 
                : Auth::user()->id);

        $checkTodayAbsent = $user ? Absent::whereDate('created_at', today())->whereUserId($user)->first() : "";

        $classrooms = Classroom::orderBy('name', "DESC")->get();

        return view("absent.index", compact('absents', 'now', 'eightAM', 'checkTodayAbsent', 'classrooms'));
    }


    public function store(Request $request)
    {

        // Check apakah user sudah submit absen atau belum
        $todayAbsents = Absent::whereUserId(Auth::user()->id)
            ->whereDate('created_at', Carbon::today())
            ->count();
        
        if(!$todayAbsents){ 
            $this->validate($request, [
                'photo' => 'required',
            ]);
    
            $file = $request->file('photo');
            $path = $file->store('absents', 'public');
    
            Absent::create([
                "user_id" => Auth::user()->id,
                "photo" => $path,
                "status" => $request->submit,
            ]);
        }

        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new AbsentExport, 'absents.xlsx');
    }
}
