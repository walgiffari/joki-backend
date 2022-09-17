$('#submit-login').on('click', function(){
    $('#form-login').submit(function(e){
        e.preventDefault();
        let username = $('#username-login').val();
        let password = $('#password-login').val();
        
        $.ajax({
            url: '/login/auth',
            type: 'post',
            data : {
                username:username,
                password:password,
            },
            success:function(res){
                console.log(res)
            },

            error:function(res)
            {
               
                console.log(res)
            }
        });
    });
});