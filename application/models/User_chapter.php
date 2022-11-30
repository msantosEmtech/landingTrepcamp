<?php
class User_chapter extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function AddChapterUser($datos){
        return $this->db->insert("user_chapters", $datos);
    }

    public function completePayment($datos, $idUser, $idChapter){
        $sql_user_pay = 'UPDATE user_chapters SET user_chapters.IdPayment = '.$datos['IdPayment'].', user_chapters.IdStatus= 3 WHERE user_chapters.IdUser = '.$idUser.' AND user_chapters.IdChapter='.$idChapter.'';
        
        $query_result = $this->db->query($sql_user_pay);
        if ($query_result) {
            $result = true;
        }else{
            $result = false;
        }
        
        return $result;
    }

}
