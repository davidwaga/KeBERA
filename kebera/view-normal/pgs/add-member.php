<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);
?>

<form id="addMember">
    <div class="mb-3">
        <label for="">Choose Person</label>
        <select  id="person" class="form-control">

        </select>
    </div>
    <input type="hidden" id="pgs" value="<?php echo $p[2]?>">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary btn-sm">
            Add Member
        </button>
    </div>
</form>

<script src="/assets/js/pgs.js"></script>

<script>
    selectOptions();
    $('#addMember').submit((e)=>{
        e.preventDefault();
        var c  = $('#person').val();
        var p = $("#pgs").val();

        $.post(`${api_url}/pgs_member/create.php`,JSON.stringify({pgs_id:p,user_id:c}),(data,status)=>{
            note(data.message, 'success');
        })
    })
</script>