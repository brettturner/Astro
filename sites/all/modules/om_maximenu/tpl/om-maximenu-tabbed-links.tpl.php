<?php
/**
 * @file om_maximenu_tabbed_links.tpl.php
 * Default theme implementation of om maximenu links with submenu blocks
 *
 * Available variables:
 * - $om_link: rendered span or a tag with attributes
 * - $permission: TRUE/FALSE
 * - $key: numeric link order id
 * - $code: unique id given in the system
 * - $content: array, used for link classes and content
 * - $count: link counter
 * - $total: number of links
 *
 * @see template_preprocess_om_maximenu_tabbed()
 * @see template_preprocess_om_maximenu_tabbed_links()
 *
 */
?>  

<?php if (!empty($permission)): ?>   
  <li id="om-leaf-<?php print $code . '-' . $key; ?>" class="<?php print om_maximenu_link_classes($content, $permission, $count, $total); ?>">   
    <?php print $om_link; ?>
  </li>
<?php endif; ?>  
