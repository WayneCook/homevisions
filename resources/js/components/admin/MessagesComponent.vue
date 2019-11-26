<template>
    <custom-datatable :title="title" :store="store">
    </custom-datatable>
</template>

<script>

    import CustomDatatable from './CustomDatatable'


export default {
    data() {
        return {
            store: 'messages',
            title: 'Messages'
        }
    },
    components: {
        CustomDatatable
    }

}
</script>

<style>

</style>
