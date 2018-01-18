<?php

	function connection(){
	    // Conecta e verifica se ocorreu sucesso na conexão do PostGRESQL.
	    $connection = pg_connect(env('localhost'), env('3306'), env('HelpPrompt'), env('root'), env(''));	
		if( !$connection ){ die("Error in connection: " . pg_last_error()); }
    	return $connection;
    }
?>