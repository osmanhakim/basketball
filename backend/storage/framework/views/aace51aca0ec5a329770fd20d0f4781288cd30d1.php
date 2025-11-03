<?php if($label && $value): ?>
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>
                <?php echo e($label); ?>

                <?php if($required): ?>
                    <span class="text-danger"> * </span>
                <?php endif; ?>
            </label>
            <div class="get-and-preview d-flex align-items-center">
                <div class="icon-preview"
                    style="
                        float: left;
                        width: 55px;
                        height: 55px;
                        border-radius: 5px;
                        background: #fff;
                        text-align: center;
                        font-size: 30px;
                        line-height: 65px;
                        color: #1e1e1e;"
                    data-toggle="tooltip" title="Preview of selected Icon">
                    <i id="IconPreview" style="font-size: 40px;" class="<?php echo e($value); ?>"></i>
                </div>

                <button type="button" class="btn btn-warning ml-5" id="GetIconPicker"
                    data-iconpicker-input="input#IconInput"
                    data-iconpicker-preview="i#IconPreview"><?php echo e(__('words.select_icon')); ?></button>
                <input type="text" class="form-control iconpicker" id="IconInput" name="icon"
                    value="<?php echo e($value); ?>" hidden>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        // Default options
        IconPicker.Init({
            // Required: You have to set the path of IconPicker JSON file to "jsonUrl" option. e.g. '/content/plugins/IconPicker/dist/iconpicker-1.5.0.json'
            jsonUrl: "<?php echo e(asset('dashboard/js/iconpicker-1.5.0.json')); ?>", // Optional: Change the buttons or search placeholder text according to the language.
            searchPlaceholder: 'Search Icon',
            showAllButton: "<?php echo e(__('words.show_all')); ?>",
            cancelButton: "<?php echo e(__('words.cancel')); ?>",
            noResultsFound: "<?php echo e(__('message.no_result')); ?>", // v1.5.0 and the next versionsborderRadius: '20px', // v1.5.0 and the next versions
        });
        IconPicker.Run('#GetIconPicker');
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH E:\BasketBall\backend\resources\views/admin/components/icon.blade.php ENDPATH**/ ?>