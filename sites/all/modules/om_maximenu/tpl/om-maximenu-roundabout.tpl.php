<?php
/**
 * @file om_maximenu_roundabout.tpl.php
 * Default theme implementation of om maximenu with submenu blocks
 *
 * Available variables:
 * - $maximenu_name: Menu name given on configuration
 * - $disabled: Set links to be disabled when viewing the page of its path
 * - $links: All menu items which also contents each link property
 * - $code: unique id given in the system
 * - $count: link counter
 * - $total: number of links
 *
 * @see template_preprocess_om_maximenu_roundabout()
 * @see template_preprocess_om_maximenu_roundabout_links()
 *
 */
?>  

<ul id="om-menu-<?php print $maximenu_name; ?>">
  <?php foreach ($links['links'] as $key => $content): ?>
    <?php $count++; ?>
    <?php print theme('om_maximenu_roundabout_links', array('content' => $content, 'key' => $key, 'code' => $code, 'count' => $count, 'total' => $total)); ?>          
  <?php endforeach; ?>
</ul><!-- /.om-menu -->    


