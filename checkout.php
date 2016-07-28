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
        </div>
    </div><!-- /.container -->
</div><!-- END: Banner -->

<!-- BEGIN: Main Content -->
<div class="container-fluid">
    <div class="container">
        <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
            <h3 class="bold text-dark-grey">
                Checkout
            </h3>
            <!-- BEGIN: Checkout Form -->
            <form>
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
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
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
                <!-- BEGIN: Billing Information -->
                <h4 class="bold text-dark-grey">Billing Information</h4>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Example: John Smith">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Example: 1234 Smith Street">
                </div>
                <div class="form-group">
                    <label for="address-2">Apartment #, Floor, Company etc.</label>
                    <input type="text" class="form-control" id="address-2" placeholder="Example: Apt 204">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="Example: Madison">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" id="state">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>Arizone</option>
                        <option>Arkansas</option>
                        <option>California</option>
                        <option>Colorado</option>
                        <option>Conneticut</option>
                        <option>Delaware</option>
                        <option>Florida</option>
                        <option>Georgia</option>
                        <option>Hawaii</option>
                        <option>Idaho</option>
                        <option>Illinois</option>
                        <option>Indiana</option>
                        <option>Iowa</option>
                        <option>Kansas</option>
                        <option>Kentucky</option>
                        <option>Louisiana</option>
                        <option>Maine</option>
                        <option>Maryland</option>
                        <option>Massachusetts</option>
                        <option>Michigan</option>
                        <option>Minnesota</option>
                        <option>Mississippi</option>
                        <option>Missouri</option>
                        <option>Montana</option>
                        <option>Nebraska</option>
                        <option>Nevada</option>
                        <option>New Hampshire</option>
                        <option>New Jersey</option>
                        <option>New Mexico</option>
                        <option>New York</option>
                        <option>North Carolina</option>
                        <option>North Dakota</option>
                        <option>Ohio</option>
                        <option>Oklahoma</option>
                        <option>Oregon</option>
                        <option>Pennsylvania</option>
                        <option>Rhode Island</option>
                        <option>South Carolina</option>
                        <option>South Dakota</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Utah</option>
                        <option>Vermont</option>
                        <option>Verginia</option>
                        <option>Washington</option>
                        <option>West Verginia</option>
                        <option>Wisconsin</option>
                        <option>Wyoming</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="postal-code">Postal Code</label>
                    <input type="text" class="form-control" id="postal-code" placeholder="Example: 53590">
                </div>
                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <input type="phone" class="form-control" id="phone-number" placeholder="Example: 555-555-5555">
                </div><!-- END: Billing Information -->
                <hr>
                <!-- BEGIN: Shipping Information -->
                <h4 class="bold text-dark-grey">Shipping Information</h4>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" checked> Same as Billing Address
                        </label>
                    </div>
                </div><!-- END: Shipping Information -->
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
                <button type="submit" class="button-green center-block">Submit Order</button>
            </form><!-- END: Checkout Form -->
        </div><!-- /.col-md-6 -->
        <div class="col-sm-12">
    </div><!-- /.container -->
</div><!-- /.container-fluid -->
<!-- END: Main Content -->

<!-- Include Footer -->
<?php include('inc/footer.php') ?>
