$(document).ready(function() {

$('#carousel-brand').on('slide.bs.carousel', function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            } else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


    $('#slide-submenu').on('click', function() {
        $(this).closest('.list-group').fadeOut('slide', function() {
            $('.mini-submenu').fadeIn();
        });
    });

    $('.mini-submenu').on('click', function() {
        $(this).next('.list-group').toggle('slide');
        $('.mini-submenu').hide();
    })

    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<img></img>", {
                        class: "imageThumb",
                        src: e.target.result,
                        title: file.name
                    }).insertAfter("#files");
                });
                fileReader.readAsDataURL(f);
            }
        });
    } else {
        alert("Your browser doesn't support to File API")
    }

$("#checkAll").on("click", function() {
    if ($(this).is(':checked')) {
        $(this).closest("div#category-name-collaps").find(':checkbox').each(function() {
            $(this).attr('checked', 'checked');
        });
    } else {
        $(this).closest("div#category-name-collaps").find(':checkbox').each(function() {
            $(this).removeAttr('checked');
        });
    }
});
$("#checkAll1").on("click", function() {
    if ($(this).is(':checked')) {
        $(this).closest("div#category-name2-collaps").find(':checkbox').each(function() {
            $(this).attr('checked', 'checked');
        });
    } else {
        $(this).closest("div#category-name2-collaps").find(':checkbox').each(function() {
            $(this).removeAttr('checked');
        });
    }
});

$('#addphonebtn').on('click', function() {
    $('<input type="tel" class="form-control" placeholder="add phone number"/>').appendTo('#addphone');
});


    // show search box
    $("#idHeadSearch").click(function() { $('#HeadMenu').removeClass('show'); });
    // show menu
    $("#idHeadMenu").click(function() { $('#HeadSearch').removeClass('show'); });
    // close the search div when you click cancel btn
    $("#closeHeadSearch").click(function() { $('#HeadSearch').removeClass('show'); });
    // Submit form when you change sort by value
    $('#sortBy').change(function(){ this.form.submit();});
    // Submit form when you change filter data
    $('#filterBody form div select').change(function(){ this.form.submit();});
    $('#filterBody form div input').change(function(){ this.form.submit();});
    // Submit form when you change show item number
    $('.sPage .show form .form-group select').change(function(){ this.form.submit();});
    // filter collapse btn toggle - +
    $("#idFilterCollapse").click(function() { $('#idFilterCollapse i').toggleClass('fa-minus');});
    // if width >= 768 collapse filter
    if($(window).width() >= 768){
        $('#filterBody.collapse').addClass("show");
        $('#idFilterCollapse i').addClass("fa-minus");
    };
    // if message sent show success page
    $(".modal-footer #fsendMsg").click(
        function() {
            let succContent = "<div id=\"success\"><div class=\"modal-body\"><img class=\"d-block\" src=\"../../img/success.svg\" /><h4 class=\"text-center\">Message Sent!</h4><p class=\"text-center\">The part owner should be in touch soon. Thank you</p></div><div class=\"modal-footer d-flex justify-content-between align-items-center\"><button class=\"btn btn-sm shadow-none\" type=\"button\" data-dismiss=\"modal\"><i class=\"fas fa-check\"></i>Okey</button></div></div>";
            $(this).parent().parent().hide().parent().append(succContent);

        }
    );
    // if contact clicked clear all models
    $("#fContactMsg").click(
        function() {
            $(".modal.fade .modal-dialog div form").show();
            $(".modal.fade .modal-dialog div #success").remove();
        }
    );
    // fix carousel on parts page
    $('.carousel').on('slid.bs.carousel', function() {
        var indicatorsAct = $(".point li.active").data("slide-to");
        $(".carousel-img li").removeClass("active");
        $(".carousel-img").find("[data-slide-to='" + indicatorsAct + "']")
            .addClass("active");
    });

    $('ol.point li').on("click",function(){
        $('ol.point li.active').removeClass("active");
        $("ol.carousel-img li.active").removeClass("active");
        $(this).addClass("active");
        var indicators = $(this).data("slide-to");
        $(".carousel-img").find("[data-slide-to='" + indicators + "']")
            .addClass("active");
    });


});