<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);
?>

<div class="row" id='product-detail'>
    <h3 id="product_name" class="text-center"></h3>
    <div class="col-md-4">
        <img  id='product_image'>
        <div class="row">
            <div class="col-6">Name</div>
            <div class="col-6" id='pname'></div>
        </div>
        <div class="row">
            <div class="col-6">Price</div>
            <div class="col-6" id="price"></div>
        </div>
        <div class="row">
            <div class="col-6">Size</div>
            <div class="col-6" id="size"></div>
        </div>
        <div class="row">
            <div class="col-6">In Stock</div>
            <div class="col-6" id="pstock"></div>
        </div>
        <div class="row">
            <div class="col-6">Stall Code</div>
            <div class="col-6" id="pstall"></div>
        </div>
        
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6"></div>
        </div>
    </div>
    <div class="col-md-8">
    <div id="product_desc"></div>
    </div>
</div>

<script src="/assets/js/products.js"></script>
<script>
    getProduct(`<?php echo $p[2];?>`);
</script>



