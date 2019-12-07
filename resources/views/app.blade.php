<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>HomeVision</title>
    </head>
    <body>

        <div class="app-wrapper">
            <div class="loader-container">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <defs>
                      <clipPath id="ldio-m757uprblfp-cp" x="0" y="0" width="100" height="100">
                        <rect x="77.956" y="0" width="100" height="100">
                          <animate attributeName="width" repeatCount="indefinite" dur="1s" values="0;100;100" keyTimes="0;0.5;1"></animate>
                          <animate attributeName="x" repeatCount="indefinite" dur="1s" values="0;0;100" keyTimes="0;0.5;1"></animate>
                        </rect>
                      </clipPath>
                    </defs>
                    <path fill="none" stroke="#50789f" stroke-width="2.7928" d="M82 63H18c-7.2 0-13-5.8-13-13v0c0-7.2 5.8-13 13-13h64c7.2 0 13 5.8 13 13v0C95 57.2 89.2 63 82 63z"></path>
                    <path fill="#76cbc1" clip-path="url(#ldio-m757uprblfp-cp)" d="M81.3 58.7H18.7c-4.8 0-8.7-3.9-8.7-8.7v0c0-4.8 3.9-8.7 8.7-8.7h62.7c4.8 0 8.7 3.9 8.7 8.7v0C90 54.8 86.1 58.7 81.3 58.7z"></path>
                </svg>
            </div>
        </div>

        <v-app id="app">
            <v-progress-linear
            class="custom-progress-bar"
            indeterminate
            color="#2fc1b0"
            height="2"
            fixed
            v-if="loading"
            >
            </v-progress-linear>

            <v-container fluid class="main-container pa-0">
                <mobile-nav-component></mobile-nav-component>
                <nav-component></nav-component>
                <div class="bottom-nav">
                    <h4>Managing San Gabriel Valley Properties</h4>
                </div>

                <transition name="router-anim" mode="out-in" enter-active-class="animated fadeInLeftBig" leave-active-class="animated fadeOutRightBig">
                    <router-view></router-view>
                </transition>

                <v-container class="custom-container footer-container">
                    <v-row>
                         <v-col class="d-flex justify-center cols-12 col-sm-6 mb-10 mb-0">
                            <div>
                                <v-img class="mx-auto" src="/images/vision_logo.png" width="165" lazy-src="/images/vision_logo.png"></v-img>
                            </div>
                        </v-col>


                        <v-col class="d-flex justify-center cols-12 col-sm-6">
                            <div>
                                <h4 class="title-text footer-title">Sitemap</h4>
                                <ul class="footer-list">
                                    <li>
                                        <a class="para footer-links text-center" href="/">Home</a>
                                    </li>
                                    <li>
                                        <a class="para footer-links text-center" href="/about">About</a>
                                    </li>
                                    <li>
                                        <a class="para footer-links text-center" href="/admin/dashboard">Admin</a>
                                    </li>
                                </ul>
                            </div>
                        </v-col>
                    </v-row>
                </v-container>

                <v-container fluid class="footer-bottom">
                    <v-row>
                        <v-col class="d-flex justify-center align-center">
                            <p class="copyright-text pa-2 ma-0">Copyright &copy; {{ now()->year }} HomeVision</p>
                        </v-col>
                    </v-row>
                </v-container>

            </v-container>
        </v-app>

        <script src="{{ asset('js/app.js') }}"></script>


        <script>
            $( document ).ready(function() {
                $('.app-wrapper').delay(1500).fadeOut();
            });
        </script>

    </body>
</html>
