active('/inputs')
highlight('Inputs');
page_title('Inputs');


$(window).ready(function(){
    $.get(`${api_url}/inputs/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.inputs){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.name}</td>
                <td>${c.code}</td>
                <td>${c.test_results}</td>
                <td>${c.price}</td>
                <td>${c.inputs_dealer.location}</td>
                <td>${c.created_at}</td>
                <td><a href='/pgs/${c.inputs_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#inputs-table').html(t)
    });
})
