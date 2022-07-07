
<div class="card-body">
              <form role="form text-left" id="registerForm">
                <div class="mb-3">
                  <input type="text" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                  <input type="email" id="mail" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                </div>
                <div class="mb-3">
                <select name="" class="form-control" id="user_type" reqiured>
                  <option value="" disabled selected>SELECT WHERE YOU FALL</option>                  
                </select>
                </div>                
                <div class="mb-3">
                  <input type="password" id="psw" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="mb-3">
                  <input type="password" id="cpsw" class="form-control" placeholder="Confirm Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="mb-3">
                <textarea name="" id="bio"  class="form-control" id="bio" cols="30" rows="4"></textarea>
                </div>
                
                <div class="form-check form-check-info text-left">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" id="registerButton">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="/login" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>

<script src="/assets/js/register.js"></script>
<script>
    page_title('Create KeBERA account');
    // active('/register')
</script>