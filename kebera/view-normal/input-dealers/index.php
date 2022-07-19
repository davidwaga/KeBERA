
<?php 
// include_once "apis/helpers.php";
$h = new Helper();

if(isset($_SESSION['TYPE'])){
    $id = $h->logged_in_user_id($_SESSION['TOKEN']);
    $t = $h->query("select * from input_dealer where user_id=:id",[":id"=>$id]);
    $yt = $t->fetch(PDO::FETCH_ASSOC)['input_dealer_id'];
    if($_SESSION['TYPE']==6){
        echo "<div class='mb-5'>";
        echo "<a href='/input-dealers/$yt/add-input' class='btn btn-sm btn-primary ' style='float:right;'>Add Input</a>";
        echo "<a href='/input-dealers/$yt' class='btn btn-sm btn-success mr-5' style='float:right;'>View My Inputs</a>";
        echo "</div>";
    }
}
?>

<div class="row" id="input-dealers"></div>
<script src="assets/js/input-dealers.js"></script>
<script>
    listInputDealers();
</script>