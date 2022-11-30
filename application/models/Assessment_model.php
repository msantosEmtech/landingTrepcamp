<?php
class Assessment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GetAssessment(){
        $this->db->select("assessment_questions.Id       AS question_id,
        assessment_questions.Question AS question,
        assessment_questions.a1       AS answer1,
        assessment_questions.a2       AS answer2,
        assessment_questions.a3       AS answer3,
        assessment_questions.a4       AS answer4,
        assessment_questions.a5       AS answer5,
        assessment_questions.v1       AS value1,
        assessment_questions.v2       AS value2, 
        assessment_questions.v3       AS value3,
        assessment_questions.v4       AS value4,
        assessment_questions.v5       AS value5,");
		$this->db->from("assessment_questions");
        $this->db->order_by("assessment_questions.Id", "asc");
		return $this->db->get()->result_array();
    }

}
