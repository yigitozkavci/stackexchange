<form method="post" action="<?php echo base_url()?>index.php/questions/add_process">
        <p><input type="text" name="title" value="" placeholder="Title"></p>
        <p><input type="text" name="desc" value="" placeholder="Desc"></p>
        <p class="submit"><input type="submit" name="mysubmit" value="Giriş Yap"></p>
</form>

<div class="col-lg-7 col-xs-12">
	<form method="post" action="<?php echo base_url()?>index.php/questions/add_process">
				<div class="form-group">
					<label for="title">Soru Başlığı: </label>
					<input autofocus type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="title">Açıklama: </label>
					<input autofocus type="text" name="desc" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" value="Onayla" name="add_questions">
				</div>
	</form>
</div>