<?php if($name && $value && $role): ?>
<?php if(auth('admin')->user()->hasPermission('reply-' . $role)): ?>
<a href="<?php echo e(route($name . '.reply', $value->id)); ?>" class="btn btn-sm btn-clean btn-icon m-1"
    title="<?php echo e(__('words.reply')); ?>">
    <span class="svg-icon svg-icon-primary svg-icon-2x">
        <i class="fas fa-reply"></i>
    </span>
</a>
<?php endif; ?>

<?php if(auth('admin')->user()->hasPermission('read-' . $role)): ?>
<a href="<?php echo e(route($name . '.show', $value->id)); ?>" class="btn btn-sm btn-clean btn-icon m-1"
    title="<?php echo e(__('words.show')); ?>">
    <span class="svg-icon svg-icon-primary svg-icon-2x">
        <i class="fa fa-eye"></i>
    </span>
</a>
<?php endif; ?>

<?php if(auth('admin')->user()->hasPermission('update-' . $role)): ?>
<a href="<?php echo e(route($name . '.edit', $value->id)); ?>" class="btn btn-sm btn-clean btn-icon m-1"
    title="<?php echo e(__('words.edit')); ?>">
    <span class="svg-icon svg-icon-md svg-icon-primary">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
        <i class="fa fa-edit"></i>
        <!--end::Svg Icon-->
    </span>
</a>

<?php endif; ?>

<?php if(auth('admin')->user()->hasPermission('resend-' . $role)): ?>
<a href="<?php echo e(route($name . '.edit', $value->id)); ?>" class="btn btn-sm btn-clean btn-icon m-1"
    title="<?php echo e(__('words.resend')); ?>">
    <span class="svg-icon svg-icon-md svg-icon-primary">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
        <i class="fas fa-sync-alt"></i>
        <!--end::Svg Icon-->
    </span>
</a>

<?php endif; ?>


<?php if(auth('admin')->user()->hasPermission('delete-' . $role) ||
auth('admin')->user()->hasPermission('delete_subscribed_users-' . $role)): ?>
<form id="delete-form-<?php echo e($value->id); ?>" style="display: inline-table;"
    action="<?php echo e(route($name . '.destroy', $value->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>

    <button type="button" class="btn btn-sm btn-clean btn-icon m-1" title="<?php echo e(__('words.delete')); ?>" data-toggle="modal"
        data-target="#deleteModalSizeSm-<?php echo e($value->id); ?>">
        <span class="svg-icon svg-icon-md svg-icon-primary">
            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
            <i class="fa fa-trash"></i>
        </span>
    </button>
    <div class="modal fade" id="deleteModalSizeSm-<?php echo e($value->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo e(__('words.delete_confirm')); ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> <?php echo e(__('message.delete_message')); ?> <b class="">
                        <?php if($value->name): ?>
                        <?php echo e($value->name); ?>

                        <?php elseif($value->description): ?>
                        <?php echo $value->description; ?>

                        <?php else: ?>
                        <?php echo e($value->email); ?>

                        <?php endif; ?>
                    </b></div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary"
                        data-dismiss="modal"><?php echo e(__('words.cancel')); ?></button>
                    <button type="submit" class="btn gray btn-outline-danger"><?php echo e(__('words.delete')); ?></button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php endif; ?>
<?php endif; ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/components/form-controls.blade.php ENDPATH**/ ?>