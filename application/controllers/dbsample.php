
<?php
class dbsample extends CI_Controller
{
	
	public function start()
	{
		$this->load->model('dbsamplemodel');
		$data['query']=$this->dbsamplemodel->bugsfunc();
		$this->load->view('dbsampleview',$data);
		
	}
}
?>