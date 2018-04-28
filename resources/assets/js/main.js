//Nav-scroll index
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("navbar").style.display = "block";
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.display = "none";

  }
}

// Search navbar-bounceInDown

$(document).ready(function(){
  $("#search-navbar").click(function(){
    $("#input-search").slideToggle(200);
  });
});


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


// //sticker with hover
// $(document).ready(function(){
//   $("ranking-item").hover(function(){
//     $("ranking-item").addClass("fast");
//   });
// });


//dropdown list -list benefits-

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("fast");
  });
});


// OWL CAROUSEL

$('#owl-carousel2, #owl-carousel22').owlCarousel({
  loop:false,
  margin:10,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      nav:false
    },
    400:{
      items:1,
      nav:false
    },
    600:{
      items:3,
      nav:false,
      autoplay:false,
    },
    1000:{
      items:4,
      nav:false,
      loop:false,
      autoplay:false,
    },
    1200:{
      items:4,
      nav:false,
      loop:false,
      autoplay:false,
    }
  }
})

//owl navbar-category

$('#owl-carousel3').owlCarousel({
  loop:false,
  margin:10,
  responsiveClass:true,
  responsive:{
    0:{
      items:1,
      nav:false
    },
    400:{
      items:1,
      nav:false
    },
    600:{
      items:3,
      nav:false,
      autoplay:false,
    },
    1000:{
      items:4,
      nav:false,
      loop:false,
      autoplay:false,
    },
    1200:{
      items:6,
      nav:false,
      loop:false,
      autoplay:false,
    }
  }
})

//owl navbar bounceInDown
$('#owl-carousel-indown').owlCarousel({
  margin: 10,
  loop:false,
  nav:false,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
})

// article section

$('#owl-carousel-article').owlCarousel({
  loop:false,
  margin:10,
  nav:false,
  autoHeight:true,
  responsive:{
    0:{
      items:2
    },
    600:{
      items:3
    },
    1000:{
      items:4
    }
  }
})

//Search-button

$('.header').on('click', '.search-toggle', function(e) {
  var selector = $(this).data('selector');

  $(selector).toggleClass('show').find('.search-input').focus();
  $(this).toggleClass('active');

  e.preventDefault();
});
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

$('#tags').tagsInput();