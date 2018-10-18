<?php 
class AlarmController{

	private $model;

	public function __construct(){
		$this->model = new AlarmModels();
	}

	public function set($alarm_data = array()){
		return $this->model->set($alarm_data);
	}

	public function get($id_alarm = ''){
		return $this->model->get($id_alarm);
	}
	
	public function del($id_alarm = '' ){
		return $this->model->del($id_alarm);
	}
}