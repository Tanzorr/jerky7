<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 text-center"  v-for="product in products" :key="product.id">
                <img src="https://img4.goodfon.ru/wallpaper/big/c/d0/miaso-steik-spetsii-ogon-plamia-gril.jpg" alt="">
                <p ><a  data-toggle="modal" data-target="#myModal">{{product.title}}</a></p>
                <p> {{product.description}}</p>
                <p><b>{{product.price}}</b></p>
                <button @click = "addCart(product)" class="btn btn-primery">Add to cart</button>
                <button id="show-modal" @click="show(product)">Show Modal</button>
                <router-link :to="{ name: 'product', params: { id: product.id} }">Подробнее</router-link>
                <transition name="modal" v-if="showModal">
                    <div class="modal-mask">
                        <div class="modal-wrapper">
                            <div class="modal-container">

                                <div class="modal-header">
                                    <slot name="header">
                                        default header
                                    </slot>
                                </div>

                                <div class="modal-body">
                                    <img src="https://img4.goodfon.ru/wallpaper/big/c/d0/miaso-steik-spetsii-ogon-plamia-gril.jpg" alt="">
                                    <p ><a  data-toggle="modal" data-target="#myModal">{{example.title}}</a></p>
                                    <p> {{example.description}}</p>
                                    <p><b>{{example.price}}</b></p>
                                </div>
                                <div class="modal-body" id="cart">
                                    <h5>Your cart</h5>
                                    <table class="table table-striped text-left">
                                        <tr v-for="(cart, n) in carts">
                                            <td>{{cart.name}}</td>
                                            <td>Pr. {{cart.price}}</td>
                                            <td width="100"><input type="text"  class="form-control" v-model="cart.private"></td>
                                            <td width="60">
                                                <button @click="removeCart()" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                            </td>
                                        </tr>
                                    </table>
                                    <p>Total price:Pr. {{totalprice}}&nbsp
                                        <button @click = "addCart(product)" class="btn btn-primery">Add to cart</button>
                                        <button data-dismiss="modal" class="btn btn-primary">Checkout</button>
                                    </p>
                                </div>

                                <div class="modal-footer">
                                    <slot name="footer">
                                        default footer
                                        <button class="modal-default-button" @click="showModal = false">
                                            OK
                                        </button>
                                    </slot>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
            <!-- use the modal component, pass in the prop -->
        </div>
    </div>
</template>

<script>
   // import Product from '../../components/ProductCartComponent'

    export default {
        name: "ProductComponent",
        // components:{
        //     'product-cart': Product
        // },

        data: function () {
            return {
                products: [],
                example: {},
                showModal:false,
                order:[],
                carts:[
                    {
                        private:0,
                    }
                ],
                addet:[],
                cartadd:{
                    id:'',
                    name:'',
                    price:'',
                    amount:'',
                    private:1,

                },
                badge:'0',
                quontaty:1,

                totalprice:'0'

            }
        },
        mounted() {
            console.log('mounted');
        },
        created() {
            console.log('Hi Oleg');
            this.fetchProducts();
            this.viewCart();

        },
        methods: {
            show(product) {
                this.showModal = true;
                this.example = product;

            },
            viewCart(){
                if (localStorage.getItem('carts')) {
                    this.carts = JSON.parse(localStorage.getItem('carts'));
                    this.badge = this.carts.length;
                    this.totalprice = this.carts.reduce((total, item) => {
                        return total + this.quontaty * item.price;
                    }, 0);
                }
            },
            addCart(pro){
console.log('start',this.carts.length);
                if(this.carts.length>=1){

                    for(var i=0; i<this.carts.length; i++){

                        if(this.carts[i].id == pro.id){
                            this.carts[i].private++;
                            this.carts[i].price = this.carts[i].price * this.carts[i].private;
                            console.log("incriment1",this.carts[i].private);
                        }else{
                            alert(22);
                            console.log('tlse', pro);
                            this.cartadd.id = pro.id;
                            this.cartadd.name = pro.name;
                            this.cartadd.price = pro.price;
                            this.cartadd.amount = pro.amount;
                            this.cartadd.private = 1;
                            this.carts.push(this.cartadd);
                        }
                        this.cartadd.private * this.carts.count;
                    }

                }
                // else if(this.carts.length >0  && this.carts.length <=1){
                //     console.log("pro",pro.id);
                //     console.log("cartsId",this.carts);
                //     if(this.carts[0].id === pro.id){
                //         this.carts[0].private =2;
                //         console.log("incriment2",this.carts[0].private);
                //     }else{
                //         console.log('tlse', pro);
                //         this.cartadd.id = pro.id;
                //         this.cartadd.name = pro.name;
                //         this.cartadd.price = pro.price;
                //         this.cartadd.amount = pro.amount;
                //         this.cartadd.private = 2;
                //         this.carts.push(this.cartadd);
                //     }
                //    // console.log('double',  this.carts);
                // }
                else{
                    console.log('tlse', pro);
                    this.cartadd.id = pro.id;
                    this.cartadd.name = pro.name;
                    this.cartadd.price = pro.price;
                    this.cartadd.amount = pro.amount;

                    this.carts.push(this.cartadd);
                    console.log("cartsAdd",this.cartadd)
                    console.log("Pro",pro)
                }
                console.log("cartsId2",this.carts);
                this.cartadd = {};
                this.storeCart();
            },
            removeCart(pro){
                this.carts.splice(pro,1);
                this.storeCart();

            },
            storeCart(){
                let parsed = JSON.stringify(this.carts);
                localStorage.setItem('carts',parsed);
                this.viewCart();
            },
            fetchProducts() {
console.log('fetchProduct');
                axios.get("products").then(response => {
                    this.products = response.data.products;
                    console.log('Products', response.data.products);
                });
            },
        },

    }
</script>

<style scoped>

</style>