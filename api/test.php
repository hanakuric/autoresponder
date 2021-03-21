<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/UserDao.class.php";

$user_dao = new UserDao();

$user1 = [
"name" => "Saliha Kuric",
"email" => "salihakuric@gmail.com",
"password" => "12345",
];

foreach($user1 as $name => $value){
echo $name. "<br />";
print $value. "<br />";

}



//$user = $user_dao->update_user(5, $user1);
//$user = $user_dao->get_user_by_id(5);

//$user_dao->get_user_by_email("hanakuric@gmail.com");

print_r($user);

?>
