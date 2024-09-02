<?php

use Config\Services;

$request = Services::request();

$uri = $request->uri->getSegment(1);

?>

<header class="bg-transparent border-b text-white border-gray my-5 mx-10 md:mx-32">

  <nav class="container mx-auto p-4 flex justify-between items-center">
    <div class="text-lg font-bold">
      <a href="<?= base_url('/') ?>"><img src="<?= base_url('public/assets/images/logo.png') ?>" class="w-52" alt=""></a>
    </div>

    <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>

    <ul class="hidden md:flex md:space-x-10">
      <li><a href="<?= base_url('/') ?>" class="text-lg <?= $uri == "" ? "active" : "" ?>">Home</a></li>
      <li><a href="#portfolio" class="text-lg">Portofolio</a></li>
      <li><a href="#about-us" class="text-lg <?= $uri == "about-us" ? "active" : "" ?>">About us</a></li>
      <li><a href="#contact-us" class="text-lg">Contact us</a></li>
    </ul>
  </nav>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
    <ul class="flex flex-col space-y-4 p-4">
      <li><a href="<?= base_url('/') ?>" class="text-lg <?= $uri == "" ? "active" : "" ?>">Home</a></li>
      <li><a href="#portfolio" class="text-lg">Portofolio</a></li>
      <li><a href="#about-us" class="text-lg <?= $uri == "about-us" ? "active" : "" ?>">About us</a></li>
    </ul>
  </div>
</header>