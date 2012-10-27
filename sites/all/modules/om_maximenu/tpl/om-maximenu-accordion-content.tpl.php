<?php
/**
 * @file om_maximenu_accordion_content.tpl.php
 * Default theme implementation of om maximenu contents with tabbed blocks
 *
 * Available variables:
 * - $content: link content blocks
 *
 * @see template_preprocess_om_maximenu_accordion()
 * @see template_preprocess_om_maximenu_accordion_links()
 *
 */
?>

<?php if (!empty($content)): ?>
  <div class="om-maximenu-accordion-content">
    <?php print om_maximenu_content_render($content); ?>
    <div class="om-clearfix"></div>      
    <div class="om-maximenu-arrow"></div>
  </div><!-- /.om-maximenu-accordion-content -->
<?php endif; ?>


