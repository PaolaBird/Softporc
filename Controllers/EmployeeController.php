<?php 
class EmployeeController{

	private $model;

	public function __construct(){
		$this->model = new EmployeeModels();
	}

	public function set($employee_data = array()){
		return $this->model->set($employee_data);
	}

	public function get($id_employee = ''){
		return $this->model->get($id_employee);
	}
	
	public function del($id_employee = '' ){
		return $this->model->del($id_employee);
	}
}