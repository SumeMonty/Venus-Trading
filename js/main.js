(function($) {
	"use strict"

	// Mobile Nav toggle
	$('.menu-toggle > a').on('click', function (e) {
		e.preventDefault();
		$('#responsive-nav').toggleClass('active');
	})

	// Fix cart dropdown from closing
	$('.cart-dropdown').on('click', function (e) {
		e.stopPropagation();
	});

	/////////////////////////////////////////

	// Products Slick
	$('.products-slick').each(function() {
		var $this = $(this),
				$nav = $this.attr('data-nav');

		$this.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			infinite: true,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
			responsive: [{
	        breakpoint: 991,
	        settings: {
	          slidesToShow: 2,
	          slidesToScroll: 1,
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          slidesToShow: 1,
	          slidesToScroll: 1,
	        }
	      },
	    ]
		});
	});

	// Products Widget Slick
	$('.products-widget-slick').each(function() {
		var $this = $(this),
				$nav = $this.attr('data-nav');

		$this.slick({
			infinite: true,
			autoplay: true,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
		});
	});

	/////////////////////////////////////////

	// Product Main img Slick
	$('#product-main-img').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    fade: true,
    asNavFor: '#product-imgs',
  });

	// Product imgs Slick
  $('#product-imgs').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
		centerPadding: 0,
		vertical: true,
    asNavFor: '#product-main-img',
		responsive: [{
        breakpoint: 991,
        settings: {
					vertical: false,
					arrows: false,
					dots: true,
        }
      },
    ]
  });

	// Product img zoom
	var zoomMainProduct = document.getElementById('product-main-img');
	if (zoomMainProduct) {
		$('#product-main-img .product-preview').zoom();
	}

	/////////////////////////////////////////

	// Input number
	$('.input-number').each(function() {
		var $this = $(this),
		$input = $this.find('input[type="number"]'),
		up = $this.find('.qty-up'),
		down = $this.find('.qty-down');

		down.on('click', function () {
			var value = parseInt($input.val()) - 1;
			value = value < 1 ? 1 : value;
			$input.val(value);
			$input.change();
			updatePriceSlider($this , value)
		})

		up.on('click', function () {
			var value = parseInt($input.val()) + 1;
			$input.val(value);
			$input.change();
			updatePriceSlider($this , value)
		})
	});

	// var priceInputMax = document.getElementById('price-max'),
	// 		priceInputMin = document.getElementById('price-min');

	// priceInputMax.addEventListener('change', function(){
	// 	updatePriceSlider($(this).parent() , this.value)
	// });

	// priceInputMin.addEventListener('change', function(){
	// 	updatePriceSlider($(this).parent() , this.value)
	// });

	function updatePriceSlider(elem , value) {
		if ( elem.hasClass('price-min') ) {
			console.log('min')
			priceSlider.noUiSlider.set([value, null]);
		} else if ( elem.hasClass('price-max')) {
			console.log('max')
			priceSlider.noUiSlider.set([null, value]);
		}
	}

	// Price Slider
	var priceSlider = document.getElementById('price-slider');
	if (priceSlider) {
		noUiSlider.create(priceSlider, {
			start: [1, 999],
			connect: true,
			step: 1,
			range: {
				'min': 1,
				'max': 999
			}
		});

		priceSlider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];
			handle ? priceInputMax.value = value : priceInputMin.value = value
		});
	}

})(jQuery);

var locationHref = 'Laptop.php?';

function brand_ref_check() {
	
	var brand_ref = [];
	var asus = document.querySelector('#asusRef');
	var hp = document.querySelector('#hpRef');
	var acer = document.querySelector('#acerRef');
	var dell = document.querySelector('#dellRef');
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);


	if(asus.checked != false) {
		// brand_ref.push('asus');
		if(urlParams.has('brand[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'asus\'') window.location.search+='brand[]=\'asus\'&';
			}
		} else {
			window.location.search+='brand[]=\'asus\'&';
		}
		
		
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(hp.checked != false) {
		// brand_ref.push('hp');
		if(urlParams.has('brand[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'hp\'') window.location.search+='brand[]=\'hp\'&';
			}
		} else {
			window.location.search+='brand[]=\'hp\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(acer.checked != false) {
		// brand_ref.push('acer');
		if(urlParams.has('brand[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'acer\'') window.location.search+='brand[]=\'acer\'&';
			}
		} else {
			window.location.search+='brand[]=\'acer\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(dell.checked != false) {
		// brand_ref.push('dell');
		if(urlParams.has('brand[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'dell\'') window.location.search+='brand[]=\'dell\'&';
			}
		} else {
			window.location.search+='brand[]=\'dell\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(urlParams.has('ram[]')) {
		locationHref = 'Laptop.php' + window.location.search;
	}
	// brand_ref.forEach(brand => {
	// 	locationHref = locationHref + `brand[]='${brand}'&`;
	// });
	// window.location.href = locationHref;
	
}

