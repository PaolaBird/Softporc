<?php  
class AlarmModel extends Model {

	public function set($alarm_data = array()){
		foreach ($alarm_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "REPLACE INTO Alarm (NO_EMPLOYEE,issue,DATE_TIME,lastUpdate) VALUES ($no_employee,'$issue',$date_time,'2018-10-20')";
		$this->set_query(); 
	}

	public function get($id_alarm = ''){
		$this->query = ($id_alarm != '')?"SELECT * FROM Alarm WHERE NO_EMPLOYEE = $no_employee":"SELECT * FROM Alarm";
		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();
		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}
		return $data;
	}

	public function del($id_alarm = '' ){
		$this->query = "DELETE FROM Alarm WHERE NO_EMPLOYEE = $no_employee";
		$this->set_query();
	}
}