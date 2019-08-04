require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app'
});

$('#layoutsAccordion').collapse({
    toggle: true
})

$('#profile-tab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
})
