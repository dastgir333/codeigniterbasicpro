
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {


	public function index(){

		$data['title'] = 'Letest Technology';
		$data['users'] = array('Dastgir','Alham','Tausif','Anam');

		$this->load->view('news/index', $data);
	}

}