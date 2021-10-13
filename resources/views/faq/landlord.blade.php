@extends('layouts.app')

@section('main')
  <div class="w-11/12 mx-auto mb-5">
    <h2 class="text-primary text-2xl text-left font-semibold px-10 py-10">
        LandLord FAQ's (Frequently Asked Questions)
    </h2>

    <div class="bg-white px-5 py-2 rounded-lg shadow-lg my-5" x-data="{isOpen:false}">
      <h3 class="text-primary font-semibold text-xl" @click="isOpen = !isOpen" @click.away="isOpen=false">
        This is a demo Faq
        <span class="inline-block float-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-5 h-5">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
      </h3>

      <p class="text-gray-600 py-2 px-3" x-show="isOpen" x-transition>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore voluptas delectus maiores, vero ipsum doloremque voluptatem ipsam cumque nemo consectetur sit deserunt omnis. Consequatur mollitia laboriosam voluptatibus enim aliquam aut.
      </p>
    </div>

    <div class="bg-white px-5 py-2 rounded-lg shadow-lg my-5" x-data="{isOpen:false}">
      <h3 class="text-primary font-semibold text-xl" @click="isOpen = !isOpen" @click.away="isOpen=false">
        This is a demo Faq
        <span class="inline-block float-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down w-5 h-5">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
      </h3>

      <p class="text-gray-600 py-2 px-3" x-show="isOpen" x-transition>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore voluptas delectus maiores, vero ipsum doloremque voluptatem ipsam cumque nemo consectetur sit deserunt omnis. Consequatur mollitia laboriosam voluptatibus enim aliquam aut.
      </p>
    </div>

      
  </div>
@endsection