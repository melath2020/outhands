<?php
defined('BASEPATH')OR exit('no direct scripts access allowed');


class WebModel extends CI_model
{

public function loginreg($data)
	{
		$this->db->insert('loginreg',$data);

	}
	public function get_reg()
    {
        $query=$this->db->get('loginreg');
        return $query->result();
    }
	public function get_editadmin($id)
    {
	$this->db->where('id',$id);
	$query=$this->db->get('loginreg');
	return $query->row();

    }
	public function change_admin($data,$id)
    {
	$this->db->where('id',$id);
	$query=$this->db->update('loginreg',$data);
	return $query;
    }
	public function delete($id)
    {
	$this->db->where('id',$id);
	$query=$this->db->delete('loginreg');
	return $query;
    }
	
}