<div class="container clearfix main-content">

  <h1 class="page-title oswald">Login</h1>
        
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-2">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email:</label>
                    <div class="col-sm-9">
                    <?php print $name; // Display username field ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                      <?php print $pass; // Display Password field ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <?php print $submit; // Display submit button ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-md-offset-1">
                <h3 class="oswald">Don't have an account?</h3>
                <p><a href="/user/register">Create an Account <i class="fa fa-angle-double-right"></i></a></p>
                <br>
                <br>
                <h3 class="oswald">Forgot your password?</h3>
                <p><a href="/user/password">Reset your password now <i class="fa fa-angle-double-right"></i></a></p>
            </div>
        </div>

        <?php print $rendered; // Display hidden fields ?>
</div>