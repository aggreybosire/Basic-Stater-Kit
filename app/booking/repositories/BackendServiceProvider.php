<?php namespace booking\repositories;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class BackendServiceProvider extends ServiceProvider
{
	
	public function register()
	{
		$this->app->bind(
			
			'booking\repositories\ClientRepositoryInterface',

	        'booking\repositories\EloquentClientRepository'
	    );

	}
}