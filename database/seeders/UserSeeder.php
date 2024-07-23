<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "Abiyah Naziyah Rahmani",
                "nisn" => "0107484375",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Adila Fanaka Nova",
                "nisn" => "0097893132",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Aldi Firansyah",
                "nisn" => "0082154357",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Alya Eka Juwita",
                "nisn" => "00999435469",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Calysta Octavianty Salsabila",
                "nisn" => "0098594724",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Dani Ginajar",
                "nisn" => "0106323694",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Dean Nita",
                "nisn" => "0081368375",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Jashtin Rizky Abdillah",
                "nisn" => "0102539801",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Muhamad Syaldzan",
                "nisn" => "0094266220",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Muhammad Aidan Bayanka",
                "nisn" => "0092175909",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Nurdian Rodiana",
                "nisn" => "0108431095",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Reyhan Arga Saputra",
                "nisn" => "0099220903",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Sheira Nurhasanah",
                "nisn" => "0096781011",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Tegar Rian Pratama",
                "nisn" => "0096043391",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Vidi Oktaviano",
                "nisn" => "0097356000",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Wildan Hakim",
                "nisn" => "0107144757",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],

            // 

            [
                "name" => "April Sukma Dewi",
                "nisn" => "0098946149",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Firdiansyah",
                "nisn" => "0098164357",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Aulia Dwi Puspita",
                "nisn" => "0100263447",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Dani Rama Dani",
                "nisn" => "0107074002",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Giska Aprilia",
                "nisn" => "0103742384",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Hapid Ramadan Saputra",
                "nisn" => "0105248937",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Hani Ismail",
                "nisn" => "0090976397",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Kiau Ragil Sawirin",
                "nisn" => "0090985097",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Muhammad Rizky Ilham",
                "nisn" => "0107522478",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Rehan Maulana",
                "nisn" => "0101752243",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Reza Fauzi",
                "nisn" => "0097639401",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Silvi Nuraini",
                "nisn" => "0105249471",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Vilyandris Fatahillah Putra Drisani",
                "nisn" => "0105236431",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Wilda Rundi Destiani",
                "nisn" => "3085122428",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],

            // 

            [
                "name" => "Rasiela Halimah Puri",
                "nisn" => "0103657281",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Raditya Mallana",
                "nisn" => "105663561",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Raditya Setiawan",
                "nisn" => "0111844587",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Rizky Ilham",
                "nisn" => "0111844728",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Najil Aziz Setiadi",
                "nisn" => "010763528",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Fabi Al-Ghifari Mahesa",
                "nisn" => "0118983580",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Mytra Firdasari Gista",
                "nisn" => "0108515494",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Diyen R",
                "nisn" => "01108515494",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Mochamad Farel Pratama",
                "nisn" => "0090926938",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Malika Ayudya Azzahra",
                "nisn" => "01025049582",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Kenze Nuri Mahmadia",
                "nisn" => "0107320746",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Dila Ayunda Romadani",
                "nisn" => "0112985506",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Bagas Arya Pratama",
                "nisn" => "0119903676",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Anzar Permana Putra",
                "nisn" => "0114923854",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Afidin",
                "nisn" => "0104635336",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ]
        ]);
    }
}
