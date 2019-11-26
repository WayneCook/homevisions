<template>

        <v-container fluid>
            <v-row>

        <v-card elevation="1">
          <v-card-title class="subtitle-1 font-weight-medium mx-auto">
            <span>{{ title }}</span>
          </v-card-title>
          <v-divider></v-divider>

        <v-data-table
          :headers="getHeaders"
          :items="items.data"
          :options.sync="options"
          :server-items-length="items.total"
          :loading="getLoadingState"
          loading-text="Loading... Please wait"
          :footer-props="footer"
          :must-sort="true"
          show-select
          v-model='selected'

        >

        <template v-slot:item.message="{ item }">

            {{ shortenString(item.message) }}

            <!-- {{ '$'+(item.revenue).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') }} -->

        </template>

          <template v-slot:top>

      <v-dialog v-model="dialog" max-width="500px">

          <v-card>
            <v-card-title>
              <span class="headline">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                    {{ showing }}
                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>

              <v-btn color="blue darken-1" text @click="closeDialog()">Close</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>

            <v-toolbar flat color="white">
              <v-text-field
                v-model="search"
                class="d-inline-flex"
                label="Search"
                single-line
                hide-details
                style="max-width: 400px"
              ></v-text-field>

              <v-btn
                text
                icon
                small
                class="d-inline-flex"
                @click="searching()"
                elevation="2"
                :disabled="buttonActive"
              >
                <v-icon small>search</v-icon>
              </v-btn>

              <v-btn
                text
                icon
                small
                class="d-inline-flex ml-2"
                @click="searchReset()"
                elevation="2"
                :disabled="buttonActive"
              >
                <v-icon small>cached</v-icon>
              </v-btn>

              <v-menu auto>
                <template v-slot:activator="{ on: onMenu }">
                  <v-tooltip bottom>
                    <template v-slot:activator="{ on: onTooltip }">
                      <v-btn
                        text
                        icon
                        small
                        class="d-inline-flex ml-2"
                        elevation="2"
                        v-on="{...onMenu, ...onTooltip}"
                      >
                        <v-icon small>get_app</v-icon>
                      </v-btn>
                    </template>
                    <span>Export to excel</span>
                  </v-tooltip>
                </template>

                <v-list dense>
                  <v-list-item>
                    <v-list-item-title>
                      <download-excel
                        @click="exportExcel()"
                        :fetch="exportExcel"
                        type="csv"
                      >Export all</download-excel>
                    </v-list-item-title>
                  </v-list-item>

                  <v-list-item v-if='selected.length > 0'>
                    <v-list-item-title>
                      <download-excel
                        @click="exportSelectedExcel()"
                        :fetch="exportSelectedExcel"
                        type="csv"
                      >Export selected</download-excel>
                    </v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>

              <div class="flex-grow-1"></div>

            </v-toolbar>

          </template>

               <template v-slot:item.action="{ item }">
                        <v-icon
                            small
                            class="mr-2"
                            color="primary"
                            @click="showItem(item)"
                        >
                            mdi-eye
                        </v-icon>
                        <v-icon
                            small
                            color="error"
                            @click="deleteItem(item)"
                        >
                            delete
                        </v-icon>
                        </template>

        </v-data-table>
        </v-card>

        <v-snackbar
            v-model="snackBar.active"
            :timeout="snackBar.timeout"
            >
            {{ snackBar.text }}
            <v-btn
                color="blue"
                text
                @click="snackBar.active = false"
            >
                Close
            </v-btn>
        </v-snackbar>


        </v-row>
        </v-container>

</template>


<script>

import { mapGetters } from 'vuex';

export default {
  props: ['store', 'title'],
  data() {
    return {
      search: "",
      showing: '',
      selected: [],
      loading: false,
      loadCount: 0,
      dialog: false,
      isCreate: false,
      editedItem: {},
      confirm: false,
      footer: {
        "items-per-page-options": [5, 10, 25, 50]
      },
      confirmSettings: {},
      options: {
        sortBy: ["id"],
        sortDesc: [true],
        itemsPerPage: 5
      },

      snackBar: {
        active: false,
        text: 'My timeout is set to 2000.',
        timeout: 5000
      }
    };
  },
  methods: {
    getItem(item) {
      this.$store.dispatch(`${this.store}/getItem`, item).then(() => {
        this.openDialog();
      });
    },
    alert(message) {
        this.snackBar.active = true;
        this.snackBar.text = message;
    },
    exportExcel() {
      this.options.search = this.search;

      return this.$store
        .dispatch(`${this.store}/exportExcel`, this.options)
        .then(function(result, data) {
          return result.data.collection;
        });
    },
    exportSelectedExcel() {
        return this.selected;
    },
    updateItem() {
      this.$store.dispatch(`${this.store}/updateItem`).then(success => {
          this.confirm = false;
          this.dialog = false;
        if (success.status) {
          this.alert('User '+ success.user+' updated successfully.');

          this.fetchItems();
        } else {
          this.alert('Please check errors');

        }
      });
    },
    fetchItems() {
      return this.$store.dispatch(`${this.store}/fetchItems`, this.options).then(function(success) {
          return success;
      });
    },
    searching() {
      this.options.search = this.search;
      this.fetchItems();
    },
    searchReset() {
      this.search = "";
      this.searching();
    },
    openDialog() {
      this.dialog = true;
    },
    closeDialog() {
      this.dialog = false;
    },
    activateConfirm(settings) {
      this.confirmSettings = settings;
      this.confirm = true;
    },
    showItem(item) {
        this.showing = item
        this.openDialog();
    },
    closeDialog() {
      this.$store.dispatch(`${this.store}/resetItem`);
      this.formReset();
    },

    deleteItem(item) {

      this.$store.dispatch(`${this.store}/deleteItem`, item).then(success => {
        if (success) {
          this.formReset();
          this.fetchItems();
          this.alert('User '+success.user+' deleted.');
        }
      });
    },
    deleteSelected() {
      this.$store.dispatch(`${this.store}/deleteSelected`, this.selected).then(success => {
        if (success) {
          this.formReset();
          this.fetchItems();
        }
      });
    },
    formReset() {
      this.isCreate = false;
      this.dialog = false;
      this.confirm = false;
      this.$store.dispatch(`${this.store}/resetItem`);
    },
    shortenString(str) {
        let customString = '';

        if(str.length > 10) {
            return customString = str.substring(0,10)+'...'
        } else {
            return str;
        }
    }
  },
  watch: {
    options: {
      handler(item) {
          this.options.search = this.search;

          if(this.loadCount > 0) { this.fetchItems() }
          this.loadCount ++;
      },
      deep: true
    }
  },
  computed: {

    items() {
      return this.$store.getters[`${this.store}/all`];
    },
    formTitle() {
      return this.getEditItem.id ? "Edit Item" : "New Item";
    },
    getOptions() {
      return this.options;
    },
    getLoadingState() {
      return this.$store.getters[`${this.store}/getLoadingState`];
    },
    getEditItem() {
      return this.$store.getters[`${this.store}/getEditItem`];
    },
    errors() {
      return this.$store.getters[`${this.store}/getErrors`];
    },
    buttonActive() {
      return this.search ? false : true;
    },
    getHeaders() {
      return this.$store.getters[`${this.store}/getHeaders`];
    }
  },
  mounted() {
      this.fetchItems();
  }
}
</script>

<style scoped>

.v-card.v-sheet.theme--light.elevation-1 {
    width: 100%;
}

</style>
