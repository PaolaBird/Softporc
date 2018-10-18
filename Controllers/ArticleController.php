<?php 
class ArticleController{

	private $model;

	public function __construct(){
		$this->model = new ArticleModels();
	}

	public function set($article_data = array()){
		return $this->model->set($article_data);
	}

	public function get($id_article = ''){
		return $this->model->get($id_article);
	}
	
	public function del($id_article = '' ){
		return $this->model->del($id_article);
	}
}