active('/products')

page_title('Products');


// $(window).ready(function(){
const getProducts=()=>{
    highlight('Products');
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

const getProduct =(id)=>{
  $.get(`${api_url}/products/one.php?id=${id}`,(data, status)=>{
    var product = data.product
    
    highlight(product.product_name)

    $('#product_image').attr('src',`/assets/img/products/${product.product_pic}`)
    $('#product_desc').html(product.product_description)
    $('#product_name').text(product.product_name);
    $('#pname').text(product.product_name);
    console.log(data.product)
  })
}