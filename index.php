<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
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
<section class="flex flex-col justify-center items-center my-20">
  <form action="process-form.php" method="POST" class="flex w-full md:px-5 shadow-lg rounded-xl shadow-blue-200 py-5 px-10 md:w-[28%] space-y-8 flex-col">
      <h1 class="text-center text-4xl my-6">LOG-IN</h1>
        <div class="flex flex-col space-y-2">
            <label for="name">Name</label>
            <input placeholder="Enter Name..." class="w-full py-3 px-4 outline-none focus:outline-none border-2 border-blue-300 rounded-lg placeholder:text-gray-500" type="text"  name="name" id="name" value="">
        </div>
        <div class="flex flex-col space-y-2">
            <label for="last_name">Last Name</label>
            <input placeholder="Enter LastName..." class="w-full py-3 px-4 outline-none focus:outline-none border-2 border-blue-300 rounded-lg placeholder:text-gray-500" type="text" name="last_name" id="last_name" value="">
        </div>
        <div class="text-center">
            <button type="submit" class="py-[8px] mx-auto rounded-xl bg-blue-400 text-white border-blue-400 hover:bg-blue-600 duration-300 cursor-pointer px-8 border ">Submit</button>
        </div>
    </form>
</section>    
</body>
</html>