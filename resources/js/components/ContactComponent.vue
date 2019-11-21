<template>

<v-container fluid class="pa-0">

    <v-row>
        <v-img
            src="/images/mountians.jpg"
            lazy-src="/images/mountians.jpg"
            min-height="680"
        >

        <v-row class="mb-8">
            <v-col class="text-center">
                <h1 class="title-text">Leave us a message</h1>
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
                    label="Name"
                    color="#50789f"
                ></v-text-field>
                </v-col>

                <v-col
                cols="12"
                >
                <v-text-field
                    v-model="email"
                    label="E-mail"
                    color="#50789f"
                ></v-text-field>
                </v-col>

            </v-row>

                <v-row>
                    <v-col
                    cols="12">
                        <v-textarea
                        name="input-7-1"
                        label="Message"
                        value=""
                        auto-grow
                        clearable
                        color="#50789f"
                        ></v-textarea>
                    </v-col>
                </v-row>
            </v-container>
        </v-form>

        <v-card-actions class="d-flex justify-end">
            <div>
                <v-btn tile class=" ma-0 contact-btn" large color="rgb(47, 193, 176)" dark>Send message</v-btn>
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
            email: ''
        }
    }

}
</script>

<style>

/* h1 {
    display: block;
    text-align: center!important;
} */

</style>
