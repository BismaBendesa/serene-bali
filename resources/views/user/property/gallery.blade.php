<x-user-layout
  title="Property gallery" 
>
  <x-header-property-details 
    breadcrumbs="property-gallery"
    :variable=$property
  />
  <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pb-10 pt-6">
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="Hemp Seed" data-image-id="1">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Sepatu Super" data-image-id="2">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="{{asset('storage/tas-putih.png')}}" alt="tas putih" data-image-id="3">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="kerangkeng gantung" data-image-id="4">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="smartwatch nike" data-image-id="5">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="sepatu abibas" data-image-id="6">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="facial cleaner" data-image-id="7">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="Tas Putih" data-image-id="8">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="Lampu Gantung" data-image-id="9">
    </div>
    <div class="max-h-[500px]max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="Tonic Water" data-image-id="10">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="xbox console" data-image-id="11">
    </div>
    <div class="max-h-[500px] max-w-full">
        <img class="h-full w-full object-cover rounded-lg cursor-pointer" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="tas atelle" data-image-id="12">
    </div>
  </div>

  <div class="overlay-image bg-black bg-opacity-80 text-white fixed inset-0 invisible overflow-hidden z-50 backdrop-blur">
    <div class="top-section flex justify-between mt-24 md:px-16 mb-8 px-6">
      <div class="flex items-center gap-8">
        <span class="material-symbols-rounded text-2xl bg-gray-700 bg-opacity-60 rounded-full p-4 hover:-translate-x-1 transition-transform duration-300 cursor-pointer font-semibold active:translate-y-1" onclick=closeOverlay()>
          arrow_back
        </span>
        <h1 class="md:text-2xl text-xl font-semibold capitalize">House Front View</h1>
      </div>
      <span class="material-symbols-rounded text-2xl font-semibold p-4 rounded-full duration-300 hover:translate-x-1 transition-transform cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1" id="moreButton">
        more_vert
      </span>
      <div class="invisible absolute right-0 z-10 mt-2 w-56 origin-top-right top-40 right-20 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdownOverlay">
        <div class="py-1" role="none">
          <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-share">Share</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-download">Download</a>
        </div>
      </div>
    </div>
    <div class="flex md:px-16 px-6 m-auto items-center">
      <span class="left-chevron material-symbols-rounded material-symbols-rounded text-2xl font-semibold p-4 rounded-full transition-transform duration-300 hover:-translate-x-1 cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1">
        arrow_back_ios
      </span>
      
      <img src="" alt="#" class="m-auto md:max-w-full md:max-h-[42rem] max-w-[250px]" data-image-id>
      
      <span class="right-chevron material-symbols-rounded material-symbols-rounded text-2xl font-semibold p-4 rounded-full transition-transform duration-300 hover:translate-x-1 cursor-pointer bg-gray-700 bg-opacity-60 active:translate-y-1">
        arrow_forward_ios
      </span>
    </div>
  </div>
  <script>
  const gallery = document.querySelectorAll('[data-image-id]');
  const overlay = document.querySelector('.overlay-image');
  const rightChevron = document.querySelector('.right-chevron');
  const leftChevron = document.querySelector('.left-chevron');
  const overlayImage = overlay.querySelector('img');
  const overlayTitle = overlay.querySelector('h1');
  const shareButton = document.getElementById('menu-share')
  const downloadButton = document.getElementById('menu-download')
  let currentImageId = null; // Track the current image ID

  const moreButton = document.getElementById('moreButton')
  const dropdownOverlay = document.getElementById('dropdownOverlay')

  moreButton.addEventListener('click', () => {
    dropdownOverlay.classList.toggle('invisible');
  });

  shareButton.addEventListener('click', (e) => {
    e.preventDefault(); // Prevent default anchor behavior
    const imageSrc = overlayImage.src
    navigator.clipboard.writeText(imageSrc) // Use Clipboard API to copy text
        .then(() => {
            alert('Image link copied to clipboard!');
        })
        .catch((err) => {
            console.error('Failed to copy: ', err);
        }); 
  });

  // Download: Trigger Image Download
  downloadButton.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent default anchor behavior
      const imageSrc = overlayImage.src; // Get image source
      const link = document.createElement('a'); // Create a temporary anchor element
      link.href = imageSrc; // Set the href to the image source
      link.download = 'image.jpg'; // Set the download attribute (name of the file)
      document.body.appendChild(link); // Append the link to the document
      link.click(); // Trigger the click event to start download
      document.body.removeChild(link); // Remove the temporary link
  });

  // Optional: Close the menu when clicking outside of it
  document.addEventListener('click', (e) => {
      if (!moreButton.contains(e.target) && !dropdownOverlay.contains(e.target)) {
          dropdownOverlay.classList.add('invisible');
      }
  });

  // Close overlay
  const closeOverlay = () => {
      overlay.classList.add('invisible');
      document.body.classList.remove('overflow-hidden');
  };

  // Right Chevron Handler
  const rightChevronHandler = () => {
      if (currentImageId < gallery.length) {
          currentImageId++;
          updateOverlayContent(currentImageId);
      }
  };

  // Left Chevron Handler
  const leftChevronHandler = () => {
      if (currentImageId > 1) {
          currentImageId--;
          updateOverlayContent(currentImageId);
      }
  };

  // Update Overlay Content
  const updateOverlayContent = (imageId) => {
      const nextImage = document.querySelector(`[data-image-id="${imageId}"]`);
      const nextImageSrc = nextImage.getAttribute('src');
      const nextImageTitle = nextImage.getAttribute('alt');
      overlayImage.setAttribute('src', nextImageSrc);
      overlayImage.setAttribute('alt', nextImageTitle);
      overlayTitle.textContent = nextImageTitle;
  };

  // Add click event listener to each gallery image
  for (let image of gallery) {
      image.addEventListener('click', (e) => {
          currentImageId = parseInt(e.target.getAttribute('data-image-id'), 10); // Set the clicked image as the current image
          const src = e.target.getAttribute('src');
          const title = e.target.getAttribute('alt');
          overlayImage.setAttribute('src', src);
          overlayImage.setAttribute('alt', title);
          overlayImage.setAttribute('data-image-id', currentImageId);
          overlayTitle.textContent = title;
          overlay.classList.remove('invisible');
          document.body.classList.add('overflow-hidden');
      });
  }

  // Add event listeners for the chevrons
  rightChevron.addEventListener('click', rightChevronHandler);
  leftChevron.addEventListener('click', leftChevronHandler);

  </script>



</x-user-layout>