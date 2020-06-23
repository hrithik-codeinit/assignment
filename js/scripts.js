$(document).ready(function(){

$('.all').addClass('checked');
    $('input').keyup(function(){
        //alert('hello');
        // Search text
        var text = $(this).val().toLowerCase();
 
        // Hide all content class element
        $('.checked').hide();

        // Search 
        $('.checked .mb-4').each(function(){
 
            if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
                $(this).closest('.checked').show();
            }
        });
    });

    $('input[type="radio"]').click(function() {

        if($(this).attr('id') == 'one') {
            $('.all').show();
            $('.all').addClass('checked');           
        }else{
            $('.all').removeClass('checked');
        }

        if($(this).attr('id') == 'two') {
            $('.four').show(); 
            $('.one').hide();
            $('.two').hide();
            $('.three').hide();
            $('.four').addClass('checked');       
        }

        if($(this).attr('id') == 'three') {
            $('.one').show(); 
            $('.two').show();
            $('.three').hide();
            $('.four').hide();
            $('.one').addClass('checked');  
            $('.two').addClass('checked');     
        }

        if($(this).attr('id') == 'four') {
            $('.three').show(); 
            $('.one').hide();
            $('.two').hide();
            $('.four').hide();
            $('.three').addClass('checked');       
        }

    });

// $('#search').keyup(function(){
 
//   // Search text
//   var text = $('#search').val();

//         $('div:contains("'+text+'")')
//             .css('font-family', 'calibri')
//             .css('font-style', 'italic')
//             .css('color', '#DD1144');

//     });

(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

});




