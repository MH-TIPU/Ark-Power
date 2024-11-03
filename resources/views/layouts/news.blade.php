@extends('layouts.layout')
@section('main-content')
    <div class="min-h-[calc(100vh-335px)]">
        <div class="min-h-screen container mx-auto bg-slate-50 flex items-center justify-center p-6">
            <div>
                <div class="md:mt-24 mt-14">
                    <h1 class="text-primary text-center md:text-5xl text-3xl uppercase">
                        News &amp; Events
                    </h1>
                </div>
                <div class="flex justify-center my-5">
                    <button class="px-4 py-2 mx-2 bg-blue-600 text-white">
                        All</button><button class="px-4 py-2 mx-2 bg-gray-200">News</button><button
                        class="px-4 py-2 mx-2 bg-gray-200">Events</button>
                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5 my-10">
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558449028-b53a39d100fc?q=80&amp;w=1000&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c29sYXIlMjBlbmVyZ3l8ZW58MHx8MHx8fDA%3D"
                                alt="title for Events"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">Events</p>
                            <p>2025-01-23</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66641be79dfc4a4492fa2eae">title for Events</a>
                        <div class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.Perferendis, eligendi ipsa. Harum, eos volup.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co.com/nfKVXfq/What-are-the-Different-Types-Of-Motorcycle-Engines.webp"
                                alt="reliable energy solutions."
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">News</p>
                            <p>2024-09-25</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66f29f5716cc5682d4d35a94">reliable energy solutions.</a>
                        <div class="mt-2">
                            Ark Power Ltd. is a leading power supply distribution
                            company in Bangladesh, committed to delivering.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co.com/Phh29YS/electric-motor-2.jpg"
                                alt="Ark Power Ltd. is a leading power supply distribution company in Bangladesh"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">News</p>
                            <p>2024-09-24</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66f29e2f1fbf1e96b1a9bf8e">Ark Power Ltd. is a leading power supply
                            distribution
                            company in Bangladesh</a>
                        <div class="mt-2">
                            Ark Power Ltd. is a leading power supply distribution
                            company in Bangladesh, committed to delivering.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co.com/gMgTRPc/motor-rewinding-jpg-500x500.webp"
                                alt="Ark Power Ltd. is a leading power"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">Events</p>
                            <p>2024-09-24</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66f29f3316cc5682d4d35a93">Ark Power Ltd. is a leading power</a>
                        <div class="mt-2">
                            Ark Power Ltd. is a leading power supply distribution
                            company in Bangladesh, committed to delivering.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co/VWTK8WV/DSC-5565.jpg"
                                alt="Seminar on “Increase productivity through Quality Power”"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">News</p>
                            <p>2024-09-23</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/667a5f2d2fc6c06444a7754a">Seminar on “Increase productivity through Quality
                            Power”</a>
                        <div class="mt-2">
                            As we like to drink purified water to keep our body healthy,
                            one can keep their machines healthy by .....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co.com/r3KHc0V/7c1cf935-f98c-4a59-aba2-6bc999ae8a9a.jpg"
                                alt="A summer day"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">Events</p>
                            <p>2024-09-23</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66f11cc9326bec327ab1b3d9">A summer day</a>
                        <div class="mt-2">
                            On a scorching summer day, the sun hung in the sky like a
                            blazing orb, casting its relentless heat u.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://i.ibb.co.com/YjNc1mq/made-in-china.webp" alt="title for Events 6"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">Events</p>
                            <p>2024-09-19</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66641be79dfc4a4492fa2ead">title for Events 6</a>
                        <div class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.Perferendis, eligendi ipsa. Harum, eos volup.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                    <div class="border p-2">
                        <div class="relative h-44 overflow-hidden">
                            <img src="https://www.arkpowerltd.com.bd/assets/images/news&amp;event/DSC_5601.JPG"
                                alt="title for news 3ssss"
                                class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
                        </div>
                        <div class="flex justify-between items-center my-2">
                            <p class="font-bold uppercase">News</p>
                            <p>2024-05-23</p>
                        </div>
                        <a class="hover:underline text-2xl text-gray-700 font-bold"
                            href="/newsDetails/66641be79dfc4a4492fa2eaa">title for news 3ssss</a>
                        <div class="mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.Perferendis, eligendi ipsa. Harum, eos volup.....
                            <a class="text-blue-700 hover:underline" href="{{ route('newsdetails') }}">Read
                                Details</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-2 mt-6">
                    <button class="px-4 py-2 bg-gray-300 rounded" disabled="">
                        Previous</button><button class="px-4 py-2 bg-blue-600 text-white rounded">
                        1</button><button class="px-4 py-2 bg-gray-200 rounded">2</button><button
                        class="px-4 py-2 bg-blue-500 text-white rounded">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
