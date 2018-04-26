<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.js') }}"></script>

<script>
var bestPictures = new Bloodhound({
  datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.tokens.join(' ')); },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: { 
    url: 'getBenefits.json',
    cache: false,
  },
  /*remote: {
    url: 'getBenefits.json',
    wildcard: '%QUERY',
    filter: function(bestPictures) {
      return $.map(bestPictures, function(data) {
          return {
            tokens: data.tokens,
            description: data.description,
            name: data.name
          }
      });
    }
  }*/
});

bestPictures.initialize();

$('#remote .typeahead').typeahead({
  hint: false,
  highlight: false,
  minLength: 1
},
{
  name: 'best-pictures',
  display: 'name',
  source: bestPictures.ttAdapter()
});

$('#selectCategory').on('change', function(){
  console.log($('#selectCategory').val());
  $('.typeahead').typeahead('destroy');
  var bestPictures2 = new Bloodhound({
    datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.tokens.join(' ')); },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: { 
      url: $('#selectCategory').val() + '/getBenefits.json',
      cache: false,
    },
    /*remote: {
      url: 'getBenefits.json',
      wildcard: '%QUERY',
      filter: function(bestPictures) {
        return $.map(bestPictures, function(data) {
            return {
              tokens: data.tokens,
              description: data.description,
              name: data.name
            }
        });
      }
    }*/
  });

  bestPictures2.initialize();

  $('#remote .typeahead').typeahead({
    hint: false,
    highlight: false,
    minLength: 1
  },
  {
    name: 'best-pictures',
    display: 'name',
    source: bestPictures2.ttAdapter()
  });
});
</script>
<script type="text/javascript">
    // Second Carousel
    $('#slider-carousel').owlCarousel({
    	loop: true,
    	margin: 50,
    	dots: true,
    	nav: false,
    	responsiveClass: true,
    	responsive: {
    		0: {
    			items: 1.5,
    			margin: 10,
    			stagePadding: 20,
    		},
    		600: {
    			items: 3,
    			margin: 40,
    			stagePadding: 50,
    		},
    		1000: {
    			items: 5
    		}
    	}
    });

    $("#owl-carousel2").owlCarousel({
    	items: 4,
    	margin: 30,
    	responsive: {
    		0: {
    			items: 1,
    			margin: 10,
    			stagePadding: 20,
    		},
    		600: {
    			items: 2,
    			margin: 20,
    			stagePadding: 50,
    		},
    		1000: {
    			items: 4
    		}
    	}
    });
</script>

