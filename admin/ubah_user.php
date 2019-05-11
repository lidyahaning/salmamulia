<?php
	require "conn.php";
	$username = $_SESSION['admin'];
?>

<div class="container">
		<div class="ubah">
			<center>
				<h1>Ubah username & password</h1>
				<hr style="max-width:580px;">
			</center>
			<br>
			
			<div class="sign">
				<form class="form-horizontal" action="simpan_user.php" method="post">
					<div class="form-group">
						<label class="control-label col-sm-3" for="username">Username :</label>
						<div class="col-sm-7">
							<input class="form-control" name="username" value="<?=$username;?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Password :</label>
						<div class="col-sm-7">
							<input type="password" class="form-control" name="pass" id="pass" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="pwd2">Konfirmasi Password :</label>
						<div class="col-sm-7">
							<input type="password" class="form-control" name="pass2" id="pass2" onkeyup="checkPass(); return false;" required>
							<span id="confirmMessage" class="confirmMessage"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-7">
						<p align="right">
							<button type="submit" class="btn btn-default" name="simpan">Simpan</button>
							<button type="reset" class="btn btn-danger" name="batal">Batal</button>
						</p>
						</div>
					</div>
				</form>
				
			</div>
		</div>
</div>

<script type="text/javascript" src="template/js/jquery-1.2.6.min.js"></script>
<script type="text/javascript">
//------------------------------------ RE-TYPE PASSWORD -------------------------------
function checkPass(){
    //Store the password field objects into variables ...
    var pass = document.getElementById('pass');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password Sesuai"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Tidak Sesuai"
    }
}
</script>