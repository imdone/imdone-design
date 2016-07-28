<?php include('inc/header.php') ?>
<?php include('inc/navigation.php') ?>

<!-- BEGIN: Banner -->
<div class="container-fluid banner-small">
    <div class="container">
        <div class="col-sm-12">
            <div class="row banner-text">
                <p><img src="images/logos/imdone-logo.svg"/><strong>imdone</strong> is a task-board that lives in your <strong>code_</strong></p>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- END: Banner -->

<!-- BEGIN: Main Content -->
<div class="container">
    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h3 class="bold text-dark-grey">
            Create Account
        </h3>
        <hr>
        <!-- BEGIN: Log In Form -->
        <form>
            <h4 class="bold text-dark-grey">User Information</h4>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Example: JSmith01">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Example: jim@jimsmith.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="">
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="password" placeholder="">
            </div>
            <hr>
            <!-- BEGIN: Plan Selection -->
            <h4 class="bold text-dark-grey">Plan Selection</h4>
            <ul class="plan-list">
                <li class="free-header">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            <p>Free</p>
                      </label>
                    </div>
                </li>
                <li class="standard-header">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            <p>Standard</p>
                      </label>
                    </div>
                </li>
                <li class="max-header">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                            <p>Max</p>
                      </label>
                    </div>
                </li>
            </ul><!-- END: Plan Selection -->
            <hr>
            <!-- BEGIN: Payment Information -->
            <h4 class="bold text-dark-grey">Payment Information</h4>
            <div class="form-group">
                <label for="name-on-card">Name on Card</label>
                <input type="text" class="form-control" id="name-on-card" placeholder="">
            </div>
            <div class="form-group">
                <label for="card-type">Card Type</label>
                <select class="form-control" id="card-type">
                    <option>VISA</option>
                    <option>Mastercard</option>
                    <option>American Express</option>
                    <option>Discover</option>
                    <option>Paypal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" class="form-control" id="card-number" placeholder="">
            </div>
            <div class="form-group">
                <label for="security-code">Security Code</label>
                <input type="text" class="form-control" id="security-code" placeholder="">
            </div><!-- END: Payment Information -->
             <button type="submit" class="button-green center-block">Save Changes</button>
        </form><!-- END: Log In Form -->
    </div><!-- /.col-md-6 -->
</div><!-- /.container -->
<!-- END: Main Content -->

<!-- Include Footer -->
<?php include('inc/footer.php') ?>
