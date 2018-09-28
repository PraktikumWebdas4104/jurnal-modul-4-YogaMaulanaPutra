<?php 
session_start();
error_reporting(0);

	$user = array('user' =>'yoga','pass' => 'maulana' );

	if (isset($_POST['submit'])) {
		if ($_POST['username']==$user['user'] && $_POST['password']==$user['pass']) {
			

			$_session['username'] = $_post['username'];
			echo "log in masuk, $_post[username]";

		}
			else{
				form_login();
				echo "username/password salah";
			}

			
		}
				else{
					form_login();
				}

		}
		
		

		function form_login() { ?>


			<form action="<?php echo $_server['PHP HELP'];?>" method ="post">
				<label for="username">username :</label>
				<input type="text" name="username"><br><br>
				<label for="password">Password :</label>
				<input type="text" name="password"><br><br>

				<input type="submit" name="submit" value="log in">
			</form>
		
	 

 		<?php } ?>
