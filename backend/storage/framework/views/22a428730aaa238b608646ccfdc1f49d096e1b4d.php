
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<?php echo $__env->make('admin.includes.theme.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Error-->
            <div class="error error-4 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url(<?php echo e(asset('dashboard/media/error/bg2.jpg')); ?>);">
                <!--begin::Content-->
                <div class="d-flex flex-row-fluid flex-column justify-content-end align-items-center text-center text-white pb-40">
                    <h1 class="display-1 font-weight-bold"><?php echo e(__('words.OOPS!')); ?></h1>
                    <span class="display-4 font-weight-boldest mb-8"><?php echo e(__('words.something_went_wrong_here')); ?></span>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Error-->
        </div>
		<!--end::Main-->
        <?php echo $__env->make('admin.includes.theme.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</body>
	<!--end::Body-->
</html>
<?php /**PATH E:\BasketBall\backend\resources\views/errors/404.blade.php ENDPATH**/ ?>