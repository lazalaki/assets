<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracast assets</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">  
      
    </head>

    <body class="font-sans">
        <div id="app">
            
            <div class="container px-8">
                <header class="py-6 mb-8" style="background: url(/images/splash.svg) no-repeat;">
                    <img src="/images/logo.svg" alt="Laracasts">
                </header>


                <main class="flex">

                    <aside class="w-64 pt-8">
                        <div class="mb-10">

                            <h5 class="uppercase text-xl font-bold mb-3">The Brand</h5>

                            <ul class="list-reset">
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/" exact>Logo</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/colors">Colors</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/typography">Typography</router-link></li>
                            </ul>

                        </div>

                        <div class="mb-10">

                            <h5 class="uppercase text-xl font-semibold mb-3">Doodles</h5>

                            <ul class="list-reset">
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/mascot">Mascot</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/loaders-and-animations">Loaders and Animations</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/wallpapers">Wallpapers</router-link></li>
                            </ul>

                        </div>


                        <div>

                            <h5 class="uppercase text-xl font-semibold mb-3">Stats</h5>

                            <ul class="list-reset">
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/site-stats">Site Stats</router-link></li>
                                <li class="text-lg leading-loose"><router-link class="text-black-500" to="/achievments">Your Achievments</router-link></li>
                            </ul>

                        </div>
                    </aside>

                    <div class="primary flex-1">

                        <router-view></router-view>

                    </div>

                </main>

                

                <hr>

                
            </div>



        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
