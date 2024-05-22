<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>AutoHub - @yield('title')</title>
</head>

<body class="bg-darker text-white">
    <header class="flex items-center lg:gap-6 3xl:px-80 lg:px-32 md:px-16 px-5 pt-6 lg:justify-normal justify-between">
        <h1 class="text-xl text-white">
            Auto
            <span class="bg-primary text-darker font-bold px-2 rounded-md">hub</span>
        </h1>

        <button class="block lg:hidden text-2xl">
            <ion-icon name="menu-sharp"></ion-icon>
        </button>

        <div class="hidden lg:flex flex-grow items-center justify-between">
            <nav>
                <ul class="flex items-center gap-6 text-xl">
                    <li><a href="{{ route('home') }}"
                            class="{{ Route::is('home') ? 'text-white underline' : 'text-gray' }}">Home</a></li>
                    <li><a href="{{ route('cars.index') }}"
                            class="{{ Route::is('cars.index') ? 'text-white underline' : 'text-gray' }}">Cars</a></li>
                </ul>
            </nav>
            <nav>
                <ul class="flex items-center gap-6">
                       @if (Auth::check())
                       <li>
                       <a href="{{ route('home') }}"
                       class="{{ Route::is('profile') ? 'text-darker bg-white' : 'bg-primary text-darker' }} rounded-full p-2 flex items-center"><ion-icon
                           name="person-sharp" class="text-xl"></ion-icon></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"
                                class="{{ Route::is('cart') ? 'text-darker bg-white' : 'bg-primary text-darker' }} rounded-full p-2 flex items-center"><ion-icon
                                    name="cart-sharp" class="text-xl"></ion-icon></a>
                        </li>
                       @else
                       <li><a href="{{ route('login') }}"
                       class="{{ Route::is('login') ? 'text-white underline' : 'text-gray' }} rounded-full p-2 flex items-center text-xl">Login</a>
                        </li>
                       @endif
                </ul>
            </nav>
        </div>
    </header>

    <main class="mt-20 flex flex-col lg:gap-20 md:gap-16 gap-8 min-h-screen">@yield('content')</main>

    <footer class="bg-dark flex lg:flex-row flex-col lg:justify-between lg:px-32 3xl:px-80 md:p-16 p-5">
        <div class="flex flex-col justify-between">
            <div class="flex lg:flex-row flex-col items-start lg:gap-6 gap-2">
                <h1 class="text-xl text-white">
                    Auto
                    <span class="bg-primary text-darker font-bold px-2 rounded-md">hub</span>
                </h1>
                <p class="text-base text-gray">
                    Get ready for a ride of a lifetime at Auto Hub <br />
                    your destination for premium vehicles and top-notch <br />
                    service that'll leave you saying, "Hell Yeah!"
                </p>
            </div>
            <nav class="flex lg:flex-row flex-col lg:gap-20 gap-4 py-4 lg:py-0">
                <div class="lg:space-y-2">
                    <h2 class="font-bold">Resources</h2>
                    <ul class="flex flex-col text-base text-gray">
                        <li><a href="{{ route('home') }}">Home Page</a></li>
                        <li><a href="{{ route('home') }}">Browse Cars</a></li>
                        <li><a href="{{ route('home') }}">Create an Account</a></li>
                        <li><a href="{{ route('home') }}">Login</a></li>
                    </ul>
                </div>

                <div class="lg:space-y-2">
                    <h2 class="font-bold">Company</h2>
                    <ul class="flex flex-col text-base text-gray">
                        <li><a href="https://github.com/joaonative/autohub" target="_blank">GitHub Repository</a></li>
                        <li><a href="" target="_blank">Get in Touch</a></li>
                    </ul>
                </div>

                <div class="lg:space-y-2">
                    <h2 class="font-bold">Our Team</h2>
                    <ul class="flex flex-col text-base text-gray">
                        <li><a href="https://github.com/joaonative" target="_blank">@joaonative</a></li>
                        <li><a href="https://github.com/" target="_blank">@benevento</a></li>
                    </ul>
                </div>


            </nav>
        </div>

        <svg class="lg:block hidden" width="394" height="291" viewBox="0 0 394 291" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_10_1191)">
                <path
                    d="M47.0514 123.868C46.1875 123.868 45.3147 123.855 44.4581 123.828L44.4776 123.206C45.7076 123.244 46.9629 123.255 48.1987 123.238L48.2072 123.86C47.8225 123.866 47.4372 123.868 47.0514 123.868Z"
                    fill="#3F3D56" />
                <path
                    d="M51.9541 123.724L51.9176 123.102C53.1495 123.029 54.3971 122.927 55.6259 122.799L55.691 123.418C54.4528 123.548 53.1957 123.651 51.9541 123.724Z"
                    fill="#3F3D56" />
                <path
                    d="M40.7145 123.627C39.4723 123.532 38.2171 123.407 36.9834 123.255L37.0594 122.637C38.2837 122.787 39.5292 122.911 40.762 123.006L40.7145 123.627Z"
                    fill="#3F3D56" />
                <path
                    d="M59.4098 122.942L59.3164 122.326C60.5404 122.14 61.7737 121.925 62.9813 121.685L63.1026 122.295C61.8856 122.537 60.6431 122.755 59.4098 122.942Z"
                    fill="#3F3D56" />
                <path
                    d="M33.2736 122.714C32.0465 122.506 30.8078 122.267 29.592 122.003L29.7242 121.394C30.9306 121.656 32.1597 121.893 33.3776 122.1L33.2736 122.714Z"
                    fill="#3F3D56" />
                <path
                    d="M66.7625 121.48L66.6129 120.875C67.8144 120.578 69.0225 120.25 70.2039 119.899L70.3809 120.497C69.1903 120.85 67.9731 121.181 66.7625 121.48Z"
                    fill="#3F3D56" />
                <path
                    d="M25.9474 121.123C24.7437 120.803 23.5324 120.45 22.347 120.075L22.5347 119.482C23.711 119.854 24.9131 120.203 26.1074 120.521L25.9474 121.123Z"
                    fill="#3F3D56" />
                <path
                    d="M73.95 119.347L73.7456 118.759C74.9115 118.353 76.084 117.915 77.2313 117.456L77.4625 118.034C76.3066 118.497 75.1249 118.939 73.95 119.347Z"
                    fill="#3F3D56" />
                <path
                    d="M18.7895 118.859C17.6205 118.429 16.4441 117.966 15.2935 117.481L15.5352 116.906C16.677 117.388 17.8443 117.848 19.0045 118.275L18.7895 118.859Z"
                    fill="#3F3D56" />
                <path
                    d="M80.9029 116.564L80.645 115.997C81.7647 115.488 82.8901 114.945 83.99 114.383L84.2734 114.938C83.165 115.504 82.0311 116.051 80.9029 116.564Z"
                    fill="#3F3D56" />
                <path
                    d="M87.566 113.157L87.2577 112.617C88.3314 112.004 89.4033 111.359 90.443 110.702L90.7757 111.228C89.7281 111.891 88.6483 112.54 87.566 113.157Z"
                    fill="#3F3D56" />
                <path
                    d="M93.8943 109.153L93.538 108.642C94.5491 107.936 95.558 107.196 96.5369 106.443L96.9164 106.937C95.9302 107.695 94.9133 108.441 93.8943 109.153Z"
                    fill="#3F3D56" />
                <path
                    d="M99.8346 104.586L99.4332 104.11C100.376 103.314 101.313 102.485 102.221 101.646L102.644 102.103C101.729 102.949 100.784 103.784 99.8346 104.586Z"
                    fill="#3F3D56" />
                <path
                    d="M105.338 99.4946L104.894 99.0572C105.763 98.1766 106.622 97.2653 107.448 96.3489L107.911 96.7656C107.079 97.6894 106.213 98.6073 105.338 99.4946Z"
                    fill="#3F3D56" />
                <path
                    d="M110.357 93.9219L109.876 93.5265C110.661 92.5711 111.434 91.5853 112.174 90.5958L112.672 90.9687C111.927 91.9658 111.148 92.9595 110.357 93.9219Z"
                    fill="#3F3D56" />
                <path
                    d="M114.85 87.9125L114.335 87.5627C115.029 86.5398 115.71 85.4871 116.357 84.4331L116.887 84.7592C116.235 85.821 115.55 86.8819 114.85 87.9125Z"
                    fill="#3F3D56" />
                <path
                    d="M118.778 81.515L118.233 81.2138C118.831 80.1316 119.412 79.0202 119.96 77.9103L120.519 78.1865C119.966 79.3046 119.381 80.4245 118.778 81.515Z"
                    fill="#3F3D56" />
                <path
                    d="M122.104 74.7807L121.534 74.5307C122.03 73.397 122.506 72.236 122.95 71.0802L123.532 71.3035C123.085 72.4684 122.604 73.6382 122.104 74.7807Z"
                    fill="#3F3D56" />
                <path
                    d="M124.797 67.7629L124.206 67.5671C124.595 66.3957 124.961 65.1985 125.296 64.0083L125.895 64.1768C125.558 65.3761 125.188 66.5828 124.797 67.7629Z"
                    fill="#3F3D56" />
                <path
                    d="M126.827 60.5438L126.22 60.4026C126.499 59.2021 126.754 57.976 126.978 56.759L127.59 56.8716C127.365 58.0983 127.108 59.3335 126.827 60.5438Z"
                    fill="#3F3D56" />
                <path
                    d="M128.184 53.169L127.567 53.0845C127.734 51.8645 127.876 50.6204 127.987 49.3867L128.608 49.4427C128.495 50.6861 128.353 51.9396 128.184 53.169Z"
                    fill="#3F3D56" />
                <path
                    d="M128.861 45.7014L128.239 45.6734C128.294 44.4391 128.323 43.1871 128.323 41.9525H128.945C128.945 43.1966 128.917 44.4579 128.861 45.7014Z"
                    fill="#3F3D56" />
                <path
                    d="M127.921 33.0088C127.796 31.7808 127.625 31.182 127.444 29.9592L128.061 29.8683C128.242 31.1003 128.398 32.0408 128.524 33.2782L127.921 33.0088Z"
                    fill="#3F3D56" />
                <path
                    d="M126.816 26.2914C126.578 25.0763 126.311 23.8531 126.019 22.6559L126.624 22.5087C126.918 23.715 127.188 24.9476 127.427 26.1719L126.816 26.2914Z"
                    fill="#3F3D56" />
                <path
                    d="M125.056 19.0608C124.709 17.8747 124.329 16.6816 123.928 15.5142L124.517 15.3116C124.921 16.488 125.304 17.6905 125.654 18.8856L125.056 19.0608Z"
                    fill="#3F3D56" />
                <path
                    d="M122.638 12.0233C122.183 10.8769 121.697 9.72642 121.191 8.60359L121.759 8.34778C122.269 9.47928 122.759 10.6386 123.217 11.7937L122.638 12.0233Z"
                    fill="#3F3D56" />
                <path
                    d="M119.59 5.25254C119.032 4.15282 118.442 3.05083 117.834 1.97758L118.376 1.67065C118.988 2.75227 119.583 3.86263 120.145 4.97086L119.59 5.25254Z"
                    fill="#3F3D56" />
                <path
                    d="M108.502 196.712C116.992 206.489 116.96 220.422 116.96 220.422C116.96 220.422 103.164 218.501 94.6749 208.724C86.1856 198.946 86.2175 185.014 86.2175 185.014C86.2175 185.014 100.013 186.934 108.502 196.712Z"
                    fill="#3F3D56" />
                <path
                    d="M97.5195 118.805C101.259 131.203 113.058 138.607 113.058 138.607C113.058 138.607 118.793 125.911 115.053 113.513C111.313 101.115 99.5145 93.71 99.5145 93.71C99.5145 93.71 93.7796 106.407 97.5195 118.805Z"
                    fill="#FFA31A" />
                <path
                    d="M102.408 115.976C111.941 124.738 113.475 138.585 113.475 138.585C113.475 138.585 99.5506 138.227 90.0169 129.466C80.4832 120.704 78.9501 106.856 78.9501 106.856C78.9501 106.856 92.8741 107.214 102.408 115.976Z"
                    fill="#3F3D56" />
                <path
                    d="M132.502 152.496C122.125 160.24 119.188 173.859 119.188 173.859C119.188 173.859 133.076 174.923 143.453 167.179C153.831 159.435 156.767 145.816 156.767 145.816C156.767 145.816 142.879 144.752 132.502 152.496Z"
                    fill="#3F3D56" />
                <path
                    d="M139.476 255.236C139.476 255.236 139.385 255.356 139.201 255.571H102.87C106.462 253.15 110.494 251.459 114.738 250.595C127.461 248.19 139.476 255.236 139.476 255.236Z"
                    fill="#3F3D56" />
                <path
                    d="M116.99 217.645C116.946 217.864 116.899 218.083 116.851 218.302C116.807 218.517 116.759 218.732 116.712 218.947C116.612 219.408 116.509 219.87 116.401 220.332C113.533 232.924 108.351 244.873 101.119 255.571H99.678C106.806 245.332 112.175 233.25 115.235 220.097C115.323 219.715 115.41 219.333 115.494 218.947C115.609 218.433 115.717 217.92 115.824 217.406C116.019 216.467 116.202 215.522 116.373 214.572C120.337 192.729 118.685 167.769 111.347 138.414C111.243 138 111.136 137.582 111.032 137.164C111.016 137.112 111.004 137.065 110.993 137.013L112.147 136.718C112.278 137.232 112.409 137.745 112.533 138.259L112.604 138.534C120.218 169.162 121.65 195.058 116.99 217.645Z"
                    fill="#3F3D56" />
                <path
                    d="M81.4185 99.6281C87.6588 99.6281 92.7175 94.568 92.7175 88.3261C92.7175 82.0841 87.6588 77.024 81.4185 77.024C75.1783 77.024 70.1195 82.0841 70.1195 88.3261C70.1195 94.568 75.1783 99.6281 81.4185 99.6281Z"
                    fill="#3F3D56" />
                <path
                    d="M286.104 215.881C278.999 223.69 278.762 235.048 278.762 235.048C278.762 235.048 290.044 233.743 297.149 225.933C304.253 218.123 304.49 206.766 304.49 206.766C304.49 206.766 293.208 208.071 286.104 215.881Z"
                    fill="#3F3D56" />
                <path
                    d="M296.527 152.583C293.245 162.618 283.487 168.431 283.487 168.431C283.487 168.431 279.052 157.973 282.335 147.938C285.618 137.902 295.375 132.089 295.375 132.089C295.375 132.089 299.81 142.547 296.527 152.583Z"
                    fill="#FFA31A" />
                <path
                    d="M292.596 150.184C284.659 157.146 283.148 168.405 283.148 168.405C283.148 168.405 294.505 168.376 302.442 161.414C310.379 154.452 311.89 143.194 311.89 143.194C311.89 143.194 300.533 143.222 292.596 150.184Z"
                    fill="#3F3D56" />
                <path
                    d="M267.376 179.385C275.688 185.893 277.825 197.05 277.825 197.05C277.825 197.05 266.484 197.655 258.171 191.147C249.859 184.639 247.722 173.482 247.722 173.482C247.722 173.482 259.063 172.877 267.376 179.385Z"
                    fill="#3F3D56" />
                <path
                    d="M287.317 255.571H286.235C283.046 249.029 280.689 242.113 279.219 234.986C279.103 234.432 278.992 233.879 278.888 233.318C278.852 233.143 278.821 232.963 278.789 232.784C277.962 228.212 277.442 223.589 277.233 218.947C276.512 203.911 278.709 187.223 283.859 168.382C283.879 168.306 283.899 168.231 283.923 168.155C284.034 167.741 284.15 167.327 284.265 166.909L285.2 167.172C285.188 167.212 285.18 167.248 285.168 167.287C285.073 167.63 284.977 167.968 284.886 168.306C279.692 187.208 277.479 203.915 278.204 218.947C278.38 222.743 278.762 226.526 279.35 230.28C279.473 231.061 279.605 231.837 279.744 232.609C279.879 233.346 280.023 234.081 280.174 234.815C281.659 242.01 284.06 248.986 287.317 255.571Z"
                    fill="#3F3D56" />
                <path
                    d="M310.228 137.258C315.316 137.258 319.44 133.132 319.44 128.042C319.44 122.953 315.316 118.827 310.228 118.827C305.139 118.827 301.015 122.953 301.015 128.042C301.015 133.132 305.139 137.258 310.228 137.258Z"
                    fill="#3F3D56" />
                <path
                    d="M210.81 210.722L210.547 218.947L209.385 255.571H175.573L172.138 218.947L170.443 200.85L161.472 171.24L219.78 159.576C219.78 159.576 224.266 176.626 226.057 189.186C227.851 201.75 210.81 210.722 210.81 210.722Z"
                    fill="#2F2E41" />
                <path opacity="0.2"
                    d="M210.81 210.722L210.547 218.947L209.385 255.571H175.573L172.138 218.947L170.443 200.85L161.472 171.24L219.78 159.576C219.78 159.576 224.266 176.626 226.057 189.186C227.851 201.75 210.81 210.722 210.81 210.722Z"
                    fill="black" />
                <path d="M389.224 255.571H0V4.77698L63.0161 45.3817H62.4828V218.947H332.313V218.899L389.224 255.571Z"
                    fill="#FFA31A" />
                <path d="M4.77576 0L75.2066 45.3817H332.313V211.046L394 250.794V0H4.77576Z" fill="#3F3D56" />
                <path
                    d="M223.305 9.68042C205.408 9.68042 190.9 25.7855 190.9 45.6521V70.8928H198.661L203.154 61.5409L202.031 70.8928H251.915L255.999 62.391L254.978 70.8928H260.594V51.0743C260.594 28.2131 243.899 9.68042 223.305 9.68042Z"
                    fill="#2F2E41" />
                <path
                    d="M192.868 126.377L187.486 147.015L237.72 145.22L236.823 128.172C236.823 128.172 199.147 118.302 192.868 126.377Z"
                    fill="#FFB9B9" />
                <path d="M144.428 208.927L160.575 244.818L175.824 225.975L163.266 200.851L144.428 208.927Z"
                    fill="#FFB9B9" />
                <path
                    d="M217.088 65.363C228.483 65.363 237.72 56.1233 237.72 44.7257C237.72 33.328 228.483 24.0884 217.088 24.0884C205.693 24.0884 196.456 33.328 196.456 44.7257C196.456 56.1233 205.693 65.363 217.088 65.363Z"
                    fill="#FFB9B9" />
                <path
                    d="M247.587 71.6438L238.097 79.5578L236.823 80.6166L235.926 91.3839H200.941C200.941 91.3839 205.714 87.2474 210.145 82.9674C210.235 82.8687 210.333 82.7611 210.441 82.6623C211.042 82.0791 211.58 81.5407 212.065 81.0562C212.325 80.787 212.576 80.5358 212.8 80.3025C213.168 79.9167 213.527 79.5488 213.886 79.1809C213.891 79.1761 213.894 79.1698 213.895 79.163C214.813 78.2019 215.675 77.1894 216.478 76.1302L216.487 76.1212C216.703 75.8356 216.903 75.5392 217.088 75.2329C219.779 70.7466 213.5 61.7738 213.5 61.7738L233.235 51.9038C233.925 61.6302 242.151 68.1265 245.829 70.5671C246.906 71.2759 247.587 71.6438 247.587 71.6438Z"
                    fill="#FFB9B9" />
                <path
                    d="M296.027 222.386C282.572 225.975 281.675 199.057 281.675 199.057L263.31 162.317C259.429 154.554 256.761 146.242 255.398 137.67L251.175 111.124L249.893 112.658V112.667L247.587 113.816L233.576 91.3839L229.647 85.1029V77.9248L243.102 71.6438H248.484C248.484 71.6438 248.601 71.6259 248.807 71.6079C251.283 71.3477 267.394 70.271 268.219 86.0002C268.544 92.1735 268.516 97.2879 268.348 101.301C267.837 112.403 268.89 123.522 271.477 134.33C272.426 138.228 273.462 141.612 274.498 143.426C278.087 149.707 290.645 199.057 290.645 199.057C290.645 199.057 309.483 218.797 296.027 222.386Z"
                    fill="#FFB9B9" />
                <path
                    d="M213.5 81.5138L210.1 87.714L208.091 91.3838L198.25 109.329C198.25 109.329 195.461 111.608 190.939 114.551C183.422 119.442 171.097 126.153 158.781 127.275C139.046 129.069 157.884 65.3629 157.884 65.3629C157.884 65.3629 164.163 40.2393 173.133 42.9311C182.104 45.6229 174.927 54.5956 168.648 71.6438C162.369 88.692 167.751 107.535 167.751 107.535C167.751 107.535 186.589 95.8702 196.456 86.8975C201.596 82.2227 206.01 80.9575 209.051 80.8229H209.06C210.067 80.7676 211.078 80.846 212.065 81.0562C212.559 81.155 213.04 81.3085 213.5 81.5138Z"
                    fill="#FFB9B9" />
                <path
                    d="M216.478 76.1302C216.442 76.2289 216.021 77.0275 212.8 80.3025C214.114 78.9921 215.343 77.5984 216.478 76.1302Z"
                    fill="#D0CDE1" />
                <path
                    d="M250.727 111.573L249.893 112.667L236.823 135.35C236.823 135.35 219.779 129.069 207.221 127.275C195.021 125.534 189.594 134.794 189.289 135.323L192.868 120.994L190.939 114.552C190.715 113.798 190.455 112.963 190.177 112.021C187.486 103.048 197.353 93.1785 197.353 93.1785L209.051 80.823H209.06C210.067 80.7676 211.078 80.8461 212.065 81.0563C211.58 81.5408 211.042 82.0792 210.441 82.6624C210.333 82.7611 210.235 82.8688 210.145 82.9675C206.709 86.4758 208.494 87.4538 210.1 87.714C210.631 87.7955 211.169 87.8226 211.706 87.7948C215.446 88.3331 223.636 85.0491 229.647 82.3035C233.737 80.4372 236.823 78.8221 236.823 78.8221L244.654 71.6439L245.829 70.5671C246.906 71.276 247.587 71.6439 247.587 71.6439H248.484C248.484 71.6439 248.601 71.6259 248.807 71.608L244.723 74.6396C242.689 76.1491 241.065 78.1435 239.999 80.4411C238.932 82.7387 238.457 85.2667 238.617 87.7948L250.727 111.573Z"
                    fill="#D0CDE1" />
                <path
                    d="M201.838 137.145L188.724 142.267C188.724 142.267 117.517 114.713 106.753 137.145C95.9882 159.577 144.428 213.413 144.428 213.413L165.957 203.543L156.987 176.625C156.987 176.625 209.015 220.591 230.544 196.365C252.073 172.138 237.72 137.883 237.72 137.883C237.72 137.883 224.264 127.275 201.838 137.145Z"
                    fill="#2F2E41" />
                <path
                    d="M164.163 234.948L156.09 241.229C156.09 241.229 163.266 269.941 160.575 274.428C157.884 278.914 152.501 291.476 162.369 290.579C172.236 289.681 183.001 274.428 183.898 269.044C184.795 263.66 191.074 247.509 191.074 247.509C191.074 247.509 201.838 222.386 193.765 221.489C185.692 220.591 172.833 219.991 172.833 219.991L164.163 234.948Z"
                    fill="#2F2E41" />
                <path
                    d="M232.517 19.5895C229.263 15.399 224.465 12.7448 219.108 12.7448H218.471C206.205 12.7448 196.261 23.8473 196.261 37.5431L200.371 37.5432L201.035 32.4894L202.008 37.5432H226.385L228.428 33.2676L227.917 37.5432H232.713C234.951 48.6597 231.735 59.7763 223.067 70.8928H231.236L235.321 62.3416L234.299 70.8928H249.872L252.936 51.225C252.936 36.4957 244.38 24.0055 232.517 19.5895Z"
                    fill="#2F2E41" />
                <path d="M281.77 290.204H74.8202V291H281.77V290.204Z" fill="#3F3D56" />
            </g>
            <defs>
                <clipPath id="clip0_10_1191">
                    <rect width="394" height="291" fill="white" />
                </clipPath>
            </defs>
        </svg>

    </footer>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
