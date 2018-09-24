<?PHP

session_start();
$db = mysqli_connect('localhost','root','root','emoji');
$db->set_charset('utf8mb4');
// echo 'db connected';
if (!$db) { echo 'uhoh' ;};
if($db->connect_errno > 0){
	die('Unable to connect to database ['.$db->connect_error.']');
	};

?>