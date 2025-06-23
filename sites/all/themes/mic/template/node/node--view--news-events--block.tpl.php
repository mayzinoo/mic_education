<?php

?>

<div class="col-md-4 col-sm-4">
	<div class="light-grey-solid smallborder">
	    <?php
	        print render($content['field_news_events_image']);
	    ?>

		<div class="midpadding center">
		    <a href="<?php print $node_url;?>" class="uppercase">
		        <?php print $title; ?>
		    </a>
		</div>
	</div>
	
	<div class="">
	 <?php
	        print render($content['content']);
	    ?>
	</div>
</div>