<div class="content flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.includes.alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<?php /**PATH E:\BasketBall\backend\resources\views/admin/includes/content.blade.php ENDPATH**/ ?>