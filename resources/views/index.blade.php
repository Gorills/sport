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
            <div class="start__promo">Promo код на <span class="start__promo-accent">скидку 12%</span> - mr_FANTASTIC</div>

            <div class="start__btn-wrapper">
                <a href="http://www.fantastic-sport.ru/categories/basketbolnye-krossovki" class="btn btn__accent">Каталог</a>

            </div>


        </div>
    </div>
    <img alt="БАСКЕТБОЛЬНЫЕ КРОССОВКИ" class="start__img" src={{ asset('images/bg-start1.png') }} alt="">
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
            <a href="http://www.fantastic-sport.ru/categories/basketbolnye-krossovki" class="series__btn btn btn__gray">Интернет магазин</a>
        </div>
    </div>
    <img class="series__img" src="{{ asset('images/bg-section2.png') }}" alt="Nike Air">
</section>


<div class="catalog">
    <div class="container">
        <div class="catalog__inner">

            <div class="catalog__item">

                    <div class="catalog__img-wraper">
                        <img src="{{ asset('images/catalog/1.png') }}" alt="NIKE AIR FORCE MAX II" class="catalog__img">
                    </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE AIR FORCE MAX II</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:11/EU:45 <br>

                        до US:12.5/EU:47
                    </p>
                    <p class="catalog__item-text">NIKE AIR FORCE MAX II - уже вторая модель из новой премиальной игровой линейки баскетбольной обуви высшего класса от NIKE</p>
                    <p class="catalog__item-old">Старая цена: 12 990 р.</p>
                    <p class="catalog__item-new">Новая цена: 11 690 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-air-force-max-ii" class="btn btn__blue">Заказать</a>
                </div>
            </div>

            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/2.png') }}" alt="NIKE LEBRON SOLDIER XIII SFG" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE LEBRON SOLDIER XIII SFG</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:9/EU:42,5 <br>

                        до US:13,5/EU:48

                    </p>
                    <p class="catalog__item-text">Это уже 13-я модель линейки "SOLDIER", созданной NIKE для суперзвезды NBA Леброна Джеймса</p>
                    <p class="catalog__item-old">Старая цена: 11 490 р.</p>
                    <p class="catalog__item-new">Новая цена: 10 340 р.</p>

                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-lebron-soldier-xiii-sfg" class="btn btn__blue">Заказать</a>
                </div>
            </div>

            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/3.png') }}" alt="JORDAN WHY NOT? ZER0.2 S" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">JORDAN "WHY NOT?" ZER0.2 SE</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:10,5/EU:44,5 <br>
                        до US:12.5/EU:47
                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/jordan-why-not-zer0-2-se-1">белый+желтый</a></p>
                    <p class="catalog__item-text">Усовершенствованная вторая именная модель игровой баскетбольной обуви суперзвезды NBA Расселла Уэстбрука</p>
                    <p class="catalog__item-old">Старая цена: 10 790 р.</p>
                    <p class="catalog__item-new">Новая цена: 9 710 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/jordan-why-not-zer0-2-se" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/4.png') }}" alt="NIKE ZOOM RIZE TB" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE ZOOM RIZE TB</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:6,5/EU:39 <br>
                        до US:12.5/EU:47
                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-zoom-rize-tb-2">синий</a></p>
                    <p class="catalog__item-text">NIKE AIR FORCE MAX II - уже вторая модель из новой премиальной игровой линейки баскетбольной обуви высшего класса от NIKE</p>
                    <p class="catalog__item-old">Старая цена: 11 490 р.</p>
                    <p class="catalog__item-new">Новая цена: 10 340 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-zoom-rize-tb" class="btn btn__blue">Заказать</a>
                </div>
            </div>

            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/5.png') }}" alt="NIKE HYPERDUNK X 2018" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE HYPERDUNK X 2018</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:6/EU:38,5 <br>

                        до US:9.5/EU:43

                    </p>
                    <p class="catalog__item-text">NIKE HYPERDUNK X TB 2018 - юбилейная, 10-я модификация культовой серии. САМЫЕ УНИВЕРСАЛЬНЫЕ БАСКЕТБОЛЬНЫЕ КРОССОВКИ</p>
                    <p class="catalog__item-old">Старая цена: 10 790 р.</p>
                    <p class="catalog__item-new">Новая цена: 9 710 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-hyperdunk-x-2018-1" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/6.png') }}" alt="NIKE HYPERDUNK 2017 TB" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE HYPERDUNK 2017 TB</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:8/EU:41 <br>
                        до US:13/EU:47,5
                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-hyperdunk-2017-tb-1">красный</a></p>
                    <p class="catalog__item-text">В Nike Hyperdunk 2017 TB использована самая инновационная система амортизации для баскетбола: сверхупругий пеноматериал Nike React</p>
                    <p class="catalog__item-old">Старая цена: 10 490 р.</p>
                    <p class="catalog__item-new">Новая цена: 9 440 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-hyperdunk-2017-tb" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/7.png') }}" alt="NIKE MAMBA FOCUS" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE MAMBA FOCUS</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:7,5/EU:40,5 <br>
                        до US:12/EU:46

                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-mamba-focus">синий</a></p>
                    <p class="catalog__item-text">NIKE AIR FORCE MAX II - уже вторая модель из новой премиальной игровой линейки баскетбольной обуви высшего класса от NIKE</p>
                    <p class="catalog__item-old">Старая цена: 8 990 р.</p>
                    <p class="catalog__item-new">Новая цена: 8 090 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-mamba-focus-1" class="btn btn__blue">Заказать</a>
                </div>
            </div>

            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/8.png') }}" alt="NIKE KYRIE FLYTRAP II" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE KYRIE FLYTRAP II</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:6/EU:38,5 <br>
                        до US:11/EU:45

                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-kyrie-flytrap-ii">черный+бронза</a></p>
                    <p class="catalog__item-text">Кроссовки Kyrie Flytrap II идеально дополняют его игру, обеспечивая максимальный контроль, возврат энергии и превосходное сцепление под любым углом</p>
                    <p class="catalog__item-old">Старая цена: 8 190 р.</p>
                    <p class="catalog__item-new">Новая цена: 7 370 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-kyrie-flytrap-ii-1" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/9.png') }}" alt="NIKE LEBRON WITNESS IV" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE LEBRON WITNESS IV</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:7/EU:40 <br>
                        до US:12/EU:46

                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-lebron-witness-iv">черный+белый,</a>
                        <a href="http://www.fantastic-sport.ru/products/nike-lebron-witness-iv-1">красный+черный</a></p>
                    <p class="catalog__item-text">Будь сильнее на площадке с LeBron Witness 4. Эти кроссовки отлично подходят тем, кто выбирает хорошую фиксацию стопы без потери лёгкости</p>
                    <p class="catalog__item-old">Старая цена: 8 190 р.</p>
                    <p class="catalog__item-new">Новая цена: 7 780 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-lebron-witness-iv-2" class="btn btn__blue">Заказать</a>
                </div>
            </div>

            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/10.png') }}" alt="NIKE KD TREY 5 IV" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE KD TREY 5 IV</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:7/EU:40 <br>
                        до US:15/EU:49,5
                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-kd-trey-5-iv">черный+белый</a>,
                        <a href="http://www.fantastic-sport.ru/products/nike-kd-trey-5-iv-2">белый+черный</a>,
                        <a href="http://www.fantastic-sport.ru/products/nike-kd-trey-5-iv-1">красный</a></p>
                    <p class="catalog__item-text">Одна из моделей именной линейки Кевина Дюранта, в которой отражён его неповторимый стиль игры</p>
                    <p class="catalog__item-old">Старая цена: 7 190 р.</p>
                    <p class="catalog__item-new">Новая цена: 6 470 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-kd-trey-5-iv-3" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/11.png') }}" alt="NIKE AIR VERSITILE IV" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE AIR VERSITILE IV</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:6/EU:38,5 <br>
                        до US:13/EU:47,5

                    </p>
                    <p class="catalog__item-text">Видимый модуль воздушной амортизации Nike Air в пяточной части для поглощения ударных нагрузок, комфорта и безопасности</p>
                    <p class="catalog__item-old">Старая цена: 6 190 р.</p>
                    <p class="catalog__item-new">Новая цена: 5 570 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-air-versitile-iv" class="btn btn__blue">Заказать</a>
                </div>
            </div>


            <div class="catalog__item">
                <div class="catalog__img-wraper">
                    <img src="{{ asset('images/catalog/12.png') }}" alt="NIKE ZOOM WITHOUT A DOUBT" class="catalog__img">
                </div>
                <div class="catalog__wrapper">
                    <h3 class="catalog__item-title">NIKE ZOOM WITHOUT A DOUBT</h3>
                    <p class="catalog__item-text">Размеры:</p>
                    <p class="catalog__item-text">от US:7/EU:40 br
                        до US:15/EU:49,5
                    </p>
                    <p class="catalog__item-text">Доп. расцветка: <a href="http://www.fantastic-sport.ru/products/nike-zoom-without-a-doubt-8">белый</a>,
                        <a href="http://www.fantastic-sport.ru/products/nike-zoom-without-a-doubt-7">черный</a>,
                        <a href="http://www.fantastic-sport.ru/products/nike-zoom-without-a-doubt-5">красный</a></p>
                    <p class="catalog__item-text">Прекрасное предложение от Nike с очень приличной проработкой всех функциональных качеств баскетбольной обуви при минимальном уровне цены</p>
                    <p class="catalog__item-old">Старая цена: 5 190 р.</p>
                    <p class="catalog__item-new">Новая цена: 4 670 р.</p>
                </div>
                <div class="catalog__item-btn">
                    <a href="http://www.fantastic-sport.ru/products/nike-zoom-without-a-doubt-1" class="btn btn__blue">Заказать</a>
                </div>
            </div>

           </div>
        <div class="catalog__btn">
            <a href="http://www.fantastic-sport.ru/categories/basketbolnye-krossovki" class="btn btn__accent">Каталог</a>
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

                <div class="promo__btn-wrapper">
                    <a href="http://www.fantastic-sport.ru/categories/basketbolnye-krossovki" class="promo__btn btn btn__accent">Заказать</a>
                </div>
                <p class="promo__promo">НЕ ЗАБЫВАЙТЕ PROMO-КОД НА <br>
                    <span class="promo__promo_accent">СКИДКУ 12% - mr_FANTASTIC</span></p>

            </div>

        </div>
    </div>
    <img class="promo__img" src="{{ asset('images/bg-3.png') }}" alt="">
</div>




@endsection
