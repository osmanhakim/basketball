<?php if(Session::has('error')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "<?php echo e(app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right'); ?>",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.error("<?php echo e(Session::get('error')); ?>");
    </script>
<?php endif; ?>


<?php /**PATH E:\BasketBall\backend\resources\views/admin/includes/alerts/errors.blade.php ENDPATH**/ ?>