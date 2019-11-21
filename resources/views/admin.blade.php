@extends('layout.admin.admin')

@section('content')
    <admin-nav-component></admin-nav-component>

    <v-content>
      <v-container
        fluid
        fill-height
      >
        <v-layout
          align-center
          justify-center
        >
          <router-view></router-view>
        </v-layout>
      </v-container>
    </v-content>

    <v-footer
      color="#2f4554"
      app
    >
      <span class="white--text">&copy; 2019</span>
    </v-footer>

@endsection
