$(function(){
    $(".messages").animate({ scrollTop: $(document).height() }, "fast");

    $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });


    function newMessage() {
        message = $(".message-input input").val();
        if($.trim(message) == '') {
            return false;
        }
        $('<li class="sent"><p>' + message + '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .wrap .meta .preview').html('<i class="fa fa-reply"></i>' + ' ' + message);
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
    }

    $('.submit').click(function() {
        newMessage();
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });

    $("#contactSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#contacts_list li .wrap .meta .name").filter(function() {
            $(this).parent().parent().parent().toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    $.urlParam = function (par) {
        var results = new RegExp('[\?&]' + par + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    };
    if($.urlParam('m')){
        $("#msgframe #sidepanel").hide();
        $("#msgframe .content").show();
    }

    $ContactEvent = function () {
        $("li.contact").removeClass('active');
        $(this).addClass('active');
        var disc_id = $(this).children("input#disc_id").val();
        alert(disc_id);
        $("#msgframe #sidepanel").hide();
        $("#msgframe .content").show();
    };
    $("#contacts_list li.contact").on('click', $ContactEvent);
    $(document).on('click', '#contacts_list li.contact', $ContactEvent);


    $(".contact-profile #BackToContacts").click(function () {
        $("#contacts_list li.contact").removeClass('active');
        $("#msgframe #sidepanel").show();
        $("#msgframe .content").hide();
    });


    function refreshMsg() {
        var oldmsgs = $(".content .messages ul").html();
        $(".content .messages ul").html(oldmsgs);
    }

    setInterval(refreshMsg, 5000);


    setInterval(function () {
        $("#contacts_list").load('/home/messages/discussion');
    }, 8000);

});


