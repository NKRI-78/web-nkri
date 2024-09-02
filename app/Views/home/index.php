<?= view('layouts/head'); ?>

<?= view('layouts/navbar'); ?>

<section class="flex-grow bg-transparent text-white p-20 md:mx-12">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="flex flex-col justify-center">
      <h1 class="text-2xl md:text-4xl font-bold">
        Welcome to NKRI Office<br>
        Your Partner to <br>
        Improve Business
      </h1>
      <p class="text-base md:text-lg my-10">
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

    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/home.png') ?>" alt="home" class="w-full h-auto rounded-lg shadow-lg">
    </div>

  </div>
</section>

<section class="bg-transparent py-20" id="about-us">

    <h2 class="text-center text-white text-4xl font-bold mb-10">
      About Us
    </h2>

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

    <div class="relative p-5">
        <div class="p-6 mt-6 h-56 text-center shadow-lg card-about">
            <h3 class="text-xl font-bold my-4 text-white">User Centric</h3>
            <p class="text-white text-sm">Kami berorientasi pada
            kebutuhan klien</p>
        </div>
        <img src="<?= base_url('public/assets/images/user-centric.png') ?>" class="absolute block mx-auto ic-about ic-user-centric" alt="user-centric">
    </div>
    
    <div class="relative p-5">
        <div class="p-6 mt-6 h-56 text-center shadow-lg card-about">
            <h3 class="text-xl font-bold my-4 text-white">Innovations</h3>
            <p class="text-white text-sm">Kami menghadirkan inovasi
            untuk mengeskalasi proses
            bisnis anda</p>
        </div>
        <img src="<?= base_url('public/assets/images/innovations.png') ?>" class="absolute block mx-auto ic-about ic-innovations" alt="innovations">
    </div>

    <div class="relative p-5">
        <div class="p-6 mt-6 h-56 text-center shadow-lg card-about">
            <h3 class="text-xl font-bold my-4 text-white">Integritas</h3>
            <p class="text-white text-sm">Komitmen dengan spsifikasi
            dan timeline pengerjaan serta
            menjaga komunikasi dengan
            laporan progres rutin
            merupakan usaha kami untuk
            menjaga integritas</p>
        </div>
        <img src="<?= base_url('public/assets/images/integrity.png') ?>" class="absolute block mx-auto ic-about ic-integrity" alt="integrity">
    </div>

    <div class="relative p-5">
        <div class="p-6 mt-6 h-56 text-center shadow-lg card-about">
            <h3 class="text-xl font-bold my-4 text-white">Kualitas</h3>
            <p class="text-white text-sm">Menjaga kualitas pelayanan dengan prosedur kolaborasi dan validasi kerja yang terstruktur rapih demi hasil kinerja maksimal</p>
        </div>
        <img src="<?= base_url('public/assets/images/quality.png') ?>" class="absolute block mx-auto ic-about ic-quality" alt="quality">
    </div>

    </div>
</section>

<section class="flex-grow bg-transparent text-white p-20 md:mx-12" id="portfolio">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/people-journey.png') ?>" alt="home" class="w-full h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex flex-col justify-center">
      <img src="<?= base_url('public/assets/images/image-journey.png') ?>" alt="home" class="rounded-lg shadow-lg block" style="width: 450px; margin: 0 auto;">
      <h1 class="text-2xl mt-20 md:text-5xl font-bold">
        This Our Journey
        With My Partners
      </h1>
      <p class="text-base md:text-lg my-10"> 
        Berikut Portfolio kamu bersama dengan para partner kami </br>
        dalam mengembangkan bisnis dalam Teknologi, yang </br> berupa Mobile Apps dan juga Web Site.
      </p>
    </div>

  </div>
</section>

<section class="py-12 mx-10">

  <div class="flex flex-col md:flex-row items-center md:divide-x md:divide-gray-300">

    <div class="w-full md:w-1/3 flex flex-col items-center p-8 p-8 h-[140vh] md:h-[200vh]">
      <div>
        <img src="<?= base_url('public/assets/images/info-penting.png') ?>" alt="info-penting" class="w-60 mx-auto h-auto block rounded-lg">
        <p class="text-2xl font-bold mt-4 text-center text-white">InfoPenting</p>
      </div>

      <div class="flex flex-col mt-12 p-8 h-[180vh]">
        <div class="flex items-center justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/tentang-loker.png') ?>" alt="Tentang Loker" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/tentang-voucher.png') ?>" alt="Tentang Voucher" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/tentang-game.png') ?>" alt="Tentang Game" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-40 justify-center md:justify-end">
          <a href="https://infopenting.id/" target="_blank">
            <img src="<?= base_url('public/assets/images/info-penting-button.png') ?>" alt="Info Penting" class="w-80 h-auto rounded-lg">
          </a>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 flex flex-col items-center p-8 h-[140vh] md:h-[200vh]">
      <div>
        <img src="<?= base_url('public/assets/images/mobile-development.png') ?>" alt="mobile-development" class="w-60  mx-auto h-auto block rounded-lg">
        <p class="text-2xl font-bold mt-4 text-center text-white">Mobile Development</p>
      </div>

      <div class="flex flex-col mt-12 p-8 h-[180vh]">
        <div class="flex items-center justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/fasi.png') ?>" alt="Fasi" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/mini-cooper.png') ?>" alt="MINI Cooper" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/hog-anak-elang.png') ?>" alt="HOG Anak Elang" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/kosgoro.png') ?>" alt="Kosgoro" class="w-80 h-auto rounded-lg">
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 flex flex-col items-center p-8 h-[140vh] md:h-[200vh]">
      <div>
        <img src="<?= base_url('public/assets/images/mobile-development.png') ?>" alt="mobile-development" class="w-60 mx-auto h-auto block rounded-lg">
        <p class="text-2xl font-bold mt-4 text-center text-white">Website Development</p>
      </div>

      <div class="flex flex-col mt-12 p-8 h-[180vh]">
        <div class="flex items-center justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/fspmi.png') ?>" alt="Fspmi" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/megakonten.png') ?>" alt="MegaKonten" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/atj.png') ?>" alt="Atj" class="w-80 h-auto rounded-lg">
        </div>

        <div class="flex items-center mt-12 justify-center md:justify-end">
          <img src="<?= base_url('public/assets/images/sman4medan.png') ?>" alt="Sman4medan" class="w-80 h-auto rounded-lg">
        </div>
      </div>
    </div>

  </div>

