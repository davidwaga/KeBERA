page_title('Extention Workers');
highlight('Extension Workers')
active('/extension-workers')


const get_extension_workers = () =>{
    $.get(`${api_url}/extension-workers/all.php`, function(data, status){
        console.log(data);
    });
}

