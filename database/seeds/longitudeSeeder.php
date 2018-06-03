<?php

use Illuminate\Database\Seeder;
use App\longitude;

class longitudeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$LeeoSilva  = new longitude;
			$LoohBiondi = new longitude;
			$LiivSouto 	= new longitude;
			$Arnaldo 		= new longitude;
			$MariaV 		= new longitude;
			$MariaG 		= new longitude;

			$LeeoSilva->usr_lon 	= 0.0000;
			$LoohBiondi->usr_lon 	= 0.1000;
			$LiivSouto->usr_lon 	= 0.0200;
			$Arnaldo->usr_lon 		= 0.0030;
			$MariaV->usr_lon 			= 0.0004;
			$MariaG->usr_lon 			= 1.0000;

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo   ->save();
			$MariaV		 ->save();
			$MariaG		 ->save();
    }
}
