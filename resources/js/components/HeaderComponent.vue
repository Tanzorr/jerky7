<template>
    <div>
        <div class="container-fluid d-flex justify-content-between">
            <div class="col-lg-2">
                <h1><a href="/"><img class=" logo rounded border-0" :src="logo_src" alt=""></a></h1>
            </div>
            <div class="col-lg-4" >

                <div>
                    <ul class="nav navbar-nav navbar-right mt-3 text-right">
                        <li>
                            <a href="#" >
                            <i class=" fa fa-shopping-cart" aria-hidden="true"  id="show-modal" @click="showModal = true">Корзина</i>
                                <span class="badge"></span>
                        </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <transition name="modal" v-if="showModal">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container">

                        <div class="modal-header">
                            <slot name="header">
                                default header
                            </slot>
                        </div>
                        <div class="modal-body" id="cart">
                            <h5>Your cart</h5>
                            <table class="table table-striped text-left">
                                <tr v-for="(cart, n) in carts" v-bind:key="cart.id">
                                    <td>{{cart.name}}</td>
                                    <td>Pr. {{cart.price}}</td>
                                    <td width="100"><input type="text" readonly class="form-control" v-model="quontaty"></td>
                                    <td width="60">
                                        <button @click="removeCart()" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <p>Total price:Pr. {{totalprice}}&nbsp
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
</template>

<script>
    export default {
        name: "HeaderComponent",

        data(){
            return{
                logo_src:"/img/photo_2018-11-13_20-04-03.jpg",
                showModal:false,
                order:[],
                carts:[],
                cartadd:{
                    id:'',
                    name:'',
                    price:'',
                    amount:''
                },
                bade:'0',
                quontaty:'1',
                totalprice:'0'
            }


        },

        created(){
            this.viewCart()
        },

        methods:{
            viewCart(){
                if (localStorage.getItem('carts')){

                   // this.carts = JSON.parse(localStorage.getItem('carts'));
                    console.log('cart',this.carts);
                    this.badge =this.carts.length;
                    this.totalprice =this.carts.reduce((total,item)=>{
                        return total + this.quontaty * item.price;
                    },0);
                }
            },
            addCart(pro){
                this.cartadd.id = pro.id;
                this.cartadd.name = pro.name;
                this.cartadd.price = pro.price;
                this.cartadd.amount = pro.amount;
                this.carts.push(this.cartadd);
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
            }
        },
        // components:{
        //     'modal': Modal
        // },




    }
</script>

<style scoped>

</style>