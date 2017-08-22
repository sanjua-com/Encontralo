<?php

/**
 * @file
 */
?>
<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

    <!-- ______________________ HEADER _______________________ -->

    <header id="header">
        <div class="container">
          <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>"
                 title="<?php print $site_name; ?>" rel="home" id="logo">
                  <img src="<?php print $logo; ?>"
                       alt="<?php print $site_name; ?>"/>
              </a>
          <?php endif; ?>

          <div id="menu-category">
              <div class="icon-category"><a href="#">
                      <span>Categorías</span>
                      <div class="menu-categories">
                        <?php print views_embed_view('categories_header', 'block'); ?>
                      </div>
                  </a></div>
          </div>

          <?php if ($page['header']): ?>
              <div id="header-region">
                <?php print render($page['header']); ?>
              </div>
          <?php endif; ?>
        </div>
    </header><!-- /header -->

    <?php if (drupal_is_front_page()): ?>
    <div class="fullscreen-bg">
        <div class="button-vender">
            <?php print l('Vender', '/node/add/product'); ?>
        </div>
        <video loop muted autoplay class="fullscreen-bg__video">
            <source src="<?php print file_create_url(variable_get('sanjua_home_video_url')) ?>" type="video/mp4">
        </video>
    </div>
    <?php endif; ?>
    <!-- ______________________ MAIN _______________________ -->

    <div id="main">
        <?php if ($page['highlighted']): ?>
            <div id="highlighted"><?php print render($page['highlighted']) ?></div>
        <?php endif; ?>
        <div class="container">
            <section id="content">

              <?php if ($breadcrumb || $title || $messages || $tabs || $action_links): ?>
                  <!-- <div id="content-header"> -->

                <?php print $breadcrumb; ?>


                <?php print render($title_prefix); ?>

                <?php if ($title): ?>
                      <h1 class="title"><?php print $title; ?></h1>
                <?php endif; ?>

                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php print render($page['help']); ?>

                <?php if (render($tabs)): ?>
                      <div class="tabs"><?php print render($tabs); ?></div>
                <?php endif; ?>

                <?php if ($action_links): ?>
                      <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>

                  <!-- </div> /#content-header -->
              <?php endif; ?>

                <div id="content-area">
                  <?php print render($page['content']) ?>
                </div>

              <?php print $feed_icons; ?>

            </section><!-- /content -->

          <?php if ($page['sidebar_first']): ?>
            <aside id="sidebar-first">
              <?php print render($page['sidebar_first']); ?>
            </aside>
          <?php endif; ?><!-- /sidebar-first -->

          <?php if ($page['sidebar_second']): ?>
            <aside id="sidebar-second">
              <?php print render($page['sidebar_second']); ?>
            </aside>
          <?php endif; ?><!-- /sidebar-second -->
        </div>
    </div><!-- /main -->

  <?php if ($page['pre_footer']): ?>
      <div id="pre-footer">
          <div class="container">
            <?php print render($page['pre_footer']); ?>
          </div>
      </div><!-- /footer -->
  <?php endif; ?>

    <!-- ______________________ FOOTER _______________________ -->

  <footer id="footer">
      <div class="container">
        <?php print render($page['footer']); ?>
        <?php print variable_get('sanjua_copyright'); ?>
      </div>
  </footer><!-- /footer -->

</div><!-- /page -->