<template>
    <div class="container">
        <button @click="plus">+</button>
        <span>Кількість товара {{count}}</span>
        <button @click="minus">-</button>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                id: 0,
                count: 0
            }
        },
        mounted() {
            this.update()
            this.plus()
            this.minus()
        },
        methods:{
            update: function () {
                this.id++
            },
            minus: function () {
                this.count--
            },
            plus: function () {
                this.count++
            }
        }
    }
</script>

<style scoped>

</style>