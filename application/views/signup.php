<div class="container-fluid">
    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" 
    style="margin-top:50px;border:10px solid rgba(255, 255, 255, .3); padding:0px; border-radius:5px;">
		<form action="<?php echo base_url()?>index.php/signup/process" method="post">
				<div class="form-group">
					<label for="username">Kullanıcı Adı: </label>
					<input autofocus type="varchar" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Şifre: </label>
					<input autofocus type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="mail">E-Mail: </label>
					<input autofocus type="varchar" name="mail" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" value="Onayla" name="signup">
				</div>
			</form>
		</div>
	</div>