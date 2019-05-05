<section id="layout-content">
    <div id="pricing"></div>
    <div class="container">

        <div class="h2 title bg-yellow">Pricing</div>

        <div class="row">
            <div class="col-sm-12">

                <table id="comparetable" class="blueshine">
                    <tr>
                        <td class="blank"></td>
                        <th>$<?php echo centsToDollars(Config::pricing('ccms_basic_plan', 'price')); ?> <br/>Basic</th>
                        <th>$<?php echo centsToDollars(Config::pricing('ccms_advanced_plan', 'price')); ?> <br/>Advanced</th>
                        <th>$<?php echo centsToDollars(Config::pricing('ccms_premium_plan', 'price')); ?> <br/>Premium</th>
                    </tr>

                    <tr>
                        <td class="rowTitle">Installation & Setup</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Online Giving</td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Events Registration</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Recurring Giving</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Events Calendar</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Sermons online</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Blog</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Payment Gateway Setup</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Messaging System</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Custom messaging templates</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Tasks Scheduling</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Events Calendar</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Kiosk Mode</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">24/7 Support</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php echo Config::buyButton('ccms_basic_plan'); ?>
                        </td>
                        <td>
                            <?php echo Config::buyButton('ccms_advanced_plan'); ?>

                        </td>
                        <td>
                            <?php echo Config::buyButton('ccms_premium_plan'); ?>
                        </td>
                    </tr>
                </table>
                <hr/>
                <div class="callout callout-success text-center">
                    <h2 class="text-primary">White label</h2>
                    <h3>Looking for a white label license?<br/> This allows you to rebrand this application and sell it
                        as if its your own.</h3>
                    <?php echo Config::buyButton('ccms_white_label', 'Get it now!'); ?>
                    <br/>
                    <br/>
                    <a href="#pricing" id="whiteLabel">License FAQ</a>
                </div>
                <hr/>

                <div class="callout callout-info text-center">
                    <h3>Needs a custom plan?<br/>
                        <br/>
                        <a href="https://amdtllc.com/support" target="_blank" class="btn btn-warning">Contact us for
                            a custom quote.</a>
                    </h3>

                </div>

                <hr/>

                <div class="callout callout-warning text-center">
                    <h2 class="text-info">Affiliate</h2>
                    <h3>Refer friends to purchase our product and get 30% of the purchase!!</h3>
                    <a href="https://amdtllc.com/#contact">Contact us to become an affiliate</a>
                    Use subject line GIVEu Affiliate Request. Or Send an email to info[/at/]amdtllc.com
                </div>
            </div>
        </div>
    </div>
</section>