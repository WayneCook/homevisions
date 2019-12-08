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
                    <path fill="none" stroke="#28598a" stroke-width="2.7928" d="M82 63H18c-7.2 0-13-5.8-13-13v0c0-7.2 5.8-13 13-13h64c7.2 0 13 5.8 13 13v0C95 57.2 89.2 63 82 63z"></path>
                    <path fill="#82deec" clip-path="url(#ldio-m757uprblfp-cp)" d="M81.3 58.7H18.7c-4.8 0-8.7-3.9-8.7-8.7v0c0-4.8 3.9-8.7 8.7-8.7h62.7c4.8 0 8.7 3.9 8.7 8.7v0C90 54.8 86.1 58.7 81.3 58.7z"></path>
                </svg>
            </div>
        </div>

        <v-app id="app">
            <v-progress-linear
            class="custom-progress-bar"
            indeterminate
            color="customBlue"
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
                            <div class="logo-wrapper pa-2">
                                <div class="logo-icon my-0 mx-auto">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 382 199" style="enable-background:new 0 0 382 199;" xml:space="preserve">

                                        <path class="st0 logo-bottom" d="M304.8,67.3l-38.6,18.9l-75.3-40.6L131,77.4l-71.1,37.2L21,95.8l49.4-23.9v1l2-1v-1l-2,1v-45h40.3v25.5l-1,0.5
                                            v1.6l2.5-1.3c0.4-0.2,0.6-0.6,0.6-1V52c0-0.4,0.2-0.8,0.6-0.9L190.9,8L304.8,67.3z"/>
                                        <polygon class="st1 logo-top" points="363,100.2 190.9,188 79,127 115.1,108.2 190.9,150.4 285.2,100.2 324.1,81.3 "/>
                                        <polygon class="st2 logo-middle" points="219.4,79.8 190.9,93.6 162.4,79.8 190.9,66 "/>
                                        <polygon class="st2 logo-middle" points="222.9,82.6 222.9,112.5 193.3,126.9 193.3,97 "/>
                                        <polygon class="st2 logo-middle" points="188.5,97 188.5,126.9 158.9,112.5 158.9,82.6 "/>
                                    </svg>
                                </div>
                                <div class="logo-text text-center">
                                    <h2 class="logo-home">home</h2>
                                    <h2 class="logo-visions">vision</h2>
                                    <p ma-0 class="logo-pm text-center">Property Management</p>
                                </div>
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
