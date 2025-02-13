<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>برنامج فوترة - معرض السيارات</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
  <!-- إضافة رابط لمكتبة FontAwesome للأيقونات -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <header>
    <h1> luxury exhibition</h1>
    <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
    <?php echo csrf_field(); ?>
    <button type="submit" class="header-button" id="logout-button">تسجيل الخروج</button>
</form>

  </header>

  <div class="container">
    <!-- روابط إلى الصفحات المختلفة مع أيقونات -->
    <a href="<?php echo e(route('newbill')); ?>" class="box">
      <i class="fas fa-file-invoice"></i>
      <h2>فاتورة جديدة</h2>
    </a>
    <a href="<?php echo e(route('car')); ?>" class="box">
      <i class="fas fa-car"></i>
      <h2>السيارات</h2>
    </a>

    <a href="<?php echo e(route('bills')); ?>" class="box">
      <i class="fas fa-history"></i>
      <h2>الفواتير السابقة</h2>

      <a href="<?php echo e(route('dues')); ?>" class="box">
      <i class="fas fa-history"></i>
      <h2> المستحقات وأقساط العملاء</h2>
    </a>
    
    <a href="<?php echo e(route('clients')); ?>" class="box">
      <i class="fas fa-users"></i>
      <h2>قائمة العملاء</h2>
    </a>

    
    <a href="<?php echo e(route('update_pass')); ?>" class="box">
      <i class="fas fa-cogs"></i>
      <h2>تحديث كلمة المرور</h2>
    </a>
  </div>

  <script src="script.js"></script>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/home.blade.php ENDPATH**/ ?>