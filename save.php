<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $done = $_POST['done'] ?? [];
  $feeling = $_POST['feeling'] ?? [];
  $note = $_POST['note'] ?? [];

  $data = "===== Ghi chép " . date('Y-m-d H:i:s') . " =====\n";
  foreach ($feeling as $day => $f) {
    $data .= "$day | Hoàn thành: " . (isset($done[$day]) ? "Có" : "Chưa") .
              " | Cảm xúc: $f | Ghi chú: " . ($note[$day] ?? '') . "\n";
  }
  file_put_contents('data.txt', $data, FILE_APPEND);
  echo "<h2>✅ Đã lưu thành công!</h2><a href='index.php'>Quay lại</a>";
}
?>
