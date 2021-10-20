<?php
include_once 'header.php';
?>
    <div>
    <div class="container-fluid" id="buttonagricola">
        <div class="col">
            <button class="btn btn-default" id="backarrow">
                <img  src="assets/images/backarrow.png" alt="" >
                <a>Назад</a>
            </button>
        </div>
        <div class="col">
            <button class="btn btn-default">
                <img  id="lilagricola" src="assets/images/agricola.jpg" alt="" >
            </button>
        </div>
    </div>


    <img id="bigagricola" src="assets/images/agricola.jpg" alt="">

    <a id="productname">Агрикола "Грин Бэлт" для комнатных растений 25г</a>
    <p> <span class="badge bg-warning text-dark" id="badgebonus">0 бонусов</span></p>
    <div>
        <div class="row">

            <div class="col">
                <p id="price"> 35 ₽</p>
            </div>

            <div class="col">
                <p id="nalich" >В наличии на складе</p>
            </div>
        </div>
    </div>

    <div class="container-fluid "  >
        <div class="row ">

            <div class="col">
                <button type="button" class="btn btn-primary btn-lg" id="addcartbutton">Добавить в корзину</button>

            </div>

            <div class="col">
                <button type="button" class="btn btn-primary btn-lg" id="favbutton"> <img   src="assets/images/heart2.png" alt="" id="heart"></button>
            </div>
        </div>
    </div>



    <div class="container" id="benefitsblock" >
        <div class="row" id="benefitsborder">

            <div class="col">
                <div class="row">
                    <img  class="gridimages2" src="assets/images/wallet.png" alt="" >
                </div>
                <div class="row">
                    <img   class="gridimages2"  src="assets/images/piggybank.png" alt="" >
                </div>
                <div class="row">
                    <img  class="gridimages2" src="assets/images/talkingheads.png" alt="" >
                </div>
            </div>

            <div class="col d-grid gap-5" id="benefits">
                <div class="row">
                    Возврат и обмен без проблем
                </div>
                <div class="row">
                    Возвращаем до 5% бонусами за заказ
                </div>
                <div class="row">
                    В любой ситуации, мы на стороне клиента
                </div>


            </div>
        </div>
    </div>


    <div class="col  selfmadebadge">
        <div>
            <a>
                Город:
                Москва </a>
        </div>
        <div>
            <a>
                Подробнее про условия доставки  </a>
        </div>


        <div class="row delivery">
            <a>
                Доставка курьером
            </a>
        </div>

    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Подрробнее о товаре</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Отзывы</button>
        </li>
    </ul>


    <div class="tab-content tab" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">



            <div class="container-fluid big-grid  " >
                <div class="row ">
                    <div class="col">
                        <h1> Описание</h1>
                        <p>
                            Универсальное комплексное удобрение. Имеет сбалансированный состав и позволяет эффективно
                            подкармливать все виды комнатных и
                            балконных цветов и растений.
                            Содержат полный комплекс макро- и микроэлементов,
                            необходимый для получения максимальных результатов.
                            Очень экономичный.
                        </p>
                        <p>
                            Состав: азот(N) - 23%, фосфор(Р2О2) - 11%, калий(К2О) - 23%, бор(В), медь(Сu), цинк(Zn), марганец(Мn), железо(Fe), молибден(Мо).
                        </p>
                        <p>
                            Норма расхода:
                            5 г удобрения (1 чайная ложка) растворите в 2 литрах воды. Комнатные растения - корневая подкормка 1 раз в 7-10 дней. С ноября по февраль 1 раз в месяц.
                            25 г хватает на 10 л рабочего раствора, раствор используют как при обычном поливе.
                        </p>
                        <p>
                            Срок годности: не ограничен.
                        </p>
                    </div>

                    <div class="col ">
                        <div class="row second-col ">
                            <div class="col gy-5">
                                <div class="row p-3 second-col-items second-col-items-left">
                                    Артикул
                                </div>
                                <div class="row p-3 second-col-items second-col-items-left">
                                    Вес
                                </div>
                                <div class="row p-3 second-col-items second-col-items-left">
                                    Торговая марка
                                </div>
                                <div class="row p-3 second-col-items second-col-items-left">
                                    Применение
                                </div>

                            </div>

                            <div class="col gy-5">
                                <div class="row  p-3 second-col-items second-col-items-right">
                                    1924
                                </div>
                                <div class="row  p-3 second-col-items second-col-items-right">

                                    0.028
                                </div>
                                <div class="row  p-3 second-col-items second-col-items-right">

                                    Грин Бэлт
                                </div>
                                <div class="row  p-3 second-col-items second-col-items-right">

                                    Комнатные растения
                                </div>

                            </div>
                        </div>





                    </div>

                    <div class="col">

                        <div class="row">

                            <div class="col gy-5">

                                <div class="row  p-3 third-col-items-left">
                                    Вид защиты

                                </div>
                                <div class="row  p-3 third-col-items-left">
                                    Способ внесения
                                </div>
                                <div class="row  p-3 third-col-items-left">
                                    Форма выпуска удобрения
                                </div>

                            </div>

                            <div class="col gy-5">
                                <div class="row  p-3 third-col-items-right">

                                    Химическая
                                </div>
                                <div class="row  p-3 third-col-items-right">

                                    Подкормка
                                </div>
                                <div class="row  p-3 third-col-items-right">

                                    Порошок
                                </div>


                            </div>
                        </div>
                    </div>




                </div>



            </div>

        </div>


        <div class="tab-pane fade secondtab" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <p class="responses">На этот товар пока нет отзывов</p>
            <button type="button" class="btn btn-primary btn-lg leavereply" > Оставить отзыв</button>

        </div>
    </div>

    <h1 class="header"> Похожие товары</h1>

    <div class="row gx-1 ">
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card1.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">

                    <p class="card-text">Агрикола "Грин Бэлт" для цветущих растений 25г</p>
                    <h1 class="price-of-card">19₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card2.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Агрикола "Грин Бэлт" для декоративновидных растений 25г</p>
                    <h1 class="price-of-card">30₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card3.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Агрикола "Грин Бэлт" для орхидей 25г</p>
                    <h1 class="price-of-card">30₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card4.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Гумат калия "Био-комплекс" <br>0,5л </p>
                    <h1 class="price-of-card">79₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card5.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Мох "Долина плодородия" сфагнум 1л</p>
                    <h1 class="price-of-card">79₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card6.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Силиплант "Нэст М" <br>100мл</p>
                    <h1 class="price-of-card">85₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>

    </div>

    <h1 class="header"> С этим товаром покупают</h1>

    <div class="row gx-1 ">
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card1.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">

                    <p class="card-text">Агрикола "Грин Бэлт" для цветущих растений 25г</p>
                    <h1 class="price-of-card">19₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card7.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Агрикола "Грин Бэлт" для фикусов 20г</p>
                    <h1 class="price-of-card">22₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card2.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Агрикола "Грин Бэлт" для декоративновидных растений 25г</p>
                    <h1 class="price-of-card">30₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card8.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Лейка "LECHUZA" Yula серый 1,7л<br>0,5л </p>
                    <h1 class="price-of-card">1199₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>

                </div>

            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card9.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Герань "Престиж" Орбит Скарлет F1 5шт</p>
                    <h1 class="price-of-card">150₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="row">
                    <div class="col-9">
                        <img src="assets/images/card3.jpg" class="card-img-top card-image " alt="...">
                    </div>
                    <div class="col-1"> <svg class="svg-heart container-fluid" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.482 3.465l.518.57.518-.57c.7-.772 2.078-1.9 4.149-1.9 2.626 0 4.633 2.448 4.633 5.612 0 2.195-1.076 6.835-9.3 11.253C1.776 14.012.7 9.372.7 7.177c0-3.098 1.954-5.611 4.633-5.611 2.07 0 3.448 1.127 4.149 1.899zm.534 14.973h0z" stroke="#53A17E" stroke-width="1.4"></path>                 </svg>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">Агрикола "Грин Бэлт" для орхидей 25г<br></p>
                    <h1 class="price-of-card">21₽</h1>
                    <button type="button" class="btn btn-warning yellow-add-to-cart ">
                        <svg  width="24" height="24=" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.807 22.209l-1.644-15c-.09-.821-.78-1.44-1.606-1.44h-1.25v-.461A5.314 5.314 0 0012 0a5.314 5.314 0 00-5.308 5.308v.461h-1.25c-.825 0-1.515.62-1.605 1.44l-1.644 15A1.618 1.618 0 003.8 24h16.402c.083 0 .166-.007.247-.02h.008l.041-.008.042-.008.029-.007.053-.013a1.62 1.62 0 00.506-.237l.024-.016a1.62 1.62 0 00.656-1.482zM8.077 5.308A3.927 3.927 0 0112 1.385a3.928 3.928 0 013.923 3.923v.461H8.077v-.461zM5.213 7.359a.23.23 0 01.23-.205h1.25V9.23a.692.692 0 001.384 0V7.154h7.846V9.23a.692.692 0 001.385 0V7.154h1.25a.23.23 0 01.229.206l1.241 11.332H3.971L5.213 7.36zm15.16 15.18a.228.228 0 01-.172.076H3.799a.229.229 0 01-.172-.076.228.228 0 01-.057-.18l.25-2.282h16.36l.25 2.282c.01.09-.032.151-.057.18z"></path>                       </svg></button>
                </div>
            </div>
        </div>

    </div>

    </div>



<?php
include_once 'footer.php';
?>