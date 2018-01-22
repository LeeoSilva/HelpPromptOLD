<?php

use Illuminate\Database\Seeder;
use App\latitude;

class latitudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$LeeoSilva  = new latitude;
			$LoohBiondi = new latitude;
			$LiivSouto 	= new latitude;
			$Arnaldo 		= new latitude;
			$MariaV 		= new latitude;
			$MariaG 		= new latitude;

			$LeeoSilva->usr_lat 	= 0.0000;
			$LoohBiondi->usr_lat 	= 0.1000;
			$LiivSouto->usr_lat 	= 0.0200;
			$Arnaldo->usr_lat 		= 0.0030;
			$MariaV->usr_lat 			= 0.0005;
			$MariaG->usr_lat 			= 1.0000;

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo   ->save();
			$MariaV    ->save();
			$MariaG    ->save();
    }
}
