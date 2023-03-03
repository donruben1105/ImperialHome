@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="flex fixed left-0 top-0 transform bg-yellow-500 text-white px-20 py-3 animate__animated animate__fadeInDown">
  <div class="flex items-center justify-center mx-3">
    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </div>
  <p>{{session('message')}}</p>
</div>
@endif