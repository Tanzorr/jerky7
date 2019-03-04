<template>
    <div class="container" v-if ="product">
        <div class="row">
            <div class="col-md-6">
                <h1>{{product.title}}</h1>
                <img src="https://img4.goodfon.ru/wallpaper/big/c/d0/miaso-steik-spetsii-ogon-plamia-gril.jpg" alt="">
                <h3>Описание</h3>
                <p>{{product.description}}</p>

            </div>
            <div class="col-md-6">
                <p><b>Размер:{{product.size}}</b></p>
                <p><b>цена:{{product.price}}</b></p>
                <p>количество:{{product.quantity}}</p>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "ProductComponent",



        data: function () {
            return {
                product:null,

            }
        },
        created() {
            this.fetchProduct();
            this.viewCart();


        },
        methods:{
            viewCart(){
                if(localStorage.getItem('carts')){
                    this.carts = JSON.parse(localStorage.getItem('carts'));
                    this.badge = this.carts.length;
                    this.totalprice = this.carts.reduce((total,item)=>{
                        return total + this.quantity * item.price;
                    },0);
                }
            },
            addCart(){
                this.cartadd.id = pro.id;
                this.cartadd.name = pro.name;
                this.cartadd.price = pro.price;
                this.cartadd.id = pro.amount;
                this.carts.push(this.cartadd);
                this.cartadd ={};
                this.storeCard();
            },
            removeCart(pro){
                this.carts.splice(pro, 1);
                this.storeCard();
            },
            storeCard(){
                let parsed = JSON.stringify(this.carts);
                localStorage.setItem('carts',parsed);
                this.viewCart();
            },
            fetchProduct(){
                axios.get("product/"+this.$route.params.id).then(response=> {this.product = response.data.product});
                console.log(this.post);
            }
        }
    }
</script>

<style scoped>
</style>