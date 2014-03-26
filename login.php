<?php 
include_once("config.php");
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>
<!DOCTYPE html>
<html>
		<title>Gizela Bessa - Secured Login with php5</title>
<link href='css/style.css' rel='stylesheet' type="text/css" />
    </head>
    
 <body>
    
        <header id="head" >
        	<p>Gizela Bessa - Secured Login</p>
        </header>
        
        <div id="main-wrapper">
        	<div id="login-wrapper">
            	<form method="post" action="">
                	<ul>
                    	<li>
                        	<label for="usn">Username : </label>
                        	<input type="text" maxlength="30" required autofocus name="username" />
                    	</li>
                    
                    	<li>
                        	<label for="passwd">Password : </label>
                        	<input type="password" maxlength="30" required name="password" />
                    	</li>
                    	<li class="buttons">
                        	<input type="submit" name="login" value="Login" />
                         <!--   <input type="button" name="register" value="Register" onclick="location.href='register.php'" /> -->
                    	</li>
                    
                	</ul>
            	</form>
                
            </div>
        </div>
    
    </body>
</html>

<?php 
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	
	if( $usr->userLogin() ) {
		$handle = fopen("/back/file.html", "r");	
	} else {
		echo "Incorrect Username/Password";	
	}
}
?>