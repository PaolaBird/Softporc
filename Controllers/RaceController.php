<?php 
class RaceController{

	private $model;

	public function __construct(){
		$this->model = new RaceModels();
	}

	public function set($race_data = array()){
		return $this->model->set($race_data);
	}

	public function get($id_race = ''){
		return $this->model->get($id_race);
	}
	
	public function del($id_race = '' ){
		return $this->model->del($id_race);
	}
}