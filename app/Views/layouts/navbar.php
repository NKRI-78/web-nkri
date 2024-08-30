<?php

use Config\Services;

$request = Services::request();

$uri = $request->uri->getSegment(1);

?>

<!-- Navbar -->
<header class="bg-transparent border-b text-white border-gray my-5 mx-32">
  <nav class="container mx-auto p-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="text-lg font-bold">
      <a href="#"><img src="<?= base_url('public/assets/images/logo.png') ?>" class="w-52" alt=""></a>
    </div>

    <!-- Menu -->
    <ul class="flex space-x-10">
      <li><a href="<?= base_url('/') ?>" class="text-lg <?= $uri == "" ? "active" : "" ?>">Home</a></li>
      <li><a href="#" class="text-lg">Portofolio</a></li>
      <li><a href="<?= base_url('/about-us') ?>" class="text-lg <?= $uri == "about-us" ? "active" : "" ?>">About us</a></li>
      <li><a href="#" class="text-lg">Service</a></li>
      <li><a href="#" class="text-lg">Contact us</a></li>
    </ul>
  </nav>
</header>