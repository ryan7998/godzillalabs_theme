<?php
/*
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
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
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
	<div class="navbar-inner">
		<div class="container-fluid">
			<div class="navbar-header">
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>


			<div class="navbar-collapse collapse">
				<nav role="navigation">
					<div class="row">
						<?php if ($logo): ?>
							<a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
								<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" draggable = "false"/>
							</a>
						<?php endif; ?>
						<?php if (!empty($primary_nav)): ?>
							<div class="col-sm-6"><?php print render($primary_nav); ?></div>
						<?php endif; ?>
						<?php if (!empty($secondary_nav)): ?>
							<div class="col-sm-6"><?php print render($secondary_nav); ?></div>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>

<div class="main-container container-fluid">
	<header role="banner" id="page-header">
		<?php print render($page['header']); ?>
	</header> <!-- /#page-header -->

	<div id ="pre-script" class="row">
		<div class="frame">
			<div class="col-sm-12 text-center"><h1>OUR SERVICES</h1></div>
			<div class="col-sm-12 text-center sub-heading">YEARS OF EXPERIENCE</div>
			<div class="row-same-height">
				<?php print render($page['prescript']); ?>
			</div>
		</div>
	</div>

	<div id="script" class="row">
		<div class="col-sm-12 text-center"><h1>FEATURED WORK</h1></div>
		<div class="col-sm-12 text-center sub-heading">WE TAKE PRIDE IN OUR WORK</div>
		<div class="row-same-height">
			<?php print render($page['script']); ?>
		</div>
		<div class="row text-center">
			<div class="btn btn-default">
				View Portfolio <span class="glyphicon glyphicon glyphicon-th" aria-hidden="true"></span>
			</div>
		</div>
	</div>

	<div id="post-script" class="row">
		<div class="col-sm-12 text-center"><h1>WHAT OUR CLIENTS ARE SAYING</h1></div>
		<div class="col-sm-12 text-center sub-heading">DON'T JUST TAKE OUR WORD</div>
		<div class="row-same-height">
			<?php print render($page['postscript']); ?>
		</div>
	</div>

	<div id="post-script-second" class="row">
		<div class="frame">
			<div class="col-sm-12 text-center"><h1>WE CAN HELP BUILD YOUR PROJECT!</h1></div>
			<div class="col-sm-12 text-center sub-heading">TELL US ABOUT OUR PROJECT</div>
			<div class="row text-center">
				<div class="btn btn-default">
					Contact Us <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				</div>
			</div>
		</div>
	</div>
	
</div>
<footer class="footer container-fluid">
	<div id="footer-first" class="row">
		<!-- <div class="col-sm-3 footer-blocks">
			<b>ADDRESS</b>
			<h3>Address goes here..</h3>
		</div>	 -->
		<div class="col-sm-4 footer-blocks">
			<b>SKYPE</b>
			<h3>godzilla.labs</h3>
		</div>
		<div class="col-sm-4 footer-blocks">
			<b>EMAIL</b>
			<h3>info@godzillalabs.com</h3>
		</div>
		<div id ="social-block" class="col-sm-4 footer-blocks">
			<b>FOLLOW US</b>
			<p><a href="http://linkedin.com" target="_blank"><img alt="" src="http://icons.iconarchive.com/icons/danleech/simple/48/linkedin-icon.png" style="height:32px; width:32px" /></a><a href="http://facebook.com" target="_blank"><img alt="" src="http://icons.iconarchive.com/icons/danleech/simple/48/xing-icon.png" style="height:32px; width:32px" /></a><a href="http://twitter.com" target="_blank"><img alt="" src="http://icons.iconarchive.com/icons/danleech/simple/48/twitter-icon.png" style="height:32px; width:32px" /></a><a href="http://facebook.com" target="_blank"><img alt="" src="http://icons.iconarchive.com/icons/danleech/simple/48/facebook-icon.png" style="height:32px; width:32px" /></a></p>
		</div>
	</div>
	<div id="footer-second" class="row text-center">
		© <?php print date("Y") ?> All Rights Reserved. Developed by <a href="fazleryan.com">Fazle Ryan</a>
	</div>
</footer>
