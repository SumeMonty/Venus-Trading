// $(document).ready(function() {
// 	filter_data();

// 	function filter_data() {
// 		// $('.box').html('')

// 		var action = 'fetch_data';
// 		var brand = get_filter('brand');
// 		var processor = get_filter('processor');
// 		var graphics = get_filter('graphics');

// 		$.ajax({
// 			url: "fetch_data.php",
// 			method: "POST",
// 			data: {action: action, }
// 		})
// 	}
// })

const mediaQuery = window.matchMedia('(max-width: 850px)')

if (mediaQuery.matches) {
	$(".accordion-collapse").removeClass("show");
}

var locationHref = 'index.php?';

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
		locationHref = 'index.php' + window.location.search;
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
		locationHref = 'index.php' + window.location.search;
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
	window.location.href = 'index.php';
	document.querySelector('#clearFilters').style.display = "none";
})

// function toggleref() {
	// var x = document.querySelector('.refinements');
	// if (x.style.display === "none") {
	// 	x.style.display = "block";
	// 	x.style.transform = "translateX(0px)";
	//   document.querySelector('.responsive-filter').style.transform = "translateY(-30px)";
	// } else {
		
		// x.style.transform = "translateX(-70px)";
		// x.style.display = "none";
		// document.querySelector('.responsive-filter').style.transform = "translateY(0px)";
	// }
// }


// document.querySelector('#clearFilters').addEventListener('click', () => {
// 	document.querySelector('#fourGBRef').checked = false
// 	document.querySelector('#eightGBRef').checked = false
// 	document.querySelector('#steenGBRef').checked = false
// 	document.querySelector('#ttwoGBRef').checked = false
// 	document.querySelector('#sfourGBRef').checked = false

// 	// window.location.href = 'index.php';
// 	document.querySelector('#clearFilters').style.display = "none";
// })


function ramformsubmit() {
	document.forms.ramform.submit();
	document.querySelector('#clearFilters').style.display = "block";
	// alert(document.ramform.ramformselect.selectedIndex)

}


function processorformsubmit() {
	document.forms.processorform.submit();
	document.querySelector('#clearFilters').style.display = "block";
	// alert(document.ramform.ramformselect.selectedIndex)

}