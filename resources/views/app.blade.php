<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>HOMEVISIONS</title>

    </head>
    <body>

        <v-app id="app">

                <v-container fluid class="main-container pa-0">
                    <mobile-nav-component></mobile-nav-component>
                    <nav-component></nav-component>
                    <div class="bottom-nav">
                        <h4>

                        Managing San Gabriel Valley Properties
                        </h4>
                    </div>

                    <transition name="router-anim" mode="out-in" enter-active-class="animated fadeInLeftBig" leave-active-class="animated fadeOutRightBig">

                        <router-view></router-view>
                    </transition>
                </v-container>

        </v-app>


        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
