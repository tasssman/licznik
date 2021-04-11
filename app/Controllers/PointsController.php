<?php

namespace App\Controllers;

use App\Models\PointsModel;

class PointsController extends BaseController
{
	public function __construct()
	{
		$ionAuth = new \IonAuth\Libraries\IonAuth();
		if(!$ionAuth->loggedIn()){
			return redirect()->to('auth/login');
		 }	
	}

	public function index()
	{
		$allPoints = new PointsModel();
		$data['points'] = $allPoints->GetAllPoints();
		echo view('page_header');
		echo view('points/points_view', $data);
		echo view('page_footer');
	}
}