// RAM REF CHECK


function ram_ref_check() {
	
	var ram_ref = [];
	var fourGB = document.querySelector('#fourGBRef');
	var eightGB = document.querySelector('#eightGBRef');
	var steenGB = document.querySelector('#steenGBRef');
	var ttwoGB = document.querySelector('#ttwoGBRef');
	var sfourGB = document.querySelector('#sfourGBRef');
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);

	if(fourGB.checked != false) {
		// ram_ref.push('4gb');
		if(urlParams.has('ram[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'4gb\'') window.location.search+='ram[]=\'4gb\'&';
			}
		} else {
			window.location.search+='ram[]=\'4gb\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(eightGB.checked != false) {
		// ram_ref.push('8gb');
		if(urlParams.has('ram[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'8gb\'') window.location.search+='ram[]=\'8gb\'&';
			}
		} else {
			window.location.search+='ram[]=\'8gb\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(steenGB.checked != false) {
		// ram_ref.push('16gb');
		if(urlParams.has('ram[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'16gb\'') window.location.search+='ram[]=\'16gb\'&';
			}
		} else {
			window.location.search+='ram[]=\'16gb\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	if(ttwoGB.checked != false) {
		// ram_ref.push('32gb');
		if(urlParams.has('ram[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'32gb\'') window.location.search+='ram[]=\'32gb\'&';
			}
		} else {
			window.location.search+='ram[]=\'32gb\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	
	if(sfourGB.checked != false) {
		// ram_ref.push('64gb');
		if(urlParams.has('ram[]')) {
			for(const [key, value] of urlParams.entries()) {
				if(value != '\'64gb\'') window.location.search+='ram[]=\'64gb\'&';
			}
		} else {
			window.location.search+='ram[]=\'64gb\'&';
		}
		document.querySelector('#clearFilters').style.display = "block";
	}
	
	
	if(urlParams.has('brand[]')) {
		locationHref = 'Laptop.php' + window.location.search;
	}
	// ram_ref.forEach(ram => {
	// 	locationHref = locationHref + `ram[]='${ram}'&`;
	// });
	// window.location.href = locationHref;
	
}

// RAM REF CHECK

document.addEventListener("DOMContentLoaded", retainChecked());

function retainChecked() {
	const queryString = window.location.search;
	const urlParams = new URLSearchParams(queryString);
	
	// Brand Start

	const brand = urlParams.getAll('brand[]');
	brand.forEach(el => {
		if(el === '\'asus\'') {
			document.querySelector('#asusRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'hp\'') {
			document.querySelector('#hpRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'acer\'') {
			document.querySelector('#acerRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'dell\'') {
			document.querySelector('#dellRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
	});

	// Brand End


	// Ram Start

	const ram = urlParams.getAll('ram[]');
	ram.forEach(el => {
		if(el === '\'4gb\'') {
			document.querySelector('#fourGBRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'8gb\'') {
			document.querySelector('#eightGBRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'16gb\'') {
			document.querySelector('#steenGBRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'32gb\'') {
			document.querySelector('#ttwoGBRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
		if(el === '\'64gb\'') {
			document.querySelector('#sfourGBRef').checked = true
			document.querySelector('#clearFilters').style.display = "block";
		}
	});

	// Ram End

}

document.querySelector('#clearFilters').addEventListener('click', () => {
	document.querySelector('#asusRef').checked = false
	document.querySelector('#hpRef').checked = false
	document.querySelector('#acerRef').checked = false
	document.querySelector('#dellRef').checked = false
	document.querySelector('#fourGBRef').checked = false
	document.querySelector('#eightGBRef').checked = false
	document.querySelector('#steenGBRef').checked = false
	document.querySelector('#ttwoGBRef').checked = false
	document.querySelector('#sfourGBRef').checked = false
	window.location.href = 'Laptop.php';
	document.querySelector('#clearFilters').style.display = "none";
})

function toggleref() {
	var x = document.querySelector('.refinements');
	if (x.style.display === "none") {
		x.style.display = "block";
		x.style.transform = "translateX(0px)";
	//   document.querySelector('.responsive-filter').style.transform = "translateY(-30px)";
	} else {
		
		x.style.transform = "translateX(-70px)";
		x.style.display = "none";
		// document.querySelector('.responsive-filter').style.transform = "translateY(0px)";
	}
}


// document.querySelector('#clearFilters').addEventListener('click', () => {
// 	document.querySelector('#fourGBRef').checked = false
// 	document.querySelector('#eightGBRef').checked = false
// 	document.querySelector('#steenGBRef').checked = false
// 	document.querySelector('#ttwoGBRef').checked = false
// 	document.querySelector('#sfourGBRef').checked = false

// 	// window.location.href = 'Laptop.php';
// 	document.querySelector('#clearFilters').style.display = "none";
// })