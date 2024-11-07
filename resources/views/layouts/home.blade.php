@extends('layouts.layout')
@section('main-content')

    <div id="background-section" class="relative min-h-screen overflow-hidden bg-cover bg-center transition-all duration-1000">
        <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Black shadow overlay -->
        <div class="container mx-auto h-screen flex items-center relative z-10">
            <div class="text-center md:text-left p-5 md:w-1/2 bg-transparent backdrop-blur-sm backdrop-blur-[1px]">
                <p class="text-xl text-white">Welcome to</p>
                <h1 class="my-3 text-[#19ADEE] md:text-5xl text-3xl md:font-bold font-semibold uppercase ">Ark Power Limited</h1>
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium libero fugiat magnam. Natus fugit
                    deserunt dignissimos blanditiis id tempore praesentium veritatis? Ad, rerum. Veniam, iusto illo dolorum
                    recusandae sint dolorem?</p>
                <div>
                    <a href="/about-us">
                        <button class="btn-primary mt-5 md:mb-0 mb-10 text-black text-blod text-xl bg-slate-100 p-3 rounded-lg">About Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to rotate background images
        const images = [
            'url("{{ asset('img/bg_h_1.jpg') }}")', 
            'url("{{ asset('img/bg_h_2.jpg') }}")',
            'url("{{ asset('img/bg_h_3.jpg') }}")'
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
        <div class="relative">
            <div class="md:grid grid-cols-2 gap-10 mt-10 md:mt-16">
                <div class="relative w-full h-[330px] md:h-[500px] overflow-hidden rounded-lg shadow-lg">
                    <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0">
                        <img src="https://images.unsplash.com/photo-1624395149011-470cf6f6ec02?q=80&amp;w=2851&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Slide 0" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black/30"></div>
                    </div>
                    <div
                        class="absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-100">
                        <img src="https://images.unsplash.com/photo-1427694012323-fb5e8b0c165b?q=80&amp;w=2978&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Slide 1" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black/30"></div>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0">
                        <img src="https://images.unsplash.com/photo-1624395148974-f929045c9093?q=80&amp;w=2734&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Slide 2" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute inset-0 bg-black/30"></div>
                    </div>
                </div>
                <div class="space-y-5 p-5 md:p-10 bg-white/90 rounded-lg shadow-lg">
                    <h1 class="text-primary hidden md:block text-xl md:text-4xl text-[#19ADEE]">WELCOME TO <br> ARK
                        POWER LIMITED</h1>
                    <h2 class="text-primary ">WE SUPPORT ALL YOUR NEEDS!</h2>
                    <p class="leading-6 text-gray-700 ">Ark Power is a leading integrated Power,
                        Electronic &amp; communication technology company that develops, manufactures,
                        markets and sells the related equipments. The Company is dedicated to improving
                        power protection &amp; generation all the sectors throughout the Bangladesh. Ark
                        is focused on improving timely delivery, enhancing the quality and customers
                        satisfaction. Located at a prime business location at Banani, Dhaka, the Capital
                        of Bangladesh.</p>
                    <div class="flex justify-center md:justify-start"><a
                            class="bg-blue-500 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-600 transition duration-300"
                            href="/about-us">Learn More</a></div>
                </div>
            </div>
        </div>
        <div class="min-h-[70vh] bg-slate-50 flex items-center justify-center p-6">
            <div>
                <h1 class="text-primary md:text-4xl text-2xl text-center my-10">Products and Services
                </h1>
                <div class="grid md:grid-cols-4 grid-cols-2 md:gap-10 gap-2 justify-center items-center text-center">
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/5388/5388782.png" alt="Security System">
                        </div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Security System</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.freepik.com/512/2114/2114385.png" alt="Solar System"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Solar System</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.flaticon.com/512/4824/4824945.png" alt="Transformer"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Transformer</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://img.freepik.com/premium-vector/generator-icon-logo-vector-design-template_827767-4583.jpg"
                                alt="Generator"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Generator</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://static.thenounproject.com/png/2301592-200.png" alt="Data Center"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Data Center</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://icons.veryicon.com/png/o/construction-tools/equipment-2/ups-1.png"
                                alt="UPS"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">UPS</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn-icons-png.flaticon.com/512/48/48860.png" alt="Communication Equipment">
                        </div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Communication
                            Equipment</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                    <div class="flex flex-col items-center p-4">
                        <div class="w-16 h-16 mb-5 overflow-hidden"><img
                                class="w-full h-full object-cover transition-transform duration-700 transform"
                                src="https://cdn5.vectorstock.com/i/1000x1000/35/29/power-voltage-regulator-icon-simple-vector-41053529.jpg"
                                alt="Automatic Voltage Regulator"></div>
                        <h1 class="md:text-2xl text-xl md:font-bold text-center">Automatic Voltage
                            Regulator</h1>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Perspiciatis, quis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-[70vh] bg-slate-50 flex items-center justify-center p-5 mt-10">
            <div>
                <div class="grid md:grid-cols-2 gap-20">
                    <div>
                        <h1 class="text-2xl font-bold uppercase mb-7">News and event</h1>
                        <div
                            class="scrollbar-thin scrollbar-thumb-rounded scrollbar-thumb-slate-300 scrollbar-w-2 scrollbar-track-transparent overflow-y-auto h-[42vh] border rounded-lg space-y-4 pr-3">
                            <a href="/newsDetails/66641be79dfc4a4492fa2eae">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">title for Events</h1><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-2xl"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66f29f5716cc5682d4d35a94">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">reliable energy solutions.
                                        </h1><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66f29e2f1fbf1e96b1a9bf8e">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">Ark Power Ltd. is a leading
                                            power supply distribution company in Bangladesh</h1><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-2xl"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66f29f3316cc5682d4d35a93">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">Ark Power Ltd. is a leading
                                            power</h1><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/667a5f2d2fc6c06444a7754a">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">Seminar on “Increase
                                            productivity through Quality Power”</h1><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-2xl"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66f11cc9326bec327ab1b3d9">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">A summer day</h1><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-2xl"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66641be79dfc4a4492fa2ead">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">title for Events 6</h1><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66641be79dfc4a4492fa2eaa">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">title for news 3ssss</h1><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a><a href="/newsDetails/66641be79dfc4a4492fa2ea9">
                                <div class="">
                                    <div class="flex items-center justify-between gap-5 border-b hover:text-[#00ADF2] ">
                                        <h1 class="text-xl font-bold p-3">title for news 2ssss</h1><svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 448 512" class="text-2xl" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold uppercase mb-7">Management</h1>
                        <div class="overflow-hidden block">
                            <nav>
                                <ul role="tablist"
                                    class="flex relative bg-blue-gray-50 bg-opacity-60 rounded-lg p-1 flex-row">
                                    <li role="tab"
                                        class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer"
                                        data-value="md">
                                        <div class="z-20 text-inherit">Managing Director (MD)</div>
                                        <div class="absolute inset-0 z-10 h-full bg-white rounded-md shadow"
                                            style="transform: none; transform-origin: 50% 50% 0px; opacity: 1;">
                                        </div>
                                    </li>
                                    <li role="tab"
                                        class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer"
                                        data-value="ceo">
                                        <div class="z-20 text-inherit">Chief Executive Officer (CEO)
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div class="block w-full relative bg-transparent overflow-hidden">
                                <div role="tabpanel"
                                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed"
                                    data-value="md" style="opacity: 1; position: relative; z-index: 2;">
                                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                                        <div class="col-span-2"><img
                                                src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1769"
                                                alt=""></div>
                                        <div class="col-span-3 mt-3">
                                            <h1 class="text-xl font-bold">Managing Director</h1>
                                            <p class="my-3">It really matters and then like it really
                                                doesn't matter.
                                                What matters is the people who are sparked by it. And
                                                the people
                                                who are like offended by it, it doesn't matter.</p>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel"
                                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed"
                                    data-value="ceo"
                                    style="opacity: 0; position: absolute; top: 0px; left: 0px; z-index: 1;">
                                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                                        <div class="col-span-2"><img
                                                src="https://beyondceocoaching.com/wp-content/uploads/elementor/thumbs/african-man-in-blue-elegant-costume-89AHPTZ-pjcsg7ortaugl52xjnhb9ximql1l21bne39c1reu3k.jpg"
                                                alt=""></div>
                                        <div class="col-span-3 mt-3">
                                            <h1 class="text-xl font-bold">Chief Executive Officer</h1>
                                            <p class="my-3">Because it's about motivating the doers.
                                                Because I'm here
                                                to follow my dreams and inspire other people to follow
                                                their dreams, too.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
