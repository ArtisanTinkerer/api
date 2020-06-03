<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Shorts</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body class="bg-white">


    <div id="app">

        <div class="container px-8">

            <header class="py-6">
                <h1>
                    <img alt="Book Shorts" src="\images\logo.png">
                </h1>

            </header>

            <main class="flex">
                <aside class="w=1/5 pt-8">

                    <section class="mb-5">
                        <h5 class="uppercase font-bold">Reviews</h5>

                        <ul class="list-reset">
                            {{--These are links to components--}}
                            <li class="text-sm leading-loose"><router-link class = "text-black"  to="/read">Read</router-link></li>
                            <li class="text-sm leading-loose"><router-link class = "text-black"  to="/write">Write</router-link></li>
                        </ul>

                    </section>


                    <section class="mb-5">
                        <h5 class="uppercase font-bold">Other stuff</h5>
                        <ul>
                            <li class="text-sm leading-loose"><router-link class = "text-black"  to="/stats">Stats</router-link></li>

                        </ul>
                    </section>



                </aside>

                <div class="primary flex-1">
                    <router-view> </router-view>
                </div>
            </main>

            <hr>

        </div>

    </div>

    <script src="/js/app.js"></script>

    </body>
</html>
