<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$ionAuth = new \IonAuth\Libraries\IonAuth();
		if(!$ionAuth->loggedIn()){
			return redirect()->to('auth/login');
		 }
		return view('welcome_message');
	}
}
