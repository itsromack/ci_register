<?php
class User_model extends CI_Model {
    // var $first_name;
    // var $last_name;
    // var $email_address;
    // var $avatar;
    // var $birth_date;
    // var $gender;
    // var $username;
    // var $passwd;

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $this->db->select('id', 'username');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('passsword', md5($passsword));
        $result = $this->db->get();
        if ($result->num_rows() == 1) {
            return $result->result();
        } else {
            return false;
        }
    }

}
