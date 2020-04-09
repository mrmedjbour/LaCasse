$(function(){
    $(".messages").animate({scrollTop: 9000000}, "fast");

    $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });


    function newMessage() {
        message = $(".message-input input").val();
        if ($.trim(message) == '' || !$('#contacter_disc').val()) {
            return false;
        }
        disc_id = $('#contacter_disc').val();
        $.ajax({
            type: "POST",
            url: "/home/messages/send",
            data: {disc_id: disc_id, message: message},
            success: function (data) {
                $('.message-input input').val(null);
                refreshMsg();
                $(".messages").animate({scrollTop: 9000000}, "fast");
                setTimeout(function () {
                    $(".messages").animate({scrollTop: 9000000}, "fast");
                }, 1000);
            },
            dataType: 'json'
        });
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

    $ContactEvent = function () {
        $("li.contact").removeClass('active');
        $(this).addClass('active');
        disc_id = $(this).children("input#disc_id").val();
        alert(disc_id);
        $("#msgframe #sidepanel").hide();
        $("#msgframe .content").show();
    };
    $("#contacts_list li.contact").on('click', $ContactEvent);
    $(document).on('click', '#contacts_list li.contact', $ContactEvent);


    $(".contact-profile #BackToContacts").click(function () {
        refreshDiscussion();
        $("#contacts_list li.contact").removeClass('active');
        $("#msgframe #sidepanel").show();
        $("#msgframe .content").hide();
    });


    function refreshMsg() {
        if ($('#contacter_disc').val()) {
            $disc_id = $('#contacter_disc').val();
            $(".messages ul").load("/home/messages/fetch", {get: 'messages', disc_id: $disc_id});
        }
    }

    setInterval(refreshMsg, 8000);

    function refreshDiscussion() {
        $("#contacts_list").load("/home/messages/discussion", {get: 'discussion'});
    }

    setInterval(refreshDiscussion, 8000);

});


