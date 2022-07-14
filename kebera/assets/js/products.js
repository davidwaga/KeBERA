active('/products')

$(window).ready(()=>{
    $.get(`${api_url}/products/all.php`,(data, status)=>{
        console.log(data)
    })
})