<?php

function cc_script() {
	global $cc_options;
?>

<script type='text/javascript' id='commitchange-script' data-npo-id= <?php echo $cc_options['npo_id']; ?> src='https://www.commitchange.com/js/donate-button.v2.js'></script>
</script>
<?php
}

add_action( 'wp_head' , 'cc_script' );