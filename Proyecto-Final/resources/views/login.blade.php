<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo/favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/rt-plugins.css') }}">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class=" font-inter skin-default">
    <div class="loginwrapper">
        <div class="lg-inner-column">
            <div class="right-column relative">
                <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                    <div class="auth-box h-full flex flex-col justify-center">
                        <div class="mobile-logo text-center mb-6 lg:hidden block">
                            <a href="index.html">
                                <img src="{{ asset('images/logo/logo.svg') }}" alt="" class="mb-10 dark_logo">
                                <img src="{{ asset('images/logo/logo-white.svg') }}" alt=""
                                    class="mb-10 white_logo">
                            </a>
                        </div>
                        <div class="text-center 2xl:mb-10 mb-4">
                            <h4 class="font-medium">Sign in</h4>
                            <div class="text-slate-500 dark:text-slate-400 text-base">
                                Sign in to your account to start using Dashcode
                            </div>
                        </div>
                        <!-- BEGIN: Login Form -->
                        <form class="space-y-4" action="{{ route('login') }}" method="POST">
                            <div class="fromGroup">
                                <label class="block capitalize form-label">email</label>
                                <div class="relative ">
                                    <input type="email" name="email" class="form-control py-2"
                                        placeholder="Add placeholder" value="dashcode@gmail.com">
                                </div>
                            </div>
                            <div class="fromGroup">
                                <label class="block capitalize form-label">passwrod</label>
                                <div class="relative "><input type="password" name="password"
                                        class="  form-control py-2" placeholder="Add placeholder" value="dashcode">
                                </div>
                            </div>
                            <div class="flex justify-between">

                                <div class="checkbox-area">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="hidden" name="checkbox">
                                        <span
                                            class="h-4 w-4 border flex-none border-slate-100 dark:border-slate-800 rounded inline-flex ltr:mr-3 rtl:ml-3 relative transition-all duration-150 bg-slate-100 dark:bg-slate-900">
                                            <img src="{{ asset('images/icon/ck-white.svg') }}" alt=""
                                                class="h-[10px] w-[10px] block m-auto opacity-0"></span>
                                        <span class="text-slate-500 dark:text-slate-400 text-sm leading-6">Keep me
                                            signed in</span>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-dark block w-full text-center" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="left-column bg-cover bg-no-repeat bg-center"
                style="background-image: url('{{ asset('images/all-img/login3.jpg') }}');">
                <div class="flex flex-col h-full justify-center">
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/rt-plugins.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
