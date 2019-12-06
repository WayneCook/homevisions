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
                    <rect x="19" y="19" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0s" calcMode="discrete"></animate>
                    </rect><rect x="40" y="19" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0.1984126984126984s" calcMode="discrete"></animate>
                    </rect><rect x="61" y="19" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0.3968253968253968s" calcMode="discrete"></animate>
                    </rect><rect x="19" y="40" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="1.3888888888888888s" calcMode="discrete"></animate>
                    </rect><rect x="61" y="40" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0.5952380952380952s" calcMode="discrete"></animate>
                    </rect><rect x="19" y="61" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="1.1904761904761905s" calcMode="discrete"></animate>
                    </rect><rect x="40" y="61" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0.9920634920634921s" calcMode="discrete"></animate>
                    </rect><rect x="61" y="61" width="20" height="20" fill="#50789f">
                      <animate attributeName="fill" values="#76cbc1;#50789f;#50789f" keyTimes="0;0.125;1" dur="1.5873015873015872s" repeatCount="indefinite" begin="0.7936507936507936s" calcMode="discrete"></animate>
                    </rect>
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
