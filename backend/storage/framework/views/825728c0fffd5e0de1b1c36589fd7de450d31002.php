<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-custom alert-danger" role="alert">
            <div class="alert-text">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="d-flex align-items-center">
                            <div class="alert-icon" style="padding-inline-end: 5px">
                                <i style="font-size: 14px" class="flaticon-warning"></i>
                            </div> <?php echo e($error); ?>

                        </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>

<form action="<?php echo $__env->yieldContent('form_action'); ?>" method="<?php echo $__env->yieldContent('form_type'); ?>" autocomplete="off"
      enctype="multipart/form-data" id="form">
    <div class="card-body">
        <?php echo csrf_field(); ?>
        <?php echo $__env->yieldContent('form_content'); ?>
    </div>

</form>

<?php $__env->stopSection(); ?>


<?php /**PATH E:\BasketBall\backend\resources\views/admin/components/create-form.blade.php ENDPATH**/ ?>