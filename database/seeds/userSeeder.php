<?php

use Illuminate\Database\Seeder;
use App\user;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
			$LeeoSilva   = new user;
			$LoohBiondi  = new user;
			$LiivSouto   = new user;
			$Arnaldo 		 = new user;
			$MariaV   	 = new user;
			$MariaG 		 = new user;

			$LeeoSilva->usr_level  = 0;
			$LeeoSilva->usr_cpf    = 49982031856;

			$LoohBiondi->usr_level = 0;
			$LoohBiondi->usr_cpf   = 45791613865;

			$LiivSouto->usr_level  = 0;
			$LiivSouto->usr_cpf    = 46070795881;

			$Arnaldo->usr_level    = 0;
			$Arnaldo->usr_cpf      = 20025825801;

			$MariaV->usr_level     = 1;
			$MariaV->usr_cpf       = 50285789821;

			$MariaG->usr_level     = 1;
			$MariaG->usr_cpf       = 47486639874;

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo   ->save();
			$MariaV    ->save();
			$MariaG		 ->save();
		}
}
