<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض السيارات</title>
    <link rel="stylesheet" href="{{ asset('css/car.css') }}">
    <!-- إضافة رابط لمكتبة FontAwesome للأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>قائمة السيارات</h1>

        <!-- رسالة النجاح إذا كانت موجودة -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- إضافة زر للقائمة الرئيسية -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ route('home') }}" class="btn-home">
                <i class="fas fa-home"></i> العودة إلى الصفحة الرئيسية
            </a>
        </div>

        <!-- زر لإضافة سيارة جديدة مع أيقونة داخل الزر -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ route('new.add') }}" class="btn-add">
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
                @foreach($cars as $car)
                    <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->code }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
