function getElement(id){
	return document.getElementById(id);
}
function validate()
{
	refreshReg();
	var hasError=false;
	var name=getElement("name");
	var err_name=getElement("err_name");
	var username=getElement("username");
	var err_username=getElement("err_username");
    var password=getElement("password");
    var err_password=getElement("err_password");
    var email=getElement("email");
	var err_email=getElement("err_email");
    var phone=getElement("phone");
    var err_phone=getElement("err_phone");
	
	
	
	if(name.value ==""){
        hasError=true;
        err_name.innerHTML="*Name Required";
		name.focus();
		return !hasError;
    }
    else if(name.value.search("1")!=-1 || name.value.search("2")!=-1 || name.value.search("3")!=-1 || name.value.search("4")!=-1 || name.value.search("5")!=-1 || name.value.search("6")!=-1 || name.value.search("7")!=-1 || name.value.search("8")!=-1 || name.value.search("9")!=-1 || name.value.search("0")!=-1){
        hasError=true;
        err_name.innerHTML="*Name cannot contain numbers";
		name.focus();
		return !hasError;
    }
	if(username.value==""){
        hasError=true;
        err_username.innerHTML="*Username Required";
        username.focus();
		return !hasError;
    }
    else if(username.value.search(" ")!=-1 || username.value.length<6){
        hasError=true;
        err_username.innerHTML="*Username cannot contain spaces and must be 6 characters";
        username.focus();
		return !hasError;
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="*Password Required";
        password.focus();
		return !hasError;
    }
    else if(password.value.length<8){
        hasError=true;
        err_password.innerHTML="*Password must be 8 characters";
        password.focus();
		return !hasError;
    }
	if(email.value==""){
        hasError=true;
        err_email.innerHTML="*Email Required";
        email.focus();
		return !hasError;
    }
    else if(email.value.search("@gmail.com")==-1 && email.value.search("@yahoo.com")==-1){
        hasError=true;
        err_email.innerHTML="*Invalid Email";
        email.focus();
		return !hasError;
    }
    if(phone.value==""){
        hasError=true;
        err_phone.innerHTML="*Phone Required";
        phone.focus();
		return !hasError;
    }
	else if(isNaN(phone.value)) {
        
		hasError=true;
        err_phone.innerHTML="*only digit no alphabet";
        phone.focus();
		return !hasError;
    }
    else if(phone.value.length!=11) {
        
		hasError=true;
        err_phone.innerHTML="*Phone must be 11 digit";
        phone.focus();
		return !hasError;
    }
	return !hasError;	
	
}
function refreshReg(){
	var err_name = getElement("err_name");
	var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	var err_email = getElement("err_email");
	var err_phone = getElement("err_phone");
	err_name.innerHTML = "";
	err_username.innerHTML = "";
    err_password.innerHTML = "";
	err_email.innerHTML = "";
    err_phone.innerHTML = "";
}
