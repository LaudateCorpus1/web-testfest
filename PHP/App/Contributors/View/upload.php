<h2><?php echo $this->getText('UPLOAD_FORM_HEADER'); ?></h2>
<form method="post" enctype="multipart/form-data" action="/contributors/upload">
    <div id="form_error"><?php if ($this->upload_error) echo $this->getText($this->upload_error); ?></div>
    <label for="testfile"><?php echo $this->getText('UPLOAD_FORM_LABEL'); ?></label>
    <input type="file" name="testfile" />
    <input type="submit" name="commit" value="<?php echo $this->getText('UPLOAD_FORM_BUTTON'); ?>" />
</form>
