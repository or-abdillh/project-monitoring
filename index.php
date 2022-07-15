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
    <h1 class="text-xl text-gray-700 text-center mb-3 font-medium">Project Monitoring</h1> 

    <!-- Table Wrapper -->
    <div class="flex flex-col overflow-scroll w-10/12 mx-auto">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-x-auto">
            <!-- Main Table -->
            <table class="min-w-full" id="table">
              <thead class="border-b">
                <tr id="table-thead" class="bg-slate-200"></tr>
              </thead>
              <tbody id="table-tbody"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main> 
  <!-- Script JS -->
  <script type="text/javascript" src="./src/index.js"></script>
</body>
</html>
