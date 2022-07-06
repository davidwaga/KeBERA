highlight('Register')

//register js goes here!!!!!1

$(window).ready(function(){
    $.get(`${api_url}/users/user_types.php`, function(data, status){
        for(var a of data.user_type){
            $('#user_type').append(`<option value='${a.user_type_id}'>${a.type_name}</option>`)
        }
    })
})

$("#registerForm").submit(function(e){
    e.preventDefault();
    var name = $('#name').val();
    var mail = $('#mail').val();
    var bio = $('#bio').val();
    var user_type = $('#user_type').val()
    var passw = $('#psw').val();
    var cpsw = $('#cpsw').val();
    $("#registerButton").attr('disabled',true);
    // console.log(psw)
    // console.log(cpsw)
    if(name!=='' && mail !== ''){
        if(passw===cpsw){
            // alert('passwords matched')
            $.post(
                `${api_url}/users/register.php`, 
                JSON.stringify({
                    name,mail,bio,passw,user_type
                }), 
                function(data,status){
                    if(data.status==1){
                        note(data.message, 'success')
                        localStorage.setItem('cemail',mail);
            
                        setTimeout(()=>{
                            window.location = '/register/confirm-email';
                        },5000)
                    }else{
                        note(data.message, 'warning')
                    }
                });
        }else{
            note("Password didn't match try again",'warning');
            $("#registerButton").attr('disabled', false);
        }
    }else{
        note("Missing some important fields",'warning');
        $("#registerButton").attr('disabled',false);
    }
})