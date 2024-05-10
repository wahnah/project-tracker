<?php if(auth()->guard()->check()): ?>
    <div class="mr-2">
        <?php if(isset(Auth::user()->photo)): ?>
            <img class="w-10 h-10 rounded-full object-cover"
                 src="<?php echo e(asset('/storage/' . Auth::user()->photo)); ?>">
        <?php else: ?>
            <?php echo Avatar::create(Auth::user()->name)->toSvg(); ?>

        <?php endif; ?>
    </div>
<?php endif; ?><?php /**PATH C:\Users\Christopher Malambo\Desktop\projects-tracker project\projects-tracker\resources\views\components\avatar.blade.php ENDPATH**/ ?>