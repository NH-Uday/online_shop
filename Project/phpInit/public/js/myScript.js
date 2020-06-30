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
