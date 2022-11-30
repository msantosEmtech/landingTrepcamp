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

}
