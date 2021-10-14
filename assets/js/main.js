// data to contact_us api
$("#contact_us_button").click(function() {
    $('#contact_us_button').css('display', 'none');
    $('#loading_button').css('display', 'block');
    $.post("/contact_us", {
            name: $("#name").val(),
            email: $("#email").val(),
            subject: $("#subject").val(),
            body: $("#body").val(),
        },
        function(data) {
            var json = $.parseJSON(data)

            if (!(json.status == "success")) {
                switch (json.name) {
                    case "name":
                        $('#name').val('').attr("placeholder", json.response).addClass("name-input").css("border-bottom", "3px solid red");
                        break;
                    case "email":
                        $('#email').val('').attr("placeholder", json.response).addClass("email-input").css("border-bottom", "3px solid red");
                        break;
                    case "subject":
                        $('#subject').val('').attr("placeholder", json.response).addClass("subject-input").css("border-bottom", "3px solid red");
                        break;
                    case "body":
                        $('#body').val('').attr("placeholder", json.response).addClass("body-input").css("border-bottom", "3px solid red");
                        break;
                    default:
                        // code block
                }
            } else {
                var name = $("#name").val();
                $("#name").val('').removeClass('name-input').css("border-bottom", "2px solid #cd7474").attr("placeholder", "Name")
                $("#email").val('').removeClass('email-input').css("border-bottom", "2px solid #cd7474").attr("placeholder", "Email")
                $("#subject").val('').removeClass('subject-input').css("border-bottom", "2px solid #cd7474").attr("placeholder", "Subject")
                $("#body").val('').removeClass('body-input').css("border-bottom", "2px solid #cd7474").attr("placeholder", "Message")
                    // alert('Thanks ' + name + ', For Your Contact!')
                $('.modal').empty();
                $("<h5>Thanks <b>" + name + "</b> for contacting us. <br>We will back you as soon as possible!</h5>").appendTo('.modal');
                $('.modal').modal({
                    closeClass: 'icon-remove',
                    closeText: 'x'
                });
            }
            $('#contact_us_button').css('display', 'block');
            $('#loading_button').css('display', 'none');
        });
});
//end data contact us

//start nav bar
$(document).ready(function() {
    $('#showMenu').click(myFunction);
});

function myFunction() {
    $('#menu').slideToggle()
}
// end nav bar

//  ============ Start Service Detail ==============
var slideIndex = 1;

function plusSlides(n, id) {
    showSlides(slideIndex += n, id);
}

function currentSlide(n, id) {
    showSlides(slideIndex = n, id);
}

function showSlides(n, id) {
    var i;
    var slides = document.getElementsByClassName("myslides" + id);
    var dots = document.getElementsByClassName("demo" + id);
    var circle = document.getElementsByClassName("dot" + id);

    console.log(slides.length)

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    for (j = 0; j < circle.length; j++) {

        circle[j].className = circle[j].className.replace(" active", "");
    }
    circle[slideIndex - 1].className += " active";
}
//  ============ End Service Detail ==============