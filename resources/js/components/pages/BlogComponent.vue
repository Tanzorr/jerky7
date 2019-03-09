<template>
    <div class="container">
        <div class="blog__post" v-for="(post, index) in posts">
            <img src="https://images.unsplash.com/photo-1415663058438-995397760614?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=ee7fb8668a89cb9955e2d9c939abb161" alt="" class="img-thumbnail">
            <h3>{{ post.title }}</h3>
            <router-link :to="{ name: 'post', params: { id: post.id} }">Подробнее</router-link>
        </div>
    </div>
</template>

<script>
    //var posts = require('../../posts')


    module.exports = {
        data: function() {
            return {
               // posts: posts,
                posts:[]
            }
        },

        created(){
            this.fetchPosts();
        },

        methods:{

            fetchPosts(){
                axios.get("posts").then(response=> {this.posts = response.data.posts});
                console.log(this.posts);
            },


        }
    }
</script>
<style scoped>
    img{
        max-width: 350px;
    }

</style>