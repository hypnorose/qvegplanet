<?php
class homeController extends Controller{
	private $model;
	//START OF ACTIONS
	
 	//END OF ACTIONS
 	public function before(){
 	
 		require "Models/homeModel.php";
		$this->model=new homeModel();
 	}
}