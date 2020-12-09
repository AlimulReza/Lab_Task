function getElement(id){
	return document.getElementById(id);
}
function login_validate()
{
	refreshLog();
	var hasError=false;
	var username=getElement("username");
	var err_username=getElement("err_username");
    var password=getElement("password");
    var err_password=getElement("err_password");
	
	
	
	if(username.value==""){
        hasError=true;
        err_username.innerHTML="*Username Required";
        username.focus();
		return !hasError;
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="*Password Required";
        password.focus();
		return !hasError;
    }
	return !hasError;	
	
}
function refreshLog(){
	var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	err_username.innerHTML = "";
    err_password.innerHTML = "";
}
