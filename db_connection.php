<?php
$dsn = "mysql:host=localhost;dbname=programming_help_db;charset=utf8mb4"; // إعدادات DSN
$username = "Programming help "; // استبدل بـ اسم المستخدم الخاص بك
$password = "azooz-1977"; // استبدل بـ كلمة المرور الخاصة بك

try {
    $pdo = new PDO($dsn, $username, $password); // إنشاء اتصال PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // تعيين وضع الخطأ
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); // رسالة الخطأ في حالة الفشل
}
?>
