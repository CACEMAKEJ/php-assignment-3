@extends('layouts.app')

@section('content')

    <div class="background">
        <img src="images\lifting.webp" alt="test">



        <div class="bg-black py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              {{-- <div class="mx-auto max-w-2xl sm:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Simple! no-tricks, Amazing Pricing</h2>
              </div> --}}
              <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                <div class="p-8 sm:p-10 lg:flex-auto">
                  <h3 class="text-2xl font-bold tracking-tight text-yellow-300">Benifits as a Member</h3>
                  <p class="mt-6 text-base leading-7 text-gray-300">Joining the SWOLE team of +10,000. You are not only joining a elite group of Athletes you are also joining a family . As a fellow member we look out for one another to achieve the perfect physique</p>
                  <div class="mt-10 flex items-center gap-x-4">
                    <h4 class="flex-none text-sm font-semibold leading-6 text-yellow-300">What’s included to all members</h4>
                    <div class="h-px flex-auto bg-gray-100"></div>
                  </div>
                  <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-200 sm:grid-cols-2 sm:gap-6">
                    <li class="flex gap-x-3">
                      <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                      Private forum access and chat to the pros
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                      Daily Posture Checks
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                      Entry to annual conference and meetings
                    </li>
                    <li class="flex gap-x-3">
                      <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                      Tips and tricks
                    </li>
                  </ul>
                </div>
                <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">

                    <div class="mx-auto max-w-xs px-8">
                        <h3 class="text-2xl font-bold tracking-tight text-yellow-300">1 Year Membership</h3>
                        <br>
                      <p class="text-base font-semibold text-gray-200">Buy now and save up to 25%!!!</p>
                      <p class="mt-6 flex items-baseline justify-center gap-x-2">
                        <span class="text-5xl font-bold tracking-tight text-yellow-300">€2040</span>
                        <span class="text-sm font-semibold leading-6 tracking-wide text-gray-400">Euro</span>
                      </p>
                      <a href="#" class="mt-10 block w-full rounded-md bg-yellow-300 px-3 py-2 text-center text-sm font-semibold text-black shadow-sm hover:bg-yellow-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Become a Alpha</a>

                      <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-300 sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                             Secret Gains Suppliments
                        </li>
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                          WorkOut Routines
                        </li>
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                          Dietary Plans
                        </li>
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                          T-Shirt

                        </li>

                      </ul>
                      <p class="mt-6 text-xs leading-5 text-gray-700">All purchases are final. no refunds*</p>
                    </div>
                  </div>

                  {{-- <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16"> --}}
                    <div class="mx-auto max-w-xs px-8">
                        <h3 class="text-2xl font-bold tracking-tight text-yellow-300">Monthly Membership</h3>
                        <br>
                      <p class="mt-6 flex items-baseline justify-center gap-x-2">
                        <span class="text-5xl font-bold tracking-tight text-yellow-300">$215</span>
                        <span class="text-sm font-semibold leading-6 tracking-wide text-gray-400">Euro</span>
                      </p>
                      <a href="#" class="mt-10 block w-full rounded-md bg-yellow-300 px-3 py-2 text-center text-sm font-semibold text-black shadow-sm hover:bg-yellow-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Become a Alpha</a>

                      <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-200 sm:grid-cols-2 sm:gap-6">
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                          WorkOut Routines
                        </li>
                        <li class="flex gap-x-3">
                          <svg class="h-6 w-5 flex-none text-yellow-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                          </svg>
                          Dietary Plans
                        </li>
                      </ul>
                      <p class="mt-6 text-xs leading-5 text-gray-700">All purchases are final. no refunds*</p>
                    </div>

                  </div>



                </div>
              </div>
            </div>
          </div>



        <div class="flex text-gray-800 pt-10">

            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">

                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    Don't Limit Yourself !!!


                </h1>

                <a
                    href="/blog"
                    class="text-center bg-yellow-300 text-gray-900 py-2 px-4 font-bold text-xl uppercase">
                    Join Now
                </a>
            </div>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">





<img src="images\image4.jpg" alt="test">

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-800">
                Need a BOOST to achive your peak performace ?
            </h2>


            <p class="py-8 text-gray-800 text-s">
                We can help let you achive your goals EASILY! from our tried and tested supliments
            </p>

            <p class="font-extrabold text-gray-700 text-s pb-9">
                FAST RESULTS, 100% GUARANTEE , 4LBS OF LEAN MUSCLE IN 4 WEEKS OR YOUR MONEY BACK !
            </p>

            <a
                href="/blog"
                class="uppercase bg-yellow-300 text-gray-800 text-s font-extrabold py-3 px-8 rounded-3xl">
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

    <div class="text-center font-bold py-15">
        <span class="uppercase text-s text-gray-900">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-700">
           Latests posts from fellow members join the conversation today !
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-300 text-gray-900 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    "HIT A DREAM MILESTONE"-Lukas Bazel
                </span>

                <h3 class="text-xl font-bold py-10">
                    So today I hit a new PR of 100kg on bench press which I am so proud of I never tought I was going to be able to achive this. It has taken me almost 5 years to get
                    to this stage I had my ups and downs but I just wanted to post this incase sombody needed that little bit of motivation today to go push them selves . YOU GOT THIS .                </h3>

                <a
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-900 text-gray-900 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>

            </div>

        </div>
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                Ireland Fitness Report
            </span>

            <h3 class="text-xl font-bold py-10">
                What is the fitness county in the Ireland? and how does gym use differ from region to region? Let us know how you rank among the rest
                of the counties and hopefully get your county to number ONE !
                 Find this and more out in our new report here.
            <a
                href=""
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>

        </div>
        <div>
            <img src="images\image2new.jpg" alt="test">
        </div>
    </div>
@endsection
