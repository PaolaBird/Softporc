<?php 
class InstalationController{

	private $model;

	public function __construct(){
		$this->model = new InstalationModels();
	}

	public function set($instalation_data = array()){
		return $this->model->set($instalation_data);
	}

	public function get($id_instalation = ''){
		return $this->model->get($id_instalation);
	}
	
	public function del($id_instalation = '' ){
		return $this->model->del($id_instalation);
	}
}