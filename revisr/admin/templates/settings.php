<?php
/**
 * Displays the settings page.
 *
 * @package   Revisr
 * @author    Matt Shaw <matt@expandedfronts.com>
 * @license   GPL-2.0+
 * @link      https://revisr.io
 * @copyright 2014 Expanded Fronts, LLC
 */

?>

<div class="wrap">
	<h2>Revisr Settings</h2>
	<?php
		if ($_GET['settings-updated'] == "true") {
			echo "<div id='revisr_alert' class='updated'><p>Settings updated successfully.</p></div>";
		}
	?>
	<form method="post" action="options.php">
	<?php
                //Print the settings fields.
                settings_fields( 'revisr_option_group' );   
                do_settings_sections( 'revisr_settings' );
                submit_button(); 
    ?>
	</form>
</div>