require('bootstrap')
require('bootstrap/scss/bootstrap.scss')
require('font-awesome/scss/font-awesome.scss')

import Owl from '../src/owl.js'

const OwlC = new Owl()

document.addEventListener('DOMContentLoaded', function () {
    OwlC.Init()
  }, false)

/*import ExampleClass from './example.js'

const exampleClass = new ExampleClass()
exampleClass.helloWorld()*/

$(document).ready(function(){
    $('.header-top button').on('click', function(){
        $('section.top-menu .top-menu').toggleClass('opened')
    })

    //kivitelezés
    $('.implementation .left-box').on('mouseover', function(){
        $('.implementation .left-box a').addClass('visited')
    })
    $('.implementation .left-box').on('mouseout', function(){
        $('.implementation .left-box a').removeClass('visited')
    })

    $('.implementation .right-box').on('mouseover', function(){
        $('.right-box a').addClass('visited')
    })
    $('.implementation .right-box').on('mouseout', function(){
        $('.implementation .right-box a').removeClass('visited')
    })

    /*Tervkatalógus slider*/
    //$("a[rel^='prettyPhoto']").prettyPhoto()
})
