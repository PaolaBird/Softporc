<?php 
class MatingController{

	private $model;

	public function __construct(){
		$this->model = new MatingModels();
	}

	public function set($mating_data = array()){
		return $this->model->set($mating_data);
	}

	public function get($id_mating = ''){
		return $this->model->get($id_mating);
	}
	
	public function del($id_mating = '' ){
		return $this->model->del($id_mating);
	}
}