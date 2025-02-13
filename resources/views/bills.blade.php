<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الفواتير</title>
    <link rel="stylesheet" href="{{ asset('css/bills.css') }}"> <!-- رابط ملف CSS الخارجي -->
</head>
<body>
    <h1>قائمة الفواتير</h1>

    @if ($invoices->isEmpty())
        <p>لا توجد بيانات لعرضها.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>رقم الفاتورة</th>
                    <th>معرف العميل</th>
                    <th>كود السيارة</th>
                    <th>السعر</th>
                    <th>التاريخ</th>
                    <th>المبلغ المستلم</th>
                    <th>المبلغ المعاد</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->client_id }}</td>
                        <td>{{ $invoice->car_code }}</td>
                        <td>{{ number_format($invoice->price, 2) }} jd</td>
                        <td>{{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y') }}</td>
                        <td>{{ number_format($invoice->amount_received, 2) }} jd</td>
                        <td>{{ number_format($invoice->amount_returned, 2) }} jd</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
