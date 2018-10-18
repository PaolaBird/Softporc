<?php 
class ExamController{

	private $model;

	public function __construct(){
		$this->model = new ExamModels();
	}

	public function set($exam_data = array()){
		return $this->model->set($exam_data);
	}

	public function get($id_exam = ''){
		return $this->model->get($id_exam);
	}
	
	public function del($id_exam = '' ){
		return $this->model->del($id_exam);
	}
}