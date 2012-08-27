<?php if ( ! defined('BASEPATH')) exit('Acceso directo no permitido.');

date_default_timezone_set('America/Mexico_City');

class App 
extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
	
	public function splash()
	{		
		$this->load->view('splash_screen_view');
	}
	
	public function presentation()
	{		
		$this->load->view('presentation_view');
	}
	
	public function login()
	{		
		$this->load->view('login_view');
	}

	public function info()
	{		
		phpinfo(INFO_ALL);
	}
}
/* End of file app.php */
/* Location: ./application/controllers/app.php */