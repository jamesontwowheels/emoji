<?PHP
session_start();
$db = new mysqli('localhost','bathroad_teacher','Serenity7','bathroad_emoji');
if ($db) {
} else {
  echo 'not conected';
}
if($db->connect_errno > 0){
	die('Unable to connect to database ['.$db->connect_error.']');
	} else {}
	;

?>