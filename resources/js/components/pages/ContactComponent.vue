<template>
    <div>
        <div class="container">
            <div class="row">
                <h1>{{page.title}}</h1>
                <p>
                    {{page.content}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactComponent",

        data: function(){
            return{
                page:[]
            }
        },
        created(){
            this.fetchPage();
        },
        methods:{
            fetchPage(){
                axios.get("pages/2").then(response=> {this.page = response.data.page});
                console.log(this.page);
            },
        }
    }
</script>

<style scoped>

</style>