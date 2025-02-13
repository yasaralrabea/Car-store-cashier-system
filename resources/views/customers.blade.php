<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض العملاء</title>
    <link rel="stylesheet" href="{{ asset('css/cus.css') }}">
</head>
<body>
    <h1>قائمة العملاء</h1>

    <!-- التحقق مما إذا كانت هناك بيانات للعملاء -->
    @if($clients->isEmpty())
        <p>لا يوجد عملاء لعرضهم.</p>
    @else
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
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>

                        <!-- عرض حالة الدفع والمبلغ المؤجل إذا كانا موجودين في الفواتير -->
                        <td>
                            @foreach($client->invoices as $invoice)
                                {{ $invoice->payment_status }}<br> <!-- عرض حالة الدفع -->
                            @endforeach
                        </td>

                        <td>
                            @foreach($client->invoices as $invoice)
                                {{ $invoice->Deferred }}.jd <br> <!-- عرض المبلغ المؤجل -->
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
