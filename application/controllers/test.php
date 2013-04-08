<?php if (!defined('BASEPATH')) die();

/**
* 
*/
class Test extends CI_Controller
{
	
	function index()
	{
	  $this->load->model('test_model');
	  $data['images'] = $this->test_model->get_images();
      $this->load->view('include/header');
      $this->load->view('test',$data);
      $this->load->view('include/footer');
	
	}
}
