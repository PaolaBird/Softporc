<?php 
class FemaleController{

	private $model;

	public function __construct(){
		$this->model = new FemaleModels();
	}

	public function set($female_data = array()){
		return $this->model->set($female_data);
	}

	public function get($id_female = ''){
		return $this->model->get($id_female);
	}
	
	public function del($id_female = '' ){
		return $this->model->del($id_female);
	}
}