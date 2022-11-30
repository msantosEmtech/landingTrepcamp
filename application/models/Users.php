<?php
class Users extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Get(){
        $this->db->select("
        users.Id            AS user_id, 
        users.Name          AS user_name,
        users.LastName      AS user_last_name,
        users.Email         AS user_email,
        users.IdGender      AS user_id_gender,
        users.CountryCode   AS user_country_code,
        users.Phone         AS user_phone,
        users.RegisterDate  AS user_register_date,
        users.Birthday      AS user_birthday,
        users.Password      AS user_password,
        users.Status        AS user_status,
        genders.Description AS user_gender_description");
		$this->db->from("users");
        $this->db->join('genders', 'genders.Id = users.IdGender', 'left');

		return $this->db->get()->result_array();
    }

    public function GetById($id){
        $condicional = array('users.Id' => $id);

        $this->db->select("
        users.Id            AS user_id, 
        users.Name          AS user_name,
        users.LastName      AS user_last_name,
        users.Email         AS user_email,
        users.IdGender      AS user_id_gender,
        users.CountryCode   AS user_country_code,
        users.Phone         AS user_phone,
        users.RegisterDate  AS user_register_date,
        users.Birthday      AS user_birthday,
        users.Password      AS user_password,
        users.Status        AS user_status,
        genders.Description AS user_gender_description");
		$this->db->from("users");
        $this->db->join('genders', 'genders.Id = users.IdGender', 'left');
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

    public function GetByEmail($email){
        $condicional = array('users.Email' => $email);

        $this->db->select("
        users.Id            AS user_id, 
        users.Name          AS user_name,
        users.LastName      AS user_last_name,
        users.Email         AS user_email,
        users.IdGender      AS user_id_gender,
        users.CountryCode   AS user_country_code,
        users.Phone         AS user_phone,
        users.RegisterDate  AS user_register_date,
        users.Birthday      AS user_birthday,
        users.Password      AS user_password,
        users.Status        AS user_status,
        genders.Description AS user_gender_description");
		$this->db->from("users");
        $this->db->join('genders', 'genders.Id = users.IdGender', 'left');
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

    public function GetByCredentials($email, $pasword){
        $condicional = array('users.Email' => $email, 'users.Password' => $pasword, 'Status' => 1);

        $this->db->select("
        users.Id            AS user_id, 
        users.Name          AS user_name,
        users.LastName      AS user_last_name,
        users.Email         AS user_email,
        users.IdGender      AS user_id_gender,
        users.CountryCode   AS user_country_code,
        users.Phone         AS user_phone,
        users.RegisterDate  AS user_register_date,
        users.Birthday      AS user_birthday,
        users.Password      AS user_password,
        users.Status        AS user_status,
        genders.Description AS user_gender_description");
		$this->db->from("users");
        $this->db->join('genders', 'genders.Id = users.IdGender', 'left');
        $this->db->where($condicional);

		return $this->db->get()->row_array();
    }

    public function Add($datos){
        $exist = $this->db->query("SELECT Id FROM users WHERE Email ='".$datos['Email']."'");

		$result = $exist->num_rows();

		if($result > 0){
			return false;
		}else{
			$data = [
				'Name'          => $datos['Name'],
				'LastName'      => $datos['LastName'],
				'Email'         => $datos['Email'],
				'IdGender'      => $datos['IdGender'],
				'CountryCode'   => $datos['CountryCode'],
				'RegisterDate'  => $datos['RegisterDate'],
				'Birthday'      => $datos['Birthday'],
                'Password'      => $datos['Password'],
                'Status'        => $datos['Status']
			];

			return $this->db->insert("users", $data);
		}
    }

    public function Update($datos, $id){
        $where = array('Id' => $id);
        return $this->db->update("users", $datos, $where);
    }

    public function Delete($id){
		$where = array('Id' => $id);
		return $this->db->delete('users', $where);
	}

    public function verified($email){
        $exist = $this->db->get_where('users', array('Email' => $email, 'Status' => 0));
        $result = $exist->num_rows();

        if($result > 0){
            $where = array('Email' => $email);
            $data = [
                'Status'  => 1
            ];
            return $this->db->update("users", $data, $where);
        }else{
            return false;
        }
            
        
    }
}
