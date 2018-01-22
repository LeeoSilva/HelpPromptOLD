<?php

use Illuminate\Database\Seeder;
use App\login;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$LeeoSilva   = new login;
			$LoohBiondi  = new login;
			$LiivSouto   = new login;
			$Arnaldo		 = new login;
			$MariaV			 = new login;
			$MariaG			 = new login;
			$LeeoSilva->usr_name    = 'Leonardo Silva';
			$LeeoSilva->usr_pass    = '3919e36e75380cf1fa6d5a0723eed8df';
			$LeeoSilva->usr_birth 	= '2001-10-26';

			$LoohBiondi->usr_name   = 'Lorena Biondi';
			$LoohBiondi->usr_pass		= 'dawjdawidjawidjaw';
			$LoohBiondi->usr_birth  = '2001-05-05';

			$LiivSouto->usr_name    = 'Livia Souto';
			$LiivSouto->usr_pass	  = 'dawijdawjdaw';
			$LiivSouto->usr_birth   = '2001-12-11';

			$Arnaldo->usr_name			= 'Arnaldo Hidalgo';
			$Arnaldo->usr_pass		  = 'diawjdawjdawijdaw';
			$Arnaldo->usr_birth			= '1974-10-24';

			$MariaV->usr_name				= 'Maria Vitória';
			$MariaV->usr_pass				= 'diawjdawojdawio';
			$MariaV->usr_birth			= '2001-04-11';

			$MariaG->usr_name				= 'Maria Gabriela';
			$MariaG->usr_pass				= 'doawijdawoijdawijdaw';
			$MariaG->usr_birth			= '2001-01-24';

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo	 ->save();
			$MariaV		 ->save();
			$MariaG		 ->save();
    }
}
