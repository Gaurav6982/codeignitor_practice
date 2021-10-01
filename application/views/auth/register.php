<?php 
if($this->session->has_userdata('user')){
    redirect(site_url('news'));
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Register
                </div>
                <div class="card-body">
                    <?php echo form_open('register')?>
                        <?php
                            if($this->session->flashdata("error")){?>
                            <p class="text-center text-danger"><?php echo $this->session->flashdata("error"); ?></p>
                            <?php } ?>
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password : </label>
                            <input type="password" name="confirmPassword" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>