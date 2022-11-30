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


    public function Tiktok_active($idUser){
        $sql_tiktok = 'SELECT user_challenge_details.Id as bool_tiktok FROM user_challenge_details INNER JOIN user_chapters 
        ON user_chapters.Id = user_challenge_details.IdUserChapter AND user_challenge_details.IdTypeChallenge = 1 
        INNER JOIN chapter_dates on chapter_dates.IdChapter = user_chapters.IdChapter AND now() BETWEEN chapter_dates.start and chapter_dates.end 
        WHERE user_chapters.IdUser ='.$idUser;

        $query_result = $this->db->query($sql_tiktok);
        $result = $query_result->row_array();

        return $result;
    }

    public function Assessment_active($idUser){
        $sql_assessment = 'SELECT user_challenge_details.Id as bool_tiktok FROM user_challenge_details INNER JOIN user_chapters 
        ON user_chapters.Id = user_challenge_details.IdUserChapter AND user_challenge_details.IdTypeChallenge = 2
        INNER JOIN chapter_dates on chapter_dates.IdChapter = user_chapters.IdChapter AND now() BETWEEN chapter_dates.start and chapter_dates.end 
        WHERE user_chapters.IdUser ='.$idUser;

        $query_result = $this->db->query($sql_assessment);
        $result = $query_result->row_array();

        return $result;
    }

    public function AllChallenges($idChapter){
        $sql_challenge = 'SELECT user_chapters.IdStatus as status_challenge FROM `user_chapters` WHERE Id ='.$idChapter;
        
        $query_result = $this->db->query($sql_challenge);
        $result = $query_result->row_array();

        return $result;

    }
    
}