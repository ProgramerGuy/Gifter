<?php namespace App\Http\Controllers;

use App\User;


class UserController extends Controller {

	public function getOrm()
	{
		$result = User::first();

		dd($result->full_name);
	}

	public function getIndex()
	{
		$result = \DB::table('users')
		->select('name','email')
		->where('name','=','raul')
		->get();
		dd($result);
		return $result;
	}




}