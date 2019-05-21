<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Student Behavior Tracking System</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="login.css">
</head>

<body>

  <div class="logmod">
    <div class="logmod__wrapper">
      <span class="logmod__close">Close</span>
      <div class="logmod__container">


        <ul class="logmod__tabs">
          <li data-tabtar="lgm-1"><a href="#">Get Your Password </a></li>
        </ul>


        <div class="logmod__tab-wrapper">


          <div class="logmod__tab lgm-1">
            <div class="logmod__heading">
            </div>
            <div class="logmod__form">
              <form accept-charset="utf-8" action="pass.php" class="simform" method="GET">
                
                <div class="sminputs" >
                    <div class="input full">
                     <label class="string optional" for="user-pw">Password </label>
                      <input  class="string optional" value="<?php echo $_GET['password'] ?>"  name="password" maxlength="255" id="password" placeholder="password" type="password" size="50" />
                   <span class="hide-password">Show</span>
                    </div>
                  </div>
                <div class="simform__actions">
                 <!-- <input class="sumbit" name="commit" type="submit" value="GET" /> -->
                  <span class="simform__actions-sidetext"><a class="special" role="link" href="login.html">
                        <br>Back_Login</a></span> 
                </div>
              </form>
            </div>
          </div>

            
          </div>
        </div>
      </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="login.js"></script>
</body>
</html>