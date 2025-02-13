<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض العملاء</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/cus.css')); ?>">

</head>
<body>
    <h1>قائمة مستحقات العملاء </h1>

    <!-- التحقق مما إذا كانت هناك بيانات للعملاء -->
    <?php if($invoces->isEmpty()): ?>
        <p>لا يوجد عملاء لعرضهم.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>معرف العميل</th>
                    <th>الحالة </th>
                    <th>نظام الدفع </th>
                    <th>المبلغ المستحق </th>

                    
                    <!-- إضافة المزيد من الأعمدة حسب البيانات المتاحة -->
                </tr>
            </thead>
            <tbody>
                <!-- تكرار العناصر (العملاء) في الجدول -->
                <?php $__currentLoopData = $invoces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($invoce->client_id); ?></td>
                        <td><?php echo e($invoce->payment_status); ?></td>
                        <td><?php echo e($invoce->payment_system); ?></td>
                         <td><?php echo e($invoce->Deferred); ?></td>

                        <!-- إضافة المزيد من الأعمدة حسب البيانات المتاحة -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/customers_d.blade.php ENDPATH**/ ?>