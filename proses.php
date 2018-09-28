<?php
		
		if(isset($_POST['kirim'])) {
			$username=$_POST=['username']
			$password=$_POST=['password']
			 $user=array(
			 	"user"=>"yoga",
			 	"pass"=>"maulana"):

			 if ($username==$user['user']&&$password==$user['pass']){
			 	echo "Berhasil SELALU:"."<br>>";

			 	?>

			 	<form method="POST">
				 		NASI <input type="checkbox" name="latihan[]"" value="NASI"><BR><BR>
				 		CILUNG <input type="checkbox" name="latihan[]"" value="CILUNG"><BR><BR>
				 		SUSU <input type="checkbox" name="latihan[]"" value="SUSU"><BR><BR>
				 		TAHU <input type="checkbox" name="latihan[]"" value="NASI"><BR><BR>
				 		CHOOSE PHOTO

			 	</form>


			 	<input type="submit" name="kirim" value="input"> 

?>
