<?php

use Illuminate\Database\Seeder;
use App\users;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {		
		/*
		|--------------
		| Users Seeder
		|--------------
		|
		| Preenche alguns campos do banco de dados com registros
		| para testes e criação de situações
		|
		| Adicionando informações sobre a equipe:
		| Leonardo Camargo <leonardo.silva1199@etec.sp.gov.br>
		| Lorena Biondi <lorena.moreira@etec.sp.gov.br>
		| Livia Souto <livia.souto@etec.sp.gov.br>
		| Arnaldo Hidalgo <>		
		| Maria Vitória Franquini Santos <>
		| Maria Gabriela Silva Teixeira <>
		|
		*/


		// Leonardo Camargo
		$user            = new users;
		$user->usr_ip    = '179.232.213.58'; // IP fixo da minha casa.
		$user->usr_name  = 'LeonardoCamargo';
		$user->usr_pass  = '1abaaf61cf319485ee3d8b023c94cf32'; // Md5 Crypto
		$user->usr_mail  = 'leonardo.silva1199@etec.sp.gov.br';
		$user->usr_cpf   = 49982031856;
		$user->usr_level = 0;
		$user->usr_birth = '2001-10-26';
		$user->save();

		// Lorena Biondi
		$user            = new users;
		$user->usr_ip    = '0.0.0.0';
		$user->usr_name  = 'LorenaBiondi'; 
		$user->usr_pass  = '3919e36e75380cf1fa6d5a0723eed8df'; // Md5 Crypto
		$user->usr_mail  = 'lorena.moreira@etec.sp.gov.br';
		$user->usr_cpf   = 45791613865;
		$user->usr_level = 0;
		$user->usr_birth = '2001-05-05';
		$user->save();
		
		// Livia Souto
		$user            = new users;
		$user->usr_ip    = '0.0.0.0';
		$user->usr_name  = 'LiviaSouto';
		$user->usr_pass  = 'daowidaslkdj'; // Keyboard Slap
		$user->usr_mail  = 'livia.souto@etec.sp.gov.br';
		$user->usr_cpf   = 46070795881;
		$user->usr_level = 0;
		$user->usr_birth = '2001-12-11';
		$user->save();

		// Arnaldo Hidalgo
		$user = new users;
		$user->usr_ip 	 = '0.0.0.0';
		$user->usr_name  = 'Arnaldo Hidalgo';
		$user->usr_pass  = 'doaiwjdaiwjawi'; // Keyboard Slap
		$user->usr_mail  = 'arnaldo@hidalgojunior.com.br';
		$user->usr_cpf   = 20025825801;
		$user->usr_level = 0;
		$user->usr_birth = '1974-10-24';
		$user->save();

		// Maria Vitoria
		$user = new users;
		$user->usr_ip 	 = '0.0.0.0';
		$user->usr_name  = 'Maria Vitória Franquini Santos';
		$user->usr_pass  = 'doaiwjdaiwjawi'; // Keyboard Slap
		$user->usr_mail  = 'maria.santos1168@etec.sp.gov.br';
		$user->usr_cpf   = 50285789821;
		$user->usr_level = 0;
		$user->usr_birth = '2001-04-11';
		$user->save();

		// Maria Gabriela
		$user = new users;
		$user->usr_ip 	 = '0.0.0.0';
		$user->usr_name  = 'Maria Gabriela Silva Teixeira';
		$user->usr_pass  = 'doaiwjdaiwjawi'; // Keyboard Slap
		$user->usr_mail  = 'maria.teixeira45@etec.sp.gov.br';
		$user->usr_cpf   = 47486639874;
		$user->usr_level = 0;
		$user->usr_birth = '2001-01-24';
		$user->save();
    }
}
