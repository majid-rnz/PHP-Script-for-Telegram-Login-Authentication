<h2>Project Description</h2>
This repository contains a simple PHP script that implements user authentication via the Telegram Login Widget. It allows users to log in to your website using their Telegram account.

<h2>Project Structure</h2>

File: `index.php`

This file serves as the frontend for displaying the "Login with Telegram" button. It uses the Telegram Login Widget provided by Telegram.

`data-telegram-login`: The username of your Telegram bot (replace with `YOUR_BOT_USERNAME`).
`data-auth-url`: The URL where user data is sent for authentication (`callback.php` in this example).
`data-request-access`: Specifies additional access permissions requested from the user (e.g., "write").

File: `callback.php`

This file handles the user data sent by Telegram after login. Authentication is done by verifying the integrity of the data. Here's how it works:

Sorting and Preparing `data_check_string`: Data received from Telegram is sorted alphabetically and prepared as a string.
Hash Calculation Using Bot Token: The bot's secret token is used to calculate a hash.
Comparing Hashes: If the calculated hash does not match the hash sent by Telegram, the request is invalid.
Expiration Check: If the request is older than 24 hours, it is considered expired.
Upon successful authentication, user details are displayed.

<h2>Setup Instructions</h2>
<h3>Create a Telegram Bot:</h3>

Use BotFather on Telegram to create a new bot.
Copy the bot token and username.
<h3>Update the Script:</h3>

Replace `YOUR_BOT_USERNAME` in `index.php` with your bot's username.
Replace `YOUR_BOT_TOKEN` in `callback.php` with your bot's token.

<h3>Set Domain:</h3>
Use the /setdomain command in BotFather to set your bot's domain. This domain must match the base URL where callback.php is hosted (e.g., https://yourdomain.com).

<h2>How It Works</h2>

Upload the files ( `index.php` and `callback.php` ) to your web server.
Users will access `index.php` to log in with Telegram.
Upon successful login, Telegram sends user data to `callback.php`, which verifies the data and displays user information.

<h2>Security Considerations</h2>

Data Validation: This script follows Telegram's recommended approach to validate user authentication data.
Token Security: Keep your bot token secure and never expose it publicly.
SSL: Use HTTPS for secure communication with Telegram.

<h2>License</h2>

This project is licensed under the `MIT License`. See the `LICENSE` file for details.



<h1>Persian Language</h1>

## توضیحات پروژه  
این مخزن شامل یک اسکریپت ساده PHP برای اجرای احراز هویت کاربران با استفاده از **Telegram Login Widget** است. این اسکریپت به کاربران اجازه می‌دهد با حساب تلگرام خود وارد سایت شما شوند.

## ساختار پروژه

### فایل: `index.php`  
این فایل به عنوان رابط کاربری اولیه برای نمایش دکمه "ورود با تلگرام" عمل می‌کند. این صفحه از **Telegram Login Widget** استفاده می‌کند.

- `data-telegram-login`: نام کاربری ربات تلگرام شما (جایگزین کنید با `YOUR_BOT_USERNAME`).  
- `data-auth-url`: آدرس صفحه‌ای که اطلاعات کاربر برای احراز هویت به آن ارسال می‌شود (در اینجا `callback.php`).  
- `data-request-access`: مجوزهای اضافی درخواستی از کاربر (مانند "write").  

### فایل: `callback.php`  
این فایل اطلاعات ارسال شده توسط تلگرام پس از ورود کاربر را مدیریت می‌کند. فرآیند احراز هویت شامل مراحل زیر است:

1. **مرتب‌سازی و آماده‌سازی `data_check_string`**: داده‌های دریافت شده به ترتیب حروف الفبا مرتب شده و یک رشته ساخته می‌شود.  
2. **محاسبه هش با استفاده از توکن ربات**: توکن مخفی ربات برای محاسبه یک هش استفاده می‌شود.  
3. **مقایسه هش‌ها**: اگر هش محاسبه‌شده با هش ارسال‌شده توسط تلگرام مطابقت نداشته باشد، درخواست نامعتبر است.  
4. **بررسی زمان انقضا**: اگر درخواست بیش از 24 ساعت قدیمی باشد، اعتبار آن باطل می‌شود.

در صورت موفقیت‌آمیز بودن احراز هویت، اطلاعات کاربر نمایش داده می‌شود.

---

## دستورالعمل تنظیم  

