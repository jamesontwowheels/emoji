<?PHP
include('dbconnect.php');
$question_set = $_POST["question_set"];
$count = 0 ;
if($question_set>0){
$query1 = "select * from questions where question_set = $question_set";
$result1 = $db->query($query1);
foreach ($result1 as $row1){
    $count = 1;
     echo '<div class="feedback_box"><h3>'.$row1["question_name"].'</h3>';
$question = $row1["UID"];
$query2 = "SELECT * from emoji_in where question = $question";
$result2 = $db->query($query2);
foreach ($result2 as $row)
{ 
    echo $row["emoji_1"];}
    echo '</div>';
}
    echo '<button><a href="feedback.php"><h3>return</h3></a></button>';
}


if($count == 0){
    $query1 = "select * from question_sets";
    $result1 = $db->query($query1);
    $a=array();
    echo '<h3>question sets</h3>';
    foreach ($result1 as $row1){
        
            echo "<a href='feedback.php?question_set=".$row1['UID']."'><button>".$row1['question_set_name']."</button></a>";
        
    }
}
?>