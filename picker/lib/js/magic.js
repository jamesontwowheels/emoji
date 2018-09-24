window.onload = function() {
console.log('magic listening');
//set the session variables to the class click
$('.container').on('click','#emoji-submit', function (e) {
    e.preventDefault();
    console.log('clocked');
    var question = $(this).attr("question");
    var emoji_in = '#emoji-in_'+question;
    var emoji = $(emoji_in).val();
    console.log(question);
    console.log(emoji);
    var el = $(emoji_in).val().length;
    console.log(el);
    console.log("here");
    var identifier = $(this).attr('identifier');
    console.log(identifier);
    $.ajax({ 
        url: "../lib/php/ajax-emoji-save.php",
        type: 'post',
        data: {'emoji': emoji, 'question': question},
        success: function(data, status){
        console.log(data);
            var emoji_out = '#emoji-out_'+question;
            console.log(emoji_out);
        $(emoji_out).html(data);},
    })
    console.log('this now');
})
    
}