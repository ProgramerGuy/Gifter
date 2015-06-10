<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class GiftsContoller extends Controller {

	public function getItems(){
		$result = \DB::table('gift_shops')
		->select('*')
		->get();
		return $result;
	}

	public function getPopular(){
		$result = \DB::table('gift_shops')
		->select('*')
		->where('views','>','0')
		->orderBy('views','DES')
		->get();
		return $result;
	}

	public function getUserGifts(){

		$user = \Auth::user()->id;

		$result = \DB::table('gifts')
		->select('*')
		->where('gift_to','=',$user)
		->get();
		return $result;
	}

	public function getGalery(){

		$result = \DB::table('gifts')
		->select('*')
		->where('public','=','1')
		->get();
		return $result;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$gift = \App\gifts_shop();
		$gift->tittle = $request->tittle;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
