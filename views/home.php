<?php
include"header.php";
?>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<section class="flex flex-col justify-center items-center my-20">
  <form action="/webprogramming/process-form" method="POST" class="flex w-full md:px-5 shadow-lg rounded-xl shadow-blue-200 py-5 px-10 md:w-[28%] space-y-8 flex-col">
      <h1 class="text-center text-4xl my-6">SEND_INFORMATION</h1>
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
<?php
include"footer.php";
?>