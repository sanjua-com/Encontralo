<?php

/**
 * @file
 */
?>
<div id="<?php print 'block-' . $block->delta ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h3 class="title"<?php print $title_attributes; ?>><?php print $block->subject ?></h3>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <?php print $content; ?>
</div><!-- /block -->
