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
include "header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<!-- Full height container to center the table -->
<div class="min-h-screen flex flex-col justify-between">



    <!-- Table centered -->
    <div class="flex flex-1 justify-center items-center">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-11/12 md:w-3/4 border border-blue-100">
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
                                <?php foreach ($value as $v): ?>
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
    </div>

    <!-- Footer -->
    <?php include "footer.php"; ?>
</div>
