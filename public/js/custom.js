$(document).ready(function() {

// /* Start add annonce script  */
    // hide upload image if ad type is buy
    $("div select#ADTYPE").change(function () {
        if ($(this).val() == 0) {
            $("div#AdUpImgs").hide();
            $("input[type=checkbox]").prop("checked", false);
        } else if ($(this).val() == 1) {
            $("div#AdUpImgs").show();
            $("input[type=checkbox]").prop("checked", true);
        }
    });
// /* END add annonce script  */

// /* Start API address  */
    // WILAYA SELECT EVENT
    $("div select#Wilaya").change(function () {
        $apiWilaya = "/api/region/?wilaya=" + $(this).val();
        $.getJSON($apiWilaya, function (data) {
            // Clean select options
            $("div select#Daira,div select#Commune").find('option').remove("option[value]").end().find('option[hidden]').prop('selected', true);
            // FETCH ALL DAIRA'S
            $.each(data, function (key, entry) {
                $("div select#Daira").append($('<option></option>').attr('value', entry.daira_id).text(entry.daira_nom));
            })
        });
        //enable Daira disable Commune select
        $("div select#Daira").prop('disabled', false);
        $("div select#Commune").prop('disabled', true);
    });
    // DAIRA SELECT EVENT
    $("div select#Daira").change(function () {
        $apiDaira = $apiWilaya + "&daira=" + $(this).val();
        $.getJSON($apiDaira, function (data) {
            // Clean select options
            $("div select#Commune").find('option').remove("option[value]").end().find('option[hidden]').prop('selected', true);
            // FETCH ALL COMMUNE's
            $.each(data, function (key, entry) {
                $("div select#Commune").append($('<option></option>').attr('value', entry.commune_id).text(entry.commune_nom));
            })
        });
        //enable Commune select
        $("div select#Commune").prop('disabled', false);
    });
// /* End API address  */

// /* Start API make  */
    // Make SELECT EVENT
    $("div select#Make").change(function () {
        $apiMake = "/api/models/?marque=" + $(this).val();
        $.getJSON($apiMake, function (data) {
            // Clean select options
            $("div select#Modele").find('option').remove("option[value]").end().find('option[hidden]').prop('selected', true);
            $("div select#ModeleYear,div select#ModelePart").find('option[hidden]').prop('selected', true);
            // FETCH ALL Modeles
            $.each(data, function (key, entry) {
                $("div select#Modele").append($('<option></option>').attr('value', entry.modele_id).text(entry.modele_nom));
            })
        });
        $("div select#ModelePart").load("/api/parts/?all");
        //enable Daira disable Commune select
        $("div select#Modele").prop('disabled', false);
        $("div select#ModeleYear,div select#ModelePart").prop('disabled', true);
    });
    // Modele SELECT EVENT
    $("div select#Modele").change(function () {
        $("div select#ModeleYear,div select#ModelePart").prop('disabled', false);
    });
// /* END API make  */


// delete User model
    $("button#DeleteUserRole").click(function () {
        var u_id = $(this).attr('u_id');
        $("#DeleteUserModel #u_id").val(u_id);
        $("#DeleteUserModel").modal('show');
    });

// User state block/unblock
    $("button#StatusUserblock").click(function () {
        var u_id = $(this).attr('u_id');
        if ($(this).children('i').hasClass('fa-ban')) {
            $(this).children('i').removeClass('fa-ban text-warning').addClass('fa-check text-success');
        } else {
            $(this).children('i').removeClass('fa-check text-success').addClass('fa-ban text-warning')
        }
        alert(u_id);
    });

// delete role user model
    $("button#DeleteUserRole").click(function () {
        var u_id = $(this).attr('u_id');
        $("#DeleteRoleUserModel #u_id").val(u_id);
        $("#DeleteRoleUserModel").modal('show');
    });

// ad state block
    $("button#StatusAdblock").click(function () {
        var a_id = $(this).attr('a_id');
        if ($(this).children('i').hasClass('fa-ban')) {
            $(this).children('i').removeClass('fa-ban text-warning').addClass('fa-check text-success');
        } else {
            $(this).children('i').removeClass('fa-check text-success').addClass('fa-ban text-warning')
        }
        alert(a_id);
    });

// delete ad model
    $("button#DeleteAdBtn").click(function () {
        var a_id = $(this).attr('a_id');
        $("#DeleteAdModel #a_id").val(a_id);
        $("#DeleteAdModel").modal('show');
    });
// delete make model
    $("button#DeleteMakeModelBtn").click(function () {
        var m_id = $(this).attr('m_id');
        $("#DeleteMakeModel #m_id").val(m_id);
        $("#DeleteMakeModel").modal('show');
    });

// account info preview avatar
    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#Profile #AvatarProfile').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#Profile input").change(function () {
        filePreview(this);
    });

// delete annonce image on edit page (ajax req to delet img);
    $("img#deleteAdsImg").click(function () {
        // alert($(this).attr('src'))
        $(this).remove();
    });
// ------- parts select all and Deselect
    $("div a#DeSelectAllParts").click(function () {
        $("input[type=checkbox]").prop("checked", false);
    });
    $("div a#SelectAllParts").click(function () {
        $("input[type=checkbox]").prop("checked", true);
    });

// ------- parts select all group and Deselect
    $("input#selectAll").click(function () {
        $cat = "input[type=checkbox][cat=" + $(this).attr('cat') + "]";
        $($cat).prop("checked", $(this).prop("checked"));
    });


    $("input[type=checkbox]").click(function () {
        if (!$(this).prop("checked")) {
            $cat = "input[id=selectAll][type=checkbox][cat=" + $(this).attr('cat') + "]";
            $($cat).prop("checked", false);
        }
    });
// *---- image preview on upload
    function previewImages() {
        if (!$(this).is('[edit]')){$preview = $('#addAdsImgPreview div#upImg').empty()}

        var $preview = $('#addAdsImgPreview div#upImg');

        if (parseInt($('#addAdsImgPreview input#upInput').get(0).files.length) > 10){
            this.reset();
            alert("maximum 10 images");
            return
        }
        if (this.files) $.each(this.files, readAndPreview);
        function readAndPreview(i, file) {
            if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                return alert(file.name +" is not an image");
            } // else...
            var reader = new FileReader();
            $(reader).on("load", function() {
                $imgPreview = "<img class='m-1' src='" + this.result + "' loading='auto' style='width: 60px;height: 60px;cursor: pointer;'/>";
                $preview.append($imgPreview);
            });
            reader.readAsDataURL(file);
        }
    }
    $('#addAdsImgPreview input#upInput').on("change", previewImages);

// add another phone number casse page
    $( "#CassePhoneNumber" ).click(function(){
        $('#CassePhoneNumberinput').append('<input type="tel" class="form-control mt-2" name="phone[]" minlength="9" maxlength="14" required />')
    });
// add user profile
    $( "#addPhoneNumber" ).click(function(){
        $('#addPhoneNumber').before('<input type="tel" class="form-control form-control-sm" inputmode="tel" placeholder="Phone Number" style="color: #444;border: 1px solid #9a9a9a;display: block;margin: 0 auto;margin-bottom: 1rem;max-width: 300px;" value="" name="phone[]" />')
    });






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