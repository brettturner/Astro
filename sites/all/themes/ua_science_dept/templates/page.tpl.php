<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<!-- ______________________ UofA WEBSITE HEADER _______________________ -->

<?php 
	//concatenate a path for the images folder in the UA Science Dept theme
  	global $base_root;  
	$uasci_theme_img_path = $base_root . base_path() . path_to_theme() . '/images';
?>

<div id="uofa_global_header">
	<div id="uofa_global_logo"><a href="http://www.arizona.edu" title="Visit the University of Arizona site"><img src="<?php print $uasci_theme_img_path; ?>/ua_global_ualogo.png" alt="University of Arizona" /></a></div>
    <div id="uofa_global_logo_uasci"><a href="http://cos.arizona.edu" title="Visit the UA Science site"><img src="<?php print $uasci_theme_img_path; ?>/ua_global_uascilogo.png" alt="UA Science" /></a></div>
</div>

  <!-- ______________________ HEADER _______________________ -->

  	
  	<div id="header">	

	<?php if ($page['utility']): ?>
    	<!-- utility menu custom region -->
        <div id="uofa_utility_menu"><?php print render($page['utility']); ?></div>
    <?php endif; ?>


    <?php if ($logo): ?>      
      <div id="uofa_header_logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $uasci_theme_img_path; ?>/logo_ua.png" alt="<?php print t('Home'); ?>"/>
          </a>
      </div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
				<a title="Home" href="<?php print $front_page; ?>"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

      </div>
    <?php endif; ?>

     <!-- / contains search block -->
	<?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
    
  </div> <!-- /header -->
  
  
    	<!-- global navigation custom region -->
        <div id="uofa_global_nav_container" <?php if ($is_front){ print 'style="border: none;"'; }?>>
 			<?php if ($page['global_nav']): ?>
        		<div id="uofa_global_nav"><?php print render($page['global_nav']); ?></div>            
        	<?php endif; ?>
            <?php if ($page['make_gift']): ?>
        		<div id="uofa_make_gift"><?php print render($page['make_gift']); ?></div>            
        	<?php endif; ?>
        </div>
    	

	<?php if ($breadcrumb): ?>
    	<?php print $breadcrumb; ?>
  	<?php endif; ?>

  <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <div id="content">
      <div id="content-inner" class="inner column center <?php if ($is_front){ print 'homepage_layout'; }?>">

        <?php if ($title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">
            

            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>

            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>

            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            
          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="content-area">
          	
			<?php print render($page['content']) ?>
          
		  	<?php if ($page['homepage_message']): ?>
        		<div id="uofa_homepage_message"><?php print render($page['homepage_message']); ?></div>            
        	<?php endif; ?>
            
        </div>

        <?php print $feed_icons; ?>

      
      
      </div>
      
      
      
    </div> <!-- /content-inner /content -->

     <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </div>
    <?php endif; ?> <!-- /sidebar-first -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second">
        <div id="sidebar-second-inner" class="inner">
          <?php if ($main_menu || $secondary_menu): ?>
          	<?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      	  <?php endif; ?>
		  <?php print render($page['sidebar_second']); ?>          
        </div>
      </div>      
    <?php endif; ?> <!-- /sidebar-second -->

    
    
	<?php if ( $page['homepage_triptych_first'] || $page['homepage_triptych_middle'] || $page['homepage_triptych_last'] ): ?>
    
    	<div id="uofa_homepage_triptych_rule"></div>
        
        <div id="uofa_homepage_triptych_container">
		
			<?php if ($page['homepage_triptych_first']): ?>
                <div id="uofa_homepage_triptych_first" class="homepage_triptych">
                    <?php print render($page['homepage_triptych_first']); ?>
                </div>
            <?php endif; ?> <!-- /triptych_first -->
            
            <?php if ($page['homepage_triptych_middle']): ?>
                <div id="uofa_homepage_triptych_middle" class="homepage_triptych">
                    <?php print render($page['homepage_triptych_middle']); ?>
                </div>
            <?php endif; ?> <!-- /triptych_middle -->
            
            <?php if ($page['homepage_triptych_last']): ?>
                <div id="uofa_homepage_triptych_last" class="homepage_triptych">
                    <?php print render($page['homepage_triptych_last']); ?>
                </div>
            <?php endif; ?> <!-- /triptych_last -->
        
    	</div><!-- /homepage triptych -->         
    
    <?php endif; ?> 

  </div> <!-- /main -->



  <!-- ______________________ FOOTER _______________________ -->

    <div id="footer">
      <?php print render($page['footer']); ?>
      
      	<!-- footer menus container region  -->
        <?php if ($page['footer_menus']): ?>
        	<div id="uofa_footer_menu_container" class="clearfix">
            	<?php print render($page['footer_menus']); ?>
        	</div>
        <?php endif; ?>
        
        <div id="uofa_footer_copyright">
			<p>ALL CONTENTS COPYRIGHT&nbsp;&copy;<?php print date('Y');?>. ARIZONA BOARD OF REGENTS.</p>
		</div>
        
    </div> <!-- /footer -->

</div> <!-- /page -->


