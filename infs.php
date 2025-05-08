<?php
define('TEXT', '0');
defined('TEXT') or die;

$rows = [
    [
        '#' => 1,
        'First Name' => 'Mahdiar',
        'Last Name' => 'Shahriary',
        'Email' => 'MahdiarShahriary@email.com'
    ],
    [
        '#' => 2,
        'First Name' => 'Shahram',
        'Last Name' => 'Hoseiny',
        'Email' => 'ShahramHoseiny@email.com'
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>برنامه نویسی وب</title>
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
          <a class="hover:text-black text-gray-600 duration-300" aria-current="page" href="/webprogramming/infs.php">Information</a>
        </li>
        <li class="text-lg">
          <a class="hover:text-black text-gray-600 duration-300" aria-current="page" href="/webprogramming/contact-us.php">Contact Us</a>
        </li>
      </ul>
  </div>
</nav>
<div class="border-b-2 border-blue-400 w-[40%] mx-auto"></div>

    <div class="mt-10 bg-white p-8 rounded-2xl shadow-lg w-11/12 md:w-3/4 border border-blue-100">
        <h1 class="text-2xl font-bold mb-6 text-center">برنامه نویسی وب</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700 border border-gray-200 rounded-lg">
                <thead class="text-xs uppercase bg-blue-100 text-blue-700">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">First Name</th>
                        <th scope="col" class="px-6 py-3">Last Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($rows as $value): ?>
                        <tr class="hover:bg-blue-50 transition">
                            <?php foreach ($value as $k => $v): ?>
                                <td class="px-6 py-4">
                                    <span class="font-medium text-black"><?= htmlspecialchars($v) ?></span>
                                </td>
                            <?php endforeach ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
