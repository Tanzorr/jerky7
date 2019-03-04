<template>
    <section class="info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{page.content}}
                </div>
                <div class="col-lg-4"><img  class="img-thumbnail" src="https://img4.goodfon.ru/wallpaper/big/c/d0/miaso-steik-spetsii-ogon-plamia-gril.jpg" alt=""></div>
            </div>
        </div>
    </section>
</template>

<script>

    export default {
        props:['page'],
        data:function () {
            return{


            }
        },
    }
</script>

<style scoped>

</style>