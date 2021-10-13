@extends('layouts.app')

@section('main')

    <div class="11/12 mx-auto">
        <div class="flex justify-center items-center">
            <h2 class="font-semibold my-3 text-primary text-2xl px-4">
                Why Homie Nepal To Find a Place To Rent
            </h2>
        </div>
    </div>

    <div class="w-11/12 md:w-9/12 mx-auto mt-5">
        <div class="grid grid-cols-1 md:grid-cols-2">

            <!-- Book Home -->
                <div class="px-5">
                    <h2 class="font-bold text-primary text-xl">
                        Book your new home from home
                    </h2>

                    <p class="text-gray-500 text-sm text-justify pt-5">
                        It’s payers keepers! Once you’ve paid the first month's rent, the place is yours. You’ll receive an immediate confirmation which can often be used as proof of residency for any visa applications or resident permits you may need. The beauty of booking online means there’s no need for viewings. We believe that no one should be disadvantaged based on where they live.
                    </p>
                </div>

                <div class="w-full  h-64 bg-gray-100 shadow-2xl mb-10 md:mb-32 md:ml-10 flex justify-center place-self-center">
                    <img src="{{asset('images/tenant/book.webp')}}" class="h-52 mt-5">
                </div>
            <!-- Book Home Close -->

            <!-- Search fast -->
                <div class="w-full  h-64 bg-gray-100 shadow-2xl mb-10 md:mb-32 md:mr-10 flex justify-center place-self-center">
                    <img src="{{asset('images/tenant/search.webp')}}" class="h-52 mt-5">
                </div>

                <div class="px-5">
                    <h2 class="font-bold text-primary text-xl">
                        Search fast, search smart
                    </h2>

                    <p class="text-gray-500 text-sm text-justify pt-5 mb-5 md:mb-0">
                        We’ve engineered a wealth of features to help you find your perfect place, pronto. From search alerts that land new listings straight in your email to pre-qualification filters, we champion superior matching. Need some help? Our Customer Service team is ready to offer you some speedy support!
                    </p>
                </div>
            <!-- Search fast close -->

            <!-- Real Feel -->
                <div class="px-5">
                    <h2 class="font-bold text-primary text-xl">
                        Get a real feel for the place
                    </h2>

                    <p class="text-gray-500 text-sm text-justify pt-5">
                        Before booking anything, you deserve to know everything. Check out a listing’s up-to-date availability, amenities, photos, videos, floor plans, and translated descriptions. Feel even more confident about booking a place by checking it out on the map in the listing gallery. Like what you see? Favourite it! Feel even more confident about booking with our Neighbourhood Guides. Get clued-up about the area you want to move to.
                    </p>
                </div>

                <div class="w-full  h-64 bg-gray-100 shadow-2xl mb-10 md:mb-32 md:ml-10 flex justify-center place-self-center">
                    <img src="{{asset('images/tenant/real.webp')}}" class="h-52 mt-5">
                </div>
            <!-- Real Feel Close -->

            <!-- Safe -->
                <div class="w-full  h-64 bg-gray-100 shadow-2xl mb-10 md:mb-32 md:mr-10 flex justify-center place-self-center">
                    <img src="{{asset('images/tenant/search.webp')}}" class="h-52 mt-5">
                </div>

                <div class="px-5">
                    <h2 class="font-bold text-primary text-xl">
                        Safe and Sound
                    </h2>

                    <p class="text-gray-500 text-sm text-justify pt-5 mb-5 md:mb-0">
                        Deposits, rent. They needn’t be scary words! On our platform, all of your payments are protected. We have anti-fraud measures to safeguard your experience and rest assured, if the landlord cancels, you’ll receive a full refund. We securely hold your first month’s rent until 48 hours after your move-in. Based on our ‘no news is good news’ approach, we’ll only payout the advertiser after this time.
                    </p>
                </div>
        <!-- Safe close -->

        </div>

    </div>
@endsection