<?php

use Illuminate\Database\Seeder;
use App\ip;

class ipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
			$LeeoSilva   = new ip;
			$LoohBiondi  = new ip;
			$LiivSouto 	 = new ip;
			$Arnaldo		 = new ip;
			$MariaV 		 = new ip;
			$MariaG  		 = new ip;
			$LeeoSilva->usr_ip   = '179.232.213.58';
			$LoohBiondi->usr_ip  = '0.0.0.0';
			$LiivSouto->usr_ip   = '0.1.0.0';
			$Arnaldo->usr_ip     = '0.0.2.0';
			$MariaV->usr_ip      = '0.0.0.3';
			$MariaG->usr_ip      = '1.0.0.0';

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo	 ->save();
			$MariaV		 ->save();
			$MariaG		 ->save();
    }
}
