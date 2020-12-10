function getElement(id){
	return document.getElementById(id);
}
function login_validation()
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
function student_validation()
{
	refreshReg();
	var hasError=false;
	var name=getElement("name");
	var err_name=getElement("err_name");
	var dob=getElement("dob");
	var err_dob=getElement("err_dob");
	var department=getElement("department_id");
	var err_department=getElement("err_department");
    var credit=getElement("credit");
    var err_credit=getElement("err_credit");
    var cgpa=getElement("cgpa");
	var err_cgpa=getElement("err_cgpa");
		
	
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
	if(dob.value==""){
        hasError=true;
        err_dob.innerHTML="*DOB Required";
        dob.focus();
		return !hasError;
    }
	if(department.value=="Choose"){
        hasError=true;
        err_department.innerHTML="*Select Department";
        department.focus();
		return !hasError;
    }
	if(credit.value==""){
        hasError=true;
        err_credit.innerHTML="* Credit Required";
        credit.focus();
		return !hasError;
    }
    if(cgpa.value==""){
        hasError=true;
        err_cgpa.innerHTML="*CGPA Required";
        cgpa.focus();
		return !hasError;
    }
    else if(cgpa.value>4 && cgpa.value<0){
        hasError=true;
        err_cgpa.innerHTML="*CGPA Range 0 - 4";
        cgpa.focus();
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
function refreshReg(){
	var err_name = getElement("err_name");
	var err_dob=getElement("err_dob");
	var err_department=getElement("err_department");
    var err_credit=getElement("err_credit");
	var err_cgpa=getElement("err_cgpa");
	
	err_name.innerHTML = "";
	err_dob.innerHTML = "";
	err_department.innerHTML = "";
    err_credit.innerHTML = "";
	err_cgpa.innerHTML = "";
}
