
var indexNu = 0;

var slideVar = [];
var slideTxtVar = [];

var projectId = window.location.search.slice(4);

$.getJSON('slide_json.php', function(result){      
    $.each(result, function(i, field){
        if (field[1]== projectId) {
            slideVar.push(field[2]);
            slideTxtVar.push(field[3]);
        }
    })
});


function openSlide(slideId) {
    indexNu = slideId;
    $(".mySlide").attr("src", slideVar[slideId]);
    $(".slideText").text(slideTxtVar[slideId]);
    $(".container-galleries").slideUp(1000);
    $("header").slideUp(1000);
    $("footer").slideUp(1000);
    $(".shown").delay(1010).slideDown(1000)
}

function closeSlide() {
    $(".shown").slideUp(1000, function(){
        indexNu = 0;
        $(".mySlide").attr("src", "");
        $(".slideText").text("");
    });
    $(".container-galleries").delay(1010).slideDown(1000);
    $("header").delay(1010).slideDown(1000);
    $("footer").delay(1010).slideDown(1000)
}

function Next(slideName, slideText) {
    if (indexNu == slideName.length - 1) {
        indexNu = 0
    } else {
    indexNu++;
    };
    $(".hidden img.mySlide").attr("src", slideName[indexNu])
    $(".hidden p.slideText").text(slideText[indexNu]);
    $(".shown").fadeOut(250).addClass("pending").removeClass("shown");
    $(".hidden").delay(250).addClass("shown").removeClass("hidden");
    $(".pending").delay(260).addClass("hidden").removeClass("pending");
    $(".shown").delay(260).fadeIn(250)
}

function Prev(slideName, slideText) {
    if (indexNu == 0) {
        indexNu = slideName.length - 1
    }
    else {
    indexNu --;
    };
    $(".hidden img.mySlide").attr("src", slideName[indexNu])
    $(".hidden p.slideText").text(slideText[indexNu]);
    $(".shown").fadeOut(250).addClass("pending").removeClass("shown");
    $(".hidden").delay(250).addClass("shown").removeClass("hidden");
    $(".pending").delay(260).addClass("hidden").removeClass("pending");
    $(".shown").delay(260).fadeIn(250);
}


$(document).ready(function(){

    $(".gallery-flex").click(function(){
        openSlide(this.id);
    })
    $(".next").click(function() {
        Next(slideVar, slideTxtVar);
    });
    $(".prev").click(function() {
        Prev(slideVar, slideTxtVar);
    });
    $(".exit").click(function() {
        closeSlide();
    });
});
