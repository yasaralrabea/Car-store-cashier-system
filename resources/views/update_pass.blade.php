<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحديث كلمة المرور</title>
    
    <!-- ربط ملف CSS باستخدام asset -->
    <link rel="stylesheet" href="{{ asset('css/update_pass.css') }}">
</head>
<body>

<div class="container">
    <h2>تحديث كلمة المرور</h2>

    <form method="POST" action="{{ route('pass.store') }}">
        @csrf

        <!-- حقل كلمة المرور القديمة -->
        <div class="form-group">
            <label for="current_password">كلمة المرور الحالية</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
            @error('current_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- حقل كلمة المرور الجديدة -->
        <div class="form-group">
            <label for="new_password">كلمة المرور الجديدة</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
            @error('new_password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- حقل تأكيد كلمة المرور الجديدة -->
        <div class="form-group">
            <label for="new_password_confirmation">تأكيد كلمة المرور الجديدة</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
            @error('new_password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">تحديث كلمة المرور</button>
    </form>
</div>

</body>
</html>
