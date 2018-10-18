<?php 
class BirthController{

	private $model;

	public function __construct(){
		$this->model = new BirthModels();
	}

	public function set($birth_data = array()){
		return $this->model->set($birth_data);
	}

	public function get($id_birth = ''){
		return $this->model->get($id_birth);
	}
	
	public function del($id_birth = '' ){
		return $this->model->del($id_birth);
	}
}