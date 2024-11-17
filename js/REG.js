function validate()
{
	var x=document.myForm.email.value;
	var atposition=x.indexOf("@");
	var dotposition=x.lastIndexOf(".");
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
	{
		alert("Please enter a valid email address!");
	}
	if(document.myForm.Fname.value == "")
	{
		alert( "Please enter your First name!");
	}
    if(document.myForm.Mname.value == "")
	{
		alert( "Please enter your Middle name!");
	}
    if(document.myForm.Sname.value == "")
	{
		alert( "Please enter your Surname!");
	}
     if(document.myForm.bday.value == "")
	{
		alert( "Please enter your date of birth");
	}
     if(document.myForm.bg.value == "")
	{
		alert( "Please select the blood group!");
	}
	if(document.myForm.gender.value == "")
	{
		alert( "Please select your Gender!" );
	} 
	if(isNaN(document.myForm.contact.value) || document.myForm.contact.value.length != 10)
	{
		alert("Please enter valid Contact Number!");
	}
	
	if(document.myForm.uname.value == "")
	{
		alert("Please enter Username!");
	}
	if(document.myForm.pass.value == "" || document.myForm.pass.value.length != 6)
	{
		alert("Password must be atleast 6 characters long!");
	}
    if(document.myForm.Cpass.value != document.myForm.pass.value )
	{
		alert("RE-ENTER THE CONFIRM PASSWORD! ");
	}
	if(document.myForm.Fname.value != "" && document.myForm.Mname.value != "" && document.myForm.Sname.value != "" && document.myForm.gender.value != "" && document.myForm.email.value != "" && document.myForm.contact.value && document.myForm.contact.value.length == 10 && document.myForm.uname.value != "" && document.myForm.pass.value != "" && document.myForm.pass.value.length >= 6)
	{
		alert("Registration Done Successfully!");
	}
}