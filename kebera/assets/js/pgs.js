active('/pgs')
highlight('PGS');
page_title('PGS');


function pgs_index(){
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
}

function pgs_details(i){
    $.get(`${api_url}/pgs/one.php?id=${i}`,(data,status)=>{
        console.log(data);
        $('#pname').text(data.pgs.pgs_name);
        $('#pmem').text(data.number_of_members)
        $('#pdate').text(data.pgs.created_at);
        $('#ploc').text(data.pgs.pgs_location);
        $('.card a').attr('href',`/user/${data.user.user_id}`)
        $('#email').text(data.user.email)
        $('#name').text(data.user.username)
        $('#avatar').attr('src',`${base_url}/assets/img/${data.user.profile_pic}`)

        if(data.members.length<=0){
            $('#view-members').html(`<div class='card'><div class='card-content text-center'><span class='mb-3'>No members yet</span><br/><br/><br/><a class='btn btn-sm btn-success' href='/pgs/${data.pgs.pgs_id}/add-member'>Add Member</a></div>`)
        }else{
            var pl = ''
            var k=1;
            for(var m of data.members){
                pl+=`<tr>
                <td>${k}</td>
                <td>
                    <img src='/assets/img/${m.profile_pic}' style='width:20px; height:20px; border-radius:50%;'/>
                </td>
                <td>${m.username}</td>
                <td>${m.email}</td>
                
                <td>
                    <a class='btn btn-sm btn-warning' href='/user/${m.user_id}'>Details</a>
                </td>
                <td>
                    <button class='btn btn-sm btn-danger' onclick='removeMember(${m.user_id})'>Remove</button>
                </td>

            </tr>`
            k++;
            }
            $('#mlist').html(pl);
        }
    })
}

$('addMember').submit((e)=>{
    e.preventDefault();
    var m = $('#person').val();
    var k = $('#user').val();

    alert(JSON.stringify({m:m,k}));
    selectOptions();
})

function selectOptions(){
    $.get(`${api_url}/options/farmers_and_extension.php`,(data, status)=>{
        var l =''
        console.log(data)
        for(var m of data.options){
            l+=`<option value='${m.user_id}'>${m.username}</option>`
        }
        $('#person').html(l)
    })
}

function removeMember(i){
    confirm('Are you sure you to remove member!')
}
