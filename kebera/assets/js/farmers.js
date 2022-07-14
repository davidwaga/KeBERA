active('/farms')
highlight('FARMS');
page_title('FARMS');


function farm_index(){
    $.get(`${api_url}/farms/all.php`, function(data,status){
        console.log(data);
        var t = '';
        var x = 1;
        for(var c of data.farms){
            t+=`<tr>
                <td>${x}</td>
                <td>${c.name}</td>
                <td>${c.farm_location}</td>
                <td>${c.longitude}</td>
                <td>${c.latitude}</td>
                <td><a href='/user/${c.user.user_id}'>${c.user.username}</a></td>
                <td>${c.created_at}</td>
                <td><a href='/farms/${c.farm_id}' class='btn btn-sm btn-success'>Details</a></td>
            </tr>`
            x++;
        }
        $('#farm-table').html(t)
    });
}

function farm_details(i){
    $.get(`${api_url}/farms/one.php?id=${i}`,(data,status)=>{
        console.log(data);
        $('#fname').text(data.farms.name);
        $('#flocation').text(data.farms.farm_location);
        $('#plong').text(data.farms.longitude);
        $('#plat').text(data.farms.latitude);
        $('#fdate').text(data.farms.created_at);
        $('.card a').attr('href',`/user/${data.user.user_id}`)
    })
}

$('addfarm').submit((e)=>{
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

function removeFarm(i){
    confirm('Are you sure you to remove member!')
}
