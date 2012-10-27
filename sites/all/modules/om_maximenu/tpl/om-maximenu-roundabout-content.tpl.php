<?php
/**
 * @file om_maximenu_roundabout_content.tpl.php
 * Default theme implementation of om maximenu contents with tabbed blocks
 *
 * Available variables:
 * - $content: array, used for link classes and content
 *
 * @see template_preprocess_om_maximenu_roundabout()
 * @see template_preprocess_om_maximenu_roundabout_links()
 *
 */
?> 

<?php if (!empty($content)): ?>
  <div class="om-maximenu-roundabout-content">
    <?php print om_maximenu_content_render($content); ?>
    <div class="om-clearfix"></div>  
    <div class="om-maximenu-arrow"></div>
  </div><!-- /.om-maximenu-roundabout-content -->
<?php endif; ?>


