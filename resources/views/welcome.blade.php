@extends('layouts.app')

@section('content')

    <style>
        @media(prefers-color-scheme: dark){ .bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(200,200,255,0.15)'/%3E%3C/svg%3E");}}@media(prefers-color-scheme: light){.bg-dots{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,50,0.10)'/%3E%3C/svg%3E")}}
    </style>

    <div class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">

        @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex justify-center">
                <svg class="w-auto h-16 text-indigo-600 bg-gray-100 dark:bg-gray-900" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/>
                </svg>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3 lg:gap-8">
                    <x-card title="Slow request" href="{{ route('slow-request') }}" >
                        <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.--><path d="M336 240V208c0-70.7-57.3-128-128-128S80 137.3 80 208v32H336zm48-32v41.2c0 21.4-17.4 38.8-38.8 38.8H70.8C49.4 288 32 270.6 32 249.2V208c0-97.2 78.8-176 176-176s176 78.8 176 176zm96 80c-8.3 0-16.3-1.6-23.6-4.5C440.3 328 400.4 361 352 367v1 72c0 22.1-17.9 40-40 40H264c-22.1 0-40-17.9-40-40V368H192v72c0 22.1-17.9 40-40 40H104c-22.1 0-40-17.9-40-40V368H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H64h48 32 48 32 48 32 32c44.2 0 80-35.8 80-80V224 192 176c0-35.3 28.7-64 64-64c53 0 96 43 96 96v16c0 35.3-28.7 64-64 64H480zM272 368v64h32V368H272zm-160 0v64h32V368H112zM496 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"/></svg>
                    </x-card>

                    <x-card title="Slow outgoing request" href="{{ route('slow-outgoing-request') }}" >
                        <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.--><path d="M336 240V208c0-70.7-57.3-128-128-128S80 137.3 80 208v32H336zm48-32v41.2c0 21.4-17.4 38.8-38.8 38.8H70.8C49.4 288 32 270.6 32 249.2V208c0-97.2 78.8-176 176-176s176 78.8 176 176zm96 80c-8.3 0-16.3-1.6-23.6-4.5C440.3 328 400.4 361 352 367v1 72c0 22.1-17.9 40-40 40H264c-22.1 0-40-17.9-40-40V368H192v72c0 22.1-17.9 40-40 40H104c-22.1 0-40-17.9-40-40V368H24c-13.3 0-24-10.7-24-24s10.7-24 24-24H64h48 32 48 32 48 32 32c44.2 0 80-35.8 80-80V224 192 176c0-35.3 28.7-64 64-64c53 0 96 43 96 96v16c0 35.3-28.7 64-64 64H480zM272 368v64h32V368H272zm-160 0v64h32V368H112zM496 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"/></svg>
                    </x-card>

                    <x-card title="Dispatch slow job" href="{{ route('dispatch-slow-job') }}" >
                        <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.--><path d="M448 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm38.3 119.8c-9 9.8-8.3 25 1.5 33.9L180.5 256l-76.7 70.3c-9.8 9-10.4 24.1-1.5 33.9s24.1 10.4 33.9 1.5l96-88c5-4.5 7.8-11 7.8-17.7s-2.8-13.1-7.8-17.7l-96-88c-9.8-9-25-8.3-33.9 1.5zM248 336c-13.3 0-24 10.7-24 24s10.7 24 24 24H392c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"/></svg>
                    </x-card>

                    <x-card title="Throw exception" href="{{ route('throw-exception') }}" >
                        <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.--><path d="M248.4 84.3c1.6-2.7 4.5-4.3 7.6-4.3s6 1.6 7.6 4.3L461.9 410c1.4 2.3 2.1 4.9 2.1 7.5c0 8-6.5 14.5-14.5 14.5H62.5c-8 0-14.5-6.5-14.5-14.5c0-2.7 .7-5.3 2.1-7.5L248.4 84.3zm-41-25L9.1 385c-6 9.8-9.1 21-9.1 32.5C0 452 28 480 62.5 480h387c34.5 0 62.5-28 62.5-62.5c0-11.5-3.2-22.7-9.1-32.5L304.6 59.3C294.3 42.4 275.9 32 256 32s-38.3 10.4-48.6 27.3zM288 368a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm-8-184c0-13.3-10.7-24-24-24s-24 10.7-24 24v96c0 13.3 10.7 24 24 24s24-10.7 24-24V184z"/></svg>
                    </x-card>

                    <x-card title="Cache hit" href="{{ route('cache-hit') }}" >
                        <svg class="text-indigo-400 fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Pro 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.--><path d="M400 86v88.7c-13.3 7.2-31.6 14.2-54.8 19.9C311.3 203 269.5 208 224 208s-87.3-5-121.2-13.4C79.6 188.9 61.3 182 48 174.7V86l.6-.5C53.9 81 64.5 74.8 81.8 68.6C115.9 56.5 166.2 48 224 48s108.1 8.5 142.2 20.6c17.3 6.2 27.8 12.4 33.2 16.9l.6 .5zm0 141.5v75.2c-13.3 7.2-31.6 14.2-54.8 19.9C311.3 331 269.5 336 224 336s-87.3-5-121.2-13.4C79.6 316.9 61.3 310 48 302.7V227.6c13.3 5.3 27.9 9.9 43.3 13.7C129.5 250.6 175.2 256 224 256s94.5-5.4 132.7-14.8c15.4-3.8 30-8.3 43.3-13.7zM48 426V355.6c13.3 5.3 27.9 9.9 43.3 13.7C129.5 378.6 175.2 384 224 384s94.5-5.4 132.7-14.8c15.4-3.8 30-8.3 43.3-13.7V426l-.6 .5c-5.3 4.5-15.9 10.7-33.2 16.9C332.1 455.5 281.8 464 224 464s-108.1-8.5-142.2-20.6c-17.3-6.2-27.8-12.4-33.2-16.9L48 426zm354.1-2.1s0 .1-.2 .2l.1-.2 0-.1zm-356.1 0a.3 .3 0 1 0 .6-.2 .3 .3 0 1 0 -.6 .2zm0-335.8a.3 .3 0 1 0 .5 .2 .3 .3 0 1 0 -.5-.2zm356-.2a.3 .3 0 1 0 -.1 .6 .3 .3 0 1 0 .1-.6zM448 432V80C448 35.8 347.7 0 224 0S0 35.8 0 80V432c0 44.2 100.3 80 224 80s224-35.8 224-80z"/></svg>
                    </x-card>
                 </div>
            </div>
            <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
                <div class="ml-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) & Livewire
                    {{ \Composer\InstalledVersions::getPrettyVersion('livewire/livewire') }}
                </div>
            </div>
        </div>
    </div>
@endsection
