$(document).ready(function(){
	$('#sort-by').on('change', function(e){
		var optionSelected = $ ("option:selected", this);
		var valueSelected = this.value;
		
		window.location.replace(valueSelected);
	});
	$('#btnlink1').on('change', function(e){
		var optionSelected = $ ("option:selected", this);
		var data = this.value;
		var element = "btnlink1";
		alert(data);
		$.ajax({
		   type:'GET',
		   url:'/SiteChange/'+element+'/'+data,
		   success:function(data) {
			   alert("Successfully Button Link Changed");
		   }
		});
	});
	$(function () {
		const today = moment();
		var hrs = today.format("H");
		if (hrs < 12)
			$('#tz').html('Good Morning');
		else if (hrs >= 12 && hrs <= 17)
			$('#tz').html('Good Afternoon');
		else if (hrs >= 17 && hrs <= 20)
			$('#tz').html('Good Evening');
		else if (hrs >= 20 && hrs <= 24)
			$('#tz').html('Good Night');
	})
});


function unameChk(val)
{
	var uname = reg.username.value;
	var val = val;
	
	if(uname.length <= 5){
		$("#unameLbl").html("Usesrname must be of 5 letters long.");
	}else{
		$.ajax({
		   type:'POST',
		   url:'/unameChk',
		   data:{
			   _token : val,
			   keyword : uname
		   },
		   success:function(data) {
			   $("#unameLbl").html(data);
		   }
		});
	}
}
function emailChk(val)
{
	var mail = reg.email.value;
	var val = val;
	
	if(mail.length <= 5){
		$("#emailLbl").html("Enter an valid email Address.");
	}else{
		$.ajax({
		   type:'POST',
		   url:'/emailChk',
		   data:{
			   _token : val,
			   keyword : mail
		   },
		   success:function(data) {
			   $("#emailLbl").html(data);
		   }
		});
	}
}
function contactChk(val)
{
	var phn = reg.contact.value;
	var val = val;
	
	if(phn.length <= 10){
		$("#contactLbl").html("Enter an valid Phone Number.");
	}else{
		$.ajax({
		   type:'POST',
		   url:'/contactCheck',
		   data:{
			   _token : val,
			   keyword : phn
		   },
		   success:function(data) {
			   $("#contactLbl").html(data);
		   }
		});
	}
}

function passChk(val)
{
	var pass = reg.pass1.value;
	var val = val;
	
	if(pass.length < 5){
		$("#pass1Lbl").html("Password must be of 5 Characters.");
	}
}


function AddCart(val, pid)
{
	var pid = pid;
	var val = val;
	
	$.ajax({
	   type:'POST',
	   url:'/AddCart',
	   data:{
		   _token : val,
		   pid : pid
	   },
	   success:function(data) {
		   $("#sp-"+pid).html(data);
	   }
	});
}

function AddWish(val, pid)
{
	var pid = pid;
	var val = val;
	
	$.ajax({
	   type:'POST',
	   url:'/AddWish',
	   data:{
		   _token : val,
		   pid : pid
	   },
	   success:function(data) {
		   $("#spp-"+pid).html(data);
	   }
	});
}

function DelCart(pid)
{
	var pid = pid;
	
	$.ajax({
	   type:'GET',
	   url:'/DelCart/'+pid,
	   success:function(data) {
		   $("#CartBody").html(data);
	   }
	});
}

function DelWish(pid)
{
	var pid = pid;
	
	$.ajax({
	   type:'GET',
	   url:'/DelWish/'+pid,
	   success:function(data) {
		   $("#wishBody").html(data);
	   }
	});
}

function SiteChange(element)
{
	var element = element;
	var data = document.getElementById(element).value;
	//alert(data);
	$.ajax({
	   type:'GET',
	   url:'/SiteChange/'+element+'/'+data,
	   success:function(data) {
		   alert("Successfully Information Updated");
	   }
	});
}

function SiteChanger(val, element)
{
	var element = element;
	var data = document.getElementById(element).value;
	var val = val;
	
	$.ajax({
	   type:'POST',
	   url:'/SiteChanger',
	   data:{
		   _token : val,
		   element : element,
		   data : data
	   },
	   success:function(data) {
		   alert("Successfully Information Updated");
	   }
	});
}

function qtyChange(action,pid,price)
{
	var action = action;
	var pid = pid;
	var price = price;
	var qty = document.getElementById("qtytxt-"+pid).value;
	var tot = document.getElementById("subtottxt").value;
	
	if(action=='add'){
		var newqty = parseInt(qty) + 1;
		var newprice = parseInt(price) * newqty;
		var newtot = parseInt(tot) + parseInt(price);
	}else{
		if(qty!=0){
			var newqty = parseInt(qty) - 1;
			var newprice = parseInt(price) * newqty;
			var newtot = parseInt(tot) - parseInt(price);
		}else{
			var newqty = 0;
			var newprice = 0;
			var newtot = tot;
		}
	}
	
	$.ajax({
	   type:'GET',
	   url:'/QtyChange/'+pid+'/'+newqty,
	   success:function(data) {
		   $("#qtytxt-"+pid).val(newqty);
		   $("#subtottxt").val(newtot);
		   $("#tottxt").val(newtot);
		   $("#val-"+pid).html(newprice);
		   $("#subtot").html(newtot);
		   $("#tot").html(newtot);
	   }
	});
}

function searchBy()
{
	var txt = document.getElementById("srcTxt").value;
	window.location.replace('/Shop/searchBy/'+txt);
}