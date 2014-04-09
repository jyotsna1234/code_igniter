<?php
class Hello extends CI_Controller
{
public function you()
	{
		$this->load->view('my_view');
	}
//execute in browser with filename as- http://localhost/codeigniter/index.php/hello/you
//the classname shud be same as filename but is not case sensitive
}
?>