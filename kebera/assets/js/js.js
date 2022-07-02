const base_url = `http://${window.location.host}`;
function page_title(t){
    document.title = t==null?'KeBERA':`${t} | KeBERA`;
}

function check_csrf(){
    var hidden_csrf = `<?php echo $_SESSION['CSRF'] ?>`;
    var given_token = $('#csrf_token').val();
    console.log(hidden_csrf);
    if(hidden_csrf == given_token){
        alert('true')
    }else{
        alert('false')
    }
}
// alert(`Location is: ${base_url}`)
