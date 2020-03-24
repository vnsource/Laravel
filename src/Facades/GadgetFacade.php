<?php namespace VnSource\Facades;

use Illuminate\Support\Facades\Facade;

class GadgetFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'gadget'; }

}
