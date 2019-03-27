$(document).ready(function () {
	$('#hamburger-icon').click(function(){
		$(this).toggleClass('open');
		$('#nav-menu').toggle();
		$('#hamburger-icon span').toggleClass('black-bg');
	});
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}
	$("#nav-menu li").click(function () {
		if($(window).width()< 990){
			//Toggle the child but don't include them in the hide selector using .not()
			$(this).children('ul').toggle();
			//$('li  ul').not($(this).children("ul").toggle()).hide();
		 }   
		 console.log('1');
		 event.stopPropagation();
	});

	$("#nav-menu li li").click(function () {
		if($(window).width()< 990){
			//Toggle the child but don't include them in the hide selector using .not()
			//$('li  ul').not($(this).children("ul").toggle()).hide();
		 }   
		 console.log('2');
		 event.stopPropagation();
	});

	// $("#nav-menu li li").click(function () {
    //     //Toggle the child but don't include them in the hide selector using .not()
	// 	$(this).find("ul").show();
	// 	//$('li ul').not($(this).children("ul").toggle()).hide();
	// 	console.log($(this).find("ul").html());

	// });
	

	

	$('.oc-2').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		navText: [
			"<span class='prev-slider-btn'>&lsaquo;&lsaquo;</span>",
			"<span class='next-slider-btn'>&rsaquo;&rsaquo;</span>"
		],
		autoplay: true,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			800: {
				items: 2
			},
			1000: {
				items: 4
			}
		}
	})
	$('#oc-1').owlCarousel({
		loop: true,
		margin: 0,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
		}
	})

	//  provider form
	//only numbers in age
	$(".provider-age").keypress(function (e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		   //display error message
		   $(".error-prov-age").html("Digits Only").show().fadeOut("slow");
				  return false;
	   }
	  });
	  $(".provider-contact").keypress(function (e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		   //display error message
		   $(".error-prov-contact").html("Digits Only").show().fadeOut("slow");
				  return false;
	   }
	  });
	$('.signup-next-btn').click(function () {


		let nameFlag = 0, ageFlag = 0, mobFlag = 0;
		let provName  = $('.provider-name').val();
		let provAge  = $('.provider-age').val();
		let provMobile  = $('.provider-contact').val();
		if(provName == '' || provName == ' ' || provName == null){
			$('.error-prov-name').html(' can\'t be empty');
			nameFlag = 1;
		}else{
			$('.error-prov-name').html('');
		}

		if(provAge == '' || provAge == ' ' || provAge == null){
			$('.error-prov-age').html(' can\'t be empty');
			ageFlag = 1;
		}else{
			$('.error-prov-age').html('');
		}
		
		if(provMobile == '' || provMobile == ' ' || provMobile == null){
			$('.error-prov-contact').html(' can\'t be empty');
			mobFlag = 1;
		}else{
			$('.error-prov-contact').html('');
		}

		if(nameFlag == 0 && ageFlag == 0 && mobFlag == 0){
			$('.signup-1').hide();
			$('.signup-2').show();
		}		
	});
	$('.signup-prev-btn').click(function () {
		$('.signup-2').hide();
		$('.signup-1').show();
	});
	$('.signup-btn').click(function () {

		let serviceFlag = 0, addrFlag = 0, workexpFlag = 0, recordFlag = 0, aboutFlag = 0, specialityFlag = 0, passbookFlag = 0;
		let provService  = $('.provider-service').val();
		let provAddr  = $('.provider-addr').val();
		let provWorkexp  = $('.provider-workexp').val();
		let provRecord  = $('.provider-record').val();
		let provAbout  = $('.provider-about').val();
		let provSpeciality  = $('.provider-speciality').val();
		let provPassbook  = $('.provider-passbook').val();
		if(provService == '' || provService == ' ' || provService == null){
			$('.error-prov-service').html(' can\'t be empty');
			serviceFlag = 1;
		}else{
			$('.error-prov-service').html('');
		}

		if(provAddr == '' || provAddr == ' ' || provAddr == null){
			$('.error-prov-addr').html(' can\'t be empty');
			addrFlag = 1;
		}else{
			$('.error-prov-addr').html('');
		}
		
		if(provWorkexp == '' || provWorkexp == ' ' || provWorkexp == null){
			$('.error-prov-workexp').html(' can\'t be empty');
			workexpFlag = 1;
		}else{
			$('.error-prov-workexp').html('');
		}

		if(provRecord == '' || provRecord == ' ' || provRecord == null){
			$('.error-prov-record').html(' can\'t be empty');
			recordFlag = 1;
		}else{
			$('.error-prov-record').html('');
		}

		if(provAbout == '' || provAbout == ' ' || provAbout == null){
			$('.error-prov-about').html(' can\'t be empty');
			aboutFlag = 1;
		}else{
			$('.error-prov-about').html('');
		}

		if(provSpeciality == '' || provSpeciality == ' ' || provSpeciality == null){
			$('.error-prov-speciality').html(' can\'t be empty');
			specialityFlag = 1;
		}else{
			$('.error-prov-speciality').html('');
		}

		if(provPassbook == '' || provPassbook == ' ' || provPassbook == null){
			$('.error-prov-passbook').html(' can\'t be empty');
			passbookFlag = 1;	
		}
		else{
			$('.error-prov-passbook').html('');
		}
		
		if(serviceFlag == 0 &&  addrFlag == 0 &&  workexpFlag == 0 &&  recordFlag == 0 &&  aboutFlag == 0 &&  specialityFlag == 0 &&  passbookFlag == 0){
			$('#provider-form').submit();
		}	
		
	});


	//order Form submission
	$('.order-btn').click(function () {
		$('#order-form').submit();
	});

	//Customer  Form
	$('.cust-signup-btn').click(function () {
		let nameFlag = 0, emailFlag = 0, mobFlag = 0, pwdFlag = 0;
		let custName  = $('input[name=cust-name]').val();
		let custEmail  = $('input[name=cust-email]').val();
		let custMobile  = $('input[name=cust-mobile]').val();
		let custPwd  = $('input[name=cust-password]').val();
		
		if(custName == '' || custName == ' ' || custName == null){
			$('.error-name').html(' can\'t be empty');
			nameFlag = 1;
		}else{
			$('.error-name').html('');
		}

		if(custEmail == '' || custEmail == ' ' || custEmail == null){
			$('.error-email').html(' can\'t be empty');
			emailFlag = 1;
		}else if(! isEmail(custEmail)){
				$('.error-email').html('Not a Valid Email.');
				emailFlag = 1;

		}else{
			$('.error-email').html('');
		}


		if(custMobile == '' || custMobile == ' ' || custMobile == null){
			$('.error-mobile').html(' can\'t be empty');
			mobFlag = 1;
		}else{
			$('.error-mobile').html('');
		}

		if(custPwd == '' || custPwd == ' ' || custPwd == null){
			$('.error-password').html(' can\'t be empty');
			pwdFlag = 1;
		}else{
			$('.error-password').html('');
		}

		if( nameFlag == 0 && emailFlag == 0 && mobFlag == 0 && pwdFlag == 0 ){
			$('#cust-signup-form').submit();
		}
		
		
	});
	
	$('.cust-login-btn').click(function () {
		let emailFlag = 0;
		let pwdFlag = 0;
		let custEmail  = $('input[name=cust-email]').val();
		let custPwd  = $('input[name=cust-password]').val();
		if(custEmail == '' || custEmail == ' ' || custEmail == null){
			$('input[name=cust-email]').focus();
			$('.error-email').html(' can\'t be empty');
			emailFlag = 1;
		}else if(! isEmail(custEmail)){
				$('.error-email').html('Not a Valid Email.');
				$('input[name=cust-email]').focus();
				emailFlag = 1;
		}else{
			$('.error-email').html('');
		}

		if(custPwd == '' || custPwd == ' ' || custPwd == null){
			$('.error-password').html(' can\'t be empty');
			if(emailFlag == 0){
				$('input[name=cust-password]').focus();
			}

			pwdFlag = 1;
		}else{
			$('.error-password').html('');
		}

		if(emailFlag == 0 && pwdFlag == 0){
			$('#cust-login-form').submit();
		}
		
	});

	$('.order-delete').click(function(){
		let orderId = $(this).closest("tr").find('td:first-child').text();
		var cnfrmCancellation = confirm("Do you really want to cancel order ?\n Click Ok to cancel Order.");
		if(cnfrmCancellation == true){
			var posting = $.post("/handlers/formhandle/order/update-order/",{orderId:orderId});
			posting.done(function( data ) {
				//console.log(data);
			});
			$(this).closest("tr").hide();	
		}
	});

	//Menu Click submission

	$('.menu-service').click(function () {
		let ordType1 = this.text;
		pNode = this.parentNode.parentNode.parentNode
		let ordType2 = pNode.getElementsByTagName('a')[0].text;
		gpNode = pNode.parentNode.parentNode
		let ordType3;
		if (gpNode.tagName == 'nav') {
			ordType3 = '-';
		}
		else {
			ordType3 = gpNode.getElementsByTagName('a')[0].text;
		}

		ggpNode = gpNode.parentNode.parentNode;

		let ordType4;
		if (ggpNode.tagName.toLowerCase() == 'nav') {
			ordType4 = '-';
		}
		else {
			ordType4 = ggpNode.getElementsByTagName('a')[0].text;
		}
		$("#ord-t1").val(ordType1);
		$("#ord-t2").val(ordType2);
		$("#ord-t3").val(ordType3);
		$("#ord-t4").val(ordType4);
		$('#order-type-form').submit();
	});

	$('.menu-service1').click(function () {
		let ordType1 = this.text;
		pNode = this.parentNode.parentNode.parentNode;
		let ordType2 = pNode.getElementsByTagName('a')[0].text;
		gpNode = pNode.parentNode.parentNode
		let ordType3;
		if (gpNode.tagName.toLowerCase() == 'nav') {
			ordType3 = '-';
		}
		else {
			ordType3 = gpNode.getElementsByTagName('a')[0].text;
		}

		ggpNode = gpNode.parentNode.parentNode;

		let ordType4;
		if (ggpNode.tagName.toLowerCase() == 'section') {
			ordType4 = '-';
		}
		else {
			ordType4 = ggpNode.getElementsByTagName('a')[0].text;
		}

		$("#ord-t1").val(ordType1);
		$("#ord-t2").val(ordType2);
		$("#ord-t3").val(ordType3);
		$("#ord-t4").val(ordType4);
		$('#order-type-form').submit();
	});

});
window.onload = function () {

	var service1 = ["Advisor (Free)", "Visitor", "Mistri", "Labour", "Contractor"];
	var service2 = ["Advisor (Free)", "Visitor", "Architect"];
	var service3 = ["Advisor (Free)", "Pundit"];
	var service4 = ["Advisor (Free)", "Visitor", "Service"];
	var service5 = ["Industrial Packers & Movers", "Domestic Packers & Movers"];
	var professionInfo = {
		"Home Services": {
			"Carpainter": {
				"Door": service1,
				"Window": service1,
				"Almirah": service1,
				"Sofa": service1,
				"Kitchen": service1,
				"Bed": service1,
				"Table": service1,
				"LCD set": service1,
				"Others": service1
			},
			"Painter": {
				"Fresh": service1,
				"Repainting": service1
			},
			"Rajmistri": {
				"Fresh": service1,
				"Renovation": service1
			},
			"Plumber": {
				"Fresh": service1,
				"Renovation": service1

			},
			"Electrician": {
				"Electricity": ["Advisor (Free)", "Visitor", "Electrician"]
			},
			"Polisher": {
				"Fresh": service1,
				"Renovation": service1
			},
			"Glassmen": {
				"Glass Supplier": service1,
				"Worker": service1
			},
			"Architect": {
				"Home": service2,
				"Office": service2
			},
			"Builder": {
				"Home": service2,
				"Office": service2
			},
			"Pandit/ Puja": {
				"Naamkaran": service3,
				"Katha": service3,
				"GharPravesh": service3,
				"Jaagran": service3,
				"Others": service3
			},
		},
		"Appliance Repair": {
			"AC Service, Repair & Installation": service4,
			"Refrigerator Repair": service4,
			"Washing Machine Repair": service4,
			"RO or Water Purifier Repair": service4,
			"Microwave Repair": service4,
			"TV Repair & Installation": service4,
			"Air Cooler Repair": service4,
			"Geyser/Water Heater Repair": service4,
			"Computer Repair": service4,
			"Mobile Repair": service4,
			"CCTV Camera & Installation": service4

		},
		"Transport & Travel": {
			"Transport": {
				"Business": service5,
				"Personal": service5
			},
			"Travel": {
				"Local": ["Auto", "Van", "Bus", "Car", "Tempo", "Truck", "e-rickshaw"],
				"Outstation": ["Bus", "Car", "Tempo", "Truck", "Van"]
			}

		},
		"Showroom": {
			"Car Showroom": {
				"Tata Motors": [],
				"Maruti Suzuki": [],
				"Hyundai": [],
				"Toyota": [],
				"Mahindra": [],
				"Honda": [],
				"Volkswagen": [],
				"Ford": [],
				"BMW": [],
				"Audi": [],
				"Mercedes": [],
				"Skoda": [],
				"Datsun": [],
				"Volvo": [],
				"Nissan": [],
				"Fiat": [],
				"Land Rover": [],
				"Ferrari": [],
				"Maserati": [],
				"Force": [],
				"Lexus": [],
				"Aston Martin": [],
				"Premier": [],
				"DC": [],
				"Force Motor": [],
				"ISUZU": [],
				"Bentley": [],
				"Bugati": [],
				"Porsche": [],
				"Rolls Royce": [],
				"Mini": [],
				"Lamborghini": [],
				"Jaguar": [],

			},
			"Bike Showroom": {
				"Bajaj": [],
				"Hero": [],
				"Honda": [],
				"TVS": [],
				"Royal Enfield": [],
				"Yamaha": [],
				"KTM": [],
				"Hero Electric": [],
				"Mahindra": [],
				"Suzuki": [],
				"Harley": [],
				"Vespa": [],
				"Kawasaki": [],
				"Lahia": []

			},

		},
		"Occasion": {
			"Wedding": {
				"DJ": [],
				"Wedding Planner": [],
				"Event Photographer": [],
				"Bridal Makeup Artist": [],
				"Hair Style & Make-up": [],
				"Party Caterers": [],
				"Wedding Caterers": [],
				"Wedding Florist & Decoraters": [],
				"Farm Hose": [],
				"Halwai": [],
				"Tent & Decorators": [],
				"Mehandi Artist": [],
				"Band": [],
				"Ghori and Baggi": [],
				"Flower, Jhumar": [],
				"Light set": [],
				"Palki, Aatish Baazi and more": [],
				"Waiter Services": [],
				"Video Camereaman": [],
				"jewellery": [],
			},
			"Birthday": {

				"Party Planner": [],
				"DJ": [],
				"Event Photographer": [],
				"Party Photographer": [],
				"Halwai": [],
				"Tent & Decorators": [],
				"Light Set": [],
				"Waiter Services": [],
				"Video Camereaman": [],
				"Cake Service": []
			},
			"Anniversary": {

				"DJ": [],
				"Party Planner": [],
				"Event Photographer": [],
				"Make-up Artist": [],
				"Hair Styling": [],
				"Party Caterer": [],
				"Halwai": [],
				"Tent & Decorators": [],
				"Flower, Light set": [],
				"Waiter Services": [],
				"Video Camereaman": [],
				"jewellery": []
			},
			"Others": {}

		}
	}
	var orderForm = document.getElementById("order-form");
	if (orderForm) {

		/*var urlArr = window.location.pathname.split('/');
		var urlArrLen = urlArr.length;
		var selKey1 = urlArr[urlArrLen - 2];
		var selKey2 = urlArr[urlArrLen - 1];
		selKey1 = selKey1.replace(/-/g, " ");//Key to default select Option
		selKey2 = selKey2.replace(/-/g, " ");//Key to default select Option
		*/
		var professionServiceSel = document.getElementById("profession-service");
		var professionNameSel = document.getElementById("profession-name");
		var professionTypeSel = document.getElementById("profession-type-sel");
		var professionRoleSel = document.getElementById("profession-role-sel");

		//Load Profession
		for (var Profession in professionInfo) {
			professionServiceSel.options[professionServiceSel.options.length] = new Option(Profession, Profession);
		}
		//Profession Type Changed
		professionServiceSel.onchange = function setProfessionType() {

			professionNameSel.length = 1; // remove all options bar first
			professionTypeSel.length = 1; // remove all options bar first
			professionRoleSel.length = 1; // remove all options bar first

			if (this.selectedIndex < 1)
				return; // done

			for (var professionName in professionInfo[this.value]) {
				professionNameSel.options[professionNameSel.options.length] = new Option(professionName, professionName);
			}
		}
		//Profession Name Changed 
		professionNameSel.onchange = function () {

			professionTypeSel.length = 1; // remove all options bar first
			professionRoleSel.length = 1; // remove all options bar first

			if (this.selectedIndex < 1)
				return; // done

			for (var professionType in professionInfo[professionServiceSel.value][this.value]) {
				professionTypeSel.options[professionTypeSel.options.length] = new Option(professionType, professionType);
			}
		}
		//WorkType Changed
		professionTypeSel.onchange = function () {
			professionRoleSel.length = 1; // remove all options bar first

			if (this.selectedIndex < 1)
				return; // done

			var roles = professionInfo[professionServiceSel.value][professionNameSel.value][this.value];
			for (var i = 0; i < roles.length; i++) {
				professionRoleSel.options[professionRoleSel.options.length] = new Option(roles[i], roles[i]);
			}

		}

		//function allTitleCase(inStr) {
		//	return inStr.replace(/\w\S*/g, function (tStr) {
		//		return tStr.charAt(0).toUpperCase() + tStr.substr(1).toLowerCase();
		//	});
		//}

	}

	//Search Results
	var searchInp = document.getElementById("search-input");
	if (searchInp) {
		searchInp.onkeyup = function () {
			var searchResult = document.getElementById("search-result");
			//Resetting search result
			while (searchResult.firstChild) {
				searchResult.removeChild(searchResult.firstChild);
			}
			var searchResArr = [];
			var searchStr = searchInp.value.toLocaleLowerCase();

			if (searchStr) {
				//Filling Search Result Array according to searchstr
				for (var level1 in professionInfo) {
					level1LowerCase = level1.toLocaleLowerCase();
					// if (level1LowerCase.indexOf(searchStr) !== -1) {
					// 	searchResArr.push(level1);
					// }

					for (var level2 in professionInfo[level1]) {
						level2LowerCase = level2.toLocaleLowerCase();
						if (level2LowerCase.indexOf(searchStr) !== -1) {
							searchResArr.push(level2);
						}
					}

				}
				//Generating Search Result Nodes and appending in search results
				var searchResLen = searchResArr.length;
				for (var i = 0; i < searchResLen; i++) {

					var nodeEle = document.createElement("a");
					var arrTextVal = searchResArr[i];
					var textnode = document.createTextNode(arrTextVal);
					nodeEle.appendChild(textnode);
					nodeEle.href = "/service-providers/"+arrTextVal.replace(/\s+/g, '-').toLowerCase();;
					searchResult.appendChild(nodeEle)

				}
			}
		}
	}

}