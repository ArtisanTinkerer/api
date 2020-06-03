<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Shorts</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    </head>
    <body>


    <div id="app">

        <div class="container mx-auto">

            <header class="py-6">
                <h1>
                    <img alt="Book Shorts" src="\images\logo.png">
                </h1>

            </header>

            <main class="flex">
                <aside class="w=1/5">

                    <section class="mb-5">
                        <h5 class="uppercase font-bold">Reviews</h5>
                        <ul>
                            {{--These are links to components--}}
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link :to="{ name: 'about'}">About</router-link></li>
                        </ul>
                    </section>


                    <section class="mb-5">
                        <h5 class="uppercase font-bold">Other stuff</h5>
                        <ul>
                            <li><router-link to="/">Home</router-link></li>
                            <li><router-link :to="{ name: 'about'}">About</router-link></li>
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
