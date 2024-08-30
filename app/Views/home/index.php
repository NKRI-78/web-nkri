<?= view('layouts/head'); ?>

<?= view('layouts/navbar'); ?>

<section class="flex-grow bg-transparent text-white p-20 md:mx-12">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="flex flex-col justify-center">
      <h1 class="text-2xl md:text-5xl font-bold">
        Welcome to Inovatif78<br>
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

<section class="bg-transparent py-32">
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

<section class="py-12 mx-10">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-1.png') ?>" alt="p-2" class="w-full h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-2.png') ?>" alt="p-2" class="w-full h-auto rounded-lg shadow-lg">
    </div>

  </div>
</section>

<section class="pb-12 md:pt-12 mx-10">
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-3.png') ?>" alt="p-3" class="w-full h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-4.png') ?>" alt="p-4" class="w-full h-auto rounded-lg shadow-lg">
    </div>
    
    <div class="flex items-center justify-center">
      <img src="<?= base_url('public/assets/images/p-5.png') ?>" alt="p-5" class="w-full h-auto rounded-lg shadow-lg">
    </div>

  </div>
</section>

<?= view('layouts/script'); ?>