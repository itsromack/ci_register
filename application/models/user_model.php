<?php
class Users_model extends CI_Model {
    var $first_name;
    var $last_name;
    var $email_address;
    var $avatar;
    var $birth_date;
    var $gender;
    var $username;
    var $passwd;

    public function __construct() {
        parent::__construct();
    }

}
