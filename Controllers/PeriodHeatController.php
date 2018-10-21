<?php 
class PeriodHeatController{

	private $model;

	public function __construct(){
		$this->model = new PeriodHeatModels();
	}

	public function set($heat_data = array()){
		return $this->model->set($heat_data);
	}

	public function get($id_heat = ''){
		return $this->model->get($id_heat);
	}
	
	public function del($id_heat = '' ){
		return $this->model->del($id_heat);
	}
}