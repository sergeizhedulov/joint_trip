<template>
<footer>
  <div class="footer-box">
      <div class="container">
          <div class="col-4">
              <div class="col-4-item">
                  <ul>
                      <li>
                        <router-link to="/how_it_works">Как работает ПоПути</router-link>
                      </li>
                  </ul>
              </div>
              <div class="col-4-item">
                  <ul>
                    <li>
                      <router-link to="/terms_use">Условия использования</router-link>
                    </li>
                  </ul>
              </div>
              <div class="col-4-item">
                  <ul>
                    <li>
                       <router-link to="/about">О нашем проекте</router-link>
                    </li>
                  </ul>
              </div>
              <div class="col-4-item">
                  <ul>
                      <li>
                        <router-link to="/write_to_us">Напишите нам</router-link>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="copyright">
      <div class="container">
          Copyright © 2022, NineGroup
      </div>
  </div>
</footer>

</template>

<script>
export default {
  name: 'FooterPages',

};
</script>
