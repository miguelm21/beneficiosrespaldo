<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/typeahead.bundle.js') }}"></script>
<script>

/*var bestPictures = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('tokens'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: '/data/countries.json'
});

$('#remote .typeahead').typeahead({
  hint: false,
  highlight: false,
  minLength: 1
},
{
  name: 'best-pictures',
  display: 'value',
  source: bestPictures
});*/

var bestPictures = new Bloodhound({
  datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.tokens.join(' ')); },
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: 'getBenefits.json'
});

$('#remote .typeahead').typeahead({
  hint: false,
  highlight: false,
  minLength: 1
},
{
  name: 'best-pictures',
  display: 'name',
  source: bestPictures
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

