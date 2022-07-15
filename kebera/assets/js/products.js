active('/products')
highlight('Products');
page_title('Products');


// $(window).ready(function(){
function getProducts(){
    $.get(`${api_url}/products/all.php`, function(data,status){
        var t = '';
        for(var c of data.product){
            
            t+=`<div class='col-md-2 col-xs-12 col-lg-2 m-4'><div class="card  text-center" style="width:200px; margin:10px;">
            <img class="card-img-top" src="/assets/img/products/${c.product_pic}" alt="${c.product_name}">
            <div class="card-body">
              <h4 class="card-title">UGX ${c.product_price}/=</h4>
              <p class="card-text">${c.product_name}</p>
              <a href="/products/${c.product_id}" class="btn btn-primary">View More</a>
            </div>
          </div></div>`
          
        }
        console.log(t)
        $('#products').html(t)
    });
}

