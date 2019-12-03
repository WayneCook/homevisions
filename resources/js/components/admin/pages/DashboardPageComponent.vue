<template>
<v-container class="pa-0 ma-0">
    <v-row>
        <v-col class="pa-2">
            <v-card color="white" class="elevation-1 pa-4">
                <h1 class="headline">Dashboard</h1>
            </v-card>
        </v-col>
    </v-row>

    <v-row>
        <v-col class="pa-2">
            <v-card class="d-flex justify-space-between align-center elevation-1">
                <div class="mx-auto">
                <v-card-title class="pb-0">
                    <span class="subtitle-1 grey--text text--darken-2">
                        Total Visits
                    </span>
                </v-card-title>

                <v-card-text>
                    <span class="display-1">
                        {{ getViews }}
                    </span>
                </v-card-text>
                </div>

                <div class="mx-auto">

                <v-icon x-large color="#ffb47f">mdi-eye-outline</v-icon>
                </div>

            </v-card>
        </v-col>

        <v-col class="pa-2">
             <v-card class="d-flex justify-space-between align-center elevation-1">
                <div class="mx-auto">
                <v-card-title class="pb-0">
                    <span class="subtitle-1 grey--text text--darken-2">
                        Daily Visits
                    </span>
                </v-card-title>

                <v-card-text>
                    <span class="display-1">
                        {{ getViewsToday }}
                    </span>
                </v-card-text>
                </div>

                <div class="mx-auto">

                <v-icon x-large color="#ff7ea7">mdi-table-eye</v-icon>
                </div>

            </v-card>
        </v-col>

        <v-col class="pa-2">
             <v-card class="d-flex justify-space-between align-center elevation-1">
                <div class="mx-auto">
                <v-card-title class="pb-0">
                    <span class="subtitle-1 grey--text text--darken-2">
                        Total Messages
                    </span>
                </v-card-title>

                <v-card-text>
                    <span class="display-1">
                        {{ getMessageCount }}
                    </span>
                </v-card-text>
                </div>

                <div class="mx-auto">

                <v-icon x-large color="#9879ce">mdi-email-multiple-outline</v-icon>
                </div>

            </v-card>
        </v-col>

    </v-row>

    <custom-line-chart v-if="this.$store.getters['admin/loaded']"></custom-line-chart>
</v-container>
</template>

<script>

import CustomLineChart from '../../charts/CustomLineChart'
export default {
    components: {
        CustomLineChart
    },
    computed: {
        getViews() {
            return this.$store.getters['admin/getViewCount']
        },
        getViewsToday() {
            return this.$store.getters['admin/getViewsToday']
        },
        getMessageCount() {
            return this.$store.getters['admin/getMessageCount']

        }
    },
    mounted() {
    //
    }

}
</script>

<style>

</style>
