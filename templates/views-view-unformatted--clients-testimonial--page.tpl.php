<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php 
	foreach ($rows as $id => $row):
		if($id % 2 == 0 || $id == 0){
			print '<div class="row-same-height">';
		}
?>
		  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
			<?php print $row ?>
		  </div>
<?php
	if($id % 2 != 0 && $id != 0){
		print '</div>';
	}	
	endforeach 
?>