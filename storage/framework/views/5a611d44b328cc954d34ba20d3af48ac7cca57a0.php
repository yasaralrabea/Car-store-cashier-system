<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>العائدات والأرباح </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/profits.css')); ?>">
</head>
<body>

    <!-- جعل header يعمل كزر للعودة إلى الصفحة الرئيسية (الروت) -->
    <header onclick="goHome()">القائمة الرئيسية</header>

    <div class="container">
        <h1>العائدات</h1>
        <div class="buttons">
            <a href="weekly" class="button">العائدات الأسبوعية</a>
            <a href="monthly" class="button">العائدات الشهرية</a>
            <a href="yearly" class="button">العائدات السنوية</a>
        </div>
    </div>

    <script>
        // دالة لإعادة توجيه المستخدم إلى الصفحة الرئيسية (الروت)
        function goHome() {
            window.location.href = '/';  // إعادة توجيه إلى الجذر أو الصفحة الرئيسية
        }
    </script>

</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\car_sealer\resources\views/profits.blade.php ENDPATH**/ ?>