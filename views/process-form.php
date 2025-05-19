<?php
include "header.php";
?>

<div class="h-screen flex items-center justify-center bg-gray-100">
  <div class="bg-white p-12 rounded-3xl shadow-2xl w-96 text-center border border-blue-200">
      <h1 class="text-3xl font-extrabold mb-8 text-blue-700">Your Profile</h1>

      <?php
      $name = $_POST['name'] ?? 'Unknown';
      $lastname = $_POST['last_name'] ?? 'Unknown';
      ?>

      <div class="mb-5">
          <p class="text-gray-500 uppercase tracking-wide font-semibold mb-1">Name</p>
          <p class="text-xl font-semibold text-gray-800"><?php echo htmlspecialchars($name); ?></p>
      </div>

      <div class="mb-5">
          <p class="text-gray-500 uppercase tracking-wide font-semibold mb-1">Last Name</p>
          <p class="text-xl font-semibold text-gray-800"><?php echo htmlspecialchars($lastname); ?></p>
      </div>
  </div>
</div>

<?php
include "footer.php";
?>

