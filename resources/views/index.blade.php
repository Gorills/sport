@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:url', '')

@section('og:title', '')
@section('og:description', '')


@section('twitter:title', '')
@section('twitter:description', '')





@section('content')

<section class="start">
    <div class="container">
        <div class="start__inner">
            <h1 class="start__title">БАСКЕТБОЛЬНЫЕ КРОССОВКИ</h1>
            <p class="start__subtitle">NIKE  JORDAN</p>

            <div class="start__btn-wrapper">
                <a href="#" class="btn btn__accent">Каталог</a>
                <a href="#" class="btn btn__alter-light">Каталог</a>
            </div>

            <div class="start__promo">Promo код на <span class="start__promo-accent">скидку 12%</span> - mr_FANTASTIC</div>

        </div>
    </div>
    <img class="start__img" src={{ asset('images/bg-start.png') }} alt="">
</section>

<section class="series">
    <h2 class="series__title">БАСКЕТБОЛЬНЫЕ КРОССОВКИ с бесплатной доставкой в Ваш регион за 1-3 дня</h2>

    <div class="container">
        <div class="series__inner">

            <div class="series__item">
                <h3 class="series__item-title">Серия Air (айр)</h3>
                <p class="series__item-text">Система амортизации Nike Air в сочетании с приподнятой пяткой из пеноматериала создает современный образ. Быстрые ускорения и лучшее гашение ударов это - NIKE AIR.</p>
                <p class="series__item-text">Модели: <span class="series__model">NIKE AIR FORCE MAX II и NIKE AIR VERSITILE IV</span></p>
            </div>

            <div class="series__item">
                <h3 class="series__item-title">Серия ZOOM (зум)</h3>
                <p class="series__item-text">Кроссовки Zoom обеспечивают потрясающую мгновенную амортизацию, фиксацию передней части стопы и сцепление во всех направлениях для его сумасшедшей игры.</p>
                <p class="series__item-text">Модели: <span class="series__model">JORDAN ZOOM ZERO GRAVITY, NIKE ZOOM RIZE TB, NIKE ZOOM WITHOUT A DOUBT, NIKE ZOOM ASCENTION</span></p>
            </div>
            <a href="#" class="series__btn btn btn__gray">Интернет магазин</a>
        </div>
    </div>
    <img class="series__img" src="{{ asset('images/bg-section2.png') }}" alt="">
</section>


<div class="catalog">
    <div class="container">
        <div class="catalog__inner">

            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/1.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/2.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/3.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/4.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/5.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/6.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/7.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/8.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/9.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/10.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/11.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>
            <a href="#" class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/12.png') }}" alt="" class="catalog__img">
                </div>
                <h3 class="catalog__item-title">Nike Brand Name</h3>
                <p class="catalog__item-text">Size</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара. яч яч яч</p>
                <p class="catalog__item-text">Discription Text No Seo <br>
                    Текст описания товара.</p>
                <p class="catalog__item-text">Discription Text No Seo</p>
                <p class="catalog__item-old">Старая цена: 12 000 р.</p>
                <p class="catalog__item-new">Новая цена: 11 000 р.</p>
                <div class="catalog__item-btn">
                    <p class="btn btn__blue">Заказать</p>
                </div>
            </a>

           </div>
        <div class="catalog__btn">
            <a href="#" class="btn btn__accent">Каталог</a>
        </div>
    </div>
</div>


