<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);

?>
<form id="addInput">
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" class="form-control" placeholder="Input Name" id="iname" aria-label="Password" aria-describedby="password-addon" reqiured>
    </div>
    <div class="mb-3">
        <label for="">Price</label>
        <input type="number" class="form-control" placeholder="Input Price" id="price" aria-label="Password" aria-describedby="password-addon" reqiured>
    </div>
    <div class="mb-3">
    <label for="">Test Results</label>
        <textarea  id="test"  rows="5" class="form-control"></textarea>
    </div>

    <input type="hidden" id="dealer" value="<?php echo $p[2];?>">
    <div class="mb-3">
        
        <button type="submit" class="btn btn-primary btn-sm">Add Input</button>
    </div>
</form>

<script src="/assets/js/input-dealers.js"></script>