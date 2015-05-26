<?php namespace App\Http\Controllers;

use App\User;


class UserController extends Controller {

	public function getOrm()
	{
		$result = User::first();

		dd($result->full_name);
	}

	public function getUsers()
	{
		$result = \DB::table('users')
		->select('*')
		->get();
		dd($result);
		return $result;
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