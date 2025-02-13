<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>برنامج فوترة - معرض السيارات</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/reports.css')); ?>">
  <!-- إضافة رابط لمكتبة FontAwesome للأيقونات -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <header>
    <h1> التقارير المالية</h1>
    <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
    <?php echo csrf_field(); ?>
    <button type="submit" class="header-button" id="logout-button">تسجيل الخروج</button>
</form>

  </header>

  <div class="container">
    <!-- روابط إلى الصفحات المختلفة مع أيقونات -->
    <a href="<?php echo e(route('bills')); ?>" class="box">
      <i class="fas fa-file-invoice"></i>
      <h2>سجل الفواتير </h2>
    </a>

     <!-- روابط إلى الصفحات المختلفة مع أيقونات -->
     <a href="<?php echo e(route('profits')); ?>" class="box">
      <i class="fas fa-file-invoice"></i>
      <h2> الأرباح </h2>
    </a>
    

  <script src="script.js"></script>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/reports.blade.php ENDPATH**/ ?>