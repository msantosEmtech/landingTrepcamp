<?php
class ChallengeDetail extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get(){
        $this->db->select("
        chapters.Id                         AS chapter_id, 
        chapters.IdUserChapter              AS chapter_id_user_chapter,
        chapters.IdTypeChallenge            AS chapter_id_type_challenge,
        chapters.PathVideo                  AS chapter_path_video,
        chapters.UrlTiktok                  AS chapter_url_tiktok,
        chapters.UserNameTiktok             AS chapter_user_name_tiktok,
        chapters.AssessmentResult           AS chapter_assessment_result,
        chapters.AssessmentSubmissionDate   AS chapter_assessment_submission_date");
		$this->db->from("user_challenge_details");

		return $this->db->get()->result_array();
    }

    public function GetById($id){
        $condicional = array('user_challenge_details.Id' => $id);

        $this->db->select("
        chapters.Id                         AS chapter_id, 
        chapters.IdUserChapter              AS chapter_id_user_chapter,
        chapters.IdTypeChallenge            AS chapter_id_type_challenge,
        chapters.PathVideo                  AS chapter_path_video,
        chapters.UrlTiktok                  AS chapter_url_tiktok,
        chapters.UserNameTiktok             AS chapter_user_name_tiktok,
        chapters.AssessmentResult           AS chapter_assessment_result,
        chapters.AssessmentSubmissionDate   AS chapter_assessment_submission_date");
		$this->db->from("user_challenge_details");
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

    public function GetByDetailByIdUserIdChapter($idUser){
        $sqlProcedure = "CALL `sp_getHistoricTrepChallengeByIdUserIdChapter`($idUser)";
        $query_result = $this->db->query($sqlProcedure);
        $result = $query_result->result_array();
        $query_result->next_result();
        $query_result->free_result();

        return $result;
    }

    public function Add($datos){
        return $this->db->insert("user_challenge_details", $datos);
    }

}