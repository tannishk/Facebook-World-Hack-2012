<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido.');

date_default_timezone_set('America/Mexico_City');

class Setup 
extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
		$this->load->library('unit_test');
		$this->load->library('user_agent');
    }
	
	public function index()
	{
		//$this->CI =& get_instance()
		$data = array();
		
		$this->benchmark->mark('load_model_start');
		$this->load->model("test_model");
		$this->benchmark->mark('load_model_end');
		print "Model Library Load: ".$this->benchmark->elapsed_time('load_model_start', 'load_model_end')."<br />";
		
		$this->benchmark->mark('model_method_start');
		$db_result = $this->test_model->test();
		$this->benchmark->mark('model_method_end');
		print "Query Exec: ".$this->benchmark->elapsed_time('model_method_start', 'model_method_end')."<br />";
		
		$data["parameters"] = $db_result;
		$this->unit->run($data["parameters"], 'is_array', 'Test Model Result');
		$this->unit->run($db_result, $data["parameters"]);
		$this->unit->run(1, 2, 'error');
		echo $this->unit->report();
		
		print "Site URL: ".$this->config->site_url()."<br />";
		print "Base URL: ".$this->config->base_url()."<br />";
		print "System URL: ".$this->config->system_url()."<br />";
		
		print "URI String: ".$this->uri->uri_string()."<br />";
		print "URI Total Segments: ".$this->uri->total_segments()."<br />";
		print "URI to ASSOC: <br />";
		var_dump( $this->uri->uri_to_assoc( $this->uri->total_segments() ) );
		print "<br />";
		print "Is Browser: ".$this->agent->is_browser()."<br />";
		print "Is Mobile: ".$this->agent->is_mobile()."<br />";
		print "Is Robot: ".$this->agent->is_robot()."<br />";
		print "Is Referal: ".$this->agent->is_referral()."<br />";
		print "Browser: ".$this->agent->browser()."<br />";
		print "Version: ".$this->agent->version()."<br />";
		print "Mobile: ".$this->agent->mobile()."<br />";
		print "Robot: ".$this->agent->robot()."<br />";
		print "Platform: ".$this->agent->platform()."<br />";
		print "Agent String: ".$this->agent->agent_string()."<br />";
		print "Accept Lang: ".$this->agent->accept_lang()."<br />";
		print "Accept Charset: ".$this->agent->accept_charset()."<br />";
		
		
		$this->load->view('setup_view', $data);
	}
}
/* End of file setup.php */
/* Location: ./application/controllers/install/setup.php */