<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MX_Controller { //added for HMVC

	public function index()
	{
            $data = array(
                
                'title' => 'Homepage'
            );

         $this->template->load('default', 'content', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */