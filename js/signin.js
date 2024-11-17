function validate()
{
	
	if(document.myForm.uname.value == "")
	{
		alert("Please enter Username!");
	}
	if(document.myForm.pass.value == "" )
	{
		alert("Enter the password");
	}
    
	if(document.myForm.uname.value != "" && document.myForm.pass.value != "")
	{
		alert("Sign in Successfully!");
        window.location="recep.html";
	}
}