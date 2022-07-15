active('/categories')
highlight('Category');
page_title('Category');


$(window).ready(function(){
    $.get(`${api_url}/categories/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.category){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.name}</td>
                <td>${c.created_at}</td>
                <td><a href='/pgs/${c.category_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#category-table').html(t)
    });
})
