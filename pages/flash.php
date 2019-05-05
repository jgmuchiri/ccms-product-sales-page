<script src="/js/bootstrap-notify.js"></script>

<script>
    function notice(errorNote, type) {
        if (type == "error") {
            type = 'danger';
        }
        $.notify({
            icon: 'ti-check',
            message: errorNote

        }, {
            type: type,
            timer: 4000
        });
    }
</script>
<?php if (isset($_SESSION['msg']) && $_SESSION['msg'] !== ""): ?>
    <script type="text/javascript">
        notice('<?php echo $_SESSION['msg']; ?>', '<?php echo $_SESSION['type']; ?>')
    </script>
<?php endif;
//clear session
$_SESSION['msg']="";
$_SESSION['type']="";
?>

