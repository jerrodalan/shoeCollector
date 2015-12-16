<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades;

use App\Shoes;

use League\Csv\Reader;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->call('ShoeInfoTableSeeder');
        $this->command->info('Shoe Info table seeded');


    }
}

class ShoeInfoTableSeeder extends Seeder {
    public function run()
    {
        DB::table('shoe-info')->truncate();
        $skip = 0;
        $reader = Reader::createFromPath(base_path().'/database/seeds/shoeinventory.csv');
        foreach($reader as $index => $row){
            if($skip) {
                Shoes::create(['title' => $row[1], 'size' => $row[2], 'price' => $row[3], 'img'=> $row[4]]);
            }
            else{
                $skip = 1;
            }
        }
    }
}
