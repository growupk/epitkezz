require('bootstrap')
require('bootstrap/scss/bootstrap.scss')
require('font-awesome/scss/font-awesome.scss')

import ExampleClass from './example.js'

const exampleClass = new ExampleClass()
exampleClass.helloWorld()

$(document).ready(function(){
    $('.header-top button').on('click', function(){
       $('section.top-menu .top-menu').toggleClass('opened')
    })
})
