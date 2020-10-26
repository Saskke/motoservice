<?php
    $title = "ТехМото"; // указали название шапки
    require_once("components/header.php"); // подгрузили файл где указан код начала страницы для удобства.   require_once позваляет в php подключить код HTML. НО ЭТОЙ КОМАНДОЙ МОЖНО ПОДКЛЮЧИТЬ В  ТЕГЕ PHP ОДИН РАЗ(КАК Я ПОНЯЛ). ЕСЛИ ВТОРОЙ РАЗ ИСПОЛЬЗОВАТЬ, ЕГО ПРОИГНОРИТ
    //include    include_once    require     require_once - require не подгрузит страницу с ошибками,  include - сможет подгрузить
?>

<style>
html {
  scroll-behavior: smooth;
}
</style>

    <div class="container-1">
        <div class="firstimg">
            <div class="imgtext">
                <h2>ТехМото</h2>
                <p>Проще починить, чем кому то продавать</p>
            </div>
        </div>    
    </div>

    <div class="about" id="aboutas">
        <p>     ТехМото работает на рынке с 2000 года. Мы осуществляем полный спектр услуг по ремонту
            мотоциклов и сервисному обслуживанию. Я очень дорожу каждым клиентом. Всех, кто обслуживал мотоцикл в нашем сервисе я знаю лично, а многие, 
            стали мне хорошими друзьями. Каждый раз, когда я открываю двери мотосервиса, я чувствую важность своего дела, 
            чувствую ответственность и сильно дорожу своей репутацией. Поэтому, еще раз приветствую вас в нашем сервисе и 
            уверен, что лишь раз доверив нам ремонт мотоцикла, вы в полной мере оцените качество нашей работы и навсегда 
            останьтесь нашим другом.
        </p>
    </div>
    
    <div class="pertners">
        <div>
        <h2 align="center">Мы обслуживаем</h2>
        </div>
        <div class="row">
            <div class ="BMW col-2 ">
                <div class = "a-center">
                    <img src = "img/bmw.png">
                </div>
                <p>BMW</p>
            </div>
            <div class = "HONDA col-2">
                <div class = "a-center">
                    <img src = "img/honda.png" >
                </div>
                <p>HONDA</p>
            </div>
            <div class = "kawasaki col-2">
                <div class = "a-center">
                    <img src = "img/kawasaki.png">
                </div>
                <p>kawasaki<p>
            </div>
            <div class = "KTM col-2">
                <div class = "a-center">
                    <img src = "img/KTM.png">
                </div>
                <p>KTM<p>
            </div>
            <div class = "yamaha col-2">
                <div class = "a-center">
                    <img src = "img/yamaha.png">
                </div>
                <p>yamaha<p>
            </div> 
            <div class = "suzuki col-2">
                <div class = "a-center">
                    <img src = "img/suzuki.png" >
                </div>
                <p>suzuki<p>
            </div> 
        </div>
    </div>

    <div class="container-2" id="pricemoto">
        <h2 align="center"><br><b>Услуги и цены</b></h2>
        <div class="row-2">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3"> <!-- кнопка с картинкой, Техническое обслуцживвание -->
                <div class="price">
                    <img src="img/maintenance.jpg" alt="img" width="424" height="386" blank="" class="img-fluid w-100 card-img">
                        <div class = "card-body no-padding d-flex align-items-end card-img-overlay">
                            <div class= "price-footer w-100 d-flex justify-content-between">
                                <p class="card-text price-text"><b>Техническое <br> обслуживание</b></p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <p>цена</p>
                                </button>
                            </div>
                        </div>
                </div>
            </div>

            <!-- Modal для кнопки -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ремонт мотоциклов</h5>
                </div>
                <div class="modal-body">
                    <h3 class="h3table">Прайс лист</h3>
                    <table class="table">
                        <tr class="tabletitul">
                            <th width="90%"><p>Услуга</p></th>
                            <th width="150px"><p>Цена(руб)</p></th>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Замена масла</td>
                            <td>от 700</td>
                        </tr>
                        <tr>
                            <td>Замена антифриза</td>
                            <td>от 2000</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Замена тормозных колодок</td>
                            <td>от 400</td>
                        </tr>
                        <tr>
                            <td>Замена тормозной жидкости</td>
                            <td>от 600 за контур</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Шиномонтаж и балансировка колес</td>
                            <td>от 2600 до 3000</td>
                        </tr>
                        <tr>
                            <td>Замена сальников и масла в классической вилке</td>
                            <td>5700</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Замена сальников и масла в перевернутой вилке</td>
                            <td>7600</td>
                        </tr>
                        <tr>
                            <td>Замена рулевых подшипников</td>
                            <td>от 3500</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Замена свечей зажигания</td>
                            <td>от 100 за свечу</td>
                        </tr>
                        <tr>
                            <td>Замена воздушного фильтра</td>
                            <td>от 500</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Замена цепи и звезд в главной передаче</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>Регулировка клапанов</td>
                            <td>от 3000</td>
                        </tr>
                        <tr class="tablepricegrey">
                            <td>Чистка и синхронизация карбюраторов</td>
                            <td>от 6500 до 8000</td>
                        </tr>
                        <tr>
                            <td>Чистка и синхронизация инжектора</td>
                            <td>6000</td>
                        </tr>


                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
            </div> 
            <!-- конец модальной кнопки ремонт мотоциклов И ВООБЩЕ ВСЕЙ КАРТИНКИ -->
    
        <!-- ВСЯ КАРТИНКА И КНОПКА РЕМОНТА МОТОЦИКЛА -->
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="price">
                <img src="img/repairs.jpg" alt="img" width="424" height="386" blank="" class="img-fluid w-100 card-img">
                    <div class = "card-body no-padding d-flex align-items-end card-img-overlay">
                        <div class= "price-footer w-100 d-flex justify-content-between">
                            <p class="card-text price-text"><b>Ремонт <br> мотоциклов</b></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                <p>цена</p>
                            </button>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Modal для кнопки -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ремонт мотоциклов</h5>
            </div>
            <div class="modal-body">
                <h3 class="h3table">Прайс лист</h3>
                <table class="table">
                    <tr class="tabletitul">
                        <th width="90%"><p>Услуга</p></th>
                        <th width="150px"><p>Цена(руб)</p></th>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт двигателей</td>
                        <td>от 20000</td>
                    </tr>
                    <tr>
                        <td>Ремонт коробки передач</td>
                        <td>от 20000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Настройка и ремонт инжектора</td>
                        <td>от 3000</td>
                    </tr>
                    <tr>
                        <td>Чистка, синхронизация карбюратора</td>
                        <td>от 6500 до 8000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт карбюраторов</td>
                        <td>от 8000 до 10000</td>
                    </tr>
                    <tr>
                        <td>Ремонт и правка передних вилок</td>
                        <td>2500 за перо</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт и покраска пластика</td>
                        <td>от 30000</td>
                    </tr>
                    <tr>
                        <td>Восстановление мотоцикла после ДТП</td>
                        <td>от 30000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт амортизаторов</td>
                        <td>от 3000 до 7000</td>
                    </tr>
                    <tr>
                        <td>Правка бензобаков</td>
                        <td>от 5000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт картеров</td>
                        <td>от 4000</td>
                    </tr>
                    <tr>
                        <td>Правка рулей</td>
                        <td>1800</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Ремонт и правка тормозных дисков</td>
                        <td>от 2000</td>
                    </tr>
                    <tr>
                        <td>Ремонт сцепления мотоциклов</td>
                        <td>от 3000</td>
                    </tr>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
            </div>
        </div>
        </div> 
        <!-- конец модальной кнопки ремонт мотоциклов И ВООБЩЕ ВСЕЙ КАРТИНКИ -->

        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <div class="price">
                <img src="img/optional-equipment.jpg" alt="img" width="424" height="386" blank="" class="img-fluid w-100 card-img">
                    <div class = "card-body no-padding d-flex align-items-end card-img-overlay">
                        <div class= "price-footer w-100 d-flex justify-content-between">
                            <p class="card-text price-text"><b>Доп. оборудование <br> и тюнинг</b></p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                <p>цена</p>
                            </button>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Modal для кнопки доп оборудование и тюн -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ремонт мотоциклов</h5>
            </div>
            <div class="modal-body">
                <h3 class="h3table">Прайс лист</h3>
                <table class="table">
                    <tr class="tabletitul">
                        <th width="90%"><p>Услуга</p></th>
                        <th width="150px"><p>Цена(руб)</p></th>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Сварочные работы по выпускным системам</td>
                        <td>от 1000</td>
                    </tr>
                    <tr>
                        <td>Установка ручек с подогревом</td>
                        <td>2900</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Сложный монтаж тюнинговых ветровых стекол</td>
                        <td>от 1000</td>
                    </tr>
                    <tr>
                        <td>Монтаж кофровых систем</td>
                        <td>от 2000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Прописывание чип-ключей</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <td>Нарезка ключей</td>
                        <td>от 500</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Установка дополнительного света</td>
                        <td>от 2000</td>
                    </tr>
                    <tr>
                        <td>Установка армированных тормозных шлангов</td>
                        <td>от 3000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Порошковая покраска колёсного диска</td>
                        <td>8000</td>
                    </tr>
                    <tr>
                        <td>Порошковая покраска дуг защиты</td>
                        <td>3000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Установка мотосигнализаций</td>
                        <td>5000</td>
                    </tr>
                    <tr>
                        <td>Установка иммобилайзера</td>
                        <td>от 3000</td>
                    </tr>
                    <tr class="tablepricegrey">
                        <td>Установка музыки</td>
                        <td>от 30000</td>
                    </tr>
                    <tr>
                        <td>Установка линз мотоцикла</td>
                        <td>от 15000</td>
                    </tr>


                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
            </div>
        </div>
        </div> 
        <!-- конец модальной кнопки доп оборудование и тюн И ВООБЩЕ ВСЕЙ КАРТИНКИ -->



    </div>

    <div class="container-3" id="contact">
        <br>
        <h2 align="center">Контакты</h2>
        <div class="map">
            <div class="contact" >
                <div>
                    <p>ул. Пушкина, 205, Абакан, Респ. Хакасия, 655004</p>
                </div>
                <div>
                    <p>Телефон: 8-800-555-35-35</p>
                </div>
                <div>
                    <p>Режим работы: Вт-Вс: с 12:00 до 20:00</p>
                </div>
            </div>    
        </div>
    </div>

    
    <?php
        require_once("components/footer.php"); 
    ?>