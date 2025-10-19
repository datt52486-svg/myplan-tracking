<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>7 Ngày Phá Vòng Trì Hoãn</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>📅 7 Ngày Phá Vòng Trì Hoãn</h1>
  <form action="save.php" method="post">
    <table>
      <tr>
        <th>Ngày</th>
        <th>Nhiệm vụ chính</th>
        <th>Đã làm (✓)</th>
        <th>Cảm xúc (1–5)</th>
        <th>Ghi chú ngắn</th>
      </tr>
      <?php
      $tasks = [
        "Ngày 1" => "Dọn góc làm việc 10 phút, ghi 'Mình đã bắt đầu điều gì?'",
        "Ngày 2" => "Làm 1 bước nhỏ của việc đã trì hoãn, ghi cảm giác sau khi làm",
        "Ngày 3" => "Khi đầu óc loạn, tách suy nghĩ ra, ghi điều mình nhận ra",
        "Ngày 4" => "Thưởng bản thân sau khi làm được việc nhỏ",
        "Ngày 5" => "Nghỉ ngơi, viết 3 điều mình muốn trong 1 năm tới",
        "Ngày 6" => "Làm việc tập trung 15 phút, ghi kết quả",
        "Ngày 7" => "Đọc lại tuần, ghi 3 thay đổi tích cực",
      ];

      foreach ($tasks as $day => $desc) {
        echo "<tr>
                <td>$day</td>
                <td>$desc</td>
                <td><input type='checkbox' name='done[$day]'></td>
                <td><input type='number' name='feeling[$day]' min='1' max='5'></td>
                <td><input type='text' name='note[$day]' placeholder='Ghi chú...'></td>
              </tr>";
      }
      ?>
    </table>
    <button type="submit">💾 Lưu lại</button>
  </form>
</body>
</html>
