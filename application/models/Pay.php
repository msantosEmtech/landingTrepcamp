<?php
class Pay extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get(){
        $this->db->select("
        payments.Id                 AS payments_id, 
        payments.IdChapter          AS payments_id_chapter,
        payments.IdUser             AS payments_id_user,
        payments.Date               AS payments_id_date,
        payments.Price              AS payments_id_price,
        payments.ConfirmationNumber AS payments_id_confirmation_number");
		$this->db->from("payments");

		return $this->db->get()->result_array();
    }

    public function GetById($id){
        $condicional = array('payments.Id' => $id);

        $this->db->select("
        payments.Id                 AS payments_id, 
        payments.IdChapter          AS payments_id_chapter,
        payments.IdUser             AS payments_id_user,
        payments.Date               AS payments_id_date,
        payments.Price              AS payments_id_price,
        payments.ConfirmationNumber AS payments_id_confirmation_number");
		$this->db->from("payments");
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

    public function Add($datos){
        
        $data = [
            'IdChapter'             => $datos['IdChapter'],
            'IdUser'                => $datos['IdUser'],
            'Date'                  => $datos['Date'],
            'Price'                 => $datos['Price'],
            'ConfirmationNumber'    => $datos['ConfirmationNumber']
        ];

        return $this->db->insert("payments", $data);
    }

    public function validChapterActive(){
        $sqlProcedure = "CALL `sp_validarChallengeActivo`()";
        $query_result = $this->db->query($sqlProcedure);
        $result = $query_result->row_array();
        $query_result->next_result();
        $query_result->free_result();

        return $result;
    }

}