</section>

<!-- <section class="py-12 mx-10">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-1.png') ?>" alt="p-2" class="w-full h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-2.png') ?>" alt="p-2" class="w-full h-auto rounded-lg shadow-lg">
    </div>

  </div>
</section> -->

<!-- <section class="pb-12 md:pt-12 mx-10">
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-0"> -->

    <!-- <div class="flex items-center justify-center md:justify-end">
      <img src="<?= base_url('public/assets/images/p-1.png') ?>" alt="p-3" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-2.png') ?>" alt="p-4" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center md:justify-start">
      <img src="<?= base_url('public/assets/images/p-3.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>

  </div>

  <div class="container mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-0">
    
    <div class="flex items-center justify-center md:justify-end">
      <img src="<?= base_url('public/assets/images/p-4.png') ?>" alt="p-3" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-5.png') ?>" alt="p-4" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center md:justify-start">
      <img src="<?= base_url('public/assets/images/p-6.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>

  </div>

  <div class="container mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-0">
    
    <div class="flex items-center justify-center md:justify-end">
      <img src="<?= base_url('public/assets/images/p-7.png') ?>" alt="p-3" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-8.png') ?>" alt="p-4" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center md:justify-start">
      <img src="<?= base_url('public/assets/images/p-9.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>

  </div>

  <div class="container mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-0">
    
    <div class="flex items-center justify-center md:justify-end">
      <img src="<?= base_url('public/assets/images/p-10.png') ?>" alt="p-3" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-11.png') ?>" alt="p-4" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center md:justify-start">
      <img src="<?= base_url('public/assets/images/p-12.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>

  </div>

  <div class="container mx-auto mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-0">
    
    <div class="flex items-center justify-center md:justify-end">
      <img src="<?= base_url('public/assets/images/p-13.png') ?>" alt="p-3" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-14.png') ?>" alt="p-4" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center md:justify-start">
      <img src="<?= base_url('public/assets/images/p-15.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>

  </div> -->

  <!-- <div class="container mx-auto mt-10">
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-16.png') ?>" alt="p-5" class="w-80 h-auto rounded-lg shadow-lg">
    </div>
  </div> -->

<!-- </section> -->

<footer class="bg-[#BAF200] text-black py-12 mt-auto" id="contact-us">
    <div class="container mx-auto flex flex-col justify-center items-center">

     <div class="mb-4 md:mb-0 mr-0 md:mr-8">
        <a href="#" class="text-lg font-bold">
          <img src="<?= base_url('public/assets/images/logo-footer.png') ?>" alt="Logo" class="h-32">
        </a>
      </div>

      <div class="text-center md:text-start my-8 md:mb-0">
        <p class="text-lg text-center font-bold">PT NARA KAHAM RAYA INVESTAMA</p>
        <p class="text-sm">JL. Kemang Selatan, GG Bambu Kuning No.3B, Desa/Kelurahan Cilandak Timur, Kec. </br>
        Pasar Minggu, Kota Adm. Jakarta Selatan, Provinsi DKI Jakarta, 12560</p>
        <div class="mt-8 flex flex-col justify-center md:flex-row md:justify-evenly">
          <div class="flex justify-center md:flex-row">
            <img src="<?= base_url('public/assets/images/phone.png') ?>" class="w-5" alt="ic-phone">
            <p class="font-bold ml-4">021-27842125</p>
          </div>
          <div class="flex justify-center md:flex-row">
            <img src="<?= base_url('public/assets/images/email.png') ?>" class="w-5" alt="ic-email">
            <p class="ml-4 font-bold">customercare@nkrioffice.com</p>  
          </div>
        </div>
      </div>

      <div class="ml-0 md:ml-8 my-4 md:my-12 relative">
        <img src="<?= base_url('public/assets/images/ic-gmaps.png') ?>" class="absolute w-6" alt="ic-gmaps" style="left: 15px;">
        <a href="https://www.google.com/maps/search/JL.+Kemang+Selatan,+GG+Bambu+Kuning+No.3B,+Desa%2FKelurahan+Cilandak+Timur,+Kec.+%3C%2Fbr%3E+++++++++Pasar+Minggu,+Kota+Adm.+Jakarta+Selatan,+Provinsi+DKI%C2%A0Jakarta,%C2%A012560/@-6.276091,106.8143064,17z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MDgyNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="bg-white text-center text-black text-sm py-4 pl-10 pr-4 ml-2 font-bold rounded-lg">
          Open Google Maps
        </a>
      </div>

    </div>
  </footer>

<?= view('layouts/script'); ?>