<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة سيارة جديدة</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/add.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>إضافة سيارة جديدة</h1>

        <!-- عرض رسائل الخطأ -->
        <?php if($errors->any()): ?>
            <div class="alert-error">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- فورم إضافة السيارة -->
        <form action="<?php echo e(route('new.adden')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">اسم السيارة:</label>
                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
            </div>

            <div class="form-group">
                <label for="model">الموديل:</label>
                <input type="text" id="model" name="model" value="<?php echo e(old('model')); ?>" required>
            </div>

            <div class="form-group">
                <label for="code">الكود:</label>
                <input type="number" id="code" name="code" value="<?php echo e(old('code')); ?>" required>
            </div>

            <div class="form-group">
                <label for="color">اللون:</label>
                <input type="text" id="color" name="color" value="<?php echo e(old('color')); ?>" required>
            </div>
            <div class="form-group">
                <label for="price">سعر السيارة:</label>
                <input type="text" id="price" name="price" value="<?php echo e(old('price')); ?>" required>
            </div>
           

            <button type="submit">إضافة السيارة</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/add.blade.php ENDPATH**/ ?>