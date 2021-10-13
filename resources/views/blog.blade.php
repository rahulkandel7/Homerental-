@extends('layouts.app')

@section('css')
    <style>
        .service{
            transition: all .3s ease-in-out;
        }
        .service:hover{
            transform: translateY(-.5rem);
    }
    </style>
@endsection

@section('main')
    <div class="w-11/12 mx-auto mb-5">
        <h2 class="text-primary text-2xl text-left font-semibold px-10 py-10">
            Homie Nepal Blogs
        </h2>

        <div class="flex flex-wrap justify-start mt-5">

            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-lg mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify text-sm max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>

            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-xl mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>
            

            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-xl mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>
            

            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-xl mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>
            
            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-xl mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>
            
            <div class="shadow-lg hover:shadow-xl cursor-pointer w-72 mb-2 p-5 mr-2 service">
                <img src="{{asset('images/background/hero.png')}}" alt="">
                <p class="text-black font-bold text-xl mt-2">
                    Here will be Title
                </p>
                <p class="text-gray-500 text-justify max-h-24 overflow-hidden">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi reprehenderit nihil at suscipit? Ab facilis assumenda officiis modi cumque provident saepe laudantium harum possimus! Dolorum assumenda enim autem ullam.
                </p>
                <p class="text-gray-500 text-sm mt-2 font-semibold">
                    2021/12/30
                </p>
            </div>
            

        </div>

        

    </div>
@endsection