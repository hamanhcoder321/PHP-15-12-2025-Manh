<?php
require_once '../app/controllers/ContactController.php'; // nạp 1 lần file ContactController.php

$controller = new ContactController(); // tạo object controller, luồng xử lý dữ liệu
$controller->index(); // gọi (action) index() hiển thị: form, submit...
