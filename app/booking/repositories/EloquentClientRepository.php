<?php namespace booking\repositories;

use booking\Client;
/**
* Eloquent implementation
*/
class EloquentClientRepository implements ClientRepositoryInterface{
	
	public function all()
	{
	
	  return Client::all();
	
	}

}