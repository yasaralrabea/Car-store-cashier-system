<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إضافة فاتورة - معرض السيارات</title>
  <link rel="stylesheet" href="{{ asset('css/newbill.css') }}">
  <!-- إضافة مكتبة FontAwesome (إذا أردت استخدام أيقونات) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- تحميل مكتبة jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <header>
    <!-- رابط للصفحة الرئيسية مع أيقونة -->
    <a href="{{ url('/') }}" class="home-icon">
      <i class="fas fa-home"></i> <!-- أيقونة الصفحة الرئيسية -->
    </a>
    <h1>إضافة فاتورة جديدة</h1>
  </header>

  <div class="container">
    <form action="{{ route('new.store') }}" method="POST">
      @csrf <!-- لحماية من الهجمات Cross-Site Request Forgery -->
      
      <div class="form-group">
        <label for="client_name">اسم العميل</label>
        <input type="text" id="client_name" name="client_name" required>
      </div>

      <div class="form-group">
        <label for="phone">رقم هاتف العميل</label>
        <input type="number" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="car_code">كود السيارة</label>
        <input type="text" id="car_code" name="car_code" required>
      </div>

      <div class="form-group">
        <label for="car_name">اسم السيارة</label>
        <input type="text" id="car_name" name="car_name" readonly> <!-- حقل لعرض اسم السيارة -->
      </div>

      <div class="form-group">
        <label for="car_price">سعر السيارة</label>
        <input type="text" id="car_price" name="car_price" readonly> <!-- حقل لعرض سعر السيارة -->
      </div>


      <div class="form-group">
        <label for="invoice_date">التاريخ</label>
        <input type="date" id="invoice_date" name="invoice_date" required>
      </div>

      <div class="form-group">
        <label for="amount_received">المقبوض</label>
        <input type="number" id="amount_received" name="amount_received" step="0.01" required>
      </div>

      <div class="form-group">
        <label for="amount_returned">المسترجع</label>
        <input type="number" id="amount_returned" name="amount_returned" step="0.01">
      </div>
      
      <div class="form-group">
        <label for="Deferred">المبلغ المؤجل </label>
        <input type="number" id="Deferred" name="Deferred" step="0.01">
      </div>

      <div class="form-group">
        <label for="payment_system">نظام الدفع</label>
        <select id="payment_system" name="payment_system" required>
          <option value="بنك">بنك</option>
          <option value="كاش">كاش</option>
          <option value="اقساط">اقساط</option>
        </select>
      </div>

      <div class="form-group">
        <label for="payment_status">حالة الدفع</label>
        <select id="payment_status" name="payment_status" required>
          <option value="مكتمل">مكتمل</option>
          <option value="غير مكتمل">غير مكتمل</option>
        </select>
      </div>

      <div class="form-group">
        <label for="payment_method">طريقة الدفع</label>
        <select id="payment_method" name="payment_method" required>
          <option value="فيزا">فيزا</option>
          <option value="كاش">كاش</option>
          <option value="شيك">شيك</option>
        </select>
      </div>

      <button type="submit">إضافة الفاتورة</button>
    </form>
  </div>

  <!-- كود AJAX الذي يملأ اسم السيارة وسعرها عند إدخال كود السيارة -->
  <script>
    $(document).ready(function() {
      // عندما يفقد الحقل التركيز (blur) بعد كتابة كود السيارة
      $('#car_code').on('blur', function() {
        var carCode = $(this).val(); // الحصول على كود السيارة المدخل
        
        // إذا كان هناك كود سيارة
        if (carCode) {
          // إرسال طلب AJAX إلى السيرفر
          $.ajax({
            url: '{{ route('getCarDetails') }}', // الرابط الذي يوجه إلى الدالة في الـ Controller
            type: 'GET', // نوع الطلب GET لأننا فقط نطلب بيانات
            data: { code: carCode }, // إرسال كود السيارة
            success: function(response) {
              // إذا تم العثور على السيارة، عرض البيانات في الحقول
              $('#car_name').val(response.name); // عرض اسم السيارة
              $('#car_price').val(response.price); // عرض سعر السيارة
            },
            error: function(response) {
              // إذا لم يتم العثور على السيارة، عرض رسالة خطأ
              $('#car_name').val('');
              $('#car_price').val('');
              alert('السيارة غير موجودة');
            }
          });
        }
      });
    });
  </script>

</body>
</html>
