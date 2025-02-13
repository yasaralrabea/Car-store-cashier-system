<div>
    <h3>الفواتير الشهر الماضي</h3>
    <ul>
        <?php $__currentLoopData = $get_invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $amount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($amount); ?>jd.</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/last_month.blade.php ENDPATH**/ ?>