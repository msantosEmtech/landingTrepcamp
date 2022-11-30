<?php
class Genders extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get(){
        $this->db->select("
        genders.Id            AS gender_id, 
        genders.Description   AS gender_description");
		$this->db->from("genders");

		return $this->db->get()->result_array();
    }

    public function GetById($id){
        $condicional = array('genders.Id' => $id);

        $this->db->select("
        genders.Id            AS gender_id, 
        genders.Description   AS gender_description");
		$this->db->from("genders");
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

}
