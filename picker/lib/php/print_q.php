
<? include('dbconnect.php'); 

$question_set = $_GET['questionSet'];
$count = 0;
if($question_set >0){
$query = "select * from questions where question_set=$question_set";
$result = $db->query($query);

foreach($result as $row){
    echo '<div class="col-10 qzone">';
    echo '<h3>'.$row['question_name'].'</h3>';
    echo '<p>'.$row['question_text'].'</p>';
    $question = $row["UID"];
    $count += 1;
PHP?>

          <div class="text-left">
            <p class="lead emoji-picker-container">
              <input id="emoji-in_<? echo $question; ?>" question="<? echo $question;?>" type="email" class="form-control" placeholder="Add some emojis" data-emojiable="true">
            </p>
          </div>
        <button id="emoji-submit" question="<? echo $question; ?>">submit</button>
        <div id="emoji-out_<? echo $question; ?>" class="emoji-out">
            <?PHP include ('../lib/php/ajax-emoji-initial.php'); ?>
        </div>
        </div>

<? 
    ;};}

if($count == 0){
    $query1 = "select * from question_sets";
    $result1 = $db->query($query1);
    $a=array();
    echo '<h3>question sets</h3>';
    foreach ($result1 as $row1){
        
            echo "<a href='index.php?questionSet=".$row1['UID']."'><button>".$row1['question_set_name']."</button></a>";
        
    }
}
?>