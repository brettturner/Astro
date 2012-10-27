<?php
/**
 * @file om_maximenu_accordion_links.tpl.php
 * Default theme implementation of om maximenu links with submenu blocks
 *
 * Available variables:
 * - $om_accordion_dt: rendered dt with attributes
 * - $permission: TRUE/FALSE
 * - $content: array, used for link classes and content
 *
 * @see template_preprocess_om_maximenu_accordion()
 * @see template_preprocess_om_maximenu_accordion_links()
 *
 */
?>  

<?php if (!empty($permission)): ?>   
  <?php print $om_accordion_dt; ?>
  <dd><?php print theme('om_maximenu_accordion_content', array('content' => $content['content'])); ?></dd> 
<?php endif; ?>  
