<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">
    <div id="top-bar">
        <a href="http://www.arizona.edu" title="University of Arizona" class="top-logo"></a>
    </div>
  <div id="header"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
          <?php else: /* Use h1 when the content title is empty */ ?>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div><!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'id' => 'secondary-menu',
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
    )); ?>

    <?php print render($page['header']); ?>

        <div id="gift">
            <a href="/gift/">
                <img src="/sites/all/themes/cos_ua/images/gift.png" alt="Gift" >
            </a>
        </div> 
  </div></div><!-- /.section, /#header -->

    <?php if ($page['navigation'] || $main_menu): ?>
      <div id="navigation"><div class="section clearfix">
        <?php // print theme('links__system_main_menu', array(
        //  'links' => $main_menu,
        //  'attributes' => array(
        //    'id' => 'main-menu',
        //    'class' => array('links', 'inline', 'clearfix'),
        //  ),
        //  'heading' => array(
        //    'text' => t('Main menu'),
        //    'level' => 'h2',
        //    'class' => array('element-invisible'),
        //  ),
        // )); ?>

        <?php print render($page['navigation']); ?>
      </div></div><!-- /.section, /#navigation -->
    <?php endif; ?>

    <div id="slider">
        <?php print render($page['slider']); ?>
    </div>  

    <div id="homepage">
        <div id="homepage_left">
            <?php print render($page['homepage_left']); ?>
        </div>  
        <div id="homepage_right">
            <?php print render($page['homepage_right']); ?>
        </div>  
    <div class="clearfix"></div>
    </div> 

    <div id="static_holder">
        <div id="static1">
            <?php print render($page['static1']); ?>
        </div>
        <div id="static2">
            <?php print render($page['static2']); ?>
        </div>
        <div id="static3">
            <?php print render($page['static3']); ?>
        </div>
        <div class="clearfix"></div>
    </div>

    <?php print $breadcrumb; ?>

  <div id="main-wrapper"><div id="main" class="clearfix<?php if ($main_menu || $page['navigation']) { print ' with-navigation'; } ?>">

    <div id="content" class="column"><div class="section">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <?php if (!drupal_is_front_page()) { ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <?php } ?>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>
        <?php if (!drupal_is_front_page()) { ?>
          <?php print render($page['help']); ?>
        <?php } ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
        <?php if (!drupal_is_front_page()) { ?>
        <?php print render($page['content']); ?>
        <?php } ?>
      <?php print $feed_icons; ?>
    </div></div><!-- /.section, /#content -->

   
    <?php print render($page['sidebar_first']); ?>

    <?php print render($page['sidebar_second']); ?>

  </div></div><!-- /#main, /#main-wrapper -->

  <?php print render($page['footer']); ?>

    <div id="footer">
        <div class="subscription">
        <form method="post" action="http://godatmailclients.createsend.com/t/r/s/qklul/">
            <div>
                Subscribe to our newsletter
            </div>
            <div class="footer-logo">
                
            </div>
            <div class="footer-subtext">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
            </div>
            <div>
            
                <input type="text" id="qklul-qklul" name="cm-qklul-qklul" value="email"><br>
                <input type="submit" value="Subscribe">
            </div>
        </form>
        </div>
        <div class="footer_nav">
            <div class="footer_column">
                <ul class="first">
                    <li><h3>Life Sciences</h3></li>
                    <li><a href="/content/chemistry-and-biochemistry">Chemistry and Biochemistry</a></li>
                    <li><a href="/content/ecology-and-evolutionary-biology">Ecology and Evolutionary Biology</a></li>
                    <li><a href="/content/molecular-and-cellular-biology">Molecular and Cellular Biology</a></li>
                </ul>
                <ul>
                    <li><h3>Earth Sciences</h3></li>
                    <li><a href="/content/atmospheric-sciencesiap">Atmospheric Sciences/IAP</a></li>
                    <li><a href="/content/geosciences">Geosciences</a></li>
                    <li><a href="/content/hydrology-and-water-resources">Hydrology and Water Resources</a></li>
                    <li><a href="/content/laboratory-tree-ring-research">Laboratory of Tree-Ring Research</a></li>
					<li><a href="/content/school-earth-and-environmental-science">School of Earth and Environmental Sciences</a></li>
                </ul>
                <ul>
                    <li><h3>Physical and Space Sciences</h3></li>
                    <li><a href="/content/astronomysteward-observatory">Astronomy/Steward Observatory</a></li>
                    <li><a href="/content/chemistry-and-biochemistry-0">Chemistry and Biochemistry</a></li>
                    <li><a href="/content/physics">Physics</a></li>
                    <li><a href="/content/planetary-scienceslpl">Planetary Sciences/LPL</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <ul class="first">
                    <li><h3>Mathematics and Computational Sciences</h3></li>
                    <li><a href="/content/computer-science">Computer Sciences</a></li>
                    <li><a href="/content/mathematics">Mathematics</a></li>
                    <li><a href="/content/school-information-science-technology-and-arts">School of Information: Science, Technology and Arts</a></li>
                    <li><a href="/content/school-mathematical-sciences">School of Mathematical Sciences</a></li>
                </ul>
                <ul>
                    <li><h3>Cognitive Sciences</h3></li>
                    <li><a href="/content/neuroscience">Neuroscience</a></li>
                    <li><a href="/content/psychology">Psychology</a></li>
                    <li><a href="/content/school-mind-brain-and-behavior-0">School of Mind, Brain and Behavior</a></li>
                    <li><a href="/content/speech-language-and-hearing-sciences">Speech, Language, Hearing Sciences</a></li>
                </ul>
                <ul>
                    <li><h3>Support UA Science</h3></li>
                    <li><a href="/gift">Make a Gift</a></li>
                    <li><a href="/content/galileo-circle">Galileo Circle</a></li>
                    <li><a href="/content/support-opportunities">Support Opportunities</a></li>
                    <li><a href="/content/dean’s-board-advisors">Dean's Board of Advisors</a></li>
					<li><a href="/content/major-donor-profiles">Major Donor Profiles</a></li>
					<li><a href="/content/contact-development-office">Contact the Development Office</a></li>
                </ul>

            </div>
            <div class="footer_column">
                <ul class="first">
                    <li><h3>Outreach</h3></li>
                    <li><a href="#">Flandrau Science Center</a></li>
                    <li><a href="/content/summer-camps">Summer Camps</a></li>
                    <li><a href="/content/ua-students">UA Students</a></li>
                    <li><a href="/content/general-public-programs-and-activities">General Public Programs and Activities</a></li>
                </ul>
                <ul>
                    <li><h3>K-12</h3></li>
                    <li><a href="/content/research-and-courses">Research and Courses</a></li>
                    <li><a href="/content/workshops-and-conferences">Workshops and Conferences</a></li>
                    <li><a href="/content/field-trips-ua">Field Trips to UA</a></li>
                    <li><a href="/content/k–12-classroom-programs">K-12 Classroom Programs</a></li>
					<li><a href="/content/resources">Resources</a></li>
                </ul>
                <ul>
                    <li><h3>Administration</h3></li>
                    <li><a href="/content/joaquin-ruiz">Joaquin Ruiz</a></li>
                    <li><a href="/content/elliott-cheu">Dr. Elliot Cheu</a></li>
                    <li><a href="/content/business-office">Business Office</a></li>
                    <li><a href="/content/faculty-affairs">Faculty Affairs</a></li>
			<li><a href="/content/staff-advisory-council">Staff Advisory Council</a></li>
                </ul>
            </div>
            <div class="footer_column">
                <ul class="first">
                    <li><h3>Contact</h3></li>
                    <li><a href="/content/administration">Administration</a></li>
                    <li><a href="#">Faculty and Staff</a></li>
                    <li><a href="/content/departments-and-units">Departments and Units</a></li>
                    <li><a href="#">Interdisiplinary Units</a></li>
                </ul>
                <ul>
                    <li><h3>Students</h3></li>
                    <li><a href="/content/current-students">Current Students</a></li>
                    <li><a href="/content/prospective-students">Prospective Students</a></li>
                    <li><a href="/content/graduate-students">Graduate Students</a></li>
                </ul>
            </div>
            <div id="social_footer">
                <a href="http://www.facebook.com/UAScienceLectures"><img src="/sites/all/themes/cos_ua/images/facebook_dark.png" /></a>
                <a href="https://twitter.com/scitucson"><img src="/sites/all/themes/cos_ua/images/twitter_dark.png" /></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <p id="copyrights">All contents copyright ©2011. Arizona Board of Regents</p>
    </div>



</div></div><!-- /#page, /#page-wrapper -->

<?php // print render($page['bottom']); ?>
