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
                    Login
                </div>
                <div class="card-body">
                    <?php echo form_open('login')?>
                        <div class="form-group">
                            <label for="email">Email : </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password : </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <?php if($this->session->flashdata("error")){?>
                        <p class="text-center text-danger"><?php  echo $this->session->flashdata("error");?></p>    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>