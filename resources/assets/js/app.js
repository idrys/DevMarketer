

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy'

Vue.use(Buefy);

require('./manage.js');

//var app = new Vue({
//     el: '#app',
//     data: {}
//});

$(document).ready(function() {
    //  Dropdowns
    $('.dropdown').hover(function(e) {
      $(this).toggleClass('is-open')
    })
  })