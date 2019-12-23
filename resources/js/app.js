require('./bootstrap');

// Require Froala Editor js file.
require('froala-editor/js/froala_editor.pkgd.min.js');
require('./froala-plugins');
// Require Froala Editor css files.
require('froala-editor/css/froala_editor.pkgd.min.css');
require('froala-editor/css/froala_style.min.css');

window.Vue = require('vue');


Vue.component('editor', require('./components/Editor').default);
Vue.component('random-card', require('./components/RandomCard').default);

import VueFroala from 'vue-froala-wysiwyg'
Vue.use(VueFroala);


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

$(".my-navbar a").on("click", function(e) {
    setScrollMargin($(this));
    /*let str = $(this).attr('href');
    let position = str.indexOf('#');
    let anchor = str.substr(position, str.length);
    let top = $(anchor).offset().top - 90;

    $('body,html').animate({scrollTop: top}, 1000);*/
});
$(".layouts-list a").on("click", function(e) {
    setScrollMargin($(this));
});

function setScrollMargin(attribute) {
    let str = attribute.attr('href');
    let position = str.indexOf('#');
    let anchor = str.substr(position, str.length);
    let top = $(anchor).offset().top - 90;

    $('body,html').animate({scrollTop: top}, 1000);
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});