function Productsearch()
{
    var obj=document.getElementsByName("search")[0].value;
    if(obj.trim()=="")
    {
    	return false;
    }
    else
    {	
    	return true;
	}
}

function Usersearch()
{
    var obj=document.getElementsByName("Membersearch")[0].value;
    if(obj.trim()=="")
    {
    	return false;
    }
    else
    {	
    	return true;
	}
}




function checkregiusername()
{
	var Name=loginform.regiusername.value;
	var obj=document.getElementById("error_username");
	obj.innerHTML="";
	if(Name==null||Name=="")
	{
    	obj.innerHTML="Username is required";
   }
}

function checkregipassword()
{
	var Password=loginform.regipassword.value;
	var obj=document.getElementById("error_password");
	obj.innerHTML="";
	if(Password==null||Password=="")
	{
    	obj.innerHTML="Password is required";
   }
}




function setFontup()
			{
					var SIZE=parseInt(document.getElementById("content").style.fontSize)
					if(SIZE>=10&&SIZE<=40)
					{
						SIZE=SIZE+1;
						if(SIZE==41) SIZE=SIZE-1;
						SIZE=SIZE+"px";
						document.getElementById("content").style.fontSize=SIZE;	
					}
					
			}

function setFontdown()
			{
					var SIZE=parseInt(document.getElementById("content").style.fontSize)
					if(SIZE>=10&&SIZE<=40)
					{
						SIZE=SIZE-1;
						if(SIZE==9) SIZE=SIZE+1;
						SIZE=SIZE+"px";
						document.getElementById("content").style.fontSize=SIZE;	
					}
					
			}
			
function mover(MB)
			{
				var obj=document.getElementById(MB.id);
				obj.style.color="dimgrey";
			}

function mmove(MB)
			{
				var obj=document.getElementById(MB.id);
				obj.style.color="orangered";
			}


function showHideText(SHOW)
{
	if(document.getElementById(SHOW.id).className=="div_hide")
	{
		document.getElementById(SHOW.id).className="div_show";
		return;
	}
	if(document.getElementById(SHOW.id).className=="div_show")
	{
		document.getElementById(SHOW.id).className="div_hide";
		return;
	}
}




function checkAddproductForm()
{
	var obj=document.getElementsByName("Productname")[0].value;
	if(obj==""||obj==null)
	{
		alert("The product name cannot be empty!");
		return false
	}

	
	var obj=document.getElementsByName("Producttype")[0].value;
	if(obj==""||obj==null)
	{
		alert("Please select product type!");
		return false
	}
	
	var obj=document.getElementsByName("Productprice")[0].value;
	if(obj==""||obj==null)
	{
		alert("The price cannot be empty!");
		return false
	}
	
	var obj=document.getElementsByName("Productimage")[0].value;
	if(obj==""||obj==null)
	{
		alert("The image cannot be empty!");
		return false
	}
}



function changepic(obj,previewid)
{
    var newsrc=getObjectURL(obj.files[0]);
    document.getElementById(previewid).src=newsrc;
}


function checkAddproductForm()
{	
	var obj=document.getElementsByName("Productname")[0].value;
	if(obj==""||obj==null)
	{
		alert("The product name cannot be empty!");
		return false
	}

	
	var obj=document.getElementsByName("Producttype")[0].value;
	if(obj==""||obj==null)
	{
		alert("Please select product type!");
		return false
	}
	
	var obj=document.getElementsByName("Productprice")[0].value;
	if(obj==""||obj==null)
	{
		alert("The price cannot be empty!");
		return false
	}
	
	var obj=document.getElementsByName("Productimage")[0].value;
	if(obj==""||obj==null)
	{
		alert("The image cannot be empty!");
		return false
	}
}



function checkUpdateproductForm()
{	
	var obj=document.getElementsByName("Productname")[0].value;
	if(obj==""||obj==null)
	{
		alert("The product name cannot be empty!");
		return false
	}

	
	var obj=document.getElementsByName("Producttype")[0].value;
	if(obj==""||obj==null)
	{
		alert("Please select product type!");
		return false
	}
	
	var obj=document.getElementsByName("Productprice")[0].value;
	if(obj==""||obj==null)
	{
		alert("The price cannot be empty!");
		return false
	}
}