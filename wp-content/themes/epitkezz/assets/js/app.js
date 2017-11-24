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

$(document).ready(function () {
    $('.header-top button').on('click', function () {
        $('section.top-menu .top-menu').toggleClass('opened')
    })

    //kivitelezés
    $('.implementation .left-box').on('mouseover', function () {
        $('.implementation .left-box a').addClass('visited')
    })
    $('.implementation .left-box').on('mouseout', function () {
        $('.implementation .left-box a').removeClass('visited')
    })

    $('.implementation .right-box').on('mouseover', function () {
        $('.right-box a').addClass('visited')
    })
    $('.implementation .right-box').on('mouseout', function () {
        $('.implementation .right-box a').removeClass('visited')
    })

    /*Tervkatalógus slider*/

    var modal = $('#myModal'),
        modalImg = $('#img01'),
        captionText = $('#caption')

    /*img.onclick = function () {
        modal.style.display = "block"
        modalImg.src = this.src
        captionText.innerHTML = this.alt
    }*/

    $('.owl-item img').on('click', function () {
        var img = $(this)
        modal.css('display', 'block')
        var src = img.attr('src')
        modalImg.attr('src', src)
        captionText.innerHTML = img.attr('alt')
    })

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0]

    // When the user clicks on <span> (x), close the modal

    if(span !== undefined){
        span.onclick = function () {
            modal.css('display', 'none')
        }
    }

    //Fixed header mobile menu scroll
    $(document).scroll(function () {
        var scrollHeight = $(this).scrollTop();
        if (scrollHeight > 5) {
            $('.header-contact').css('display', 'none')
        } else {
            $('.header-contact').css('display', 'block')
        }
    });

    //Search form
    //var searchInput = $('.searchform #s')
    $('.search-btn').on('click',function(){
        var windowWidth = window.innerWidth
        if(windowWidth < 768){
            $('.sidebar-mobile').toggleClass('active')
        }else{
            $('#sidebar').toggleClass('active')
        }
    })

    $( window ).resize(function() {
        var windowWidth = window.innerWidth
        if(windowWidth < 768){
            if($('.sidebar-mobile').hasClass('active') !== true){
                $('.sidebar-mobile').toggleClass('active')
            }
        }
    }) 

    /* var windowWidth = window.innerWidth
    if(windowWidth < 768){
        $('#sidebar').appendTo('.mobile-search')
    }else{
        $('#sidebar').appendTo('.desktop-search')
    }
    */

})