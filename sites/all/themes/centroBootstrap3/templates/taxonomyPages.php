<?php
/*
 *
 *
 <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
                <?php endif; ?>
                <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
                <?php endif; ?>
                <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
                <?php endif; ?>
                <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
 */

if ($taxonomyClass == 'tx-centro-voices'):?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-9 no-sides">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-3">
        <?php print render($page['right_side']); ?>
    </div>
<?php elseif($taxonomyClass == 'tx-events-news'): ?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-6">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-6">
        <?php print render($page['right_side']); ?>
    </div>
<?php elseif($taxonomyClass == 'tx-centro-tv'): ?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-8 no-sides">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-4">
        <?php print render($page['right_side']); ?>
    </div>
<?php elseif($taxonomyClass == 'tx-memorias'): ?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-8 no-sides">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-4">
        <?php print render($page['right_side']); ?>
    </div>
<?php elseif($taxonomyClass == 'tx-library-publications'): ?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-6 no-sides">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-6">
        <?php print render($page['right_side']); ?>
    </div>
<?php elseif($taxonomyClass == 'tx-store'): ?>
    <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
    <?php endif; ?>
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <div class="col-xs-12 col-md-6">
        <?php print render($page['left_side']); ?>
    </div>
    <div class="col-xs-12 col-md-6 xsp-up-p15">
        <?php print render($page['right_side']); ?>
    </div>
<?php endif; ?>
<?php if($page['bottom_row']): ?>
    <div class="col-xs-12 no-sides"><?php print render($page['bottom_row']); ?></div>
<?php endif; ?>