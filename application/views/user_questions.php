
        <div class="panel-group" id="accordion">
		<?php 
		$track = 0;
		foreach ($questions as $question) { 
			$track++;
			?>
		<div class="panel panel-default">
			    <div class="panel-heading">
			    	<div data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $track; ?>">
		 		   	    <h4 class="panel-title">
		             		<span><?php echo $question['title']; ?></span>
		        		</h4>
		        	</div>	
		    	</div>
		   		<div id="collapse-<?php echo $track; ?>" class="panel-collapse collapse">
		        	<div class="panel-body">
		           	<?php echo $question['desc']; ?>
		        	</div>
		    	</div>
		</div>
		<?php } ?>
	