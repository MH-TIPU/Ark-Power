@extends('layouts.layout-home')
@section('main-content')
    <div id="background-section"
        class="relative min-h-screen overflow-hidden bg-cover bg-center transition-all duration-1000">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Black shadow overlay -->

        <div class="w-full max-w-screen-xl mx-auto h-screen flex items-center relative z-10">
            {{-- <div class="text-center md:text-left p-5 md:w-1/2 bg-transparent backdrop-blur-[1px]">
                <p class="text-xl text-white">Welcome to</p>
                <h1 class="my-3 text-[#19ADEE] md:text-5xl text-3xl md:font-bold font-semibold uppercase ">Ark Power Limited
                </h1>
                <p class="text-white text-xl">
                    {{ $siteData->tagLine ?? 'Leading the way in power protection, generation, and innovation across Bangladesh.' }}
                </p>
                <div>
                    <a href="{{ route('about') }}">
                        <button
                            class="btn-primary mt-5 md:mb-0 mb-10 text-black text-blod text-lg bg-slate-100 p-2 rounded-lg">About
                            Us</button>
                    </a>
                </div>
            </div> --}}



        </div>
    </div>

    <script>
        // JavaScript to rotate background images
        const images = [
            // 'url("{{ asset('img/bg_h_1.jpg') }}")',
            // 'url("{{ asset('img/bg_h_2.jpg') }}")',
            'url("{{ asset('img/bg_h_8.jpg') }}")',
            'url("{{ asset('img/bg_h_3.jpg') }}")',
            // 'url("{{ asset('img/bg_h_4.jpg') }}")',
            // 'url("{{ asset('img/bg_h_5.jpg') }}")',
            // 'url("{{ asset('img/bg_h_6.jpg') }}")',
            'url("{{ asset('img/bg_h_7.jpg') }}")',
            'url("{{ asset('img/bg_h_9.jpg') }}")',
            'url("{{ asset('img/bg_h_10.jpg') }}")',
            'url("{{ asset('img/bg_h_11.jpg') }}")',
            'url("{{ asset('img/bg_h_12.jpg') }}")',
            'url("{{ asset('img/bg_h_13.jpg') }}")'



        ];

        let currentImageIndex = 0;

        function changeBackground() {
            const section = document.getElementById('background-section');
            section.style.backgroundImage = images[currentImageIndex];

            // Move to the next image in the array
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        // Set interval to change background every 5 seconds
        setInterval(changeBackground, 5000);

        // Initial background setup
        changeBackground();
    </script>


    {{-- Swipper end --}}

    <div class="mx-auto container my-10">
        <div class="relative ">
            <div class="md:grid grid-cols-2 gap-10 mt-10 md:mt-16 w-full max-w-screen-xl p-5 mx-auto">
                <div class="relative w-full h-[330px] md:h-[500px] overflow-hidden rounded-lg shadow-lg">
                    <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out">
                        <img src="{{ asset('/img/home_photo_1.jpg') }}" alt="Slide 0"
                            class="w-full h-full object-cover rounded-lg" />
                    </div>
                </div>
                <div class="space-y-5 p-5 md:p-10 rounded-lg shadow-lg">
                    {{-- <h1 class="text-primary hidden md:block text-xl md:text-4xl text-[#19ADEE]">WELCOME TO <br> ARK POWER
                        LIMITED</h1> --}}
                    {{-- <h2 class="text-primary ">WE SUPPORT ALL YOUR NEEDS!</h2> --}}
                    <p class="leading-6 text-gray-700 ">Ark Power is a leading integrated Power,
                        Electronic &amp; communication technology company that develops, manufactures,
                        markets and sells the related equipments. The Company is dedicated to improving
                        power protection &amp; generation all the sectors throughout the Bangladesh. Ark
                        is focused on improving timely delivery, enhancing the quality and customers
                        satisfaction. Located at a prime business location at Banani, Dhaka, the Capital
                        of Bangladesh.</p>
                    <div class="flex justify-center md:justify-start"><a
                            class="bg-blue-500 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-600 transition duration-300"
                            href="/about">Learn More</a></div>
                </div>
            </div>
        </div>



        <div class="min-h-[70vh] flex items-center justify-center p-5 w-full max-w-screen-xl mx-auto">
            <div>
                <h1 class="text-primary md:text-4xl text-2xl text-center my-10">Products and Services </h1>
                <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1  md:gap-10 gap-2 items-center text-center ">


                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            {{-- <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://static.thenounproject.com/png/2301592-200.png" alt="Data Center"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/data_centre.png') }}" alt="Data Center">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Data Center
                        </h1>
                        <p class="text-center h-20">Customized data center setups with cutting-edge technologies for secure
                            and
                            efficient operations.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">

                            {{-- <img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://icons.veryicon.com/png/o/construction-tools/equipment-2/ups-1.png"
                                alt="UPS"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/ups.jpg') }}" alt="UPS">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">UPS</h1>
                        <p class="text-center h-20">Reliable online UPS systems for continuous power supply during outages,
                            ensuring device safety.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            {{-- <img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.flaticon.com/512/48/48860.png" alt="Communication Equipment"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/sub_station.jpg') }}" alt="Sub-Station Equipments">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Sub-Station Equipments</h1>
                        <p class="text-center h-20">Reliable equipment for stable power distribution, voltage control, and system protection.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            {{-- <img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn5.vectorstock.com/i/1000x1000/35/29/power-voltage-regulator-icon-simple-vector-41053529.jpg"
                                alt="Automatic Voltage Regulator"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/auto_voltage.png') }}" alt="Automatic Voltage Regulator">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Automatic
                            Voltage
                            Regulator</h1>
                        <p class="text-center h-20">Regulators maintaining consistent generator voltage for stable and
                            efficient
                            power delivery.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">

                        {{-- <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/5388/5388782.png" alt="Security System">
                        </div> --}}

                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/secutity.png') }}" alt="Security System">
                        </div>

                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Security
                            System</h1>
                        <p class="text-center h-20">Advanced wireless cameras for seamless surveillance with audio-visual
                            monitoring and data security.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            {{-- <img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/2114/2114385.png" alt="Solar System"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/solar.jpg') }}" alt="Solar System">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Solar System
                        </h1>
                        <p class="text-center h-20">Eco-friendly solar power solutions, including pumps and panels, for
                            sustainable energy generation.</p>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">



                        <div class="w-16 h-16 mb-5 overflow-hidden">

                            {{-- <img
                            class="w-full h-full object-cover transition-transform duration-700 transform"
                            src="https://cdn-icons-png.flaticon.com/512/4824/4824945.png" alt="Transformer"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/transformer.png') }}" alt="Transformer">
                        </div>

                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Transformer
                        </h1>
                        <p class="text-center h-20">Efficient transformers for electrical power distribution, ensuring
                            reliable
                            energy management.

                        </p>
                    </div>


                    <div
                        class="flex flex-col items-center p-4 justify-start hover:bg-gray-50 transition ease-in-out duration-300 transform hover:scale-105">
                        <div class="w-16 h-16 mb-5 overflow-hidden">
                            {{-- <img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://img.freepik.com/premium-vector/generator-icon-logo-vector-design-template_827767-4583.jpg"
                                alt="Generator"> --}}

                            <img class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="{{ asset('img/service_img/Generator.png') }}" alt="Generator">

                        </div>
                        <h1 class="text-lg md:text-xl lg:text-2xl  md:font-bold text-center mb-5 h-6 md:h-12">Generator</h1>
                        <p class="text-center h-20">Gas and diesel generators for diverse applications, providing
                            uninterrupted
                            power supply.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="min-h-auto  flex items-center justify-center p-5 mt-10 w-full max-w-screen-xl mx-auto">

            {{-- mannagment area  --}}
            <div>
                <h1 class="text-primary md:text-4xl text-2xl text-center my-10">Management</h1>

                @if ($managments->isNotEmpty())
                    <div class="grid grid-cols-2 gap-4 items-center flex justify-center">
                        @foreach ($managments->reverse() as $management)
                            <div class="flex flex-col items-center">
                                <img src="{{ asset('storage/' . $management->image) }}" alt="{{ $management->name }}"
                                    class="w-24 h-24 rounded object-cover">
                                <h2 class="text-lg font-bold mt-2">{{ $management->name }}</h2>
                                <p class="text-sm text-gray-500">{{ $management->designation }}</p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center p-4">No management data available.</p>
                @endif

            </div>
            {{-- end managment area  --}}
        </div>
    
        {{-- Affiliations --}}
        <div class="p-5 w-full max-w-screen-xl mx-auto">
            <div class="w-full max-w-screen-xl mx-auto">
                <h1 class="text-primary md:text-4xl text-2xl text-center my-10">Our Affiliations</h1>
                {{-- <h1 class="text-2xl font-bold uppercase mb-7 text-center">Our Affiliations</h1> --}}
                @if ($affiliations->isNotEmpty())
                    <swiper-container class="mySwiper" slides-per-view="6" space-between="10" free-mode="true"
                        loop="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
                        @foreach ($affiliations as $affiliation)
                            <swiper-slide class="swiper-slide">
                                <a href="{{ $affiliation->url ?? '#' }}" target="_blank">
                                    <img src="{{ asset('storage/' . $affiliation->logo) }}" alt="Affiliation Logo"
                                        class="w-24 h-24 object-contain">
                                </a>
                            </swiper-slide>
                        @endforeach
                    </swiper-container>
                @else
                    <p class="text-center text-gray-500 font-medium">No affiliations to display at the moment.</p>
                @endif
            </div>
        </div>

        {{-- Affiliations End --}}
    </div>
@endsection
