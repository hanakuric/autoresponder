<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";

$user_dao = new UserDao();

$user1 = [
"name" => "Hana Kuric",
"email" => "hanaaa@gmail.com",
"password" => "1442345",
];

$user = $user_dao->update_user(1, $user1);
//$user = $user_dao->get_user_by_id(5);

//$user_dao->get_user_by_email("hanakuric@gmail.com");

print_r($user);

?>
