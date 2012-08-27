<?php
class Test_model 
extends CI_Model 
{
	function _construct(){ parent::_construct(); }
	function test()
	{
		try{
			$this->load->database('default');
			$query = $this->db->query("SHOW DATABASES");
			$response = $query->result_array();
			return $response;
		} catch (Exception $e) {
			print "Error<br />"; foreach($e as $k => $v){ print "['$k'] = $v<br/>";}
		}
	}
}
/* Fin del archivo test_model.php */ 
/* Ubicación: ./application/models/test_model.php */