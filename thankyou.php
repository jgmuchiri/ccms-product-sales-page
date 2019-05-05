<?php
include "header.php";

$charge = 0;
if (isset($_GET['dl'])) {
    $dl_code = $_GET['dl'];

    $keysFile = Config::settings('keysFile');
    $contents = file_get_contents($keysFile);
    $keys = explode(',', $contents);

    foreach ($keys as $key) {
        if ($key == $dl_code) {
            $charge = 1;
            break;
        }
    }
}
?>
<?php if ((jvzipnVerification() == 1 && jvz_txn()) || isset($_GET['jvzoo-staff']) || $charge == 1): ?>
    <section id="layout-content">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Thank you for your purchase</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 h3">
                    <p>
                        Your product is ready for download.
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <form method="post" action="/download.php">
                                <input type="hidden" name="dl" value="app"/>
                                <button class="btn btn-success"><i class="fa fa-download"></i>
                                    Download
                                </button>
                            </form>

                        </div>
                        <div class="col-sm-6">
                            <form method="post" action="/download.php">
                                <input type="hidden" name="dl" value="guide"/>
                                <button class="btn btn-warning"><i class="fa fa-file-pdf-o"></i>
                                    Installation guide
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr/>
                    <p> If you have any questions, please send us an email at contact@amdtllc.com or open at ticket at
                        our <a target="_blank" href="https://amdtllc.com/support">Support Center</a>.</p>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <section id="layout-content">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-danger">Error!</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 h3">
                    <p> We were unable to process your order or you accessed this page directly.</p>
                    <br/>

                    <p> If you feel this is an error, please send us an email at contact@amdtllc.com or open at ticket
                        at
                        our <a target="_blank" href="https://amdtllc.com/support">Support Center</a>.</p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php include "footer.php"; ?>