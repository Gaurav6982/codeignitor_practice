<?php
    if(!$this->session->has_userdata('user')){
        redirect(site_url('login_view'));
    }
?>

<div class="row">
<div class="col-md-6 offset-md-3">
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" /><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control" ></textarea><br />

    <input type="submit" name="submit"  class="btn btn-secondary" value="Create news item" />

</form>
</div>
</div>