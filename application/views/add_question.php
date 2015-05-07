<div class="col-lg-7 col-xs-12 addwrapper">
	<form method="post" action="<?php echo base_url()?>index.php/questions/add_process">
				<div class="form-group">
					<label for="title">Soru Başlığı: </label>
					<input autofocus type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="title">Açıklama: </label>
					<textarea autofocus type="text"  name="desc" class="form-control" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="title">Tags: </label>
					<br>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" value="option1"> CompeC
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox2" value="option2"> Büyak
					</label>
					<label class="checkbox-inline">
  						<input type="checkbox" id="inlineCheckbox3" value="option3"> GameClub
					</label>
				</div>

				<div class="form-group col-lg-2" style= "float: right">
					<input type="submit" class="form-control btn btn-warning" value="Onayla" name="add_questions">
				</div>
	</form>
</div>