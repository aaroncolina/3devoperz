<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct(){
        parent::__construct();

        $this->page = array(
            'page_title' => 'PAGE TITLE',
            'app_name' => 'APP NAME',
            'app_icon' => 'https://d3l60bi8l6w4qs.cloudfront.net/wp-content/uploads/2014/11/hillsong-guest-avatar-hillsong-collected-150x150.png',
            'events' => array(
                'sol' => array(
                    'title' => 'Seasons of Life',
                    'img' => 'https://cogdasma.com/wp-content/uploads/2017/10/2017-10-22-Dawnwatch.jpg',
                    'desc' => 'In minim do tempor reprehenderit sunt. Labore officia laboris et proident nulla in et labore aliquip elit veniam eiusmod veniam amet.'
                ),
                'pmt' => array(
                    'title' => 'PMT',
                    'img' => 'http://cogdasma.com/wp-content/uploads/2017/07/2017-07-23-PMT.jpg',
                    'desc' => 'Magna eiusmod culpa aliqua laborum nulla sunt minim do enim enim. Occaecat laborum nisi dolor cillum aute nisi enim amet.'
                ),
                'cs' => array(
                    'title' => 'Comming Soon',
                    'img' => 'https://cogdasma.com/wp-content/uploads/2017/10/2017-10-01-Midweeek-Dasma.jpg',
                    'desc' => 'Consequat cillum eiusmod duis consequat dolore do. In quis eu aliqua tempor ex laboris excepteur id amet.'
                ),
            )
        );
    }

	public function index(){
        $page['content'] = $this->load->view('pages/home',$this->page,TRUE);
		$this->display($page);
    }

    public function registration($event_name){
        $this->load->helper('form');
        $page['form_fields'] = array(

        );
        $page['content'] = $this->load->view('pages/registration',$this->page['events'][$event_name],TRUE);
		$this->display($page);
	}
}
