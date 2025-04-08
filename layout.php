<?php
// layout.php
// Tüm sayfalarda ortak kullanılacak HTML şablonu (Master Page)

// Sayfanın başlığı için değişken:
$pageTitle = $pageTitle ?? "Kurs Otomasyonu";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Üst Menü (Navigation Bar) -->
  <nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
      <div class="font-bold">
        <a href="index.php" class="hover:text-gray-200">Kurs Otomasyonu</a>
      </div>
      <!-- Menü Linkleri -->
      <div>
        <a href="courses.php" class="mr-4 hover:text-gray-200">Kurslar</a>
        <a href="students.php" class="mr-4 hover:text-gray-200">Öğrenciler</a>
        <a href="enrollments.php" class="mr-4 hover:text-gray-200">Atama</a>
        <a href="payments.php" class="hover:text-gray-200">Ödemeler</a>
      </div>
    </div>
  </nav>

  <!-- İçerik -->
  <main class="container mx-auto flex-1 p-4">
    <?php
    // Her sayfada oluşturulan $pageContent burada görüntülenecek
    echo $pageContent ?? "";
    ?>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white p-4 mt-auto">
    <div class="container mx-auto text-center">
      <p class="text-sm">&copy; <?php echo date('Y'); ?> Kurs Otomasyonu. Tüm Hakları Saklıdır Can Karabulut.</p>
    </div>
  </footer>

</body>
</html>
