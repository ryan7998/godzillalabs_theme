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
<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes;?> clearfix">
  <!-- Needed to activate contextual links -->
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>


<div class="rounded-image">
	<?php print $top; ?>
</div>
<div class="row">
	<div class="col-sm-12 text-center"><h1><?php print $name ?></h1></div>
	<div class="col-sm-12 text-center sub-heading"><?php print $position ?></div>
</div>
<div class="body">
	<?php print $body; ?>
</div>
<div class="nodeBottom clearfix">
	<?php print $bottom; ?>
</div>

</<?php print $layout_wrapper ?>>

<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
