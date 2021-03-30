import Vue from 'vue'
import router from './router.js'
import VueSocialSharing from 'vue-social-sharing';

Vue.use(VueSocialSharing);

new Vue({
    router: router, // routerにはrouter.jsファイルを設定します
}).$mount('#app') // routerを適用する要素を設定(マウント)します
