<?php
// $Id: toolbar.tpl.php,v 1.3 2009-09-11 00:37:38 webchick Exp $

/**
 * @file
 * Default template for admin toolbar.
 *
 * Available variables:
 * - $toolbar['toolbar_user']: User account / logout links.
 * - $toolbar['toolbar_menu']: Top level management menu links.
 * - $toolbar['toolbar_shortcuts']: Convenience shortcuts.
 *
 * @see template_preprocess()
 * @see template_preprocess_admin_toolbar()
 */
?>
<div id="toolbar" class="clearfix">
  <div class="toolbar-menu clearfix">
    <?php print render($toolbar['toolbar_menu']); ?>
    <?php print render($toolbar['toolbar_user']); ?>
  </div>

  <div class="toolbar-shortcuts clearfix">
    <?php print render($toolbar['toolbar_shortcuts']); ?>
  </div>

  <div class="shadow"></div>
</div>
