<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض السيارات</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/car.css')); ?>">
    <!-- إضافة رابط لمكتبة FontAwesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>قائمة السيارات</h1>

        <!-- رسالة النجاح إذا كانت موجودة -->
        <?php if(session('success')): ?>
            <div class="alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- إضافة زر للقائمة الرئيسية -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="<?php echo e(route('home')); ?>" class="btn-home">
                <i class="fas fa-home"></i> العودة إلى الصفحة الرئيسية
            </a>
        </div>

        <!-- زر لإضافة سيارة جديدة مع أيقونة داخل الزر -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="<?php echo e(route('new.add')); ?>" class="btn-add">
                <i class="fas fa-car"></i> إضافة سيارة جديدة
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>الموديل</th>
                    <th>الكود</th>
                    <th>اللون</th>
                    <th>السعر</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($car->name); ?></td>
                        <td><?php echo e($car->model); ?></td>
                        <td><?php echo e($car->code); ?></td>
                        <td><?php echo e($car->color); ?></td>
                        <td><?php echo e($car->price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/car.blade.php ENDPATH**/ ?>