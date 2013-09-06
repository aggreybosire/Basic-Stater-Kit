<?php

use Way\Tests\Should;
use Way\Tests\Assert;

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		// Should::beTrue(true);
  //       Assert::true(true);
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}