<template>
<div>

          <v-navigation-drawer
            v-model="drawer"
            app
          >
            <v-list two-line dense>

              <v-list-item
                to='/'
              >
                <v-list-item-action>
                  <v-icon>person</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Members</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item
                to='about'
              >
                <v-list-item-action>
                  <v-icon>contact_mail</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>About</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item
                to='contact'
              >
                <v-list-item-action>
                  <v-icon>contact_mail</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Contact</v-list-item-title>
                </v-list-item-content>
              </v-list-item>

              <v-list-item
                to='blog'
              >
                <v-list-item-action>
                  <v-icon>contact_mail</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Blog</v-list-item-title>
                </v-list-item-content>
              </v-list-item>


            </v-list>
          </v-navigation-drawer>

          <v-app-bar
            app
            color="#2f4554"
            dark
          >
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Home Visions</v-toolbar-title>
          </v-app-bar>
          </div>
</template>

<script>

    export default {
        data(){
            return {
                drawer: false,
            }
        },
        methods: {
            //
        }
    }

</script>

<style>

</style>
