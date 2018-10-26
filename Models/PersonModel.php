<?php 
class PersonModel extends Model{

	public function set($ps_data = array()){
		foreach ($ps_data as $key => $value) {
			$$key = $value;
		}
	
		$this->query = "REPLACE INTO Person SET 
					NO_EMPLOYEE    = '$NO_EMPLOYEE',
					document   	   = '$document',
					firstName  	   = '$firstName',
					secondName 	   = '$secondName',
					fatherLastName = '$fatherLastName',
					motherLastName = '$motherLastName',
					sex            = '$sex',
					email          = '$email',
					phone          = '$phone',
					cel_phone      = '$cel_phone',
					idRole         = '$idRole',
					password       = '$password',
					idInstalation  = '$idInstalation',
					lastUpdate     = NULL";

		$this->set_query();
	}

	public function get($ps = ''){
		$this->query = ($ps != '')
			? "SELECT CONCAT(ps.idRole,ps.NO_EMPLOYEE) AS Codigo, ps.document, ps.firstName, ps.secondName, ps.fatherLastName, ps.motherLastName, ps.sex, ps.email, ps.phone, ps.cel_phone, ps.idInstalation
				FROM Person AS ps 
			    WHERE CONCAT(ps.idRole,ps.NO_EMPLOYEE) = '0001'";
			: "SELECT CONCAT(ps.idRole,ps.NO_EMPLOYEE), ps.document, ps.firstName, ps.secondName, ps.fatherLastName, ps.motherLastName, ps.sex, ps.email, ps.phone, ps.cel_phone, ps.idInstalation
				FROM Person AS ps";

		$this->get_query();
		$num_rows = count($this->rows);
		$data = array();

		foreach ($this->rows as $key => $value) {
				array_push($data,$value);
			}

		return $data;	
	}

	public function del($ps = ''){

		$this->query = "DELETE FROM Person 
						WHERE NO_EMPLOYEE = '$ps'";

	    $this->set_query();
	}

}
?>