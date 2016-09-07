<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
            parent::__construct();           
    }
    public function dashboard($content){
    	if(isset($content['key'])&&$content['key']=="andykeren"){
		 $data['content']=$content['view'];
		 $this->load->view('index',$data);
		}else{
			redirect('redirect');
		}
	}
	public function index(){
		#data
		$data['title']="";

		#view
		$content['key']="andykeren";
		$content['view']=$this->load->view('home/index_center',$data,true);
		$this->dashboard($content);
	}
}	