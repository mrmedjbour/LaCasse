



$('#carousel-brand').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


$(function(){

	$('#slide-submenu').on('click',function() {
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.mini-submenu').fadeIn();
        });

      });

	$('.mini-submenu').on('click',function(){
        $(this).next('.list-group').toggle('slide');
        $('.mini-submenu').hide();
	})
})


$(document).ready(function() {

 if(window.File && window.FileList && window.FileReader) {
 $("#files").on("change",function(e) {
 var files = e.target.files ,
 filesLength = files.length ;
 for (var i = 0; i < filesLength ; i++) {
 var f = files[i]
 var fileReader = new FileReader();
 fileReader.onload = (function(e) {
 var file = e.target;
 $("<img></img>",{
 class : "imageThumb",
 src : e.target.result,
 title : file.name
 }).insertAfter("#files");
 });
 fileReader.readAsDataURL(f);
 }
});
 } else { alert("Your browser doesn't support to File API") }
});



$("#checkAll").on("click", function () {
  if ($(this).is(':checked')) {
    $(this).closest("div#category-name-collaps").find(':checkbox').each(function () {
      $(this).attr('checked', 'checked');
    });
  } else {
    $(this).closest("div#category-name-collaps").find(':checkbox').each(function () {
      $(this).removeAttr('checked');
    });
  }
});
$("#checkAll1").on("click", function () {
  if ($(this).is(':checked')) {
    $(this).closest("div#category-name2-collaps").find(':checkbox').each(function () {
      $(this).attr('checked', 'checked');
    });
  } else {
    $(this).closest("div#category-name2-collaps").find(':checkbox').each(function () {
      $(this).removeAttr('checked');
    });
  }
});

$('#addphonebtn').on('click',function() {
    $('<input type="tel" class="form-control" placeholder="add phone number"/>').appendTo('#addphone');
});
