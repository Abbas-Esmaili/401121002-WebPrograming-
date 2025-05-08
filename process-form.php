<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex flex-col items-center">


<nav class="w-full my-5 flex flex-row justify-center">
    <div id="navbarSupportedContent">
      <ul class="flex justify-center flex-row space-x-5">
        <li class="text-lg">
          <a class="hover:text-black text-gray-600 duration-300" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="text-lg">
          <a class="hover:text-black text-gray-600 duration-300" aria-current="page" href="infs.php">Information</a>
        </li>
        <li class="text-lg">
          <a class="hover:text-black text-gray-600 duration-300" aria-current="page" href="contact-us.php">Contact Us</a>
        </li>
      </ul>
  </div>
</nav>
    <div class="border-b-2 border-blue-400 w-[40%] mx-auto"></div>
    <div class="mt-20 bg-white p-10 rounded-2xl shadow-lg w-96 text-center border border-blue-100">
        <h1 class="text-2xl font-bold mb-6">Your Profile</h1>

        <?php
        $name = $_POST['name'] ?? 'Unknown';
        $lastname = $_POST['last_name'] ?? 'Unknown';
        ?>

        <div class="mb-4">
            <p class="text-gray-600">Name</p>
            <p class="text-lg font-medium text-black"><?php echo htmlspecialchars($name); ?></p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600">Last Name</p>
            <p class="text-lg font-medium text-black"><?php echo htmlspecialchars($lastname); ?></p>
        </div>

    </div>

</body>
</html>
