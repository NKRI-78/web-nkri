<?= view('layouts/head'); ?>

<body class="flex flex-col bg-black min-h-screen">

  <!-- Navbar -->
  <header class="bg-transparent border-b text-white border-gray my-5 mx-32">
    <nav class="container mx-auto p-4 flex justify-between items-center">
      <!-- Logo -->
      <div class="text-lg font-bold">
        <a href="#">Logo</a>
      </div>

      <!-- Menu -->
      <ul class="flex space-x-10">
        <li><a href="#" class="hover:text-gray-300 text-2xl">Home</a></li>
        <li><a href="#" class="hover:text-gray-300 text-2xl">Portofolio</a></li>
        <li><a href="#" class="hover:text-gray-300 text-2xl">About us</a></li>
        <li><a href="#" class="hover:text-gray-300 text-2xl">Service</a></li>
        <li><a href="#" class="hover:text-gray-300 text-2xl">Contact us</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section with 2 Columns -->
  <section class="flex-grow bg-transparent text-white p-20 mx-12">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Left Column (Text Content) -->
      <div class="flex flex-col justify-center">
        <h1 class="text-4xl font-bold">
          Welcome to Inovatif78<br>
          Your Partner to <br>
          Improve Business
        </h1>
        <p class="text-base my-10">
          Kami menghadirkan inovasi untuk mengeskalasi proses </br> bisnis Anda pada bidang IT, menjawab segala kebutuhan </br> Anda, dengan menjaga kualitas pelayanan dengan </br> prosedur kolaborasi dan validasi kerja yang terstruktur </br> rapih demi hasil kinerja yang optimal.
        </p>
         <!-- Three Columns Below Paragraph -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <!-- Column 1 -->
        <div class="flex flex-col items-center">
          <img src="https://via.placeholder.com/100" alt="Icon 1" class="mb-4 w-16 h-16">
          <h3 class="text-xl font-semibold">Column 1</h3>
          <p class="text-sm">Description for column 1 goes here.</p>
        </div>
        <!-- Column 2 -->
        <div class="flex flex-col items-center">
          <img src="https://via.placeholder.com/100" alt="Icon 2" class="mb-4 w-16 h-16">
          <h3 class="text-xl font-semibold">Column 2</h3>
          <p class="text-sm">Description for column 2 goes here.</p>
        </div>
        <!-- Column 3 -->
        <div class="flex flex-col items-center">
          <img src="https://via.placeholder.com/100" alt="Icon 3" class="mb-4 w-16 h-16">
          <h3 class="text-xl font-semibold">Column 3</h3>
          <p class="text-sm">Description for column 3 goes here.</p>
        </div>
      </div>
      </div>

      <!-- Right Column (Optional Content) -->
      <div class="flex items-center justify-center">
        <img src="https://via.placeholder.com/400x300" alt="Placeholder Image" class="w-full h-auto rounded-lg shadow-lg">
      </div>

    </div>
  </section>

</body>

<?= view('layouts/script'); ?>