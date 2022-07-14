

$('#editProfile').submit(function(e){
    e.preventDefault();
    var photo = $('#fname').val();
    var avatar = $('#avatar').val();

    var data = {fname:photo,avatar:avatar}
    alert(JSON.stringify(data));
})