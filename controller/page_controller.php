<?php

require('controller.php');
require('model/page_model.php');

class PageController extends Controller{




	public function getMenu(){
		$model = new PageModel;
		$theloai = $model->getTheloai();
		return $theloai;
		//print_r($theloai);

	}

	public function getIndex(){
		$theloai = $this->getMenu();
		$model = new PageModel;
		$slide = $model->getSlide();
		$tinmoi = $model ->getTinMoiNhat();
		$tinmoi_1 = $model ->getTinMoiNhat_1();
		$tinmoi_2 = $model ->getTinMoiNhat_2();
		$arrData = array('theloai'=>$theloai,'slide'=>$slide,'tinmoi'=>$tinmoi, 'tinmoi_1'=>$tinmoi_1, 'tinmoi_2'=>$tinmoi_2); //đóng gói

		return $this->loadView('trangchu',$arrData);
	}


	public function getType(){
		return $this->loadView('type');
	}

	public function getDetail(){
		return $this->loadView('single');
	}

	public function getLogin(){
		return $this->loadView('login');
	}


	public function getSignup(){
		return $this->loadView('signup');
	}


	public function getContact(){
		$theloai = $this->getMenu();
		$arrData = array('theloai'=>$theloai);
		return $this->loadView('contact',$arrData);
	}



}



?>