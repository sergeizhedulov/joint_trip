<template>
  <main class="main-content">
    <section class="personal">
        <div class="container">
            <div class="personal-header">
                <h1 class="personal-header-text">Личный кабинет</h1>
            </div>
        </div>
    </section>
    <section class="personal">
        <div class="container">
            <div class="personal-main">
                <div class="personal-main-menu">
                    <ul class="personal-main-menu-list">
                        <li class="personal-main-menu-link" >
                          <router-link to="/"
                            class="btm-go-main">На Главную</router-link>
                        </li>
                        <li class="personal-main-menu-link">
                            <router-link to="/account_user"
                                 class="btm-go-main">Личные данные</router-link>
                        </li>
                        <li class="personal-main-menu-link active">
                            <router-link to="/car_user"
                            class="btm-go-main">Мой автомобиль</router-link>
                        </li>
                        <li class="personal-main-menu-link">
                            <a href="#" class="btm-go-main">Мои поездки</a>
                        </li>
                        <li class="personal-main-menu-link">
                            <a href="#" class="btm-go-main">Уведомления</a>
                         </li>
                    </ul>
                </div>

                <div class="personal-main-info">
                    <h1 class="personal-main-info-header">Мой автомобиль</h1>
                    <div class="personal-car-info-data">
                        <div class="personal-car-info-name">
                            <p class="personal-main-info-individ-head">Марка:</p>
                            <p class="personal-main-info-individ-name">БМВ</p>
                            <p class="personal-main-info-individ-head">Модель:</p>
                            <p class="personal-main-info-individ-name">5</p>
                            <p class="personal-main-info-individ-head">Кузов:</p>
                            <p class="personal-main-info-individ-name">Седан</p>
                            <p class="personal-main-info-individ-head">
                                Количество посадочных мест:</p>
                            <p class="personal-main-info-individ-name">5</p>
                        </div>
                        <div class="personal-car-info-statis">
                            <p class="personal-main-info-individ-head">Объем двигателя:</p>
                            <p class="personal-main-info-individ-name">2.0</p>
                            <p class="personal-main-info-individ-head">Год выпуска:</p>
                            <p class="personal-main-info-individ-name">2020</p>
                            <p class="personal-main-info-individ-head">Цвет:</p>
                            <p class="personal-main-info-individ-name">Чёрный</p>
                            <p class="personal-main-info-individ-head">Гос.номер:</p>
                            <p class="personal-main-info-individ-name">а911мр999</p>

                        </div>
                    </div>
                    <a href="#" class="personal-main-info-change">
                        <div class="personal-main-info-change-btn">Редактировать профиль</div></a>
                    <div class="personal-car-info-source">
                        <div class="personal-car-info-source-img">
                            <img class="car-img" src="images/car-ico.png" alt="#">
                        </div>
                        <div class="personal-car-info-source-load">
                            <form enctype="multipart/form-data" method="post"
                            id="form-add-img-car" class ="car-add-img-form">
                                <div id="file-upload" class="car-add-img-form-block">
                                    <label class="label" for="uploade-file">
                                        <input type="file" name="file" id="uploade-file">
                                        <div class="personal-add-img-form-file" >Выберите файл</div>
                                    </label>
                                </div>
                                <div class="personal-add-img-form-block">
                                    <input type="submit" class="personal-add-img-btn-form"
                                    value="Загрузить фото">
                                </div>

                            </form>
                            <div class="car-add-img"><button id="btn-add-img-car"
                            class="personal-add-img-btn">Загрузить фото</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</template>

<script>
export default {
  name: 'CarUser',

};
</script>

<style>

</style>
