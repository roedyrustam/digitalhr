<?php

namespace Database\Seeders;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{

    public function run(): void
    {
        Company::create([
            'name' => "Pandu Talenta",
            'phone' => "6281241003047",
            'email' => "dev@sidepe.com",
            'owner_name' => "Pandu Talenta Digital",
            'address' => "Makassar",
            'logo' => "",
        ]);
    }
}
