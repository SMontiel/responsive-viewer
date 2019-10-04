window.Vue = require('vue');

Vue.component('devices-viewer', require('./components/DevicesViewer.vue').default);

const app = new Vue({
    el: '#app'
});
