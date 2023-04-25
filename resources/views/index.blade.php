@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                       ACHIEVE YOUR PERFECT BODY
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Join Now
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Need a BOOST to achive your peak performace ?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                We can help let you achive your goals EASILY! from our tried and tested supliments
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                FAST RESULTS, 100% GUARANTEE , 4LBS OF LEAN MUSCLE IN 4 WEEKS OR YOUR MONEY BACK !
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                REACH THE PEAK TODAY!
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Here are some of our clients PRs
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            250KG DEAD LIFT - Martin M
        </span>
        <span class="font-extrabold block text-4xl py-1">
            120 BENCH - Nojus M
        </span>
        <span class="font-extrabold block text-4xl py-1">
            40KG BICEP CURL - Jakub L
        </span>
        <span class="font-extrabold block text-4xl py-1">
            185 SQUAT - Menouar K
        </span>
        <h2 class="text-2xl pb-5 text-l"><br>
            IF THEY CAN ACHIEVE THIS SO CAN YOU
        </h2>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
           Latests posts from fellow members join the conversation today !
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    HIT A DREAM MILESTONE
                </span>

                <h3 class="text-xl font-bold py-10">
                    So today I hit a new PR of 100kg on bench press which I am so proud of I never tought I was going to be able to achive this. It has taken me almost 5 years to get
                    to this stage I had my ups and downs but I just wanted to post this incase sombody needed that little bit of motivation today to go push them selves . YOU GOT THIS .                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
