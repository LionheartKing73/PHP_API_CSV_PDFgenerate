<? include 'includes/head.php';?>
<style type="text/css">
  .validation{
    color: white;
  }
</style>
<body class="">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="#">HMS VENDOR PORTAL</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Sign in</strong>
        </header>
        <form class="panel-body wrapper-lg" id="loginForm">
          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="username" id="username" placeholder="Username" class="form-control input-lg" onkeydown="userinfochange();">
            <label class="validation" id="userValidation">User name required!</label>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="inputPassword" placeholder="Password" class="form-control input-lg" onkeydown="userinfochange();">
            <label class="validation" id="passValidation">Password required!</label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" id="rememberme"> Keep me logged in
            </label>
          </div>
          <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
          <button type="submit" class="btn btn-primary" id="loginBtn">Sign in</button>
          <p><label class="validation" id="loginValidation">User name or password incorrect!</label></p>
     
       
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>HMS PRODUCTIONS LLC<br>&copy; 2017</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script> 
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="js/app.plugin.js"></script>

  <script type="text/javascript">
  var remembered=localStorage.getItem('portal_user');
  if (remembered!="null" && remembered!=null) {window.location="asn-module.php";}

 

    $( "#loginBtn" ).click(function() {  
      event.preventDefault();
      var uname=document.getElementById('username').value;
      var upass=document.getElementById('inputPassword').value;
      var rememberme=document.getElementById('rememberme').checked;
      localStorage.setItem("portal_user","null"); 

      $.post( "functional_api/login.php", { username: uname,userpass: upass})
        .done(function( data ) {
            if (data.indexOf("noID")!=-1 || data.indexOf("failed")!=-1 ){
               $("#loginValidation").css('color','red');
                
            }
            else
            {

              if (rememberme) {localStorage.setItem("portal_user",uname);}
              window.location="asn-module.php";
            }
        });
      });
    function userinfochange(){
      var uname=document.getElementById('username').value;
      var upass=document.getElementById('inputPassword').value;

      $("#loginValidation").css('color','white');
       
      if (uname.trim()=="") {
        $("#userValidation").css('color','red');
      }
      else{
        $("#userValidation").css('color','white');
      }
      if (upass.trim()=="") {
        $("#passValidation").css('color','red');
      }
      else{
        $("#passValidation").css('color','white');
      }

    }

  </script>

</body>
</html>