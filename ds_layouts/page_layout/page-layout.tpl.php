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
<div class="row">
<div class="row-same-height">
	<div class="col-xs-12 col-sm-4 text-center vertical-align col-sm-height">
		<?php print $left; ?>
	</div>
	<div class="col-xs-12 col-sm-8 col-sm-height">
		<?php print $body; ?>
		<div class="row">
			<?php print $bottom; ?>
		</div>
	</div>
</div>
<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
