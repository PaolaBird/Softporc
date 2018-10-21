<?php  
class PeriodGestationModel extends Model {

	public function set($gestation_data = array()){
		foreach ($gestation_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO PeriodGestation (ID_FEMALE,DATE_START,lasUpdate) VALUES ($id_female,'$date_start','2018-10-21')";
		$this->set_query(); 
	}

	public function get($id_gestation = ''){
		$this->query = ($id_gestation != '')?"SELECT * FROM PeriodGestation WHERE ID_PERIOD_GESTATION = $id_gestation":"SELECT * FROM PeriodGestation";
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
	}

	public function del($id_gestation = '' ){
		$this->query = "DELETE FROM PeriodGestation WHERE ID_PERIOD_GESTATION = $id_gestation";
		$this->set_query();
	}
}