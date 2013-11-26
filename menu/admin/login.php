<?php session_start(); ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mr.Menu Login</title>
<link href="css/stile.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php
include "func/admin.class.php";
$authorizer = new Authorizer;
//Controlliamo se è già loggato
?>

<div id="main">

	<div id="header"><?php include 'inc/header.php';?></div>

    <div id="middle">
    
        <div id="left-column"><?php include 'inc/menu.php';?></div>
        
        <div id="center-column">
            <div class="top-bar">
                    <h1>Mr. Menu - Login</h1>
            </div><br />
            <div id="lista">
            	<?php
				if (! $authorizer->sessionSet()){
				//logica della pagina (la solita)
					if ($_POST['_check']) {
						if ($form_errors = errorcheck()) {
							form($form_errors);
						} else {welcome();} 
					} else {form();}
				} else die("You are already logged in");
				
				function form($errors = '') {
			
					if ($errors) {
						$error_text .= '<p class="error">';
						$error_text .= implode('</p><p class="error">',$errors);
						$error_text .= '</p>';
					} else {
                    	$error_text = '';
                	}
                    echo $error_text;
				
				?>
					<div class="table">
                    <img src="img/bg-th-left.gif" width="8" height="7" alt="" class="left" />
                    <img src="img/bg-th-right.gif" width="7" height="7" alt="" class="right" />
                    <form method="POST" action="login.php">
                    <table class="listing" cellpadding="0" cellspacing="0" id="tabella">
                    <thead>
                        <tr>
                            <th class="first" width="177">Name</th>
                            <th class="last">Field</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <td class="first">Username</td> 
                            <td class="last"><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td class="first">Password</td> 
                            <td class="last"><input type="password" name="password"></td>
                        </tr>
                    </tbody>
                    </table>
                    <input type="hidden" name="_check" value="1"/>
                    <input type="submit" value="Login">
                    </form>
					</div>
				<?php 
				}
				?>
            </div>		  
        </div>
        
        <div id="right-column">
            <strong class="h">INFO</strong>
            <div class="box">This is the login page to the system.</div>
        </div>
        
    </div>

<div id="footer"></div>

</div>

<?php
function errorcheck() {
	$authorizer = new Authorizer;	
	$errors = array();

	if (! $authorizer->userExists($_POST['username'], $_POST['password'])) {
			$errors[] = 'We don\' t know you!';
	}
	return $errors;

}
function welcome() {
	
	$authorizer = new Authorizer;
	$authorizer->setSession($_POST['username'],$_POST['password'],$_POST['cookie']);
	echo '<p>Logged in!</p>';
	$authorizer->redirect('index.php');
}
?>
</body>
</html>