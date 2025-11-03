<?php if($name && $label && $id): ?>
    <div class="col-md-4 col-sm-12">
        <div class="form-group">
            <label class="d-block">
                <?php echo e($label); ?>

                <?php if($required): ?>
                    <span class="text-danger">*</span>
                <?php endif; ?>
            </label>
            <div class="image-input-wrapper" style="background-image: url(<?php echo e($value); ?>)">
            </div>
            <div class="image-input image-input-empty image-input-outline" id="<?php echo e($id); ?>"
                style="background-image: url(<?php echo e($value); ?>)">
                <div class="image-input-wrapper"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="<?php echo e($name); ?>" accept="image/*" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>
        <?php if(isset($deleteImage)): ?>
            <?php echo $__env->make('admin.components.deleteImage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH E:\BasketBall\backend\resources\views/admin/components/image.blade.php ENDPATH**/ ?>