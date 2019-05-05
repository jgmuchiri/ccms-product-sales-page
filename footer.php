<!-- Footer -->
<footer id="layout-footer">
    <div id="footer">
        <div class="container">
            <hr/>
            <p class="muted credit">&copy; <?php echo date('Y'); ?> <a href="http://amdtllc.com" target="_blank">
                    A&M Digital Technologies</a>
                |
                <a href="#" target="_blank">Privacy Policy</a> |
                <a href="#" target="_blank">Terms of Use</a> |
                <a href="#" target="_blank">Refund Policy</a>

            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>

<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/global.js"></script>

<?php include 'pages/flash.php';?>

<script>
    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
        w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
            m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://amdtllc.com/marketing/mtc.js','mt');

    mt('send', 'pageview');
</script>
</body>
</html>