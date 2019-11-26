@extends('layout.admin.admin')


@section('content')

    <admin-nav-component :user="{{ Auth::user() }}"></admin-nav-component>

    <v-content>
      <v-container
        fluid
        fill-height
      >
        <v-layout
          align-center
          justify-center
        >

        <transition name="router-anim" mode="out-in" enter-active-class="animated fadeInLeft" leave-active-class="animated fadeOutRight">
            <router-view style="animation-duration: .5s"></router-view>
        </transition>

        </v-layout>
      </v-container>
    </v-content>

    <v-footer
      color="#2f4554"
      app
    >
      <span class="white--text">Home Visions &copy;2019</span>
    </v-footer>


@endsection


