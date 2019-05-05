<section id="layout-content">
    <div id="pricing"></div>
    <div class="container">

        <div class="h2 title bg-yellow">Pricing</div>

        <div class="row">
            <div class="col-sm-12">

                <table id="comparetable" class="blueshine">
                    <tr>
                        <td class="blank"></td>                 
                        <th>$17.00 <br/>Regular License</th>
                        <th>$320 <br/>Extended License</th>
                        <th>$1,250 <br/>White Label License
                            <a href="#pricing" id="whiteLabel">License FAQ</a>
                        </th>
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

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
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
                        <td><i class="fa fa-check-circle"></i></td>
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
                        <td class="rowTitle">Kiosk Mode</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">Priority Support</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="rowTitle">6 Month Support</td>

                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>

                    <tr>
                        <td class="rowTitle">Custom Features</td>

                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                        <td><i class="fa fa-check-circle"></i></td>
                    </tr>
                    <tr>
                        <?php if (isset($cc)) : ?>
                            <td colspan="4">

                                <a href="https://codecanyon.net/user/amdtllc/portfolio?ref=jmuchiri"
                                   class="btn btn-info btn-lg">Get it now at CodeCanyon</a>
                            </td>
                        <?php else : ?>
                            <td></td>
                            <td>
                                <a target="_blank"
                                   href="https://codecanyon.net/item/church-content-management-system-ccms/17510614?ref=jmuchiri"
                                   class="btn btn-success">BUY NOW
                                </a>
                            </td>
                            <td>
                                <a target="_blank"
                                   href="https://codecanyon.net/item/church-content-management-system-ccms/17510614?ref=jmuchiri"
                                   class="btn btn-info">BUY NOW
                                </a>

                            </td>
                            <td>
                                <button class="btn btn-warning buyBtn" data-amount="125000" data-plan="ccms_white_label"
                                        data-desc="CCMS White label License">BUY NOW</button>
                            </td>
                        <?php endif; ?>
                    </tr>
                </table>
                <?php if (!isset($cc)) : ?>
                <hr/>
                <div class="jumbotron text-center">
                    <div class="callout callout-info">
                        <h3>Needs a custom plan?
                            <a href="https://amdtllc.com/support" target="_blank" class="btn btn-warning">Contact us for
                                a custom quote.</a>

                        </h3>
                    </div>
                    You can also <a href="https://amdtllc.com/#contact">contact us</a> to request a demo
                </div>
                <hr/>
                <div class="jumbotron text-center">
                    <div class="callout callout-warning">
                        <h3>Refer friends to purchase our product and get 30% of the purchase!!</h3>
                    </div>
                    <a href="https://amdtllc.com/#contact">Contact us to become an affiliate</a>
                    Use subject line GIVEU Affiliate Request
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>