<?php

use App\Model\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Package::create(
          [ 'title'=>'普通套餐']
       );
    }
}
