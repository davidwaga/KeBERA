page_title('All Users')
$.get(`${base_url}/apis/api/users/index.php`, function(data, status){
    console.log(data);
})

