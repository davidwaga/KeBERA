<div class="card-body">
<div class="m-2 text-center">
<h3>Login to KeBERA</h3>
</div>            

              <form role="form text-left" id="loginForm">
              <!-- <?php echo $csrf_token; ?> -->
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Email Address or Username" id="name" aria-label="Name" aria-describedby="email-addon" required>
                </div>
                
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" id="psw" aria-label="Password" aria-describedby="password-addon" reqiured>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                </div>
                <p class="text-sm mt-3 mb-0">Don't have an account? <a href="/register" class="text-dark font-weight-bolder">Register!</a></p>
              </form>
            </div>


<script src="/assets/js/login.js">
	
</script>

