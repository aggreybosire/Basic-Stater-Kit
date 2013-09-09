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
		//Client::shouldReceive('all')->once->andReturn('foo');
		$this->call('GET', 'clients');

		$this->assertResponseOk();
		$this->assertViewReceives('clients');
	}
	

  //   public function testStore()
  //   {
  //   	Client::shouldReceive('store')->once->andReturn('truthy');
		// $this->call('POST', 'clients');

		// $this->assertRedirectedTo('clients');
  //   }

}

