<?php 
class MedicineController{

	private $model;

	public function __construct(){
		$this->model = new MedicineModels();
	}

	public function set($medicine_data = array()){
		return $this->model->set($medicine_data);
	}

	public function get($id_medicine = ''){
		return $this->model->get($id_medicine);
	}
	
	public function del($id_medicine = '' ){
		return $this->model->del($id_medicine);
	}
}