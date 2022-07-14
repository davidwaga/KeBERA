<script>
    $.post(`${api_url}/users/logout.php`, function(data, status){
        setTimeout(function(){
            alerts('Your being logged out...','success');
        },3000)
        localStorage.clear();
        window.location = '/';
    });
</script>