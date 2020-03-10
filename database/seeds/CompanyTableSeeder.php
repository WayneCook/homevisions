<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company();
        $company->address = 'N/A';
        $company->phone = '(626)531-7066';
        $company->email = 'homevisionmanagement@gmail.com';
        $company->save();
    }
}
