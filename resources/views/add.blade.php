<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة سيارة جديدة</title>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">
</head>
<body>
    <div class="container">
        <h1>إضافة سيارة جديدة</h1>

        <!-- عرض رسائل الخطأ -->
        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- فورم إضافة السيارة -->
        <form action="{{ route('new.adden') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">اسم السيارة:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="model">الموديل:</label>
                <input type="text" id="model" name="model" value="{{ old('model') }}" required>
            </div>

            <div class="form-group">
                <label for="code">الكود:</label>
                <input type="number" id="code" name="code" value="{{ old('code') }}" required>
            </div>

            <div class="form-group">
                <label for="color">اللون:</label>
                <input type="text" id="color" name="color" value="{{ old('color') }}" required>
            </div>
            <div class="form-group">
                <label for="price">سعر السيارة:</label>
                <input type="text" id="price" name="price" value="{{ old('price') }}" required>
            </div>
           

            <button type="submit">إضافة السيارة</button>
        </form>
    </div>
</body>
</html>
