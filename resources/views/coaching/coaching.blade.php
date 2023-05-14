@extends('layouts.app')

@section('content')
<div class="bg-black">
    <div class="coaching-background-image">
        <div class="w-4/5 m-auto">
            <div class="pt-20 pb-10 max-w-lg">
                <h1 class="text-6xl font-bold text-left text-white" >
                    Unleash Your Inner Athlete
                </h1>
                <p class="text-xl font-thin text-left pt-6 text-white">
                    We are dedicated to helping you transform your body and mind through the power of fitness
                </p>
            </div>
                <button class="joinBtn" >
                    Join now
                </button>
            </div>
    </div>
    <div class="flex flex-col h-64 bg-black w-4/5 m-auto items-center justify-around md:flex-row">
        <h2 class="text-5xl text-left font-black text-white max-w-md">
            Transform Your Fitness Journey
        </h2>
        <p class="text-white text-justify font-thin text-xl max-w-lg">
            We offer customised workout programs designed to help achieve your fitness goals, be it weight loss, strenght and conditioning or body shaping.
        </p>
    </div>
    <div class="text-center pt-20 mb-4">
        <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
            THE TEAM
        </p>
        <h3 class=" pt-text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-white">
            Our<span class="text-yellow-300"> Team</span>
        </h3>
    </div>
   <div class="flex flex-col md:flex-row justify-around pb-10">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://netstorage-legit.akamaized.net/images/9b51a5a1c40e1d2d.jpg?imwidth=900" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ernest</h5>
            </a>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Looking to tone your muscles and achieve a defined physique? Look no further than our personal trainer Ernest! He specializes in muscle toning, helping you achieve the results you've been dreaming of.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-200 dark:hover:bg-blue-700 dark:focus:ring-blue-800  transition duration-300 delay-150 hover:delay-300">
            Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://liverampup.com/uploads/celebrity/mike-o-hearn-married-workout-family.jpg" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mike</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Are you looking to improve your strength and build a powerful, athletic physique? Our personal trainer Mike is here to help! Mike specializes in weightlifting, offering customized workout plans designed to help you reach your goals.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-200 dark:hover:bg-blue-700 dark:focus:ring-blue-800  transition duration-300 delay-150 hover:delay-300">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://i0.wp.com/personaltrainersdubai.com/wp-content/uploads/2022/08/Ljubo-Coach.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Quandale</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Looking to shed those extra pounds and achieve your weight loss goals? Our personal trainer Quandale is here to help you get there! Quandale specializes in weight loss, offering customized workout plans and nutrition guidance designed to help you reach your ideal weight.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-200 dark:hover:bg-blue-700 dark:focus:ring-blue-800  transition duration-300 delay-150 hover:delay-300">
                Read more
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </div>
   </div>


</div>



@endsection
