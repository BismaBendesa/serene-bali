<x-user-layout
  title="Property gallery" 
>
  <x-header-property-details 
    breadcrumbs="property-gallery"
    :variable=$property
  />
  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pb-10 pt-6">
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Hemp Seed" data-image-id="1">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Sepatu Super" data-image-id="2">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="tas putih" data-image-id="3">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="kerangkeng gantung" data-image-id="4">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="smartwatch nike" data-image-id="5">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="sepatu abibas" data-image-id="6">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="facial cleaner" data-image-id="7">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Tas Putih" data-image-id="8">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="Lampu Gantung" data-image-id="9">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="Tonic Water" data-image-id="10">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="xbox console" data-image-id="11">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="tas atelle" data-image-id="12">
    </div>
  </div>

  <div class="overlay-image bg-black bg-opacity-80 text-white fixed inset-0 invisible ">
    <div class="top-section flex justify-between mt-24 px-16 mb-8">
      <div class="flex items-center gap-8">
        <span class="material-symbols-rounded text-2xl bg-gray-700 bg-opacity-60 rounded-full p-4 hover:-translate-x-1 transition-transform duration-300 cursor-pointer font-semibold active:translate-y-1" onclick=closeOverlay()>
          arrow_back
        </span>
        <h1 class="text-2xl font-semibold capitalize">House Front View</h1>
      </div>
      <span class="material-symbols-rounded text-2xl font-semibold p-4 rounded-full duration-300 hover:translate-x-1 transition-transform cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1">
        more_vert
      </span>
    </div>
    <div class="flex px-16 m-auto items-center">
      <span class="material-symbols-rounded material-symbols-rounded text-2xl font-semibold p-4 rounded-full transition-transform duration-300 hover:-translate-x-1 cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1">
        arrow_back_ios
      </span>
      
      <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="#" class="m-auto max-w-full">
      
      <span class="material-symbols-rounded material-symbols-rounded text-2xl font-semibold p-4 rounded-full transition-transform duration-300 hover:translate-x-1 cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1" >
        arrow_forward_ios
      </span>
    </div>
  </div>
  <script>
    const gallery = document.querySelectorAll('[data-image-id]')
    const overlay = document.querySelector('.overlay-image')

    const closeOverlay = () => {
      overlay.classList.add('invisible')
    }

    for (let image of gallery){
      image.addEventListener('click' , (e) => {
        const src = e.target.getAttribute('src')
        const title = e.target.getAttribute('alt')
        const overlayImage = overlay.querySelector('img')
        const overlayTitle = overlay.querySelector('h1')
        overlayImage.setAttribute('src', src)
        overlayImage.setAttribute('alt', title)
        overlayTitle.textContent = title;
        overlay.classList.toggle('invisible')
      })
    }
  </script>



</x-user-layout>