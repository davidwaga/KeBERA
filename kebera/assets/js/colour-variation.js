active('/categories')
highlight('CATEGORY');
page_title('CATEGORY');


function category_index(){
    $.get(`${api_url}/categories/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.categories){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.name}</td>                
                <td>${c.created_at}</td>
                <td><a href='/categories/${c.category_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#category-table').html(t)
    });
}

function category_details(i){
    $.get(`${api_url}/categories/one.php?id=${i}`,(data,status)=>{
        console.log(data);
        $('#name').text(data.category.name);
        $('#created_at').text(data.category.created_at);
        var pl = ''
        var k=1;
        for(var m of data.category){
            pl+=`<tr>
            <td>${k}</td>
            <td>${m.name}</td>   
            <td>
                <button class='btn btn-sm btn-danger' onclick='editCategory(${m.category_id})'>Edit</button>
            </td>             
            <td>
                <button class='btn btn-sm btn-danger' onclick='removeCategory(${m.category_id})'>Remove</button>
            </td>

            </tr>`
        k++;
        }
        $('#mlist').html(pl);
    })
}

$('addCategory').submit((e)=>{
    e.preventDefault();
    var m = $('#person').val();
    var k = $('#user').val();

    alert(JSON.stringify({m:m,k}));
})


function removeCategory(i){
    confirm('Are you sure you to remove Category!')
}