### ایجاد یک ربات تلگرام  
1. از [BotFather](https://t.me/BotFather) در تلگرام استفاده کنید تا یک ربات جدید ایجاد کنید.  
2. توکن و نام کاربری ربات را کپی کنید.  

### بروزرسانی اسکریپت  
- در `index.php` مقدار `YOUR_BOT_USERNAME` را با نام کاربری ربات خود جایگزین کنید.  
- در `callback.php` مقدار `YOUR_BOT_TOKEN` را با توکن ربات جایگزین کنید.  

### تنظیم دامنه  
با استفاده از دستور `/setdomain` در BotFather دامنه ربات خود را تنظیم کنید. این دامنه باید با آدرس اصلی هاستی که فایل `callback.php` در آن قرار دارد (مانند `https://yourdomain.com`) مطابقت داشته باشد.

---

## نحوه عملکرد  
1. فایل‌های (`index.php` و `callback.php`) را در سرور یا هاست خود آپلود کنید.  
2. کاربران از طریق صفحه `index.php` وارد سایت شما می‌شوند.  
3. تلگرام اطلاعات کاربر را به `callback.php` ارسال می‌کند که داده‌ها را تأیید و نمایش می‌دهد.

---

## ملاحظات امنیتی  
- **اعتبارسنجی داده‌ها**: این اسکریپت مطابق روش توصیه‌شده تلگرام برای اعتبارسنجی داده‌ها طراحی شده است.  
- **امنیت توکن**: توکن ربات را محرمانه نگه داشته و هرگز آن را عمومی نکنید.  
- **SSL**: برای ارتباط امن با تلگرام، از HTTPS استفاده کنید.  

---

## مجوز  
این پروژه تحت **لایسنس MIT** منتشر شده است. برای اطلاعات بیشتر به فایل `LICENSE` مراجعه کنید.


<h1>Arabic Language</h1>

## الوصف المشروع  
يحتوي هذا المستودع على برنامج PHP بسيط لتطبيق تسجيل دخول المستخدمين باستخدام **Telegram Login Widget**. يسمح للمستخدمين بتسجيل الدخول إلى موقعك باستخدام حساباتهم على تيليجرام.

## هيكل المشروع  

### الملف: `index.php`  
هذا الملف يمثل الواجهة الأمامية لعرض زر "تسجيل الدخول باستخدام تيليجرام". يعتمد على **Telegram Login Widget**.

- `data-telegram-login`: اسم المستخدم الخاص بروبوت تيليجرام الخاص بك (استبدل بـ `YOUR_BOT_USERNAME`).  
- `data-auth-url`: عنوان URL الذي يتم إرسال بيانات المستخدم إليه للتحقق (في هذا المثال `callback.php`).  
- `data-request-access`: طلب أذونات إضافية من المستخدم (مثل "write").  

### الملف: `callback.php`  
هذا الملف يعالج بيانات المستخدم المرسلة من تيليجرام بعد تسجيل الدخول. تتضمن عملية المصادقة الخطوات التالية:  

1. **ترتيب وإعداد `data_check_string`**: يتم ترتيب البيانات المستلمة أبجديًا وإنشاء سلسلة جديدة.  
2. **حساب الهاش باستخدام رمز الروبوت**: يتم استخدام الرمز السري للروبوت لحساب الهاش.  
3. **مقارنة الهاش**: إذا لم يتطابق الهاش المحسوب مع الهاش المرسل من تيليجرام، فإن الطلب يعتبر غير صالح.  
4. **التحقق من انتهاء الصلاحية**: إذا كان الطلب أقدم من 24 ساعة، يعتبر منتهي الصلاحية.

---

## تعليمات الإعداد  

### إنشاء روبوت تيليجرام  
1. استخدم [BotFather](https://t.me/BotFather) على تيليجرام لإنشاء روبوت جديد.  
2. انسخ رمز الروبوت واسم المستخدم الخاص به.  

### تحديث البرنامج النصي  
- استبدل `YOUR_BOT_USERNAME` في `index.php` باسم المستخدم الخاص بروبوتك.  
- استبدل `YOUR_BOT_TOKEN` في `callback.php` برمز الروبوت الخاص بك.  

### إعداد النطاق (Domain)  
استخدم الأمر `/setdomain` في BotFather لتحديد نطاق الروبوت الخاص بك. يجب أن يتطابق هذا النطاق مع عنوان URL الرئيسي للموقع الذي يحتوي على `callback.php` (مثل `https://yourdomain.com`).  

---

## كيفية العمل  
1. قم برفع الملفات (`index.php` و `callback.php`) إلى الخادم الخاص بك.  
2. يمكن للمستخدمين تسجيل الدخول باستخدام صفحة `index.php`.  
3. يقوم تيليجرام بإرسال بيانات المستخدم إلى `callback.php`، الذي يتحقق من صحة البيانات ويعرضها.  

---

## الاعتبارات الأمنية  
- **التحقق من البيانات**: يتبع هذا البرنامج النصي الطريقة الموصى بها من تيليجرام للتحقق من بيانات تسجيل الدخول.  
- **أمان الرمز**: احتفظ برمز الروبوت آمنًا ولا تعرضه للعامة.  
- **SSL**: استخدم HTTPS لتأمين الاتصال مع تيليجرام.  

---

## الرخصة  
هذا المشروع مرخص تحت **رخصة MIT**. للمزيد من التفاصيل، راجع ملف `LICENSE`.



