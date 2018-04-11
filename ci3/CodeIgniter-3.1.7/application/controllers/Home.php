<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
    	parent::__construct();
    	//Do your magic here

    }
	public function index()
	{
		$this->load->model('biodata');
		$data['biodata_array'] = $this->biodata->getBiodataQueryArray();
		$data['biodata_object'] = $this->biodata->getBiodataQueryObject();
		$data['biodata_builder_array'] = $this->biodata->getBiodataBuilderArray();
		$data['biodata_builder_object'] = $this->biodata->getBiodataBuilderObject();
		$this->load->view('home',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
 