<?PHP
include('dbconnect.php');
$emoji = $_POST["emoji"];

//$emoji = strtolower($emoji);
$patterns = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k','l','m', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0' );

$newemoji = str_replace($patterns, "", $emoji);

$question = $_POST["question"];
$ip = $_SERVER['REMOTE_ADDR'];
$query0 = "select * from emoji_in where question = '$question'";
$result0 = $db->query($query0);
$ip_check = 0;
foreach ($result0 as $row){
    if($row["ip"]==$ip){$ip_row = $row['UID']; $ip_check =1;}
}
if ($ip_check == 0){
$query = "INSERT INTO emoji_in (emoji_1, ip, question)
VALUES ('".$newemoji."', '".$ip."', '".$question."')";
$result = $db->query($query);
}
else {
    $query = "UPDATE emoji_in SET emoji_1= '$newemoji' WHERE UID = $ip_row";
$result = $db->query($query);
}

echo "your input: ".$newemoji;
//$query2 = "SELECT * from emoji_in";
//$result2 = $db->query($query2);
//foreach ($result2 as $row)
//{ 
//    echo '!';
//    echo $row["emoji_1"];}
?>