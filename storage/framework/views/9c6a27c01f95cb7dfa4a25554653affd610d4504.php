<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الفواتير</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bills.css')); ?>"> <!-- رابط ملف CSS الخارجي -->
</head>
<body>
    <h1>قائمة الفواتير</h1>

    <?php if($invoices->isEmpty()): ?>
        <p>لا توجد بيانات لعرضها.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>رقم الفاتورة</th>
                    <th>معرف العميل</th>
                    <th>كود السيارة</th>
                    <th>السعر</th>
                    <th>التاريخ</th>
                    <th>المبلغ المستلم</th>
                    <th>المبلغ المعاد</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($invoice->id); ?></td>
                        <td><?php echo e($invoice->client_id); ?></td>
                        <td><?php echo e($invoice->car_code); ?></td>
                        <td><?php echo e(number_format($invoice->price, 2)); ?> jd</td>
                        <td><?php echo e(\Carbon\Carbon::parse($invoice->date)->format('d/m/Y')); ?></td>
                        <td><?php echo e(number_format($invoice->amount_received, 2)); ?> jd</td>
                        <td><?php echo e(number_format($invoice->amount_returned, 2)); ?> jd</td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/bills.blade.php ENDPATH**/ ?>