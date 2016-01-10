<?php
	/**
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
<header id="navbar" role="banner" class="fluid-container bg-white">
	<div class="container">
		<div class="navbar-header">
			<?php if ($logo): ?>
			<a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
			<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
			<?php endif; ?>
			<?php if (!empty($site_name)): ?>
			<a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
			<?php endif; ?>
		</div>
		<?php if (!empty($site_slogan)): ?>
        <p class="lead pull-right small col-sm-3"><?php print $site_slogan; ?><br/><a class="btn btn-custom colorbox-inline pull-right" href="?width=90%25&height=50&inline=true#block-search-form--4"><i class="fa fa-search fa-inverse fa-lg"></i></a></p>
		<?php endif; ?>
	</div>
</header>
<div id="navigation-bar" class="fluid-container bg-dk-gray">
    <div class="container"><?php print render($page['navigation']); ?></div>
</div>
<div id="main-banner" class="fluid-container home-banner">
    <div class="container"><?php print render($page['main_banner']); ?></div>
</div>
<div class="main-container container bg-white">
	<header role="banner" id="page-header">
		<?php print render($page['header']); ?>
	</header>
	<!-- /#page-header -->
	<div class="row">
		<?php if (!empty($page['sidebar_first'])): ?>
		<aside class="col-sm-3" role="complementary">
			<?php print render($page['sidebar_first']); ?>
		</aside>
		<!-- /#sidebar-first -->
		<?php endif; ?>
        
        <section<?php print $content_column_class; ?>>
            <div id="first-row" class="front-row clearfix"><?php print render($page['front_row_1']); ?></div>
            <div id="second-row" class="front-row clearfix">
                <div class="col-xs-12 col-sm-6 col-md-4"><?php print render($page['front_row_2_A']); ?></div>
                <div class="col-xs-12 col-sm-6 col-md-4"><?php print render($page['front_row_2_B']); ?></div>
                <div class="col-xs-12 col-md-4"><?php print render($page['front_row_2_C']); ?></div>
            </div>
            <div id="third-row" class="row front-row clearfix"><?php print render($page['front_row_3']); ?></div>
        </section>
		<?php if (!empty($page['sidebar_second'])): ?>
		<aside class="col-sm-3" role="complementary">
			<?php print render($page['sidebar_second']); ?>
		</aside>
		<!-- /#sidebar-second -->
		<?php endif; ?>
	</div>
</div>
<?php include 'footer.php'; ?>