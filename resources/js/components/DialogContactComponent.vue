<template>
    <div>
        <div class="text-center">

            <v-dialog
            v-model="loadingDialog"
            hide-overlay
            persistent
            width="250"
            tile
            >
                <v-card
                    color="customDarkBlue"
                    dark
                    tile
                >
                    <v-card-text>
                        Sending Message
                        <v-progress-linear
                            indeterminate
                            color="customBlue"
                            class="mb-0"
                        ></v-progress-linear>
                    </v-card-text>
                </v-card>
            </v-dialog>
        </div>

            <v-card
            class="mx-auto contact-card"
            :elevation="13"
            max-width="550"
            tile
            >
            <v-card-title class="text-center">
                <h1 class="title-text">Contact us</h1>
            </v-card-title>
            <v-form ref="form" v-model="valid">
                <v-container>
                <v-row>
                    <v-col
                    cols="12"
                    >
                    <v-text-field
                        v-model="form.name"
                        label="Name"
                        color="customBlue"
                        :error-messages="errors.name"
                    ></v-text-field>
                    </v-col>

                    <v-col
                    cols="12"
                    >
                    <v-text-field
                        v-model="form.email"
                        label="E-mail"
                        color="customBlue"
                        :error-messages="errors.email"
                    ></v-text-field>
                    </v-col>

                    <v-col
                    cols="12"
                    >
                    <v-text-field
                        v-model="form.phone"
                        label="Phone"
                        color="customBlue"
                        :error-messages="errors.phone"
                    ></v-text-field>
                    </v-col>
                </v-row>
                    <v-row>
                        <v-col
                        cols="12">
                            <v-textarea
                            v-model="form.message"
                            name="input-7-1"
                            label="How can we help?"
                            value=""
                            auto-grow
                            clearable
                            color="customBlue"
                            :error-messages="errors.message"
                            ></v-textarea>
                        </v-col>
                    </v-row>
                </v-container>
            </v-form>
            <div class="d-sm-flex justify-space-between">

                <div>
                    <v-btn @click="sendMessage()" :block="$vuetify.breakpoint.xsOnly" tile class=" ma-0 contact-btn" large color="customBlue" dark>Send Message</v-btn>
                </div>
                <div>
                    <v-btn @click="closeDialog(), clearErrors()" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 contact-btn" large text light color="#6e7881">Cancel</v-btn>
                </div>
            </div>
        </v-card>
    </div>
</template>

<script>
import { log } from 'util';
export default {
    data() {
        return {
            valid: true,
            loadingDialog: false,
            errors: {
                name: '',
                email: '',
                phone: '',
                message: '',
            },
            form: {
                name: '',
                email: '',
                phone: '',
                message: '',
            }
        }
    },
    methods: {
        sendMessage() {
            this.loadingDialog = true
            this.clearErrors()

            axios.get(
                '/api/messages/create', { params: this.form }
            ).then(response => {
                this.valid = true
                this.loadingDialog = false

                this.$swal(
                    {
                        title: 'Message Sent!',
                        type: 'success',
                        text: 'Thank you ' + response.data + ' for contacting us! Your message has been recieved and you will be contacted shortly.',
                        showCloseButton: true,
                        confirmButtonText:
                            'Close'
                    }).then((result) => {
                        if (result.value) {
                                this.$store.dispatch('app/setContactDialog', false)

                            }
                        })
            })
            .catch(error => {
                this.loadingDialog = false

                if(error.response.status === 422) {
                    this.errors = error.response.data.errors
                } else {

                    this.$swal(
                    {
                        title: 'Message Failed!',
                        type: 'error',
                        text: 'Unfortunently your message was not sent, we are currently working on a solution. Please try again later.',
                        showCloseButton: true,
                        confirmButtonText:
                            'Close'
                    })

                }

                this.valid = false
            });
        },
        clearErrors() {
            Object.keys(this.errors).forEach( key => {
                this.errors[key] = ''
            })
        },
        closeDialog() {
            this.$store.dispatch('app/setContactDialog', false)
            this.$refs.form.reset()
        }
    }
}
</script>

<style scoped>

.contact-card {
    padding-top: 20px!important;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 30px;

}

.custom-dialog {

    max-width: 550px!important;
}

.title-text {
    margin: auto;
    margin-top: 18px;
    font-size: 24px;
}


</style>
