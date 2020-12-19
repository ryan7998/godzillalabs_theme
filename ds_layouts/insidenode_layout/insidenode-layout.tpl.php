<?php
/**
 * @file
 * Display Suite Product detail template.
 *
 * Available variables:
 *
 * Layout:
 * - $classes: String of classes that can be used to style this layout.
 * - $contextual_links: Renderable array of contextual links.
 * - $layout_wrapper: wrapper surrounding the layout.
 *
 * Regions:
 *
 * - $header: Rendered content for the "Header" region.
 * - $header_classes: String of classes that can be used to style the "Header" region.
 *
 * - $body: Rendered content for the "body" region.
 * - $body_classes: String of classes that can be used to style the "body" region.
 *
 * - $footer: Rendered content for the "footer" region.
 * - $footer_classes: String of classes that can be used to style the "footer" region.
 */
?>

<!-- Needed to activate contextual links -->
<?php if (isset($title_suffix['contextual_links'])): ?>
<?php print render($title_suffix['contextual_links']); ?>
<?php endif; ?>

<div class="text-center">
	<?php print $top; ?>
</div>
<div class="caption absolute-center">
	<h4 class="text-center"><?php print $body; ?></h4>
		<?php print $bottom; ?>
</div>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
