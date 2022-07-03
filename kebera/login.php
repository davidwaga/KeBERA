<div class="card-body">
<div class="m-2 text-center">
<h3>Login to KeBERA</h3>
</div>            

              <form role="form text-left" id="loginForm">
              <?php echo $csrf_token; ?>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Email Address or Username" id="name" aria-label="Name" aria-describedby="email-addon">
                </div>
                <!-- <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                </div> -->
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" id="psw" aria-label="Password" aria-describedby="password-addon">
                </div>
                <!-- <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                </div>
                <p class="text-sm mt-3 mb-0">Don't have an account? <a href="/register" class="text-dark font-weight-bolder">Register!</a></p>
              </form>
            </div>

<!-- <form id="loginForm">
    <?php echo $csrf_token; ?>
    <input type="text" id="name"/><br />
    <input type="password" id="psw"/><br />
    <button type="submit">Login</button>
</form> -->
<script src="/assets/js/login.js">
	
</script>

