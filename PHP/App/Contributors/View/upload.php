<h2><?php echo $this->getText('UPLOAD_FORM_HEADER'); ?></h2>
<form method="post" enctype="multipart/form-data" action="/contributors/upload">
    <?php if ($this->upload_error) : ?>
        <p id="form-error">
            <?php echo $this->getText($this->upload_error); ?>
        </p>
    <?php endif; ?>
    <label for="testfile"><?php echo $this->getText('UPLOAD_FORM_LABEL'); ?></label>
    <input type="file" name="testfile" />
    <input type="submit" name="commit" value="<?php echo $this->getText('UPLOAD_FORM_BUTTON'); ?>" />
</form>
