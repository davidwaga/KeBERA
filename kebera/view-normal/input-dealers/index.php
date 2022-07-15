
<?php 
// include_once "apis/helpers.php";
$h = new Helper();

if(isset($_SESSION['TYPE'])){
    $id = $h->logged_in_user_id($_SESSION['TOKEN']);
    if($_SESSION['TYPE']==6){
        echo "<a href='/input-dealers/$id/add-input' class='btn btn-sm btn-primary' style='float:right;'>Add Input</a>";
    }
}
?>

<div class="row" id="input-dealers"></div>
<script src="assets/js/input-dealers.js"></script>
<script>
    listInputDealers();
</script>