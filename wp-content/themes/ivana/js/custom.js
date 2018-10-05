$(document).ready(function(){

         


        $('.btnBanner a').click(function(){

        		var theid = $(this).attr('href');
                $('body, html').animate({scrollTop:$(theid).offset().top - 50},1000);
       	});

        window.sr = ScrollReveal({ duration: 2000 });  

        var hero = {

        origin   : "bottom",

        distance : "100px",

        duration : 1500,

        scale    : 0,

        reset: false,

      }



      var intro = {

        origin   : "top",

        distance : "10px",

        duration : 1500,

        delay    : 500,

        scale    : 1,

        reset: false,

      }



      var github = {

        origin   : "top",

        distance : "200px",

        duration : 600,

        delay    : 500,

        scale    : 0,

        reset: false,

      }

    var bottom = {

        origin   : "bottom",

        distance : "300px",

        duration : 1000,

        delay    : 500,

        scale    : 0,

        reset: false,

      }

      var block = {

        reset: false,

        viewOffset: { top: 64 }

      }



      

      //sr.reveal(".processList li", intro)

      sr.reveal(".bloc_maisonHome .col-sm-6", intro)

      sr.reveal(".bloc_maisonHome .col-sm-6", block, 200)

      

      sr.reveal(".banner .text_header", bottom)

      sr.reveal(".bloc_history_home .container", bottom)

    

    $(".buttonDetails").click(function(){

        $(this).toggleClass("in");

        $(this).parent(".details_bloc").toggleClass("open");

        $(this).parents(".bloc_details").toggleClass("open");

    });

    

    

    $('#datetimepickerTana').datetimepicker({

        locale:'fr',

        inline: true,

        format: 'DD.MM.YYYY',

        minDate: new Date(),

        useCurrent: true,

        sideBySide: true

    }).on('dp.change',function(event){

        //var dateStr = $("#datetimepicker12").val();

        var dateVal = $("#datetimepickerTana").val();

       

        $("#inputDateTana").attr("value",dateVal);

        $('#rdvTana').modal('show');

    
        
     $select = jQuery("#start_hour");

     for (let hr = 8; hr <= 20; hr++) {

     let hrStr = hr.toString().padStart(2, "0") + ":";

     let val = hrStr + "00";
     $select.append('<option val="' + val + '">' + val + '</option>');

     val = hrStr + "15";
     $select.append('<option val="' + val + '">' + val + '</option>')

     }

    

        $('#rdvTana').on('shown.bs.modal', function () {

             $("#inputDateTana").attr("value",dateVal); 

             

        });

        $('#rdvTana').on('hidden.bs.modal', function () {

            console.log("close");

          $("#inputDateTana").attr("value",""); 

        });

    });

    $('#datetimepickerParis').datetimepicker({

        locale:'fr',

        inline: true,

        format: 'DD.MM.YYYY',

        /*minDate: moment("16.03.2018", "DD.MM.YYYY"),

        maxDate: moment("30.03.2018", "DD.MM.YYYY"),*/

        useCurrent: true,

        minDate: new Date(),

        sideBySide: true

    }).on('dp.change',function(event){

        var dateVal = $("#datetimepickerParis").val();

        console.log(dateVal);

        //$("#inputDateParis").attr("value",dateVal);
        $("#inputDateParis").val(dateVal);

        $('#rdvParis').modal('show');

    
        
     
    

        $('#rdvParis').on('shown.bs.modal', function () {

             $("#inputDateParis").attr("value",dateVal); 
           
             $select = $("#start_hour_pr");

             for (let hr = 8; hr <= 20; hr++) {
        
             let hrStr = hr.toString().padStart(2, "0") + ":";
        
             let val = hrStr + "00";
             $select.append('<option val="' + val + '">' + val + '</option>');
        
             val = hrStr + "15";
             $select.append('<option val="' + val + '">' + val + '</option>')
        
             }

        });

        $('#rdvParis').on('hidden.bs.modal', function () {

            console.log("close");

          $("#inputDateParis").attr("value",""); 

        });

    });


      $(".curr_date").html( moment().format('D') );

      $(".curr_mounth").html( moment().format('MMMM') );

      

      $("#checkParis").click(function(){

        $(this).parents(".checkCountry").addClass("hide");

        $(".getDateParis").removeClass("hide");

        $(".back").removeClass("hide");

     });

     $("#checkTana").click(function(){

        $(this).parents(".checkCountry").addClass("hide");

        $(".getDateTana").removeClass("hide");

        $(".back").removeClass("hide");

     });

     $(".back").click(function(){

        $(this).addClass("hide");

        $(".getDateParis").addClass("hide");

        $(".getDateTana").addClass("hide");

        $(".checkCountry").removeClass("hide");

     });

     

     $(".menu-item-has-children").hover(function(){

            $(this).children(".sub-menu").toggleClass("in");

            $(this).toggleClass("in");

        });

     $(".menu-item-has-children").click(function(){

            $(this).children(".sub-menu").toggleClass("in");

            $(this).toggleClass("in");

        });

     $('#inputDateTana,#inputpays,#inputDateParis,#inputMaison').attr('readonly', 'readonly');

     

     $(".navbar-header").click(function(){

            $(".mehuHeader").toggleClass("open");

            $(this).toggleClass("open");

        });

    $('.terrainSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        dots: true,
        autoplay:false,
        fade: true,
        speed: 1000
    });

    $('#terrain-single-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        dots: true,
        autoplay:true,
        fade: true,
        speed: 300
    });

    $('#similarSlide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        dots: false,
        autoplay:true,
    });

    $("#id_plan").click(function(){

        $plan = $(this).attr("data-value");

        console.log($plan);

        $("#valuPlan").val($plan);

     });

     $('#btn_inscipt_maison').click(function(e){
        // e.preventDefault();
        setCookie('maison',null,1);
        eraseCookie('maison');
        var plan = $(this).attr("data-value");        
        setCookie('maison',plan,1);   
    });

    if($("#inputMaison").length != 0) {
        var maison = getCookie('maison');
        
        $("#span_maison").text(maison);
        $("#inputMaison").attr("value",maison);
       
    }

    if($("#page_insript_reservation").length != 0) {
    
       // gtag_report_conversion("https://www.ivana.mg");

    }



     $(window).scroll(function(event) {    
        event.preventDefault();
        var scroll = $(window).scrollTop();
        if (scroll > 150) {
            $("#map-canvas").addClass('fixedMap');
        }
    });

    function setCookie(name,value,days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
    
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
    
        function eraseCookie(name) {   
            document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
        
});
