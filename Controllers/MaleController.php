<?php 
class MaleController{

	private $model;

	public function __construct(){
		$this->model = new MaleModels();
	}

	public function set($male_data = array()){
		return $this->model->set($male_data);
	}

	public function get($id_male = ''){
		return $this->model->get($id_male);
	}
	
	public function del($id_male = '' ){
		return $this->model->del($id_male);
	}
}