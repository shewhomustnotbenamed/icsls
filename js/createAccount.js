$(document).ready(function(){

/*
* Hide unnecessary inputs upon onload
*/
window.onload = function(){
	createForm.password.onblur = validatePassword;
	createForm.repass.onblur = validateRePass;
					
	$("#student_number").hide();
	$(".collegeSet").hide();
	$(".degreeSet").hide();
	$("#enum").hide();
	$("#employee_number").hide();
}
	
/*
* For validation of Password
*/		
function validatePassword(){
	msg = "";
	str = createForm.password.value;

	$('#helppass').css('color','#FF6600');
				
	if(str == "") msg+="  Please input a valid password ";
	if(str.match(/^[a-z]{1,5}$/)) msg="  Strength: Weak";
	else if(str.match(/^[0-9]{1,5}$/)) msg="  Strength: Weak";
	else if(str.match(/^[a-z0-9]+$/)){
		msg="  Strength: Medium";
		$('#helppass').css('color','#7BB31A');		
	}
	else if(str.match(/^[a-zA-Z0-9]+$/)){
		msg="  Strength: Strong";
		$('#helppass').css('color','green');
	}
				
	if(msg == "") msg="";
		$("#helppass")[0].innerHTML=msg;	
				
}

/*
* For re-validation of Password
*/			
function validateRePass(){
	msg = "";
	str = createForm.repass.value;

	$('#helprepass').css('color','#FF6600');
				
	if(str != ""){
		if(str != createForm.password.value) msg+="  Password does not match. ";
		else{
			msg="  Passwords match";
			$('#helprepass').css('color','green');
		}
	}
				
	if(msg == "") msg="";
		$("#helprepass")[0].innerHTML=msg;
				if(msg == "") return true;	

				
}	

/*
* Show necessary inputs based from user type
*/
$(".typeDropdown").change(function() {
	var type=$(this).val();
	if(type == 'S'){
		$("#student_number").show();
		$(".degreeSet").show();
		$(".collegeSet").show();
		$("#enum").hide();
		$("#employee_number").hide();
	} else if(type == 'F'){
		$("#student_number").hide();
		$(".degreeSet").hide();
		$(".collegeSet").hide();
		$("#enum").show();
		$("#employee_number").show();
	} else {
		$("#student_number").hide();
		$(".degreeSet").hide();
		$(".collegeSet").hide();
		$("#enum").hide();
		$("#employee_number").hide();
	}
});


/*
* Show necessary inputs on degree program based from college
*/
$(".collegeDropdown").change(function() {
	var col=$(this).val();
											 
	function fillDegreeDropdown(colDegOption) {
		$.each(colDegOption, function(val, text) {
		   $('.degreeDropdown').append($('<option></option>').val(val).html(text));
		});
	}
														
	function clearDegreeDropdown() {
		$('.degreeDropdown option:gt(0)').remove();
	}

	if(col == 'CA') {
		clearDegreeDropdown();
															
		var CaOption={
			BSA:'BS Agriculture',
			BSABT: 'BS Agricultural Biotechnology',
			BSFT: 'BS Food Technology'
		};
		fillDegreeDropdown(CaOption);
	} else if(col == 'CAS'){
		clearDegreeDropdown();
															
		var CasOption={
			BACA:'BA Communication Arts',
			BAS: 'BA Sociology',
			BAP: 'BA Philosophy',
			BSAM: 'BS Applied Mathematics',
			BSAP: 'BS Applied Physics',
			BSB: 'BS Biology',
			BSC: 'BS Chemistry',
			BSCS: 'BS Computer Science',
			BSM: 'BS Mathematics',
			BSMST: 'BS Mathematics and Science Teaching',
			BSS: 'BS Statistics'
		};
		fillDegreeDropdown(CasOption);
	} else if(col == 'CA-CAS'){
		clearDegreeDropdown();
														
		var CaCasOption={
			BSAC: 'BS Agricultural Chemistry'
		};
		fillDegreeDropdown(CaCasOption);
	} else if(col == 'CDC'){
		clearDegreeDropdown();
															
		var CdcOption={
			BSDC: 'BS Development Communication'
		};
		fillDegreeDropdown(CdcOption);
	} else if(col == 'CEAT'){
		clearDegreeDropdown();
															
		var CeatOption={
			BSAeng: 'BS Agricultural and Biosystems Engineering',
			BSChE: 'BS Chemical Engineering',
			BSCE: 'BS Civil Engineering',
			BSEE: 'BS Electrical Engineering',
			BSIE: 'BS Industrial Engineering'
		};
		fillDegreeDropdown(CeatOption);
	} else if(col == 'CEM'){
		clearDegreeDropdown();
															
		var CemOption={
			BSAE: 'BS Agricultural Economics',
			BSABM: 'BS Agribusiness Management',
			BSE: 'BS Economics'
		};
		fillDegreeDropdown(CemOption);
	} else if(col == 'CFNR'){
		clearDegreeDropdown();
															
		var CfnrOption={
			BSF: 'BS Forestry'
		};
		fillDegreeDropdown(CfnrOption);
	} else if(col == 'CHE'){
		clearDegreeDropdown();
															
		var CheOption={
			BSHE: 'BS Human Ecology',
			BSN: 'BS Nutrition'
		};
		fillDegreeDropdown(CheOption);
	} else if(col == 'CVM'){
		clearDegreeDropdown();
														
		var CvmOption={
			DVM: 'Doctor of Veterenary Medicine'
		};
		fillDegreeDropdown(CvmOption);
	} else if(col == 'GS'){
		clearDegreeDropdown();
															
		var GsOption={
			MSAC: 'MS Agricultural Chemistry',
			MSAE: 'MS Agricultural Economics',
			MSAEd: 'MS Agricultural Education',
			MSAg: 'MS Agrometeorology',
			MSAgr: 'MS Agronomy',
			MSAS: 'MS Animal Science',
			MSAN: 'MS Applied Nutrition',
			MSBC: 'MS Biochemistry',
			MSB: 'MS Botany',
			MSCE: 'MS Chemical Engineering',
			MSC: 'MS Chemistry',
			MSCS: 'MS Computer Science',
			MSCo: 'MS Community',
			MSD: 'MS Development',
			MSDC: 'MS Development Communication',
			MSDMG: 'MS Development Management and Governance',
			MSE: 'MS Economics',
			MSEn: 'MS Entomology',
			MSES: 'MS Environmental Science',
			MSExE: 'MS Extension Education',
			MSFRM: 'MS Family Resource Management',
			MSFS: 'MS Food Science',
			MSFBS: 'MS Forestry: Forest Biological Sciences',
			MSFRM: 'MS Forestry: Forest Resources Management',
			MSFSFI: 'MS Forestry: Silviculture and Forest Influences',
			MSFSF: 'MS Forestry: Social Forestry',
			MSGH: 'MS Genetics Horticulture',
			MSM: 'MS Mathematics',
			MSMB: 'MS Microbiology',
			MSMBB: 'MS Molecular Biology and Biotechnology',
			MSNRC: 'MS Natural Resources Conservation',
			MSPB: 'MS Plant Breeding',
			MSPGRC: 'MS Plant Genetics Resources Conservation and Management',
			MSPP: 'MS Plant Pathology',
			MSRS: 'MS Rural Sociology',
			MSSS: 'MS Social Science',
			MSS: 'MS Statistics',
			MSVM: 'MS Veterenary Medicine',
			MSWS: 'MS Wildlife Studies',
			MSZ: 'MS Zoology',
			MF: 'Master of Forestry',
			MIT: 'Master of Information Technology',
			MACA: 'MA Communication Arts',
			MAS: 'MA Sociology',
			MAg: 'Master of Agriculture',
			MMAbm: 'Master of Management - Agribusiness Management and Entrepreneurship',
			MMBM: 'Master of Management - Business Management',
			MMCM: 'Master of Management - Cooperative Management',
			PAC: 'PhD Agricultural Chemistry',
			PAE: 'PhD Agricultural Economics',
			PAEd: 'PhD Agricultural Education',
			PAEng: 'PhD Agricultural Engineering',
			PAgr: 'PhD Agronomy',
			PAS: 'PhD Animal Science',
			PBC: 'PhD Biochemistry',
			PSB: 'PhD Botany',
			PCS: 'PhD Computer Science',
			PCD: 'PhD Community Development',
			PDC: 'PhD Development Communication',
			PDS: 'PhD Development Studies',
			PEn: 'PhD Entomology',
			PES: 'PhD Environmental Science',
			PExE: 'PhD Extension Education',
			PFS: 'PhD Food Science',
			PFBS: 'PhD Forestry: Forest Biological Sciences',
			PFRM: 'PhD Forestry: Forest Resources Management',
			PFSFI: 'PhD Forestry: Silviculture and Forest Influences',
			PSFWT: 'PhD Forestry: Wood Science and Technology',
			PGH: 'PhD Genetics Horticulture',
			PHN: 'PhD Human Nutrition',
			PMB: 'PhD Microbiology',
			PMBB: 'PhD Molecular Biology and Biotechnology',
			PPB: 'PhD Plant Breeding',
			PPP: 'PhD Plant Pathology',
			PSS: 'PhD Social Science',
			PSS: 'PhD Statistics',
		};
		fillDegreeDropdown(GsOption);
	}
});


});

