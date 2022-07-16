<?php

if ( isset($_GET["res"]) ) {
  switch ($_GET["res"]) {
  case 1 : 
    echo '<script type="text/javascript">alert("Action Success")</script>';
    break;
  case 0 : 
    echo '<script type="text/javascript">alert("Action Failed")</script>';
    break;
  }
}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- app.css --> 
  <link rel="stylesheet" href="./src/app.css"/>

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>  

  <!-- Poppins Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- Main Title -->
  <title>Project Monitoring</title>
</head>
<body>
  <main class="bg-slate-100 min-h-screen w-full pt-10 px-8">
    <h1 class="text-xl text-gray-700 text-center mb-3">Project Monitoring</h1> 

    <!-- Table Wrapper -->
    <div class="flex flex-col overflow-scroll w-11/12 mx-auto">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-x-auto">
            <!-- Main Table -->
            <table class="min-w-full" id="table">
              <!-- Heading -->
              <thead class="border-b">
                <tr id="table-thead" class="bg-slate-600"></tr>
              </thead>
              <!-- Body  -->
              <tbody id="table-tbody"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main> 

  <!-- Modals -->
  <section id="modal-edit" tabindex="-1" class="hidden duration-300 bg-gray-500 bg-opacity-25 backdrop-blur-md overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <!-- Main modal -->
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button data-role="modal-edit:close" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
            <i class="fa-solid fa-times text-gray-500 text-2xl" data-role="modal-edit:close" ></i>
        </button>
        <div class="py-6 px-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Current Project</h3>
          <form class="space-y-6" id="form-edit" action="" method="POST">
            <input type="hidden" name="id">
            <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Name</label>
              <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="ex: Information System" required="">
            </div>
            <div>
              <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Client</label>
              <input type="text" name="client" id="client" placeholder="ex: Politeknik Hasnur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <div>
              <label for="leader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Leader</label>
              <input type="text" name="leader" id="leader" placeholder="ex: Junaidi Abdul Rahman" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <div>
              <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start Date Of Project</label>
              <input type="date" name="start_date" id="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <div>
              <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deadline</label>
              <input type="date" name="end_date" id="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <div>
              <label for="progress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Current Progress : 45%</label>
              <input type="range" min="0" max="100" name="progress" id="progress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
            </div>
            <button name="update" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button> 
          </form>
        </div>
      </div>
    </div>
  </section>

<!-- Confirm -->
<section id="modal-delete" tabindex="-1" class="hidden duration-300 bg-gray-500 bg-opacity-25 backdrop-blur-md overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
    <!-- Main modal -->
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button data-role="modal-delete:close" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
            <i class="fa-solid fa-times text-gray-500 text-2xl" data-role="modal-delete:close" ></i>
        </button>
        <div class="py-6 px-6 lg:px-8">
          <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Are you sure want delete this project?</h3>
          <form class="space-y-6" id="form-delete" action="" method="POST">
            <input type="hidden" name="id-delete">
            <button name="delete" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Yes Im Sure</button> 
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- Script JS -->
  <script type="module" src="./src/index.js"></script>
</body>
</html>
