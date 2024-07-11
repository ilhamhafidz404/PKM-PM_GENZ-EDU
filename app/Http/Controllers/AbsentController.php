<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsentController extends Controller
{
    public function index()
    {

        $absents = Absent::with("user")->latest()->get();
        $now = Carbon::now('Asia/Jakarta');
        $eightAM = Carbon::today('Asia/Jakarta')->setTime(8, 0, 0);


        if (auth()->guard("teacher")->user()) {
            $checkTodayAbsent = "";
        } else if (auth()->guard("parent")->user()) {
            $checkTodayAbsent = Absent::whereDate('created_at', date('Y-m-d'))->whereUserId(auth()->guard("parent")->user()->user_id)->first();
        } else {
            $checkTodayAbsent = Absent::whereDate('created_at', date('Y-m-d'))->whereUserId(Auth::user()->id)->first();
        }


        return view("absent.index", [
            "absents" => $absents,
            "now" => $now,
            "eightAM" => $eightAM,
            "checkTodayAbsent" => $checkTodayAbsent
        ]);
    }

    public function store(Request $request)
    {

        $file = $request->file('photo');
        $path = $file->store('absents', 'public');

        Absent::create([
            "user_id" => Auth::user()->id,
            "photo" => $path,
            "status" => "on time",
        ]);

        return redirect()->back();
    }
}
