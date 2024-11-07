<div>
    <h1 class="text-2xl font-bold uppercase mb-7">Management</h1>
    <div class="overflow-hidden block">
        <nav>
            <ul role="tablist" class="flex relative bg-blue-gray-50 bg-opacity-60 rounded-lg p-1 flex-row">
                <!-- Managing Director Tab -->
                <li wire:click="setActiveTab('md')" role="tab"
                    class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer {{ $activeTab === 'md' ? 'bg-white shadow rounded-md' : '' }}"
                    data-value="md">
                    <div class="z-20 text-inherit">Managing Director (MD)</div>
                </li>

                <!-- Chief Executive Officer Tab -->
                <li wire:click="setActiveTab('ceo')" role="tab"
                    class="flex items-center justify-center text-center w-full h-full relative bg-transparent py-1 px-2 text-blue-gray-900 antialiased font-sans text-base font-normal leading-relaxed select-none cursor-pointer {{ $activeTab === 'ceo' ? 'bg-white shadow rounded-md' : '' }}"
                    data-value="ceo">
                    <div class="z-20 text-inherit">Chief Executive Officer (CEO)</div>
                </li>
            </ul>
        </nav>

        <div class="block w-full relative bg-transparent overflow-hidden">
            <!-- Managing Director Content -->
            @if ($activeTab === 'md')
                <div role="tabpanel"
                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed">
                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                        <div class="col-span-2">
                            <img src="https://wac-cdn.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg?cdnVersion=1769"
                                alt="">
                        </div>
                        <div class="col-span-3 mt-3">
                            <h1 class="text-xl font-bold">Managing Director</h1>
                            <p class="my-3">It really matters and then like it really doesn't matter. What matters is
                                the people who are sparked by it. And the people who are like offended by it, it doesn't
                                matter.</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Chief Executive Officer Content -->
            @if ($activeTab === 'ceo')
                <div role="tabpanel"
                    class="w-full h-max text-gray-700 p-4 antialiased font-sans text-base font-light leading-relaxed">
                    <div class="md:grid grid-cols-5 md:gap-10 gap-5">
                        <div class="col-span-2">
                            <img src="https://beyondceocoaching.com/wp-content/uploads/elementor/thumbs/african-man-in-blue-elegant-costume-89AHPTZ-pjcsg7ortaugl52xjnhb9ximql1l21bne39c1reu3k.jpg"
                                alt="">
                        </div>
                        <div class="col-span-3 mt-3">
                            <h1 class="text-xl font-bold">Chief Executive Officer</h1>
                            <p class="my-3">Because it's about motivating the doers. Because I'm here to follow my
                                dreams and inspire other people to follow their dreams, too.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
