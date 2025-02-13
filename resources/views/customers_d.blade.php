<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض العملاء</title>
    <link rel="stylesheet" href="{{ asset('css/cus.css') }}">

</head>
<body>
    <h1>قائمة مستحقات العملاء </h1>

    <!-- التحقق مما إذا كانت هناك بيانات للعملاء -->
    @if($invoces->isEmpty())
        <p>لا يوجد عملاء لعرضهم.</p>
    @else
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
                @foreach($invoces as $invoce)
                    <tr>
                        <td>{{ $invoce->client_id }}</td>
                        <td>{{ $invoce->payment_status }}</td>
                        <td>{{ $invoce->payment_system }}</td>
                         <td>{{ $invoce->Deferred }}</td>

                        <!-- إضافة المزيد من الأعمدة حسب البيانات المتاحة -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>
