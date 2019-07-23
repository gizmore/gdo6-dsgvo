<div>
  <div class="gdo_dsgvo_overlay"></div>
  <div class="gdo_dsgvo_info">
    <?php echo html(t('dsgvo_info')); ?>
    <a id="gdo-dsgvo-accept-button" href="<?php echo href('DSGVO', 'Accept', '&ref='.urlencode($_SERVER['REQUEST_URI'])); ?>"><?php echo t('btn_accept'); ?></a>
  </div>
</div>
