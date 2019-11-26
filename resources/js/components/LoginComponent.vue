<template>

<v-container fluid class="pa-0">

    <v-row class="mt-10">
        <v-img
            src="/images/mountians.jpg"
            lazy-src="/images/mountians.jpg"
            height="700"
        >

        <v-row class="mb-8">
            <v-col class="text-center">
                <h1 class="title-text">Login</h1>
            </v-col>
        </v-row>

        <v-row>
            <v-col>


        <v-card
        class="mx-auto mt-6 contact-card"
        :elevation="13"
        max-width="550"
        tile
        >

        <div class="icon-container email-icon">
            <v-img src="/images/icons/email.png" lazy-src="/images/icons/email.png"></v-img>
        </div>

        <v-form v-model="valid">

            <v-container>
            <v-row>

                <v-col
                cols="12"
                >
                <v-text-field
                    v-model="name"
                    :error-messages="getErrors.name"
                    label="Username"
                    color="#50789f"
                ></v-text-field>
                </v-col>

            </v-row>

                <v-row>
                    <v-col
                    cols="12">
                        <v-text-field
                            v-model="password"
                            label="Password"
                            color="#50789f"
                            :error-messages="getErrors.password"
                        ></v-text-field>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>

        <v-card-actions class="d-flex justify-end">
            <div>
                <v-btn @click="login()" tile class=" ma-0 contact-btn" large color="rgb(47, 193, 176)" dark>Login</v-btn>
            </div>
        </v-card-actions>
    </v-card>

    </v-col>
            </v-row>

        </v-img>

        </v-row>
    </v-container>
</template>

<script>
export default {
    data() {
        return {
            valid: true,
            name: '',
            password: '',
            errors: {
                name: '',
                password: ''
            }
        }
    },
    methods: {

        login() {
            const params = { name: this.name, password:this.password };
            this.$store.dispatch('login/login', params);
        }

    },
    computed: {
        getErrors() {
            return this.$store.getters['login/errors'];
        }
    },
    mounted() {
        this.$store.dispatch('app/setLoadingState', false);
    },


}
</script>

<style>

/* h1 {
    display: block;
    text-align: center!important;
} */

</style>
