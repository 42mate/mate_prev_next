<?php
/**
 * Default template for previous and next links
 *
 * @file : Default template for previous and next notice blocks.
 * @ingroup views_templates
 */
?>
<div class="mate_prev_and_next">

  <?php if (!empty ($next_node_title) && !empty($next_node_url)) : ?>
    <div class="next_node">
      <a href="<?php echo $next_node_url ?>">
        <span class='indicator'><<</span>
        <span class='paragraph_right'><?php echo $next_node_title ?></span>
      </a>
    </div>
  <?php endif; ?>

  <?php if (!empty ($prev_node_title) && !empty($prev_node_url)) : ?>
    <div class="prev_node">
      <a href="<?php echo $prev_node_url ?>">
        <span class='paragraph_right'><?php echo $prev_node_title ?></span>
        <span class='indicator'>>></span>
      </a>
    </div>
  <?php endif; ?>

</div>
