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
                e.currentTarget.submit()
                window.location.href = '/dashboard'
            },

            error:function(res)
            {  
                console.log(res)
            }
        });
    });
});


$('#logout-dashboard').on('click', function(e){
    e.preventDefault()

    $.ajax({
        url: '/logout',
        type: 'post',
        success:function(res){
            console.log(res)
            window.location.href = "/login"
        }
    });

});
