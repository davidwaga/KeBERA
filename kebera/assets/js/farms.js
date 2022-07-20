highlight('Farms');
active('/farms');

const list_farms =()=>{
    $.get(`${api_url}/farms/all.php`,(data, status)=>{
        console.log(data);
        var p = '';
        for(var m of data.farms){
            p+=`<div class='m-3 col-md-5'><a href='/farms/${m.farm_id}'><div class="card">
        
            <div class="card-body">${m.name}</div> 
            <div class="card-footer">${m.farm_location}</div>
          </div></a></div>`;
        }
        $('#farm-list').html(p)
    });
}