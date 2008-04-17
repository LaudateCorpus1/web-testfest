<div>
    <h2><?php echo $this->getText('INDEX_PUBLIC_AREA'); ?></h2>
    <p><?php echo $this->output; ?></p>
</div>
<div>
    <h3>Signup</h3>
    <form method="post" action="">
        <p><label>Username</label><br />
        <input type="text" name="login" id="login" size="30" /></p>
        <p><label>Password</label><br />
        <input type="password" name="password" id="password" size="30" /></p>
        <p><input type="checkbox" />&nbsp;mentor ?</p>
        <p style="text-align: right;"><input type="submit" name="commit" value="Signup" class="login-submit" /> or <a href="/register">register</a></p>
    </form>
</div>

