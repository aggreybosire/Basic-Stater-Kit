<?php

use Way\Tests\Should;
use Way\Tests\Assert;

class ClientsControllerTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testAll()
	{
		
		$response = $this->call('GET', 'clients');

		$this->assertTrue($response->isOk());
	}

}