
$('#sendEmail').click(function(e){

    let name = $('#name').val();
    let surname = $('#surname').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let message = $('#message-textarea').val();

    e.preventDefault();
    $('#sentSuccessful').css('display','none')

    if(name == ''){
        $('#name').css('border', '1px solid red');
        $('#blankField').fadeIn('slow');
    }
    if(surname == ''){
        $('#surname').css('border', '1px solid red');
        $('#blankField').css('display','block');
    }
    if(email == ''){
        $('#email').css('border', '1px solid red');
        $('#blankField').css('display','block');
    }
    if(phone == ''){
        $('#phone').css('border', '1px solid red');
        $('#blankField').css('display','block');
    }
    if(message == ''){
        $('#message-textarea').css('border', '1px solid red');
        $('#blankField').css('display','block');
    }

    if(name && surname && email && phone && message){
         $("#formSend").submit();
    }
})

$('#name').click(function(){
    $(this).css('border', '2px solid #f0f0ff');
    $('#blankField').fadeOut('slow');
})
$('#surname').click(function(){
    $(this).css('border', '2px solid #f0f0ff');
    $('#blankField').fadeOut('slow');
})
$('#email').click(function(){
    $(this).css('border', '2px solid #f0f0ff');
    $('#blankField').fadeOut('slow');
})
$('#phone').click(function(){
    $(this).css('border', '2px solid #f0f0ff');
    $('#blankField').fadeOut('slow');
})
$('#message-textarea').click(function(){
    $(this).css('border', '2px solid #f0f0ff');
    $('#blankField').fadeOut('slow');
})

