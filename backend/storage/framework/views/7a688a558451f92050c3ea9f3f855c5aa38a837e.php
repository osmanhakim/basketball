
<?php $__env->startSection('title', settings()->website_title . ' | ' . __('words.services')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo e(__('words.services')); ?></h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted"><?php echo e(__('words.show_services')); ?></span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-title"><?php echo e(__('words.show_services')); ?></h3>
            </div>

            <div class="card-toolbar">
                <!--begin::Dropdown-->

                <div class="dropdown dropdown-inline mr-2">
                    <!--begin::Button-->
                    <?php if (app('laratrust')->isAbleTo('create-services')) : ?>
                    <a href="<?php echo e(route('services.create')); ?>" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <circle fill="#000000" cx="9" cy="15" r="6"/>
                                        <path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span><?php echo e(__('words.add_new_record')); ?></a>
                    <!--end::Button-->
                    <?php endif; // app('laratrust')->permission ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="custom_datatable">
                <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(__('words.image')); ?></th>
                    <th><?php echo e(__('words.title')); ?></th>
                    <th><?php echo e(__('words.short_description')); ?></th>
                    <th><?php echo e(__('words.status')); ?></th>
                    <th><?php echo e(__('words.created_at')); ?></th>
                    <th><?php echo e(__('words.updated_at')); ?></th>
                    <th><?php echo e(__('words.actions')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td><?php echo e($key + 1); ?></td>
                        <td>
                            <?php if(!$service->image): ?>
                                <a href="<?php echo e(asset('uploads/default_image.png')); ?>"
                                   data-toggle="lightbox" data-title="<?php echo e($service->title); ?>"
                                   data-gallery="gallery">
                                    <img class="index_image" src="<?php echo e(asset('uploads/default_image.png')); ?>"
                                         onerror="this.src='<?php echo e(asset('uploads/default_image.png')); ?>'"
                                         alt="default-image">
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e($service->image); ?>"
                                   data-toggle="lightbox" data-title="<?php echo e($service->title); ?>"
                                   data-gallery="gallery">
                                    <img class="index_image" src="<?php echo e($service->image); ?>"
                                         onerror="this.src='<?php echo e(asset('uploads/default_image.png')); ?>'"
                                         alt="service-image">
                                </a>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($service->title); ?></td>
                        <td><?php echo $service->short_description; ?></td>
                        <td><span
                                class="badge rounded-pill text-white <?php echo e($service->status == 1 ? 'bg-success' : 'bg-danger'); ?>"><?php echo e($service->getActive()); ?></span>
                        </td>
                        <td><?php echo e(formatDate($service->created_at)); ?></td>
                        <td><?php echo e(formatDate($service->created_at) == formatDate($service->updated_at) ? '--' : formatDate($service->updated_at)); ?>

                        </td>
                        <td nowrap="nowrap">
                            <?php echo $__env->make('admin.components.form-controls', [
                                'name' => 'services',
                                'value' => $service,
                                'role' => 'services',
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/services/index.blade.php ENDPATH**/ ?>