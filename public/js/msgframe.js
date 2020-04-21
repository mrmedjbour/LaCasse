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
            url: "https://lacasse.herokuapp.com/home/messages/send",
            data: {disc_id: disc_id, message: message},
            success: function (data) {
                $('.message-input input').val(null);
                $(".messages ul").load("https://lacasse.herokuapp.com/home/messages/fetch", {get: 'messages', disc_id: disc_id}, function () {
                    $(".messages").animate({scrollTop: 90000000}, "fast");
                });
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
        $target = $(this);
        disc_id = $(this).children("input#disc_id").val();
        if (disc_id == $('#contacter_disc').val()) {
            $("#msgframe #sidepanel").hide();
            $("#msgframe .content").show();
            return false;
        }
        $('#contacter_disc').val(disc_id);
        $(".messages ul").load("https://lacasse.herokuapp.com/home/messages/fetch", {get: 'messages', disc_id: disc_id}, function (data) {
            if (!$.trim(data)) {
                return false;
            }
            $("p#contacter_title").text($target.find("p.name").text());
            $("img#contacter_img").attr('src', $target.find("img").attr('src'));
            $("#msgframe #sidepanel").hide();
            $("#msgframe .content").show(0, function () {
                $(".messages").animate({scrollTop: 9000000}, "fast");
            });
        });
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
            $(".messages ul").load("https://lacasse.herokuapp.com/home/messages/fetch", {get: 'messages', disc_id: $disc_id});
        }
    }
    setInterval(refreshMsg, 8000);
    function refreshDiscussion() {
        $("#contacts_list").load("https://lacasse.herokuapp.com/home/messages/discussion", {get: 'discussion'});
    }
    setInterval(refreshDiscussion, 8000);
});


