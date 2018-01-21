<?php

use Illuminate\Database\Seeder;
// use App\login;
// use App\email;
// use App\ip;
// use App\latitude;
// use App\longitude;
// use App\user;
// use App\estabelecimento;
// use App\estab_cep;
// use App\telefone;
// use App\tipo_servico;
// use App\veiculo;
// use App\estab_estado;
// use App\estab_cidade;
// use App\estab_bairro;
// use App\estab_ender;
// use App\represent_contato;
// use App\empresa;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
			$this->call(loginSeeder::class);
			$this->call(emailSeeder::class);
			$this->call(ipSeeder::class);
			$this->call(latitudeSeeder::class);
			$this->call(longitudeSeeder::class);
			$this->call(userSeeder::class);

			// TODO estabelecimento seeders
			// $this->call(estabelecimento::class);
			// $this->call(estab_cep::class);
			// $this->call(telefone::class);
			// $this->call(tipo_servico::class);
			// $this->call(veiculo::class);
			// $this->call(estab_estado::class);
			// $this->call(estab_cidade::class);
			// $this->call(estab_bairro::class);
			// $this->call(estab_ender::class);
			// $this->call(represent_contato::class);
			// $this->call(empresa::class);
    }
}
