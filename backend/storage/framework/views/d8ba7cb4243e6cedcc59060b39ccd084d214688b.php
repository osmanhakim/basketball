<?php if($name || $label): ?>
<div class="col-md-6 col-sm-12 input">
    <label for="<?php echo e($name); ?>">
        <?php echo e($label); ?>

        <?php if($required): ?>
        <span class="text-danger">*</span>
        <?php endif; ?>
    </label>
    <span class="switch switch-icon">
        <label>
            
            <input type="hidden" name="<?php echo e($name); ?>" value="0" />

            
            <input type="checkbox" id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" value="1"
                <?php echo e(old($name, $val) ? 'checked' : ''); ?> />
            <span></span>
        </label>
    </span>
</div>
<?php endif; ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/components/editRadio.blade.php ENDPATH**/ ?>