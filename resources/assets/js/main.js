// Icon search navbar 

$('#iconified').on('keyup', function() {
  var input = $(this);
  if(input.val().length === 0) {
    input.addClass('empty');
  } else {
    input.removeClass('empty');
  }
});

// Star raiting
$(
  function () {
    $('.li-config').on('click', function() {
      var selectedCssClass = 'selected';
      var $this = $(this);
      $this.siblings('.' + selectedCssClass).removeClass(selectedCssClass);
      $this
      .addClass(selectedCssClass)
      .parent().addClass('vote-cast');
    });
  }
  );


//Google maps 



//dropdown list -list benefits-

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("fast");
  });
});


// OWL CAROUSEL

$('#owl-carousel2, #owl-carousel22').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      nav:false
    },
    400:{
      items:1.5,
      nav:false
    },
    600:{
      items:3,
      nav:false,
      autoplay:true,
      autoplayTimeout:3000
    },
    1000:{
      items:4,
      nav:false,
      loop:false,
      autoplay:true,
      autoplayTimeout:3000
    }
  }
})

// Checkbox list-benefits 

$(".area .input").click(function(e) {

 $("label[type='checkbox']", this)
 var pX = e.pageX,
 pY = e.pageY,
 oX = parseInt($(this).offset().left),
 oY = parseInt($(this).offset().top);

 $(this).addClass('active');

 if ($(this).hasClass('active')) {
  $(this).removeClass('active')
  if ($(this).hasClass('active-2')) {
   if ($("input", this).attr("type") == "checkbox") {
    if ($("span", this).hasClass('click-efect')) {
     $(".click-efect").css({
      "margin-left": (pX - oX) + "px",
      "margin-top": (pY - oY) + "px"
    })
     $(".click-efect", this).animate({
      "width": "0",
      "height": "0",
      "top": "0",
      "left": "0"
    }, 400, function() {
      $(this).remove();
    });
   } else {
     $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
     $('.x-' + oX + '.y-' + oY + '').animate({
      "width": "500px",
      "height": "500px",
      "top": "-250px",
      "left": "-250px",
    }, 600);
   }
 }

 if ($("input", this).attr("type") == "radio") {

  $(".area .input input[type='radio']").parent().removeClass('active-radio').addClass('no-active-radio');
  $(this).addClass('active-radio').removeClass('no-active-radio');

  $(".area .input.no-active-radio").each(function() {
   $(".click-efect", this).animate({
    "width": "0",
    "height": "0",
    "top": "0",
    "left": "0"
  }, 400, function() {
    $(this).remove();
  });
 });

  if (!$("span", this).hasClass('click-efect')) {
   $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
   $('.x-' + oX + '.y-' + oY + '').animate({
    "width": "auto",
    "height": "500px",
    "top": "-250px",
    "left": "-250px",
  }, 600);
 }

}
}
if ($(this).hasClass('active-2')) {
 $(this).removeClass('active-2')
} else {
 $(this).addClass('active-2');
}
}

});

