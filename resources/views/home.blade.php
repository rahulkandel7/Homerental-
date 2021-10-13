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
    @if (Session::has('sucess'))
        <div class="w-full bg-green-600 text-white px-3 py-2">
            {{ Session::get('sucess') }}
        </div>
    @endif
    @if (Session::has('delete'))
        <div class="w-full bg-red-600 text-white px-3 py-2">
            {{ Session::get('delete') }}
        </div>
    @endif
    <!-- Hero Section Start -->
        <div class="w-full bg-gray-50">
            <div class="w-11/12 mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="place-self-center">
                        <h2 class="md:text-3xl text-2xl max-w-md font-bold text-teritory" style="font-family: 'Poppins', serif;">
                            Find your Perfect Place with <span class="text-primary">Homie Nepal</span>
                        </h2>
                        <p class="text-gray-500 pt-2 text-sm md:text-base md:pt-4 text-justify max-w-md" style="font-family: 'Poppins', serif;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione non dicta dolorem facilis minima iusto quam minus itaque asperiores consequuntur. Ducimus atque repellendus nihil nemo expedita ab numquam dolorum possimus.
                        </p>
                        <div class="bg-gray-200 rounded-full shadow-md  h-12 mt-2 flex">
                            <div class="relative w-full">
                                <form action="{{ route('search') }}" method="get">
                                    <span class="text-primary pl-5 text-xl"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" name="search" id="search" placeholder="Where you want to go?" class="border-0 bg-transparent focus:border-0 focus:ring-transparent outline-none mt-1">
                                    <input type="submit" value="Search" class="hover:bg-primary cursor-pointer h-12 px-7 rounded-full text-white absolute right-0" >
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="py-10 px-10 md:px-0">
                        <img src="{{asset('images/background/hero.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    <!-- Hero Section Close -->

    <!-- Our Services Start -->
        <div class="w-11/12 mx-auto my-10">
            <h2 class="text-primary text-4xl text-center font-bold">
                Our Services
            </h2>
            <p class="text-gray-400 text-center my-2">
                when it comes to room finding. We are here for your every help.
            </p>

            <div class="w-10/12 mx-auto mt-5">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <div class="bg-white shadow-xl rounded-lg service transition-all">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/background/hero.png')}}" alt="" class="w-32 py-2">

                        </div>
                            <p class="text-gray-500 font-semibold text-center pt-3">
                                Save Time & Money
                            </p>
                            <p class="text-center text-gray-500 font-light text-sm px-5 py-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum molestiae officiis aperiam error voluptates eum ratione? Reprehenderit, ipsa odit tempore labore eveniet, ab tempora et in illo itaque deserunt excepturi.
                            </p>
                    </div>

                    <div class="bg-white shadow-xl service rounded-lg">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/background/hero.png')}}" alt="" class="w-32 py-2">

                        </div>
                            <p class="text-gray-500 font-semibold text-center pt-3">
                                A Responsive Team
                            </p>
                            <p class="text-center text-gray-500 font-light text-sm px-5 py-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum molestiae officiis aperiam error voluptates eum ratione? Reprehenderit, ipsa odit tempore labore eveniet, ab tempora et in illo itaque deserunt excepturi.
                            </p>
                    </div>

                    <div class="bg-white shadow-xl service rounded-lg">
                        <div class="flex justify-center items-center">
                            <img src="{{asset('images/background/hero.png')}}" alt="" class="w-32">

                        </div>
                            <p class="text-gray-500 font-semibold text-center pt-3">
                                Fixed Fee & Support
                            </p>
                            <p class="text-center text-gray-500 font-light text-sm px-5 py-2">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum molestiae officiis aperiam error voluptates eum ratione? Reprehenderit, ipsa odit tempore labore eveniet, ab tempora et in illo itaque deserunt excepturi.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    <!-- Our Services Close -->

    <!-- Info About US-->
        <div class="w-11/12 mx-auto">
            <div class="grid md:grid-cols-2 grid-cols-1">
                <div>
                    <img src="{{asset('images/bg.webp')}}" class="rounded-lg">
                </div>

                <div class="px-10">
                    <h2 class="md:text-3xl text-2xl max-w-md font-semibold text-teritory" style="font-family: 'Poppins', serif;">
                        It's Easier Than Ever to Find a Home with <span class="text-primary font-bold">Homie Nepal</span>
                    </h2>

                    <p class="text-gray-700 py-5 text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus quo quas ipsam repudiandae quis, perspiciatis porro suscipit ipsa hic eum. Rem dolorem doloremque porro, error ducimus est quo aliquid.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus quo quas ipsam repudiandae quis, perspiciatis porro suscipit ipsa hic eum. Rem dolorem doloremque porro, error ducimus est quo aliquid.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus quo quas ipsam repudiandae quis, perspiciatis porro suscipit ipsa hic eum. Rem dolorem doloremque porro, error ducimus est quo aliquid.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates doloribus quo quas ipsam repudiandae quis, perspiciatis porro suscipit ipsa hic eum. Rem dolorem doloremque porro, error ducimus est quo aliquid.
                    </p>

                    <a href="" class="px-4 py-1 bg-primary text-white border-2 rounded-lg border-primary hover:bg-transparent hover:text-primary">Know More</a>
                </div>
            </div>
        </div>
    <!-- Info Close -->

    <!-- Our Testonomials Start -->
        <div class="w-11/12 mx-auto my-10">
            <h2 class="text-primary text-4xl text-center font-bold">
                Our Testonomials
            </h2>

            <div class="my-10  container mx-auto flex flex-col md:flex-row shadow-md rounded-md overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
                <div class="relative w-full py-2 md:py-24 bg-primary md:w-1/2 flex flex-col item-center justify-center">
                    
                    <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
                    
                    <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
                        <span class="md:block">What Our</span>
                        <span class="md-block">Customers</span>
                        <span class="block">Are Saying!</span>
                    </div>
    
                    <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                        <button 
                            class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-secondary font-bold w-12 h-10"
                            x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                            &#8592;
                        </button><button 
                            class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-secondary font-bold w-12 h-10"
                            x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                            &#8594;
                          </button>
                    </div>
                </div>
    
                <div class="bg-gray-100 md:w-1/2">
                    <div class="flex flex-col h-full relative">
    
                        <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.7w-72 mb-21-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
                        </div>
                         
                        <div class="h-full relative z-10">
                            <div x-show.immediate="testimonialActive === 1">
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </p>
                            </div>
                            
                            <div x-show.immediate="testimonialActive === 2">
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                                    Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                </p>
                            </div>
                            
                            <div x-show.immediate="testimonialActive === 3"> 
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                                </p>
                            </div>
                        </div>
    
                        <div class="flex my-4 justify-center items-center">
                            <button 
                                @click.prevent="testimonialActive = 1" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-yellow-100 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-secondary text-white': testimonialActive == 1 }"	
                            >JD</button>
                            <button 
                                @click.prevent="testimonialActive = 2" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-secondary rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-yellow-100 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-secondary text-white': testimonialActive == 2 }"	
                            >WD</button>
                            <button 
                                @click.prevent="testimonialActive = 3" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-secondary rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-yellow-100 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-secondary text-white': testimonialActive == 3 }"
                            >JW</button>
                        </div>
                         
                        <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                            <div class="text-center" x-show="testimonialActive == 1">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Doe</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">CEO, ABC Inc.</small>
                            </div>
    
                            <div class="text-center" x-show="testimonialActive == 2">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Winter Doe</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">CTO, XYZ Corp.</small>
                            </div>
    
                            <div class="text-center" x-show="testimonialActive == 3">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Wick</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">Product Manager, Fake Corp.</small>
                            </div>	 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <!-- Our Testonomials Close -->

    <!-- Blog Section Start -->
        <div class="w-11/12 mx-auto mb-5">
            <h2 class="text-primary text-4xl text-center font-bold">
                News & Articles
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

            <div class="flex justify-center items-center mt-5">
                <a href="" class="px-4 py-1 bg-primary text-white border-2 rounded-lg border-primary hover:bg-transparent hover:text-primary shadow hover:shadow-md">View More</a>
            </div>

        </div>
    <!-- Blog Section Close -->

@endsection