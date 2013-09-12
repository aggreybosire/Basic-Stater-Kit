<?php

use Way\Tests\Should;
use Way\Tests\Assert;
use booking\Client;

class ClientsControllerTest extends TestCase {
    
   public function setUp()
   {
     
     parent::setUp();
 
     $this->mock = Mockery::mock('booking\repositories\ClientRepositoryInterface');
     App::instance('booking\repositories\ClientRepositoryInterface', $this->mock);

   }

   


	/**
	 * A basic functional test example.
	 * @covers  booking\Client::index()
	 * @return void
	 */
	public function testAll()
	{
		$this->mock->shouldReceive('all')->once()->andReturn('foo');

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

