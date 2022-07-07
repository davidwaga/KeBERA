page_title('Login...')
active('/login')
highlight('Login')
$('#loginForm').submit(function(e){
    e.preventDefault();
    var name = $('#name').val();
    var psw = $('#psw').val();
    // check_csrf();
    $.post(`${api_url}/users/signin.php`,JSON.stringify({username:name, passw:psw}),function(data, status){
        console.log({username:name, passw:psw})
        if(data.status==1){
            note(data.message,'success');
            setTimeout(()=>{
                window.location = base_url;
            },3000)
        }else{
            note(data.message,'danger');
        }
    })
})