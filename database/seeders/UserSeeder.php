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
                "nisn" => "0107458475",
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
                "nisn" => "0082143577",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Alya Eka Juwita",
                "nisn" => "0099943469",
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
                "nisn" => "0081385375",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Dean Nita",
                "nisn" => "0102598301",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Jashtin Rizky Abdillah",
                "nisn" => "0097022810",
                "profile" => "profile.jpg",
                "password" => bcrypt("030609"),
                "classroom_id" => 1
            ],
            [
                "name" => "Muhamad Syahdzan",
                "nisn" => "0094266220",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Muhammad Aidan Bayanaka",
                "nisn" => "0092175909",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Nurdian Rodiana",
                "nisn" => "0108430195",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 1
            ],
            [
                "name" => "Reyhan Arga Saputra",
                "nisn" => "0092920903",
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
                "nisn" => "0097535600",
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
                "nisn" => "0091610849",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Firdiansyah",
                "nisn" => "0086482557",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Aulia Dwi Puspita",
                "nisn" => "0092624347",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Dani Rama Dani",
                "nisn" => "0107074022",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Giska Aprilia",
                "nisn" => "0107323874",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Hapid Ramadan Saputra",
                "nisn" => "0103542393",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Harun Ismail",
                "nisn" => "0101036894",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Kilau Ragil Sawitri",
                "nisn" => "0092724938",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Muhammad Rizky Ilham",
                "nisn" => "117414728",
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
                "nisn" => "0097693401",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Silvi Nuraini",
                "nisn" => "0105294471",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],
            [
                "name" => "Villyandris Fatahillah Putra Drisani",
                "nisn" => "0102523631",
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
            [
                "name" => "Muhammad Fauzi",
                "nisn" => "0099693097",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 2
            ],

            // 

            [
                "name" => "Raselia Halimah Puri",
                "nisn" => "0103657281",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Raditya Maulana",
                "nisn" => "0105665361",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Radit Setiawan",
                "nisn" => "105563258",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Rizky Ilham",
                "nisn" => "0117414728",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Naufal Aziz Setiadi",
                "nisn" => "0111854857",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Fabi Al-Ghifari Mahesa",
                "nisn" => "0108273800",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Miyalita Fitri Lestari",
                "nisn" => "0112556251",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Muhammad Diyen R",
                "nisn" => "0109815494",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Mochamad Farell Pratama",
                "nisn" => "0107643802",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Malika Ayundya Azzahra",
                "nisn" => "0102649582",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Kenzie Nuri Mahmadia",
                "nisn" => "0099330764",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Feli Kirana",
                "nisn" => "0114243803",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Dila Ayunda Romadani",
                "nisn" => "0101229550",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Bagas Arya Pratama",
                "nisn" => "0119930376",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Anzar Permana Putra",
                "nisn" => "23247002",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],
            [
                "name" => "Afidin",
                "nisn" => "0104365336",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 3
            ],

            //
            
            [
                "name" => "Ahmad Ibnu Sabani",
                "nisn" => "0113834449",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Abdul Patah Diningrat",
                "nisn" => "3123115173",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Aditya Irwansyah",
                "nisn" => "0113216181",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Demas Nurinra",
                "nisn" => "3125133214",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Jirna Sri Maela",
                "nisn" => "0105691359",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Muhammad Eka Zakira",
                "nisn" => "0105691359",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Repan Budiman",
                "nisn" => "24257001",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Ramadhan Rahmat Darmawan",
                "nisn" => "171801017",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Sendi Adriyana",
                "nisn" => "0124013609",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Tio Bugi",
                "nisn" => "0127333928",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Teguh Adi Nugraha",
                "nisn" => "0125013932",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Tita Fatimatuzzahra",
                "nisn" => "0103899122",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Valelian Refin Saputra",
                "nisn" => "0128551952",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Yulia Dwi Anugrah",
                "nisn" => "0123321934",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
            [
                "name" => "Fadil Nur Fadilah",
                "nisn" => "0116428768",
                "profile" => "profile.jpg",
                "password" => bcrypt("rahasia"),
                "classroom_id" => 4
            ],
        ]);
    }
}
