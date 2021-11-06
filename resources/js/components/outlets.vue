<template>
    <div class="card">
        <div class="card-body" id="mapid"></div>
    </div>
</template>


<script>
    export default {

       

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    #mapid { min-height: 500px; }
</style>
