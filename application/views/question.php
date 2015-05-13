<div class="row hidden-sm" style="margin-top:30px;">
	<div class="col-lg-8 col-md-offset-1">
<span style="color:blue; font-size:22"><?php echo $question['title'];?></span>	</div>

</div>
<!-- /.dddd -->
<div class="row">
<div class="col-md-9 col-md-offset-1">
	 <div class="panel panel-warning">

				<div class="panel-body">
					<span> <?php echo $question['desc']; ?></span>
					<br>
					<span>Game Club / Büyak / Compec</span>
					<br>
					<span style="float:right; color:#d8d4df">asked 22 secs ago Mari_Yaguchi 115</span>

		</div></div></div></div>
<!-- /.dddd -->
	<div class="row hidden-sm" style="margin-top:30px;">
 <div class="col-md-3 col-md-offset-1"  style="font-size: 22px;"><?php echo $question['commentNum'];?> Answers</div>
		<div class="col-md-5 col-md-offset-1">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active" style="float:right"><a href="#">active</a></li>
				<li role="presentation" class="active" style="float:right"><a href="#">oldest</a></li>
				<li role="presentation" class="active"style="float:right"><a href="#">votes</a></li>
			</ul>
		</div>
	</div>
<?php foreach ($comments as $comment) { ?>
	<div class="row">
<div class="col-md-9 col-md-offset-1">
	 <div class="panel panel-warning">


				<div class="panel-body">
			<span><?php echo $comment['desc'];?></span>

				 
					<span style="float:right; color:#d8d4df"><?php echo $comment['date']." ".$comment['userid']?></span>

		</div></div></div></div>

<?php } ?>

				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						<form action="<?php echo base_url()?>index.php/comments/add_comment" method="post">
						<div class="form-group">
							<label for="title">Açıklama: </label>
							<textarea autofocus type="text"  name="desc" class="form-control" rows="6"></textarea>
						</div>
						<div class="form-group col-lg-2" style= "float: right">
							<input type="submit" class="form-control btn btn-warning" value="Onayla" name="add_comment">
						</div>
						</form>
						
					</div>   
				</div>