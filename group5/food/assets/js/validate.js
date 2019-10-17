$(document).ready(function(){ //after loading full document function will run
var fname=$('#fname');//firstname id
var txtfname=$('#txtFname');//span id

var lname=$('#lname');
var txtlname=$('#txtLname');

var nic=$('#nic');
var txtnic=$('#txtNic');

var email=$('#email');
var txtemail=$('#txtEmail');

var username=$('#username');
var txtuname=$('#txtUname');

var password=$('#password');
var txtPassword=$('#txtPassword');

var retypepassword=$('#retypepassword');
var txtRetypepassword=$('#txtRetypepassword');

function validatefname(){
	if (fname.val().length<3){
		fname.removeClass('valid1');
		fname.addClass('error1');
		txtfname.removeClass('valid2');
		txtfname.addClass('error2');
		txtfname.text('First Name must be three or more characters');
	}
	else{
		fname.removeClass('error1');
		fname.addClass('valid1');
		txtfname.removeClass('error2');
		txtfname.addClass('valid2');
		txtfname.text('Okay');
	}
	
}
fname.keyup(validatefname);

function validatepassword(){
	if(password.val().length<8){
		password.removeClass('valid1');
		password.addClass('error1');
		txtPassword.removeClass('valid2');
		txtPassword.addClass('error2');
		txtPassword.text('Invaild password')

	}
	else{
		password.removeClass('error1');
		password.addClass('valid1');
		txtPassword.removeClass('error2');
		txtPassword.addClass('valid2');
		txtPassword.text('Valid password');
	}
}
password.keyup(validatepassword);

function matchpassword(){
	if (password.val()!=retypepassword.val() ){
		retypepassword.removeClass('valid1');
		retypepassword.addClass('error1');
		txtRetypepassword.removeClass('valid2');
		txtRetypepassword.addClass('error2');
		txtRetypepassword.text('password mismatched');
	}
	else{
		retypepassword.removeClass('error1');
		retypepassword.addClass('valid1');
		txtRetypepassword.removeClass('error2');
		txtRetypepassword.addClass('valid2');
		txtRetypepassword.text('password matched');
	}
}
retypepassword.keyup(matchpassword);
});