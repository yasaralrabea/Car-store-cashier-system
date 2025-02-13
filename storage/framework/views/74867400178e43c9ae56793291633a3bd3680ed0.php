<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العائدات الأسبوعية</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/last_week.css')); ?>">
</head>
<body>

<div class="container mt-5">
    <h2>العائدات الأسبوعية</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>السعر</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $totalRevenue = 0;
            ?>
            <?php $__currentLoopData = $get_invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e(number_format($price, 2)); ?> ريال</td>
                    <?php
                        $totalRevenue += $price;
                    ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <td><strong>المجموع</strong></td>
                <td><strong><?php echo e(number_format($totalRevenue, 2)); ?> ريال</strong></td>
            </tr>
        </tfoot>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/last_week.blade.php ENDPATH**/ ?>