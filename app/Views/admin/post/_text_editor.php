<label class="control-label control-label-content"><?= htmlentities(trans('content'),ENT_QUOTES); ?></label>
<div id="main_editor">
    <div class="row">
      <div class="col-sm-12 editor-buttons">
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#file_manager_image" data-image-type="editor"><i class="fa fa-image"></i>&nbsp;&nbsp;&nbsp;<?= trans("add_image"); ?></button>
      </div>
    </div>
    <?php if (!empty($post)): ?>
        <textarea class="tinyMCE form-control" name="content"><?= htmlentities($post->content,ENT_QUOTES); ?></textarea>
    <?php else: ?>
        <textarea class="tinyMCE form-control" name="content"><?= old(htmlentities('content',ENT_QUOTES)); ?></textarea>
    <?php endif; ?>
</div>