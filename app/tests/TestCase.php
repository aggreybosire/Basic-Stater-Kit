<?php

use \Mockery as m;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * static call to clean up the Mockery container used by the current test, 
	 * and run any verification tasks needed for your expectations
	 */

    public function tearDown()
    {
        m::close();
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

}
