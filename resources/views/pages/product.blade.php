@extends('main')

@section('title', 'Product')

@section('content')
    <div class="container">
        <div class="row pt-lg-5">
            <div class="col-lg-6 text-center">
                <h2>Говядина Джерки - Вводный комплект</h2>
                <img src="https://img4.goodfon.ru/wallpaper/big/c/d0/miaso-steik-spetsii-ogon-plamia-gril.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-lg-6 pl-5 ">
                <p class="price"><b>14,50 € *</b></p>
                <p class="text-muted">Содержание: 150 г (9,67 € * / 100 грамм)</p>
                <p class="text-body">включая НДС без учета стоимости доставки</p>
                <p class="text-success">Готовность к отправке, срок доставки около 3-5 рабочих дней</p>

                <div class="mn mt-5">
                   <p> <b>Размер упаковки</b></p>
                    <select name="" id="">
                        <option value="">3x50</option>
                        <option value="">3x100</option>
                    </select>
                    <div class="row">
                        <div class=" col-md-5">
                            <select name="" id="">
                                <option value="">3x50</option>
                                <option value="">3x100</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <button class="btn btn-success">В корзине</button>
                        </div>
                        <hr>
                        <div class="row justify-content-center"><p> Артикул :</p><p>GS910</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 description">
                <h3>Описание</h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis purus tortor. Maecenas pretium sollicitudin sem, ac aliquet ligula mattis quis. Donec et turpis id sem porta facilisis. Nunc lectus diam, interdum at interdum vitae, vehicula sed eros. Vivamus scelerisque augue eget hendrerit elementum. Sed vel lacus vehicula, porttitor dolor gravida, luctus ante. Nulla facilisi.

                Aenean sed placerat elit, vel egestas massa. Vivamus sit amet velit eleifend, cursus nibh id, blandit leo. Maecenas leo felis, ultrices sed bibendum sit amet, dignissim a mi. Donec iaculis vitae nulla condimentum dignissim. Proin vulputate magna ac nisl tristique rhoncus. Quisque hendrerit placerat risus eu mattis. Praesent pellentesque congue mollis.

                Ut vitae lorem et magna sollicitudin pellentesque sed vel libero. Proin vulputate at sapien nec luctus. Donec eget maximus sapien. Duis id velit scelerisque, mollis risus sit amet, cursus ante. Nullam id mauris arcu. Curabitur ex quam, vulputate ac pharetra sed, rutrum sed nisl. Morbi in facilisis sapien.

                Duis suscipit dui vel lacinia semper. Quisque ac finibus diam. Curabitur at neque eget ex faucibus rhoncus. Sed facilisis est euismod diam feugiat, a ullamcorper metus pharetra. Nullam arcu felis, faucibus nec lorem tempor, condimentum posuere libero. Vivamus fermentum lacus elementum nunc venenatis varius. Sed non nisi lobortis, venenatis felis sit amet, varius nibh. Pellentesque nibh dolor, vehicula vitae urna et, interdum pellentesque lectus. Suspendisse cursus lobortis elementum. Morbi at orci diam. Proin eget luctus leo, ac mattis elit. Fusce auctor eros vitae quam varius pellentesque. Donec fermentum commodo metus sed laoreet. Nullam vestibulum, massa sed vestibulum porta, felis turpis scelerisque odio, quis porta ligula magna in lacus. Cras risus neque, faucibus sit amet porttitor ut, sollicitudin vitae ante. Cras hendrerit erat eget nisl finibus blandit.полным вкуса, гризли закуски Говядина Джерки идеально подходит для тех, кто хочет здорово питаться и наслаждаться им посередине.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>


@endsection
