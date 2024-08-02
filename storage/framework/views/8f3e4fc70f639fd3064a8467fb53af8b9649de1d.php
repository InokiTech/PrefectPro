<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!--Toaster css-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/toastr.min.css')); ?>" />

    <style>
        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .poppins-black {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .poppins-thin-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .poppins-extralight-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .poppins-light-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .poppins-regular-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .poppins-medium-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .poppins-semibold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .poppins-bold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .poppins-extrabold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .poppins-black-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: italic;
        }
    </style>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<body class="relative">
    <header>
        <nav class="fixed w-full top-0 z-10 backdrop-filter backdrop-blur-3xl bg-opacity-90 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="./src/logo.png" class="h-8" />

                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-300 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  items-center">

                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Programs</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-200 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contact
                                Us</a>
                        </li>
                        <a href="<?php echo e(route('register')); ?>" type="button" class="text-white bg-gradient-to-r from-[#FC9FBA] via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Login\Signup</a>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!-- hero -->
    <?php echo $__env->yieldContent('content'); ?>

    

    <footer class=" text-white pt-12 pb-8 px-4" style="background-image:url('./src/footer.png');background-position: center; background-repeat: no-repeat; background-size: cover; background-color: rgba(0, 0, 0, 0.9);">
        <div class="mx-auto px-4 max-w-screen-xl overflow-hidden flex flex-col lg:flex-row justify-between">
            <a href="/" class="block mr-4 w-1/3">
                <img src="./src/logo_footer.png" class="w-40 ml-4 lg:ml-0" alt="logo">
            </a>
            <div class="w-2/3 block sm:flex text-sm mt-6 lg:mt-0">
                <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                    <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Product</li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Features</a>
                    </li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Integrations</a>
                    </li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Pricing</a>
                    </li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">FAQ</a>
                    </li>
                </ul>
                <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                    <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Company</li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Privacy</a>
                    </li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Terms of
                            Service</a></li>
                </ul>
                <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                    <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Developers</li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Developer
                            API</a></li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Documentation</a>
                    </li>
                    <li><a href="#" class="inline-block py-2 px-3 text-gray-300 hover:text-white no-underline">Guides</a>
                    </li>
                    </li>
                </ul>
                <div class="text-white flex flex-col w-full">
                    <div class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Follow Us</div>
                    <div class="flex pl-4 justify-start mt-2">
                        <a class=" flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
                            <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                            </svg>
                        </a>
                        <a class=" flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
                            <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                            </svg>
                        </a>
                        <a class=" flex items-center text-gray-300 hover:text-white no-underline" href="#">
                            <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mt-4 pt-6 text-white border-t border-gray-300 text-center"> © prefectpro 2024
        </div>
    </footer>

    <!-- "use strict"; -->
    <!--Toaster Script-->
    <script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

    <?php if(Session::has('message')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("<?php echo e(session('message')); ?>");
    </script>
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("<?php echo e(session('error')); ?>");
    </script>
    <?php endif; ?>

    <?php if(Session::has('info')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("<?php echo e(session('info')); ?>");
    </script>
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("<?php echo e(session('warning')); ?>");
    </script>
    <?php endif; ?>
</body>

</html>
<?php /**PATH C:\laragon\www\PrefectPro\resources\views/layouts/webLayout.blade.php ENDPATH**/ ?>