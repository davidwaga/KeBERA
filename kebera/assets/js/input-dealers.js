active('/input-dealers')
highlight('Input Dealers')

function listInputDealers(){
    $.get(`${api_url}/input-dealers/all.php`,(data,status)=>{
        console.log(data);
        let t = '';
        for(var p of data.input_dealers){
            console.log(p)
            t += `<div class="col-md-2 col-xs-12 col-lg-2 m-4"><div class="card  text-center" style="width:200px; margin:10px;">
            <img class="card-img-top" src="/assets/img/${p.user.profile_pic}" alt="${p.user.email}">
            <div class="card-body">
              <h4 class="card-title">${p.user.username}</h4>
              <p class="card-text">${p.location}</p>
              <a href="/input-dealers/${p.input_dealer_id}" class="btn btn-primary">View More</a>
            </div>
          </div></div>`
        }
        $('#input-dealers').html(t)
    });
}

function getInputDealer(i){
    $.get(`${api_url}/input-dealers/one.php?id=${i}`,(data, status)=>{
        console.log(data)
    })
}

$('#addInput').submit((e)=>{
    e.preventDefault();
    var dat = {
        name:$('#iname').val(),
        inputs_dealer:$('#dealer').val(),
        test_results:$('#test').val(),
        price:$('#price').val()
    }

    // alert(JSON.stringify(dat))
    $.post(`${api_url}/inputs/create.php`,JSON.stringify(dat),(data, status)=>{
        note(data.message, 'success');
       $('#iname').val('');
        $('#test').val('');
        $('#price').val('');
    })
})

