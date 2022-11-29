<?php
class Chapters extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get(){
        $this->db->select("
        chapters.Id            AS chapter_id, 
        chapters.Description   AS chapter_description");
		$this->db->from("chapters");

		return $this->db->get()->result_array();
    }

    public function GetById($id){
        $condicional = array('chapters.Id' => $id);

        $this->db->select("
        chapters.Id            AS chapter_id, 
        chapters.Description   AS chapter_description");
		$this->db->from("chapters");
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    } 

    public function GetByHistoricByChapterIdUser($idUser){
        $sqlProcedure = "CALL `sp_getHistorialChapterByUser`($idUser)";
        $query_result = $this->db->query($sqlProcedure);
        $result = $query_result->result_array();
        $query_result->next_result();
        $query_result->free_result();

        return $result;
    }

}