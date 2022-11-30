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

    public function GetByIdUser($idUser){
        $sqlChapter = 'SELECT 
        user_chapters.Id as id_chapter, user_chapters.IdPayment as id_payment_chapter, user_chapters.IdStatus as user_estatus_chapter 
        FROM `user_chapters` INNER JOIN `chapter_dates` on chapter_dates.IdChapter = user_chapters.IdChapter WHERE user_chapters.IdUser = '.$idUser.' AND 
        now() BETWEEN chapter_dates.start and chapter_dates.end';

        $query_result = $this->db->query($sqlChapter);
        $result = $query_result->row_array();

        return $result;

    }

    public function GetChapterActive(){
        $sqlChapter = 'SELECT chapter_dates.IdChapter as id_chapter FROM `chapter_dates` WHERE now() BETWEEN chapter_dates.start and chapter_dates.end';
        $query_result = $this->db->query($sqlChapter);
        $result = $query_result->row_array();

        return $result;
    }

}