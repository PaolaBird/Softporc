<?php  
class PorcineModel extends Model {

	public function set($pig_data = array()){
		foreach ($pig_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO Pig (sex,wigth,idRace,idGrowthPhase,idPigStage,health,idInstalation,birthDate,acquisitionDate,lastUpdate) VALUES ($sex,$wigth,$idRace,$idGrowthPhase,$idPigStage,$health,$idInstalation,$birthDate,$acquisitionDate,'2018-10-20')";
		$this->set_query(); 
	}

	public function get($id_pig = ''){
		$this->query = ($id_pig != '')?"SELECT * FROM pig WHERE ID_PIG = $id_pig":"SELECT * FROM pig";
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
	}

	public function del($id_pig = '' ){
		$this->query = "DELETE FROM pig WHERE ID_PIG = $id_pig";
		$this->set_query();
	}
}