<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido.');

date_default_timezone_set('America/Mexico_City');

class fwh2012 
extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
	
	public function start()
	{
		$this->load->view("start_view");
	}

	public function info()
	{		
		phpinfo(INFO_ALL);
	}
}
/* End of file fwh2012.php */
/* Location: ./application/controllers/fwh2012.php */