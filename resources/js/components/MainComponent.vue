<template>

    <div>

        <header-top></header-top>
        <div class="container">
            <div class="row row justify-content-center">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <router-link class="nav-link" tag="a" to="/" >Главная</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" tag="a" to="/products" >Продукты</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" tag="a" to="/blog" >Блог</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" tag="a" to="/contacts" >Контакти</router-link>
                    </li>


                </ul>
            </div>

        </div>

        <div class="content">
            <router-view></router-view>
        </div>

        <footer-bot></footer-bot>
    </div>


</template>

<script>

    import HeaderTop from '../components/HeaderComponent'
    import FooterBot from '../components/FooterComponent'
    export default {

        components:{

            'header-top': HeaderTop,
            'footer-bot': FooterBot,

        },
        mounted() {
            console.log('main');
        }
    }
</script>

<style scoped>

</style>