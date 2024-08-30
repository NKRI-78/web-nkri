<?= view('layouts/head'); ?>

<?php

use Config\Services;

$request = Services::request();

$uri = $request->uri->getSegment(1);

?>

<!-- Navbar -->
<?= view('layouts/navbar'); ?>

<!-- Hero Section with 2 Columns -->
<section class="flex-grow bg-transparent text-white p-20 mx-12">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <!-- Left Column (Text Content) -->
    <div class="flex flex-col justify-center">
      <h1 class="text-5xl font-bold">
        Welcome to Inovatif78<br>
        Your Partner to <br>
        Improve Business
      </h1>
      <p class="text-lg my-10">
        Kami menghadirkan inovasi untuk mengeskalasi proses </br> bisnis Anda pada bidang IT, menjawab segala kebutuhan </br> Anda, dengan menjaga kualitas pelayanan dengan </br> prosedur kolaborasi dan validasi kerja yang terstruktur </br> rapih demi hasil kinerja yang optimal.
      </p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <div class="flex flex-col items-center">
        <img src="<?= base_url('public/assets/images/experience.png') ?>" alt="Icon 1" class="mb-4">
      </div>
      <div class="flex flex-col items-center">
        <img src="<?= base_url('public/assets/images/website.png') ?>" alt="Icon 3" class="mb-4">
      </div>
      <div class="flex flex-col items-center">
        <img src="<?= base_url('public/assets/images/mobile-apps.png') ?>" alt="Icon 2" class="mb-4">
      </div>
    </div>
    </div>

    <!-- Right Column (Optional Content) -->
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/home.png') ?>" alt="Placeholder Image" class="w-full h-auto rounded-lg shadow-lg">
    </div>

  </div>
</section>

<?= view('layouts/script'); ?>