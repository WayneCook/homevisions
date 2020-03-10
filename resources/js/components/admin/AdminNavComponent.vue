<template>
<div>

<v-snackbar
    v-model="snackBar.active"
>
    {{ snackBar.message }}
    <v-btn
    color="blue"
    text
    @click="$store.dispatch('admin/closeSnack')"
    >
    Close
    </v-btn>
</v-snackbar>

    <v-navigation-drawer
    v-model="drawer"
    app
    >
     <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="title">
            Admin
          </v-list-item-title>
          <v-list-item-subtitle>
            Menu
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

    <v-list>

        
        <v-list-item-group color='#1976d2'>

        <v-list-item to='/admin/dashboard'>
            <v-list-item-icon>
                <v-icon>mdi-view-dashboard-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>Dashboard</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item to='/admin/messages'>
            <v-list-item-icon>
                <v-icon>mdi-email-open-multiple-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>Messages</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item to='/admin/company'>
            <v-list-item-icon>
                <v-icon>mdi-domain</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>Company</v-list-item-title>
            </v-list-item-content>
        </v-list-item>



      <v-list-group
        prepend-icon="mdi-file-multiple-outline"
        no-action
      >
        <template v-slot:activator>            
          <v-list-item-title>Pages</v-list-item-title>
        </template>
        
        <v-list-item to='/admin/pages/home'>
        <v-list-item-icon>
          <v-icon>mdi-file-edit-outline</v-icon>
        </v-list-item-icon>

        <v-list-item-content>
            <v-list-item-title>Home</v-list-item-title>
        </v-list-item-content>

      </v-list-item>


        <v-list-item to='/admin/pages/about'>
            <v-list-item-icon>
                <v-icon>mdi-file-edit-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>About</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

        <v-list-item to='/admin/pages/property-management'>
            <v-list-item-icon>
                <v-icon>mdi-file-edit-outline</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
                <v-list-item-title>Property Management</v-list-item-title>
            </v-list-item-content>
        </v-list-item>

      </v-list-group>

</v-list-item-group>
    </v-list>
        </v-navigation-drawer>

        <v-app-bar
        app
        color="#2f4554"
        dark
        >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title class="d-none d-sm-flex ">Home Visions</v-toolbar-title>
            <v-spacer></v-spacer>

            <v-icon class="d-none d-sm-flex mr-2">mdi-account-circle</v-icon>

            <span class="mr-4 d-none d-sm-flex">
                {{ user.name }}
            </span>


             <v-btn @click="logout()" class="ma-2" text dark>
                <v-icon dark left>mdi-logout</v-icon>logout
            </v-btn>

        </v-app-bar>

        </div>
</template>

<script>

    export default {
        props: ['user'],
        data(){
            return {
                drawer: true,
                snackbar: false
            }
        },
        methods: {
            logout() {
                axios.post('/logout').then(response => {

                  if (response.status === 302 || 401) {

                    window.location.href = "/";

                  }
                  else {
                    // throw error and go to catch block
                  }
                }).catch(error => {

              });
            }
        },
        mounted() {

            this.$store.dispatch('admin/getAdminData');

        },
        computed: {
            snackBar() {
                return this.$store.getters['admin/getSnackBar']
            }
        }
    }

</script>

<style>

</style>
