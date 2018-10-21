<?php 
class PeriodGestationController{

	private $model;

	public function __construct(){
		$this->model = new PeriodGestationModels();
	}

	public function set($gestation_data = array()){
		return $this->model->set($gestation_data);
	}

	public function get($id_gestation = ''){
		return $this->model->get($id_gestation);
	}
	
	public function del($id_gestation = '' ){
		return $this->model->del($id_gestation);
	}
}