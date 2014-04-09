<?php
class dbsamplemodel extends CI_Model {	
	public function bugsfunc()
	{
				$this->load->database();
				$query=$this->db->get('bugs');
				return $query->result();
	}
}
?>