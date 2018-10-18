<?php 
class PorcineController{

	private $model;

	public function __construct(){
		$this->model = new PorcineModels();
	}

	public function set($porcine_data = array()){
		return $this->model->set($porcine_data);
	}

	public function get($id_porcine = ''){
		return $this->model->get($id_porcine);
	}
	
	public function del($id_porcine = '' ){
		return $this->model->del($id_porcine);
	}
}