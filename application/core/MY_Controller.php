<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->page = array(
            'page_title' => 'PAGE TITLE',
            'app_name' => 'APP NAME',
            'app_icon' => 'https://d3l60bi8l6w4qs.cloudfront.net/wp-content/uploads/2014/11/hillsong-guest-avatar-hillsong-collected-150x150.png',
            'events' => array()
        );
    }

	public function display($content){
		$this->load->view('templates/header', $this->page);
		$this->load->view('templates/navigation', $this->page);
		$this->load->view('templates/content', $content);
		$this->load->view('templates/footer');
	}
}
