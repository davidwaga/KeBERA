page_title('Extention Workers');
highlight('Extension Workers')
active('/extension-workers')

$.get(`${base_url}/apis/api/users/index.php`, function(data, status){
    console.log(data);
})

