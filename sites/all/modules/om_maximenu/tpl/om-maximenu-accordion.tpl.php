<?php
/**
 * @file om_maximenu_accordion.tpl.php
 * Default theme implementation of om maximenu with accordion blocks
 *
 * Available variables:
 * - $maximenu_name: Menu name given on configuration
 * - $links: All menu items which also contents each link property
 * - $content: link content blocks
 *
 * @see template_preprocess_om_maximenu_accordion()
 * @see template_preprocess_om_maximenu_accordion_links()
 *
 */
?>  

<dl id="om-menu-<?php print $maximenu_name; ?>" class="easy-accordion">
  <?php foreach ($links['links'] as $key => $content): ?>
    <?php print theme('om_maximenu_accordion_links', array('content' => $content, 'key' => $key)); ?>          
  <?php endforeach; ?>
</dl><!-- /.easy-accordion -->    