<div class="series2">
    <div class="container">
        <div class="series2__inner">

            <div class="series2__column">
                <div class="series2__item">
                    <h3 class="series2__title">Серия <span class="series2__bold">Nike Hyperdunk</span></h3>
                    <p class="series2__text">Плотно облегают стопу, система амортизации не вызывает нареканий. Данная модель лёгкая и в целом оставляет исключительно приятное впечатление.</p>
                    <p class="series2__text">Модели: <span class="series2__model">NIKE HYPERDUNK X 2018, NIKE HYPERDUNK X LOW 2018, NIKE HYPERDUNK 2017 TB, NIKE HYPERDUNK 2017 LOW TB</span></p>

                </div>
                <div class="series2__item">
                    <h3 class="series2__title">Серия <span class="series2__bold">Nike KD</span></h3>
                    <p class="series2__text">Кевин Дюрант выглядит спокойным, пока не начинает атаку. Он осторожен, но очень опасен. Против него сложно играть, и его невозможно остановить. Кроссовки KD с самой передовой технологией Nike Air Zoom разработаны для превосходства и бесконечной энергии KD на площадке. Выведи свою игру на новый уровень — выбирай Nike KD.</p>
                    <p class="series2__text">Модели: <span class="series2__model">NIKE HYPERDUNK X 2018, NIKE HYPERDUNK X LOW 2018, NIKE HYPERDUNK 2017 TB, NIKE HYPERDUNK 2017 LOW TB</span></p>

                </div>

            </div>


            <div class="series2__column">
                <div class="series2__item">
                    <h3 class="series2__title">Серия <span class="series2__bold">Nike Hyperdunk</span></h3>
                    <p class="series2__text">Плотно облегают стопу, система амортизации не вызывает нареканий. Данная модель лёгкая и в целом оставляет исключительно приятное впечатление.</p>
                    <p class="series2__text">Модели: <span class="series2__model">NIKE HYPERDUNK X 2018, NIKE HYPERDUNK X LOW 2018, NIKE HYPERDUNK 2017 TB, NIKE HYPERDUNK 2017 LOW TB</span></p>

                </div>
                <div class="series2__item">
                    <h3 class="series2__title">Серия <span class="series2__bold">Nike Hyperdunk</span></h3>
                    <p class="series2__text">Плотно облегают стопу, система амортизации не вызывает нареканий. Данная модель лёгкая и в целом оставляет исключительно приятное впечатление.</p>
                    <p class="series2__text">Модели: <span class="series2__model">NIKE HYPERDUNK X 2018, NIKE HYPERDUNK X LOW 2018, NIKE HYPERDUNK 2017 TB, NIKE HYPERDUNK 2017 LOW TB</span></p>

                </div>

            </div>


        </div>
    </div>

    <img src="{{ asset('images/bg-series2.png') }}" alt="" class="series2__img">

</div>



<div class="promo">
    <div class="container">
        <div class="promo__inner">
            <div class="promo__column promo__left">
                <p class="promo__column-left">Покупайте баскетбольные кроссовки в нашей компании и экономьте до 12% бюджета! </p>
                <p class="promo__column-left">Оформляя заказ и не забывайте указывать наш специальный PROMO-код, который дает скидку 12% на баскетбольную обувь </p>

            </div>

            <div class="promo__column promo__right">


                    <div class="promo__title">Условия доставки:</div>
                    <ol class="promo__list">
                        <li>Перейдите в наш интернет магазин</li>
                        <li>Добавьте товар в корзину</li>
                        <li>Переж оформлением заказа введите <span class="promo__accent">PROMO-код</span></li>
                        <li>Выбирите один из 3-х вохможных способов оплаты</li>
                        <li>Подтвердите заказ</li>
                    </ol>
                    <p class="promo__text">Для того, что бы Ваш заказ был оплачен</p>
                    <ol class="promo__list">
                        <li>Зарегистрируйтесь на нашем сайте.</li>
                        <li>Зарегистрируйтесь на нашем сайте.</li>
                    </ol>

                    <p class="promo__text">Отслеживайте свой заказ по трек-коду</p>


                <a href="#" class="promo__btn btn btn__accent">Заказать</a>

                <p class="promo__promo">НЕ ЗАБЫВАЙТЕ PROMO-КОД НА <br>
                    <span class="promo__promo_accent">СКИДКУ 12% - mr_FANTASTIC</span></p>

            </div>

        </div>
    </div>
    <img class="promo__img" src="{{ asset('images/bg-3.png') }}" alt="">
</div>




@endsection
