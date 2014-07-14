<?php


class Shop extends Eloquent {

	protected $guarded = [
		'price'
	];

	static function getProducts(){
		$products = DB::table('shops')->get();
		return $products;
	}
}