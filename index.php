<?php include 'header.php';?>
<section id="layout-content">
    <div class="jumbotron" style="-webkit-background-size: 100%;background-size: 100%;">
        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <h2>Church Content Management System</h2>

                    <p>with Online Giving</p>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail text-center">
                    <br />
                    <i class="fa fa-leaf icon-5x text-success"></i>

                    <div class="caption">
                        <h3>Online giving made easy</h3>

                        <p>
                            Increase donations made online<br />
                            Increase overall giving<br />
                            Collect contributions for special events, concerts or ticket sales.
                            <br />

                        </p>
                        <br />

                        <p>
                            <a href="#features" class="btn btn-lg btn-success nav-item" role="button">Tell me more...
                                <i class="fa fa-chevron-down"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <img src="/assets/img/chrome-top.png" style="width:100%" />
                <img src="/assets/img/screen/ccms.jpg" style="width:100%" />
            </div>
        </div>
        <br />
        <hr />
        <br />

        <div class="row">


            <div class="col-sm-8">
                <img src="/assets/img/chrome-top.png" style="width:100%" />
                <img src="/assets/img/screen/s-1.jpg" style="width:100%" />
                <img src="/assets/img/chrome-bottom.png" style="width:100%" />

            </div>

            <div class="col-sm-4">
                <div class="thumbnail text-center">
                    <br />
                    <i class="fa fa-gears icon-5x text-warning"></i>

                    <div class="caption">
                        <h3>Features</h3>

                        <p> give your community access to your church resources such as sermons, events,
                            convenient online giving and regular updates
                        </p>
                        <br />

                        <p>
                            <a href="#features" class="btn btn-lg btn-warning nav-item" role="button">View Features</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br />

    </div>
    <?php include 'pages/features.php';?>

    <section id="layout-content">
        <div class="container">
            <hr />
            <div class="row">
                <div class="" style="background: #f2b765; width:400px;padding:0px 15px 5px 15px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin:0 auto">
                    <br />

                    <div class="thumbnail text-center">
                        <img src="/assets/img/demo-icon.png" style="width:100px;height: 80px;" />
                        <span>DEMO</span>

                        <div class="caption">
                            <p>
                                email: admin@app.com <br />password: password<br />
                                <a target="_blank" href="#" class="btn btn-lg btn-primary"
                                    role="button">DEMO</a>

                                <a href="#pricing" class="btn btn-lg btn-info nav-item" role="button">Download</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'pages/pricing.php';?>
</section>
<?php include 'footer.php';?>

<script>
    $('.form').submit(function (e) {
        e.preventDefault();
        var m = $(this).find('input[name=s]').val();
        window.location.href = '/m/' + m;
    });

    function notice(errorNote, type) {
        $.notify({
            icon: 'ti-check',
            message: errorNote

        }, {
            type: type,
            timer: 4000
        });
    }
</script>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" style="width:330px;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Thank you!</h4>
                Click process payment below to proceed.
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <h4>Selected Plan</h4>
                    <h4><span class="h3 plan"></span></h4>
                    <br/>
                    <button class="btn btn-success btn-xlg charge"
                            data-key="<?php echo Config::settings('stripe_public'); ?>"
data-image="/assets/img/checkout.png"
data-currency="
<?php echo Config::settings('currency'); ?>"
data-name=""
data-description=""
data-amount=""
data-label="Give online"><i class="ti-credit-card"></i> Process Payment
</button>

<input type="hidden" name="pay" value="1" />
</form>
</div>
<div class="modal-footer">

</div>
</div>
</div>
</div>

<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
    $(document).ready(function () {
        $('#myModal').on('hidden.bs.modal', function () {
            location.reload();
        })

        $('.buyBtn').click(function (e) {
            var div = $('#myModal');
            var desc = $(this).attr('data-desc');
            var amount = $(this).attr('data-amount');
            div.find('.charge').attr('data-description', 'GIVEu-' + desc);
            div.find('.charge').attr('data-amount', amount);
            div.find('.charge').attr('data-plan', $(this).attr('data-plan'));
            div.find('.charge').attr('data-name', '<?php echo Config::settings('site_name'); ?>');
            div.find('.plan').text(desc);

            div.modal('show');
        });

        $('.charge').on('click', function (event) {
            event.preventDefault();

            var $button = $(this),
                $form = $button.parents('form');
            var opts = $.extend({}, $button.data(), {
                token: function (result) {
                    $form.append($('<input>').attr({type: 'hidden', name: 'stripeToken', value: result.id}));
                    $form.append($('<input>').attr({type: 'hidden', name: 'email', value: result.email}));
                    $form.append($('<input>').attr({
                        type: 'hidden',
                        name: 'plan',
                        value: $button.attr('data-plan')
                    }));
                    $form.append($('<input>').attr({
                        type: 'hidden',
                        name: 'desc',
                        value: $button.attr('data-description')
                    }));
                    $form.submit();
                }
            });
            StripeCheckout.open(opts);
        });
    });

</script>

<script>
    $('#whiteLabel').click(function () {
        var modal = $('#whiteLabelModal');
        modal.find('.modal-body').load('pages/white-label-license.html');
        modal.modal('show');
    })
</script>

<div class="modal fade" id="whiteLabelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">White Label License FAQ</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-warning buyBtn" data-amount="125000" data-plan="ccms_white_label" data-desc="CCMS White label License">BUY
                    NOW
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
