

<?php $__env->startSection('breadcrumb'); ?>
    <?php echo $__env->make('admin.includes.breadcrumb', ['first_title' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <h1><?php echo e(settings()->website_title); ?></h1>
            </div>
        </div>

        <div class="row">
            
            
            

            <?php if (app('laratrust')->isAbleTo('read-admins')) : ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                        <div class="card-body">
                            <i class="flaticon-users fa-3x"></i>
                            <span
                                class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block"><?php echo e(\App\Models\Admin::count()); ?></span>
                            <span class="font-weight-bold font-size-sm"><a
                                    href="<?php echo e(route('admin-users.index')); ?>"><?php echo e(__('words.admins')); ?></a></span>
                        </div>
                    </div>
                </div>
            <?php endif; // app('laratrust')->permission ?>

            

            <?php if (app('laratrust')->isAbleTo('read-services')) : ?>
                <div class="col-xl-4">
                    <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                        <div class="card-body">
                            <i class="fab fa-servicestack fa-3x"></i>
                            <span
                                class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block"><?php echo e(\App\Models\Service::count()); ?></span>
                            <span class="font-weight-bold font-size-sm"><a
                                    href="<?php echo e(route('services.index')); ?>"><?php echo e(__('words.services')); ?></a></span>
                        </div>
                    </div>
                </div>
            <?php endif; // app('laratrust')->permission ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/home.blade.php ENDPATH**/ ?>