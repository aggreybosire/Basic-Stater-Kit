<?php

class ClientsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('clients')->truncate();

		$clients = array(
			'name'    =>'mike bosire',
			'idno'    =>'26578907',
			'mobile'  => '0710889736',
			'email'   =>'abosire@fortis-it.co.ke',
			'address' => 'P.O Box 14325-00100, Nbi'

		);

		// Uncomment the below to run the seeder
		 DB::table('clients')->insert($clients);
	}

}
