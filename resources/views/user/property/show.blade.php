<x-user-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-header-property-details 
    breadcrumbs="property-details"
    :variable=$property
  />

  <div class="img-preview grid md:grid-cols-5 grid-cols-1 w-full md:gap-6 gap-y-6 mb-4 md:max-h-[24rem]">
    <div class="col-span-3">
      <div class="w-full h-[24rem]">
        <img src="{{asset('storage/property-front-view.png')}}" alt="property-front-view" class="w-full h-full rounded-md object-cover">
      </div>
    </div>
    <div class="grid grid-rows-1 gap-4 md:h-[24rem] md:col-span-2">
      <div class="max-h-[100%] w-full hidden md:block">
        <img src="{{asset('storage/property-side-view.png')}}" alt="property-front-view" class="object-cover max-h-[100%] w-full rounded-md object-cover h-full">
      </div>
      <div class="grid grid-cols-2 gap-4 h-fit max-h-[14rem]">
        <div class="md:w-full h-full max-h-[14rem]">
          <img src="{{asset('storage/property-living-room.png')}}" alt="property-front-view" class=" rounded-md object-cover h-full">
        </div>
        <div class="md:w-full relative h-full max-h-[14rem]">
          <img src="{{asset('storage/property-night.png')}}" alt="property-front-view" class="rounded-md object-cover h-full">
          {{-- below onclick to gallery --}}
          <div class="absolute bg-zinc-950/60 inset-0 rounded-md text-4xl backdrop-blur-sm text-white flex justify-center items-center font-bold cursor-pointer">15+</div>
          {{-- above onclick to gallery --}}
        </div>
      </div>
    </div>
  </div>

  <div class="contact flex gap-6 items-center pb-4 flex-wrap">
    <div class="p-2 bg-[#02205E] text-white rounded font-medium text-sm">Leasehold</div>
    <div class="flex align-items-start flex-wrap md:gap-6 gap-2">
      <div class="flex gap-2 items-center justify-center">
        <span class="material-symbols-rounded text-[#61605E]">phone</span>
        <span class="text-[#61605E]">023482032</span>
      </div>
      <div class="flex gap-2 items-center justify-center">
        <span class="material-symbols-rounded text-[#61605E]">mail</span>
        <span class="text-[#61605E]">sales@serenebaliproperty.com</span>
      </div>
    </div>
  </div>

  <div class="tab-bar md:my-6 my-4">
    <div class="tab-menus flex md:gap-12 gap-8 border-b-2 border-[#E8E8E8] overflow-x-auto md:px-0 px-1">
      <x-tab-menu 
        menuName="Available Date"
        class="font-bold text-[#10398E] border-b-4 border-[#10398E] opacity-100"
      />
      <x-tab-menu 
        menuName="Description"
      />
      <x-tab-menu 
        menuName="Facility"
      />
      <x-tab-menu 
        menuName="Location"
      />
      {{-- <x-tab-menu 
        menuName="Review"
      /> --}}
    </div>
  </div>

  <div class="details section mb-6">
    <div class="grid grid-cols-5 gap-8">
      <div class="status col-span-3">
        <div class="available-date mb-4" data-content="Available Date">
          <div class="flex gap-2 items-center text-xl font-semibold">
            <div class="rounded-full bg-red-600 w-4 h-4"></div>
            <span>Unavailable</span>
          </div>
          <div class="my-4">
            <div class="flex items-center gap-4 mb-1">21 Jun 2024  <span class="material-symbols-rounded">trending_flat</span> 21 Jun 2024  </div>
            <div class="flex items-center gap-4">30 Nov 2024  <span class="material-symbols-rounded">trending_flat</span> 2 Dec 2024  </div>
          </div>
          <p class="text-[#333231]">You can book whenever except at the unavailable date because someone might booked that date or there is some maintenance. Please do not hesitate to contact us if you need some help.</p>
        </div>

        <div class="description mb-4 hidden" data-content="Description">
          <h4 class="text-xl mb-3 font-medium">Description</h4>
          <p class="text-[#333231] text-justify leading-8">
            Imagine a luxurious escape perched on a hillside, where turquoise waters meet the horizon. This private villa boasts breathtaking ocean views, inviting you to unwind in its sparkling infinity pool. Unwind on the sun-drenched terrace or find cool comfort under the shaded pergola. Inside, light-filled living areas and a gourmet kitchen create a warm atmosphere, while spacious bedrooms with en-suite bathrooms promise a restful retreat. Lush gardens with cascading waterfalls and blooming flowers offer a tranquil oasis, perfect for reconnecting with nature and loved ones.
          </p>

          <p>

          </p>
        </div>

        <div class="facility mb-4 hidden" data-content="Facility">

          <div class="facility-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Area</h4>
            <div class="flex items-center gap-6 flex-wrap">
              <x-facility 
                iconName="house"
                description="8,094 m<sup>2</sup>"
              />
              <x-facility 
                iconName="travel_explore"
                description="10,382 m<sup>2</sup>"
              />
            </div>
          </div>

          <div class="facility-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Max Pax</h4>
            <div class="flex items-center gap-6 flex-wrap">
              <x-facility 
                iconName="groups"
                description="10 Pax"
              />
            </div>
          </div>

          <div class="facility-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Rooms & Space</h4>
            <div class="flex items-center gap-x-6 gap-y-3 flex-wrap">
              <x-facility 
                iconName="bed"
                description="5 Bedrooms"
              />
              <x-facility 
                iconName="living"
                description="1 Living Room"
              />
              <x-facility 
                iconName="local_dining"
                description="1 Dining Room"
              />
              <x-facility 
                iconName="kitchen"
                description="2 Kitchen"
              />
              <x-facility 
                iconName="garage_home"
                description="Garage (4m x 5m)"
              />
              <x-facility 
                iconName="pool"
                description="Pool (6m x 4m)"
              />
              <x-facility 
                iconName="door_front"
                description="2 Extra Rooms"
              />
              <x-facility 
                iconName="shower"
                description="3 Showers"
              />
              <x-facility 
                iconName="yard"
                description="Big Yard"
              />
              <x-facility 
                iconName="balcony"
                description="Balcony"
              />
            </div>
          </div>

          <div class="facility-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Additional</h4>
            <div class="flex items-center gap-x-6 gap-y-3 flex-wrap">
              <x-facility 
                iconName="mode_fan"
                description="3 Air Conditioner (AC)"
              />
              <x-facility 
                iconName="TV"
                description="2 Television"
              />
              <x-facility 
                iconName="chair"
                description="3 Sofa"
              />
              <x-facility 
                iconName="king_bed"
                description="Full Furnished"
              />
              <x-facility 
                iconName="flatware"
                description="Full Kitchen Set"
              />
              <x-facility 
                iconName="Wifi"
                description="Wifi"
              />
            </div>
          </div>

        </div>

        <div class="location mb-4 hidden" data-content="Location">
          <div class="location-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Local Address</h4>
            <p class="text-[#333231">Jalan Hunian Indah, No. 12 kelurahan, kecamatan, Kota, Provinsi, Indonesia</p>
          </div>
          <div class="location-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Google Map Links</h4>
            <a href="https://maps.app.goo.gl/GGUvCigDAp3QairLA" class="underline hover:text-[#10398E]">https://maps.app.goo.gl/GGUvCigDAp3QairLA</a>
          </div>
          <div class="location-row mb-6">
            <h4 class="text-xl mb-3 font-medium">Nearest Public Facility</h4>
            <div class="flex flex-wrap items-center gap-x-6 gap-y-4">
              <x-public-facility 
                icon="local_hospital"
                name="Surya Husadha"
                type="Hospital"
                distance="2.6 Km"
              />
              <x-public-facility 
                icon="storefront"
                name="Indomaret"
                type="Mini Market"
                distance="0.2 Km"
              />
              <x-public-facility 
                icon="nature"
                name="Taman Kota Jimbaran"
                type="Park"
                distance="3.0 Km"
              />
              <x-public-facility 
                icon="beach_access"
                name="Pantai Jimbaran"
                type="Beach"
                distance="5.5 km"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="price-tag h-fit col-span-2 grid-cols-2 grid grid-rows-1 p-5 border-2 border-[#E8E8E8] rounded-md">
        <div>
          <h4 class="capitalize text-xl font-medium mb-4">Price</h4>
          <s class="mb-4 text-[#858381]">$8000</s>
          <h4 class="font-semibold text-2xl">$4000<span class="text-sm text-[#9E9C9A] font-normal">/year</span></h4>
        </div>
        
        <div class="justify-self-end">
          <div class="discount-tag py-1 border-[#10398E] border font-semibold text-sm w-fit px-2 text-end justify-self-end mb-4 rounded text-[#10398E]">50% OFF</div>
          <div class="flex items-center gap-2">
            <span>Price</span>
            <select name="budget" id="budget" class="price-sorter px-2 py-0.5 flex items-center bg-[#E8E8E8] text-[#02205E] border border-[#cacaca] rounded text-sm font-medium drop-shadow">
              <option value="0-9999999999" {{($oldInputs['budget'] ?? '') == '0-9999999999' ? 'selected' : ''}}>Year</option>
              <option value="0-9999999999" {{($oldInputs['budget'] ?? '') == '0-9999999999' ? 'selected' : ''}}>Monthly</option>
              <option value="0-9999999999" {{($oldInputs['budget'] ?? '') == '0-9999999999' ? 'selected' : ''}}>Daily</option>
            </select>
          </div>
        </div>

        <div class="col-span-2 mt-4">
          <div class="property-label border border-[#cacaca] drop-shadow px-2 py-1 w-fit rounded text-[#02205E] font-medium text-sm">
            Leasehold Property (For rent)
          </div>

          <div class="flex items-center mt-6 gap-3">
            <span class="material-symbols-rounded text-[40px]">image</span>
            <div>
              <h5 class="font-medium">Original Image</h5>
              <p class="text-sm text-[#61605E]">Guaranteed the images matches the property house.</p>
            </div>
          </div>
          <div class="flex items-center mt-4 gap-3 mb-6">
            <span class="material-symbols-rounded text-[40px]">verified</span>
            <div>
              <h5 class="font-medium">Protected by the law</h5>
              <p class="text-sm text-[#61605E]">Read the terms and condition <u class="text-[#02205E]">here.</u></p>
            </div>
          </div>

          <a href="" >
            <x-button-primary 
              buttonText="Booking Now"
              buttonStyle="w-full py-3 font-medium mb-4"
            />
          </a>
          <a href="">
            <x-button-secondary
            buttonText="Book a Consultation"
            buttonStyle="w-full py-3 border-2 font-medium"
          />
          </a>
        </div>
      </div>
    </div>
  </div>

</x-user-layout>