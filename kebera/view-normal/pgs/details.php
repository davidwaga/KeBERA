<?php 
$p  = explode('/', $_SERVER['REQUEST_URI']);
?>
<div class="row">
    <div class="col-md-8">
        <h3>PGS Details
            <a href='/pgs/<?php echo $p[2];?>/add-member'class="btn btn-sm btn-primary text-right" style='float:right;'>Add Member</a>
        </h3>
        <div class="card">
            <div class="card-body">
            <div class="row">
            <div class="col">Name</div>
            <div class="col" id="pname"></div>
        </div>
        <div class="row">
            <div class="col">Location</div>
            <div class="col" id="ploc"></div>
        </div>
        <div class="row">
            <div class="col">Number of Members</div>
            <div class="col" id="pmem"></div>
        </div>
        <div class="row">
            <div class="col">Created On</div>
            <div class="col" id="pdate"></div>
        </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-4">
    <h3>Create By</h3>

    <div class="card">
        <a>
  <!-- <div class="card-header" id="name"></div> -->
  <div class="text-center">
      <img id="avatar" style="width:50px; height:50px; border-radius: 50%;"/>
  </div>
  <div class="card-footer text-center">
      <strong id="name"></strong><br/>
      <small id="email"></small>
  </div>
  </a>
</div>
    </div>


    <!-- pgs members -->
    
    
    
</div>
<div class="row   ">
    <div class="card mt-3">
    <div id="view-members">
    <h3 class='text-center'>Members</h3>
    <div id="members">
    <table class="table table-striped" id="members-table">
        <thead>
            <tr>
                <td>#</td>
                <td></td>
                <td>Name</td>
                <td>Email</td>
                <!-- <td>Added On</td> -->
                <td></td>
                <td></td>
                <!-- <td></td> -->
            </tr>
        </thead>
        <tbody id='mlist'>
            
        </tbody>
    </table>
    </div>
    </div>
    </div>
</div>

<script src="/assets/js/pgs.js"></script>
<script>
    var id = "<?php echo $p[2]; ?>"
    pgs_details(id);
</script>