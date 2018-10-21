<?php  
class PeriodHeat extends Model {

	public function set($heat_data = array()){
		foreach ($heat_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO PeriodHeat (ID_PERIOD_HEAT,ID_FEMALE, idTypeMating,sincrony,DATE_START,dateEnd,lastUpdate) VALUES ($id_period_heat,$id_female,$idTypeMating,$sincrony,$date_start,$dateEnd,'2018-10-20')";
		$this->set_query(); 
	}

	public function get($id_heat = ''){
		$this->query = ($id_heat != '')?"SELECT * FROM PeriodHeat WHERE ID_PERIOD_HEAT = $id_heat":"SELECT * FROM PeriodHeat";
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
	}

	public function del($id_heat = '' ){
		$this->query = "DELETE FROM PeriodHeat WHERE ID_PERIOD_HEAT = $id_heat";
		$this->set_query();
	}
}