page_title('Login...')
$('#loginForm').submit(function(e){
    e.preventDefault();
    var name = $('#name').val();
    var psw = $('#psw').val();
    // alert(`Login Credetials\n username: ${name}\npassword: ${psw}`);
    // var data = JSON.stringify({username:name, passw:psw});
    $.post(`${base_url}/apis/api/users/signin.php`,JSON.stringify({username:name, passw:psw}),function(data, status){
        console.log(`Login Credetials\n username: ${name}\npassword: ${psw}`);
        console.log(data);
    })
})