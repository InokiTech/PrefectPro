@extends('layouts.webLayout')

@section('content')
    <div>
        <div class="relative h-screen w-full flex items-center justify-start text-left bg-cover bg-center"
            style="background-image:url('./src/hero.png');">
            <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-40"></div>

            <main class="w-full px-10 lg:px-24 z-10">
                <div class="text-left max-w-screen-xl mx-auto">
                    <h2
                        class="text-2xl poppins-semibold font-extrabold sm:text-4xl md:leading-[72px] md:text-5xl text-[#360F5E] max-w-[700px]">
                        Empowering Schools with
                        Seamless Management
                        Solutions
                    </h2>

                    <div class="mt-5 sm:mt-8 sm:flex justify-start">
                        <a href="{{route('register')}}" type="button"
                            class="text-white bg-gradient-to-r from-[#FC9FBA] via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Get
                            Started</a>
                    </div>
                </div>
            </main>

        </div>
    </div>


    <div class="max-w-screen-xl mx-auto w-full px-10 lg:px-24 my-10 ">
        <div class="grid md:grid-cols-4 grid-cols-2 justify-between flex-wrap items-center gap-10">
            <img src="./src/partners (1).png" class="w-64 h-16 object-contain" alt="">
            <img src="./src/partners (2).png" class="w-64 h-16 object-contain" alt="">
            <img src="./src/partners (3).png" class="w-64 h-16 object-contain" alt="">
            <img src="./src/partners (4).png" class="w-64 h-16 object-contain" alt="">
        </div>
    </div>

    <section class="relative"
        style="background-image:url('./src/bg.png'); background-position: center; background-repeat: no-repeat; background-size: cover; background-color: rgba(0, 0, 0, 0.5); ">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-100 opacity-60"></div>
        <div class="max-w-screen-xl relative mx-auto w-full px-10 lg:px-24 py-20">
            <div class="grid md:grid-cols-2 grid-cols-1 md:my-20 md:gap-20 gap-10">
                <div>
                    <img src="./src/first.png" class="w-full" alt="">
                </div>
                <div class="">
                    <h1 class="font-bold text-4xl">Welcome to Prefect pro</h1>
                    <p class="font-medium ">A full introductory write up and expalnation of what we do</p>
                </div>
            </div>


            <h1 class="font-bold text-4xl text-center mb-10">Testimonial Video</h1>
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
                <div class="p-10 shadow-lg bg-white h-60 rounded-md">
                    <div>School register</div>
                </div>
            </section>
            <div class="grid md:grid-cols-2 grid-cols-1 my-20 gap-20">
                <div class="">
                    <h1 class="font-bold text-4xl">Testimonial Video</h1>
                    <p class="font-medium ">A fulfilled user giving a positive review of their experience.</p>
                </div>
                <div>
                    <img src="./src/second.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-screen-xl relative mx-auto w-full px-10 lg:px-24 my-10 ">
        <div>
            <h1 class="font-bold text-4xl text-center">Schools we work with</h1>

            <div class="grid md:grid-cols-2 grid-cols-1 gap-5 my-10">
                <div class="flex flex-col md:flex-row  items-start space-x-5 border shadow-md p-10">
                    <img src="./src/school (3).png" class="w-32 h-32 object-contain mx-auto" alt="">
                    <div>

                        <h1 class="font-bold text-2xl mb-4">Parent Pride</h1>
                        <p class="text-sm">Parent pride is a unique school that has though children to become thier truest
                            self in spite of
                            the
                            difficulty of todays society</p>
                    </div>
                </div>
                <div class="flex  flex-col md:flex-row items-start space-x-5 border shadow-md p-10">
                    <img src="./src/school (1).png" class="w-32 h-32 object-contain mx-auto" alt="">
                    <h1 class="font-bold text-2xl">Dominion College</h1>
                </div>
                <div class="flex flex-col md:flex-row  items-start space-x-5 border shadow-md p-10">
                    <img src="./src/school (2).png" class="w-32 h-32 object-contain mx-auto" alt="">
                    <h1 class="font-bold text-2xl">Highland British international school</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
