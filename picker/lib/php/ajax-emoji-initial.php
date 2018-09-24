<?PHP
include('dbconnect.php');
$ip = $_SERVER['REMOTE_ADDR'];
$query0 = "select * from emoji_in where ip = '$ip' AND question = $question";
$result0 = $db->query($query0);
$ip_check = 0;
foreach ($result0 as $row){
    if($row["ip"]==$ip){$ip_row = $row['emoji_1']; $ip_check =1;}
}

if ($ip_check == 0){
echo 'no input yet';
}
else {
    echo 'your input: ';
echo $ip_row;
}

?>

