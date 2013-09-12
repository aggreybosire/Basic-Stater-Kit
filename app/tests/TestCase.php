<?php



class TestCase extends Illuminate\Foundation\Testing\TestCase {


    
	/**
	 * static call to clean up the Mockery container used by the current test, 
	 * and run any verification tasks needed for your expectations
	 */

    public function setUp()
    {
     
       parent::setUp();
 
    }


    public function tearDown()
    {
        Mockery::close();
    }



	/**
	 * Creates the application.
	 *
	 * @return Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}
    
    /**
     * Checks if responce in test is ok
     * For readability
     */

	public function assertRequestOk()
	{
		$this->assertTrue($this->client->getResponse()->isOk());
	}

	/**
	 * Test helper function to assert view 
	 * receives a variable
	 * for readability: $this-asssertTrue(!! $response->get->original->posts)
	 * $this->assertViewReceives('posts')
	 */

    public function assertViewReceives($prop, $val=null)
    {
	    $response = $this->client->getResponse();
	    $prop = $response->original->$prop;
	    if ($val) {
	      	return $this->assertEquals($val, $prop);
	      }  
        $this->assertTrue(!! $prop);
    }

}
