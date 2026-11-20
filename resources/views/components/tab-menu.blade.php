@php
  $class = $class ?? '';
@endphp

<h4 class="cursor-pointer py-2 {{$class}}" onclick="toggleActive(this)">{{$menuName}}</h4>

<script>
  function toggleActive(element) {  
    let currentElementDetail;
    currentElementDetail = document.querySelector(`[data-content="${element.textContent}"]`)

    // this could be a bug in the future
    const allElementDetail = document.querySelectorAll('[data-content]')



    console.log(element.textContent)

    const availableDate = document.querySelector('.available-date');
    const description = document.querySelector('.description');
    const facility = document.querySelector('.facility');
    const location = document.querySelector('.location');
    const activeProperty = document.querySelector('.active-property')
    const nonactiveProperty = document.querySelector('.nonactive-property')
    

    // Get all tab elements
    const allTabs = document.querySelectorAll('.tab-menus h4');
    
    // Loop through all tabs and remove the active classes
    allTabs.forEach(tab => {
      tab.classList.remove('font-bold', 'text-[#10398E]', 'opacity-100', 'border-b-4', 'border-[#10398E]');
      tab.classList.add('opacity-75');
    });

    allElementDetail.forEach(e => {
        e.classList.add('hidden')
    })

    // Add the active classes to the clicked tab
    element.classList.add('font-bold', 'text-[#10398E]', 'opacity-100', 'border-b-4', 'border-[#10398E]');
    element.classList.remove('opacity-75');

    
    console.log(currentElementDetail)

    if (element.textContent === 'Available Date'){
      availableDate.classList.toggle('hidden')
    } else if (element.textContent === 'Description'){
      description.classList.toggle('hidden')
    } else if (element.textContent === 'Facility'){
      facility.classList.toggle('hidden')
    } else if (element.textContent === 'Location'){
      location.classList.toggle('hidden')
    } else if (element.textContent === 'Active Property'){
      activeProperty.classList.toggle('hidden')
    } else if (element.textContent === 'Nonactive Property'){
      nonactiveProperty.classList.toggle('hidden')
    }
  }
</script>