active('/size-varation')
highlight('SIZE VARIATION');
page_title('SIZE VARIATION');


function size_variation_index(){
    $.get(`${api_url}/size_variations/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.size_variation){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.name}</td>                
                <td>${c.created_at}</td>
                <td>${c.updated_at}</td>
                <td><a href='/size_variations/${c.size_variation_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#size-variation-table').html(t)
    });
}

function size_variation_details(i){
    $.get(`${api_url}/size_variations/one.php?id=${i}`,(data,status)=>{
        console.log(data);
        $('#name').text(data.size_variation.name);
        $('#created_at').text(data.size_variation.created_at);
        var pl = ''
        var k=1;
        for(var m of data.size_variation){
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
