<?php
class Services extends M {
	
	function insertPost($data)	{
		$this->db->insert('wgb_posts', $data);
		$query = $this->db->getQuery();
	    $this->db->reset();
		return $query;
	}
	
	function checkForNewPosts($status = 1){
		$this->db->select('*')->from('wgb_posts')->where('status', $status)->order('created_at DESC');
		$query = $this->db->getQuery();
	    $num = mysql_num_rows($query);
		$this->db->reset();
		
		if($num > 0){
			$returnData = array('data' => $query, 'datacount' => $num);
			return $returnData;
		}
		return FALSE;
	}
	
	function getActivePosts($status = 2){
		$this->db->select('*')->from('wgb_posts')->where('status', $status)->order('created_at DESC');
		$query = $this->db->getQuery();
	    $num = mysql_num_rows($query);
		$this->db->reset();
		
		if($num > 0){
			$returnData = array('data' => $query, 'datacount' => $num);
			return $returnData;
		}
		return FALSE;
	}
	
	function approvePost($id){
		$data = array('status' => 2);
		$this->db->update('wgb_posts',$data)->where('id', $id);
		$query = $this->db->getQuery();
		$this->db->reset();
		return TRUE;
	}
	
	function deletePost($id){
		$this->db->delete('wgb_posts')->where('id', $id);
		$query = $this->db->getQuery();
		$this->db->reset();
		return TRUE;
	}
}
?>