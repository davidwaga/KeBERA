active('/pgs')
highlight('PGS');
page_title('PGS');


$(window).ready(function(){
    $.get(`${api_url}/pgs/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.pgs){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.pgs_name}</td>
                <td>${c.pgs_location}</td>
                <td>${c.members}</td>
                
                <td><a href='/user/${c.user.user_id}'>${c.user.username}</a></td>
                <td>${c.created_at}</td>
                <td><a href='/pgs/${c.pgs_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#pgs-table').html(t)
    });
})
