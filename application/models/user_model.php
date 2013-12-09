<?php
class User_model extends CI_Model {
    var $first_name;
    var $last_name;
    var $email_address;
    var $avatar;
    var $birth_date;
    var $gender;
    var $username;
    var $password;

    public function __construct() {
        parent::__construct();
    }

}
