<?php

use Illuminate\Database\Seeder;
use App\email;

class emailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$LeeoSilva   = new email;
			$LoohBiondi  = new email;
			$LiivSouto   = new email;
			$Arnaldo		 = new email;
			$MariaV			 = new email;
			$MariaG			 = new email;

			$LeeoSilva->usr_mail  = 'leonardo.silva1199@etec.sp.gov.br';
			$LoohBiondi->usr_mail = 'lorena.moreira@etec.sp.gov.br';
			$LiivSouto->usr_mail	= 'livia.souto@etec.sp.gov.br';
			$Arnaldo->usr_mail    = 'arnaldo@hidalgojunior.com.br';
			$MariaV->usr_mail     = 'maria.santos1168@etec.sp.gov.br';
			$MariaG->usr_mail 		= 'maria.teixeira45@etec.sp.gov.br';

			$LeeoSilva ->save();
			$LoohBiondi->save();
			$LiivSouto ->save();
			$Arnaldo	 ->save();
			$MariaV		 ->save();
			$MariaG		 ->save();
    }
}
