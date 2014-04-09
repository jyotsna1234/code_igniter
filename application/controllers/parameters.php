<?php
class parameters extends CI_Controller
{
 public $name;
 public  $color;
 function parameters()
 { 
 	 parent::__construct();
	
 	$this->name="priya";
	$this->color='green';
	
 }
function view()
{
	$data['name']=$this->name;
	$data['color']=$this->color;
    $this->load->view('sooper',$data);
}
}
?>