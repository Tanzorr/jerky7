<template>
    <div class="container">
        <button @click="update" class="btn btn-default" v-if="!is_refreshed">update {{id}}</button>
        <!--<h2>{{urldata}}</h2>-->
        <div  v-for="url in urldata"> root
            <span>{{url.id}}</span><br>
            <b>{{url.name}}</b><br>
            <span>{{url.description}}</span><br>
            <b>{{url.category}}</b><br>
            <b>{{url.size}}</b><br>
            <b>{{url.price}}</b><br>

        </div>
    </div>

</template>

<script>
    export default {
        data:function () {
            return{
                page: [],
                is_refreshed: false,
                id: 1
            }
        },
        mounted(){
            this.update()
        },
        page:{
            update: function () {
                this.is_refresh = true
                axios.get('pages{id}').then((response)=>{
                    this.urldata = response.data
                    this.is_refresh = false
                    this.id++
                });

            }
        }
    }
</script>

<style scoped>

</style>