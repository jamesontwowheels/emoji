window.setInterval(function(){
  /// call your function here
    var emoji = "emoji";
    var question_set = $('#emoji-out').attr('question_set');
    console.log(question_set);
    $.ajax({ 
        url: "../lib/php/ajax-emoji-feedback.php",
        type: 'post',
        data: {'emoji': emoji, 'question_set':question_set},
        success: function(data, status){
        console.log(data);
        $('#emoji-out').html(data);},
    })
    console.log('this now');
}, 1000);

window.onload = function() {
console.log('magic listening');
//set the session variables to the class click
$('.container').on('click','#emoji-submit', function (e) {
    e.preventDefault();
    console.log('clocked');
    var emoji = $('#emoji-in').val();
    console.log(emoji);
    var el = $('#emoji-in').val().length;
    console.log(el);
    console.log("here");
    var identifier = $(this).attr('identifier');
    console.log(identifier);
    $.ajax({ 
        url: "../lib/php/ajax-emoji-save.php",
        type: 'post',
        data: {'emoji': emoji},
        success: function(data, status){
        console.log(data);
        $('#emoji-out').html(data);},
    })
    console.log('this now');
})
    
}