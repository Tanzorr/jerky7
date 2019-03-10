<template>
    <div class="container">
        <div class="row">
            <div class="post">
                <img src="https://images.unsplash.com/photo-1444530495635-029990f82ce8?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&s=4465988ca798e116375c231a002cc049" alt="">
                <h2>{{post.title}}</h2>
                <p>{{post.content}}</p>
            </div>
        </div>
    </div>

</template>

<script>
    module.exports = {
        data: function() {
            return {
                post:[],
            }
        },

        created(){
            this.fetchPost();
        },

        methods:{
                fetchPost(){
                    axios.get("posts/"+this.$route.params.id).then(response=> {this.post = response.data.post});
                    console.log(this.post);
                }
            }
    }
</script>

<style scoped>
    img{
        max-width: 500px;
    }
</style>