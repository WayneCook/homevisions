<template>
   <v-card
   class="pa-8 mb-8"
   width="auto">

    <v-card-title class="pa-0 mb-4">{{ section.description }}</v-card-title>

      <form>
    <v-text-field
      v-model="section.title"
      label="Title"
      outlined
    ></v-text-field>

    <v-textarea
        v-model="section.text"
        label="Description"
        auto-grow
        outlined
    ></v-textarea>


    <v-btn color="primary" @click="save()" class="mr-4">Update</v-btn>

  </form>


  </v-card>
</template>

<script>
export default {
    props: ['section'],

    data() {
        return {
            form: ''
        }
    },
    methods: {

        save() {

            this.$confirm('Do you really want to save changes?').then(res => {
                if(res) {
                    this.$store.dispatch('admin/updateSection', this.section).then((success) => {
                        if(success){this.$store.dispatch('app/fetchData')}
                    })
                }
            })
        }
    }

}
</script>

<style>

</style>
