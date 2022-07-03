const http = "http://";
const base_url = `${http}${window.location.host}`;
const api_url = `${http}${window.location.host}/apis/api`;
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

function note(text, color='primary'){
    $('#note').css({display:'block'})
    $('#note').addClass(`alert-${color}`)
    $('#note').text(text)
    setTimeout(()=>{
        $('#note').css({display:'none'})
        $('#note').text('text')
    },5000)
}

function highlight(txt='Current Page'){
    $('#p1').text(txt);
    $('#p2').text(txt);
}