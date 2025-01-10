@php
$consultationHeaders = ['User', 'Datetime', 'Method', 'Status', 'Purpose', 'Action'];
$auditLogHeaders = ['User', 'Datetime', 'Activity', 'Action'];

@endphp

<x-admin-layout>
  {{-- Page title --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  {{-- header breadcrumbs --}}
  <x-header-admin>admin-dashboard</x-header-admin>

  <div class="status-card grid xl:grid-cols-5 lg:grid-cols-3 md:grid-cols-2 xs:grid-cols-1 gap-2 my-8 ">
    <div class="bg-[#f8f8f8] border border-[#cacaca] rounded shadow px-8 py-6">
      <div class="number text-4xl font-bold mb-2">5</div>
      <p class="status-card-desc">Incoming New Booking</p>
    </div>
    <div class="bg-[#f8f8f8] border border-[#cacaca] rounded shadow px-8 py-6">
      <div class="number text-4xl font-bold mb-2">76</div>
      <p class="status-card-desc">Total Serene Bali Users</p>
    </div>
    <div class="bg-[#f8f8f8] border border-[#cacaca] rounded shadow px-8 py-6">
      <div class="number text-4xl font-bold mb-2">53</div>
      <p class="status-card-desc">Total Property Listed</p>
    </div>
    <div class="bg-[#f8f8f8] border border-[#cacaca] rounded shadow px-8 py-6">
      <div class="number text-4xl font-bold mb-2">6</div>
      <p class="status-card-desc">Monthly Transaction</p>
    </div>
    <div class="bg-[#f8f8f8] border border-[#cacaca] rounded shadow px-8 py-6">
      <div class="number text-4xl font-bold mb-2">10</div>
      <p class="status-card-desc">Monthly Bookings</p>
    </div>
  </div>

  <div class="property-bookings-dasbhoard" class="w-full">
    <div>
      <h2 class="font-semibold">Recent <span class="text-[#10398E]">Property Bookings</span> </h2>
      <p class="text-xs text-[#858381]">Property bookings from the user.</p>
    </div>

    {{-- default table --}}
    <table class="w-full mt-4" class="border-collapse border table-auto" border="1">
      <tr>
        <th class="text-left border-t border-b border-l border-[#d9d9d9] py-2 pl-4 pr-2 text-[#02205E] bg-[#F1F1F1]">User</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Property</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Datetime</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Type</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Status</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Duration</th>
        <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1]">Location</th>
        <th class="text-left border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4 text-[#02205E] bg-[#F1F1F1]">Action</th>
      </tr>
      {{-- Looping goes here --}}
      <tr class="odd:bg-[#F8F8F8]">
        <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
          <div class="flex items-center gap-2">
            <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
            <div>
              <h5 class="font-mediium text-sm">John Doe</h5>
              <p class="text-xs text-[#858381]">User</p>
            </div>
          </div>
        </td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa San Louis</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2023 | 18:00 </td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Payment Success</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">2 days</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Kediri, Tabanan</td>
        <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
          <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
            Detail
          </a>
        </td>
      </tr>
      <tr class="odd:bg-[#F8F8F8]">
        <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
          <div class="flex items-center gap-2">
            <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
            <div>
              <h5 class="font-mediium text-sm">John Doe</h5>
              <p class="text-xs text-[#858381]">User</p>
            </div>
          </div>
        </td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa San Louis</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2023 | 14.00 </td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Payment Success</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">2 days</td>
        <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Kediri, Tabanan</td>
        <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
          <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
            Detail
          </a>
        </td>
      </tr>
    </table>
  </div>

  <div class="consultation-bookings-dashboard" class="w-full">
    <div class="mt-8">
      <h2 class="font-semibold">Recent <span class="text-[#10398E]">Consultation Bookings</span> </h2>
      <p class="text-xs text-[#858381]">Consultation bookings from the user.</p>
    </div>

    {{-- Consultation Table --}}
    <table class="w-full mt-4" class="border-collapse border table-auto" border="1">
      <thead>
        <tr>
          {{-- set array at top of the file --}}
          @foreach ($consultationHeaders as $header)
            <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1] first:border-l first:pl-4 last:pr-4 last:border-r">
                {{ $header }}
            </th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        {{-- Looping goes here --}}
        <tr class="even:bg-[#F8F8F8]">
          <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
            <div class="flex items-center gap-2">
              <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
              <div>
                <h5 class="font-medium text-sm">John Doe</h5>
                <p class="text-xs text-[#858381]">User</p>
              </div>
            </div>
          </td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2024 | 09:30</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Online</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Looking for specific property...</td>
          <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
            <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
              Detail
            </a>
          </td>
        </tr>
        <tr class="even:bg-[#F8F8F8]">
          <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
            <div class="flex items-center gap-2">
              <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
              <div>
                <h5 class="font-medium text-sm">John Doe</h5>
                <p class="text-xs text-[#858381]">User</p>
              </div>
            </div>
          </td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2024 | 09:30</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Online</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Villa</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Looking for specific property...</td>
          <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
            <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
              Detail
            </a>
          </td>
        </tr>
      </tbody>
      
    </table>
  </div>
    
  <div class="audit-log-dashboard mb-8">
    <div class="mt-8">
      <h2 class="font-semibold">Recent <span class="text-[#10398E]">Audit Log</span> </h2>
      <p class="text-xs text-[#858381]">Activity from the user and admin.</p>
    </div>

    {{-- Audit Log Table --}}
    <table class="w-full mt-4" class="border-collapse border table-auto" border="1">
      <thead>
        <tr>
          {{-- set array at top of the file --}}
          @foreach ($auditLogHeaders as $header)
            <th class="text-left border-t border-b border-[#d9d9d9] p-2 text-[#02205E] bg-[#F1F1F1] first:border-l first:pl-4 last:pr-4 last:border-r">
                {{ $header }}
            </th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        {{-- Looping goes here --}}
        <tr class="even:bg-[#F8F8F8]">
          <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
            <div class="flex items-center gap-2">
              <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
              <div>
                <h5 class="font-medium text-sm">John Doe</h5>
                <p class="text-xs text-[#858381]">User</p>
              </div>
            </div>
          </td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2024 | 09:30</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Create New Villa Sanguine</td>
          <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
            <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
              Detail
            </a>
          </td>
        </tr>
        <tr class="even:bg-[#F8F8F8]">
          <td class="border-l border-t border-b border-[#d9d9d9] py-2 pl-4 pr-2">
            <div class="flex items-center gap-2">
              <img src="{{ asset('storage/default-pfp.jpg') }}" alt="pfp" class="max-w-10 max-h-10 rounded-full border border-[#cacaca]">
              <div>
                <h5 class="font-medium text-sm">John Doe</h5>
                <p class="text-xs text-[#858381]">User</p>
              </div>
            </div>
          </td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">12/09/2024 | 09:30</td>
          <td class="text-sm border-t border-b border-[#d9d9d9] p-2">Add to villa sanguine to wishlist</td>
          <td class="border-t border-b border-r border-[#d9d9d9] py-2 pl-2 pr-4">
            <a href="" class="px-3 py-1 border-2 border-[#02205E] rounded text-[#02205E] font-semibold text-sm">
              Detail
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  


</x-admin-layout>
