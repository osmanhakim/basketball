<div class="d-flex align-items-baseline flex-wrap mr-5">
    <!--begin::Page Title-->
    <h5 class="text-dark font-weight-bold my-1 mr-5"><a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a></h5>
    <!--end::Page Title-->
    <!--begin::Breadcrumb-->
    <?php if($first_title != ''): ?>
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route($first_route)); ?>" class="text-muted"><?php echo e($first_title); ?></a>
        </li>
        <?php if($second_title != ''): ?>
        <li class="breadcrumb-item">
            <a href="<?php echo e(route($second_title)); ?>" class="text-muted"><?php echo e($second_title); ?></a>
        </li>
        <?php endif; ?>
    </ul>
    <?php endif; ?>
    <!--end::Breadcrumb-->
</div>
<?php /**PATH E:\BasketBall\backend\resources\views/admin/includes/breadcrumb.blade.php ENDPATH**/ ?>