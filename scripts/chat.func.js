$(document).ready(function () {

    collectMessages();

    $('#send').click(function(){
        

        var message = $('#message').val();
        
        if (message != '') {
            
            $.post('ajax/post.php', {message:message}).done(function(){
                
                message = $('#message').val('');

                collectMessages()

            }).fail(function(jqXHR) {

                console.log(jqXHR); 

            })

        }
    })

    function collectMessages() {
        
        $.post('ajax/collect.php', function (data) {
            $('.chats').html(data)
        })
    }


    setInterval(collectMessages, 1000)
    
})