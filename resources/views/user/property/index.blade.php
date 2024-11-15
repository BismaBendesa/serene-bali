<x-user-layout>
  {{-- Page title --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-header>property-catalog
    <x-slot:hideHeadlineDescription>hidden</x-slot:hideHeadlineDescription>
    <x-slot:headlineTitle>What Kind of Property Are You Looking For?</x-slot:headlineTitle>
  </x-header>

  <form action="/user/property/search/" class="absolute px-6 left-0 right-0 drop-shadow bg-white my-4 md:px-16 md:mt-0 md:py-4 bg-[#F8F8F8]" method="get">
    @csrf
    <div class="form-wrapper md:grid md:grid-cols-2 md:gap-x-6" id="form-wrapper" style="display: grid;">
      {{-- create component for radio input --}}
      {{-- <div>
        <p class="mb-1 mt-4 text-sm md:mt-0 md:mb-0">Action</p>
        <div class="flex gap-6 mb-4">
          <x-radio-input>
            Buy
            <x-slot:name>action</x-slot:name>
          </x-radio-input>
          <x-radio-input>
            Rent
            <x-slot:name>action</x-slot:name>
          </x-radio-input>
          <x-radio-input>
            All Action
            <x-slot:name>action</x-slot:name>
          </x-radio-input>
        </div>
      </div> --}}
  
      {{-- create component for checkbox --}}
      {{-- <div>
        <p class="mb-1 text-sm">Type</p>
        <div class="flex gap-6 mb-4">
          <x-checkbox-input>
            All Type
            <x-slot:name>all</x-slot:name>
          </x-checkbox-input>
          <x-checkbox-input>
            Villa
            <x-slot:name>villa</x-slot:name>
          </x-checkbox-input>
          <x-checkbox-input>
            Land
            <x-slot:name>land</x-slot:name>
          </x-checkbox-input>
          <x-checkbox-input>
            Homestay
            <x-slot:name>homestay</x-slot:name>
          </x-checkbox-input> 
        </div>
      </div> --}}
  
      {{-- Location autocomplete is stalled require a mastercard or visa card to proceed to use Google API --}}

      {{-- lanjutkan untuk membuat fitur pencarian --}}


      <x-text-input
        name="location"
        label="Location"
        placeholder="Enter Property Location"
        :value="old('location', $oldInputs['location'] ?? '')" 
      />

      <x-text-input
      name="property_name"
      label="Property Name"
      placeholder="Enter Property Name"
      :value="old('property_name', $oldInputs['property_name'] ?? '')" 
    />
  
      <div>
        <label for="budget" class="block text-sm mb-1">Budget</label>
        <select name="budget" id="budget" class="bg-[#F8F8F8] border border-[#cacaca] px-3 py-2 rounded-md text-black w-full focus:outline-2 focus:outline-[#10398E] text-sm mb-4">
          <option value="0-9999999999" {{($oldInputs['budget'] ?? '') == '0-9999999999' ? 'selected' : ''}}>Any</option>
          <option value="0-10000000" {{($oldInputs['budget'] ?? '') == '0-10000000' ? 'selected' : ''}}>Fewer Than IDR 10 Million</option>
          <option value="10000000-50000000" {{($oldInputs['budget'] ?? '') == '10000000-50000000' ? 'selected' : ''}}>IDR 10 Million - IDR 50 Million</option>
          <option value="50000000-200000000" {{($oldInputs['budget'] ?? '') == '50000000-200000000' ? 'selected' : ''}}>IDR 50 Million - IDR 200 Million</option>
          <option value="200000000-800000000" {{($oldInputs['budget'] ?? '') == '200000000-800000000' ? 'selected' : ''}}>IDR 200 Million - IDR 800 Million</option>
          <option value="800000000-2000000000000" {{($oldInputs['budget'] ?? '') == '800000000-2000000000000' ? 'selected' : ''}}>IDR 800 Million - IDR 2 Billion</option>
          <option value="2000000000000-9999999999" {{($oldInputs['budget'] ?? '') == '2000000000000-9999999999 ' ? 'selected' : ''}}>IDR 2 Billion More ></option>
        </select>
      </div>
      
      <div>
        <label for="ambience" class="block text-sm mb-1">Ambience</label>
        <select name="ambience" id="ambience" class="bg-[#F8F8F8] border border-[#cacaca] px-3 py-2 rounded-md text-black w-full focus:outline-2 focus:outline-[#10398E] text-sm mb-4">
          <option value="" {{($oldInputs['ambience'] ?? '') == '' ? 'selected' : ''}}>Any</option>
          <option value="Beach & Chill" {{($oldInputs['ambience'] ?? '') == 'Beach & Chill' ? 'selected' : ''}}>Beach & Chill</option>
          <option value="Nature & Quiet" {{($oldInputs['ambience'] ?? '') == 'Nature & Quiet' ? 'selected' : ''}}>Nature & Quiet</option>
          <option value="Summer Vibes" {{($oldInputs['ambience'] ?? '') == 'Summer Vibes' ? 'selected' : ''}}>Summer Vibes</option>
          <option value="Far From Town" {{($oldInputs['ambience'] ?? '') == 'Far From Town' ? 'selected' : ''}}>Far From Town</option>
        </select>
      </div>


    </div>
    <div>
      <button type="submit" class="bg-[#182955] text-white rounded drop-shadow block w-full py-2 px-3 mt-4 mb-0" title="Filter Search" id="button-search-property" style="display: block;">Search</button>
      <span id="toggleFilter" class="block w-fit m-auto text-center text-[#10398E] font-semibold py-4 cursor-pointer hover:underline" onclick="toggleFilter()" style="display: block;">Hide filter</span>
    </div>
  </form>
  <div class="pt-[24rem] md:pt-[12rem]" id="filter-spacing"></div>

  <div class="md:mt-[10rem] mt-[6rem]">
    <x-headline>
      <x-slot:headlineTitle>Browse Our Property</x-slot:headlineTitle>
      <x-slot:description>Anything that suites your preference.</x-slot:description>
      <x-slot:hideButton>hidden</x-slot:hideButton>
    </x-headline>
    {{-- catalog hint --}}
    <div class="flex gap-4 mt-2 text-[#858381]">
      <div class="flex gap-1 justify-center items-center">
        <span class="material-symbols-rounded">
          crop_landscape
        </span>
        <span class="text-sm">Land Area</span>
      </div>
      <div class="flex gap-1 justify-center items-center">
        <span class="material-symbols-rounded">
          home
        </span>
        <span class="text-sm ">Building Area</span>
      </div>
    </div>
  </div>
  <div class="property-list mb-8 md:grid md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 md:items-center md:gap-x-6">

    {{-- loop from controller --}}
    @if($catalogCardData->isEmpty())
      <p>No properties found.</p>
    @else
      @foreach ($catalogCardData as $data)
      {{-- @dd(gettype((float) $data->price)) --}}
        <x-property-card :price="$data->price" :discount="30" :propertyWidth="$data->building_area" :propertyPax="$data->max_pax" :propertyLandArea="$data->land_area">
          <x-slot:property>{{$data->id}}</x-slot:property>
          <x-slot:viewCount>{{$data->views}}</x-slot:viewCount>
          <x-slot:propertyName>{{$data->property_name}}</x-slot:propertyName>
          <x-slot:propertyLabel>{{$data->property_service}}</x-slot:propertyLabel>
          <x-slot:propertyLocation>{{$data->location}}</x-slot:propertyLocation>
        </x-property-card>
      @endforeach
    @endif

    
    {{-- <x-property-card></x-property-card>
    <x-property-card></x-property-card> --}}
  </div>

  <script>
    function toggleFilter(){
      const element = document.getElementById('form-wrapper');
      const space = document.getElementById('filter-spacing')
      const buttonSearchProperty = document.getElementById('button-search-property');
      const filterToggle = document.getElementById('toggleFilter')

      if (element.style.display == 'block' || element.style.display == 'grid'){
        element.style.display = 'none'
        filterToggle.textContent = "Show Filter"
        space.style.display = 'none';
        buttonSearchProperty.style.display ='none'
      } else{
        element.style.display = 'grid'
        filterToggle.textContent = "Hide Filter"
        space.style.display = 'block'
        buttonSearchProperty.style.display ='block'
      }
    }
  </script>

</x-user-layout>