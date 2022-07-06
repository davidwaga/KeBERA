<p style="font-size:16px;">Please click the confirmation link sent to your email address <a id="email" ></a> to activate you account.</p>
<script>
    var mail = localStorage.getItem('cemail');
    $(window).ready(function(){
        $('#email').text(mail)
        $('#email').attr('mailto',`${mail}`);
        $('#email').css({color:red, fontSize:'20px'})
    })
</script>