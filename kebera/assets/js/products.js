active('/products')
highlight('Products');
page_title('Products');


$(window).ready(function(){
    $.get(`${api_url}/products/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.product){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.product_name}</td>
                <td>${c.product_pic}</td>
                <td>${c.product_description}</td>
                <td>${c.product_stock}</td>
                <td>${c.product_price}</td>
                <td>${c.category.name}</td>
                <td>${c.user.username}</td>
                <td>${c.farm.name}</td>
                <td>${c.stall.name}</td>
                <td>${c.created_at}</td>
                <td><a href='/pgs/${c.product_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#product-table').html(t)
    });
})
