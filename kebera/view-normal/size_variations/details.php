<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);

?>

<div class="row">
    <div class="col-md-8">
        <h3>Size Variation Details
        </h3>
        <div class="card">
            <div class="card-body">
            <div class="row">
            <div class="col">Name</div>
            <div class="col" id="name"></div>
        </div>
        
    </div>
</div>
<script src="/assets/js/category.js"></script>
<script>
    var id = "<?php echo $p[2]; ?>"
    category_details(id);
</script>