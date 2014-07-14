<?php

class ShopController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function show()
	{
		$products = Shop::getProducts();
		return View::make('shop.show', ['products' => $products]);
	}
	
	public function product($productName)
	{
		$productName = Shop::whereName($productName)->first();
		return View::make('shop.product', ['productName' => $productName]);
	}

}
