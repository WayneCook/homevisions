<template>
    <div>
       
        <div class="text-center">
            <v-dialog
            v-model="loadingDialog"
            hide-overlay
            persistent
            width="300"
            >
                <v-card
                color="customDarkBlue"
                dark
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

        <v-col class="pa-4">
            <v-card
            class="mx-auto contact-card"
            :elevation="13"
            max-width="550"
            tile
            >
            <v-container class="ma-0 pa-0">
                <v-row class="d-flex justify-end">
                    <v-icon class="mr-1" color="red" small>mdi-alert-circle</v-icon>
                    <p class="ma-0 grey--text subtitle-2">Or text us directly at (626)722-2424</p>

                </v-row>
            </v-container>
            
            <div class="icon-container email-icon">
                <v-img src="/images/icons/email.png" lazy-src="/images/icons/email.png"></v-img>
            </div>

            <v-form v-model="valid" ref="form">
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
                            label="Message"
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
                <div>
                    <v-btn @click="sendMessage()" :block="$vuetify.breakpoint.xsOnly" tile class="ma-0 contact-btn" large color="customBlue" dark>Send message</v-btn>
                </div>
            </v-card>
        </v-col>
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
                this.reset()

                this.$swal(
                    {
                        title: 'Message Sent!',
                        type: 'success',
                        text: 'Thank you ' + response.data + ' for contacting us! Your message has been recieved and you will be contacted shortly.',
                        showCloseButton: true,
                        confirmButtonText:
                            'Close'
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
        reset () {
        this.$refs.form.reset()
      }
    }
}
</script>

<style scoped>

.contact-card {
    padding-top: 70px!important;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 30px;
    margin-bottom: 100px;
}

.contact-card:before {
    content: "";
    display: block;
    position: absolute;
    top: 30px;
    left: 30px;
    width: 100%;
    height: 100%;
    background-color: #2b6490;
    z-index: -1;
}


</style>
