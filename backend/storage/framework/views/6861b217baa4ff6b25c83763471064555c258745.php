<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title><?php echo e(settings()->website_title); ?></title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />

    <!--end::Fonts-->
    <?php if(App::isLocale('ar')): ?>

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?php echo e(asset('dashboard/css/pages/login/classic/login-5.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo e(asset('dashboard/plugins/global/plugins.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/plugins/custom/prismjs/prismjs.bundle.rtl.css')); ?>" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/style.bundle.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?php echo e(asset('dashboard/css/themes/layout/header/base/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/header/menu/light.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/brand/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/aside/dark.rtl.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <?php else: ?>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?php echo e(asset('dashboard/css/pages/login/classic/login-5.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo e(asset('dashboard/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?php echo e(asset('dashboard/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('dashboard/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <?php endif; ?>

    <link rel="shortcut icon" href="<?php echo e(settings()->logo); ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="<?php echo e(asset('dashboard/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body dir="<?php echo e((App::isLocale('ar') ? 'rtl' : 'ltr')); ?>" id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?php echo $__env->make('admin.includes.alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.includes.alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url(<?php echo e(asset('dashboard/media/bg/bg-2.jpg')); ?>);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="<?php echo e(settings()->logo); ?>" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->


                    <!--begin::Login Sign in form-->
                    <div class="n">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal"><?php echo e(__('words.sign_in_to_admin')); ?></h3>
                            <p class="opacity-40"><?php echo e(__('words.sign_in_desc')); ?></p>
                        </div>
                        <form class="form" action="<?php echo e(route('authenticate')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="text" placeholder="<?php echo e(__('words.email')); ?>" name="email" autocomplete="off" />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    type="password" placeholder="<?php echo e(__('words.password')); ?>" name="password" />
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div
                                class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                                        <input type="checkbox" name="remember_me" />
                                        <span></span><?php echo e(__('words.remember_me')); ?></label>
                                </div>
                            </div>
                            <div class="form-group text-center mt-10">
                                <button type="submit"
                                    class="btn btn-pill btn-primary opacity-90 px-15 py-3"><?php echo e(__('words.sign_in')); ?></button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->
                    <div class="">
                        <div class="mb-20">
                            <p class="opacity-40"><?php echo e(__('words.choose_lang')); ?>

                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="text-warning <?php echo e(LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : ''); ?>"
                                    rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <span class="symbol symbol-30"> <?php echo e($properties['native']); ?>

                                    </span>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <?php echo $__env->make('admin.includes.theme.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<!--end::Body-->

</html><?php /**PATH E:\BasketBall\backend\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>