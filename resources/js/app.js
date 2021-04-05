import Vue from 'vue'
import router from './router.js'
import VueSocialSharing from 'vue-social-sharing';
import axios from 'axios'
import jQuery from "jquery";
import MainPage from './components/page/MainPage'

window.$ = window.jQuery = jQuery;
require('bootstrap');

Vue.prototype.$http = axios;

Vue.use(VueSocialSharing);

new Vue({
    router: router, // routerにはrouter.jsファイルを設定します
    components: {
        app: MainPage
    }
}).$mount('#app') // routerを適用する要素を設定(マウント)します
