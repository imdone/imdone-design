<!-- Include Header and Navigation -->
<?php include('inc/header.php') ?>
<?php include('inc/navigation.php') ?>

<!-- BEGIN: Banner -->
<div class="container-fluid banner-small">
    <div class="container">
        <div class="col-sm-12">
            <div class="row banner-text">
                <p><img src="images/logos/imdone-logo.svg"/><strong>imdone</strong> is a task-board that lives in your <strong>code_</strong></p>
            </div>
        </div><!-- /.col-sm-12 -->
    </div><!-- /.container -->
</div><!-- END: Banner -->

<!-- BEGIN: Main Content -->
<div class="container">
    <div class="col-sm-6 col-sm-offset-3">
        <h3 class="bold text-dark-grey">
            Sign In
        </h3>
        <hr>
        <!-- BEGIN: Log In Form -->
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Example: jim@jimsmith.com">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="">
            </div>
            <a href="#" class="small">Forgot your password?</a>
             <button type="submit" class="button-green center-block">Sign In</button>
        </form><!-- END: Log In Form -->
    </div><!-- /.col-sm-6 -->
</div><!-- /.container -->
<!-- END: Main Content -->

<!-- Include Footer -->
<?php include('inc/footer.php') ?>
