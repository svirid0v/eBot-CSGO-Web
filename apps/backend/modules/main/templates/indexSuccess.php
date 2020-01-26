
<div class="modal" style="position:relative; top:auto; left:auto; margin:0 auto 20px; z-index:1; width: auto; max-width:100%;">
    <div class="modal-header">
        <h4><?php echo __("News"); ?></h4>
    </div>
    <div class="modal-body" style="max-height: none;">
        <?php if (!empty($news)): ?>
            <?php echo html_entity_decode($news); ?>
        <?php else: ?>
            <?php echo __("No news available."); ?>
        <?php endif; ?>
    </div>
</div>