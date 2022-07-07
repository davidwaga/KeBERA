
<!-- </div> -->
</main>
</div>
<script src="/assets/js/theme-js/core/popper.min.js"></script>
  <script src="/assets/js/theme-js/core/bootstrap.min.js"></script>
  <script src="/assets/js/theme-js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/js/theme-js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <?php 
  $x = isset($_SESSION['TOKEN'])?$_SESSION['TOKEN']:null;
  ?>
  <script>
    function hide_for_type(x){
      
    }
    function is_logged(){
      var x = "<?php echo $x; ?>";
      var p = ''
      if(x==56){
        p = `style='display: block;'`
      }else{
        p =`style='display: none;'`;
      }
      return p;
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/theme-js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>
</html>