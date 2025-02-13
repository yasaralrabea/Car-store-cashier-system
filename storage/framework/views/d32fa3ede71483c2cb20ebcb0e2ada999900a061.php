<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض العملاء</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/cus.css')); ?>">
</head>
<body>
    <h1>قائمة العملاء</h1>

    <!-- التحقق مما إذا كانت هناك بيانات للعملاء -->
    <?php if($clients->isEmpty()): ?>
        <p>لا يوجد عملاء لعرضهم.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>رقم الهاتف</th>
                    <th>حالة الدفع</th> <!-- إضافة عمود لحالة الدفع -->
                    <th>المبلغ المؤجل</th> <!-- إضافة عمود للمبلغ المؤجل -->
                </tr>
            </thead>
            <tbody>
                <!-- تكرار العناصر (العملاء) في الجدول -->
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($client->name); ?></td>
                        <td><?php echo e($client->phone); ?></td>

                        <!-- عرض حالة الدفع والمبلغ المؤجل إذا كانا موجودين في الفواتير -->
                        <td>
                            <?php $__currentLoopData = $client->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($invoice->payment_status); ?><br> <!-- عرض حالة الدفع -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>

                        <td>
                            <?php $__currentLoopData = $client->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($invoice->Deferred); ?>.jd <br> <!-- عرض المبلغ المؤجل -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/customers.blade.php ENDPATH**/ ?>