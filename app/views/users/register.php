<?php require_once APPROOT.'/views/inc/header.php';?>
<!-- register form -->
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create an Account</h2>
            <form action="<?php echo URLROOT;?>/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="text" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password: <sup>*</sup></label>
                    <input type="password" id="password2" class="form-control">
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Register" class="btn btn-block btn-info ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php';?>
