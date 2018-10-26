<?php 
class PersonController{

	private $model;

	public function __construct(){
		$this->model = new PersonModel();
	}

	public function set($person_data = array()){
		return $this->model->set($person_data);
	}

	public function get($id_person = ''){
		return $this->model->get($id_peson);
	}
	
	public function del($id_person = '' ){
		return $this->model->del($id_person);
	}
}