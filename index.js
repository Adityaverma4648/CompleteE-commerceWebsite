var loginOnHoverdiv = document.getElementById('loginOnHover');
var btn_login = document.getElementById('login-btn'); 
loginOnHoverdiv.style.display = "none";

function loginOnHover(){
    loginOnHoverdiv.style.display = "block";
}
function OnMouseOut(){
    loginOnHoverdiv.style.display = "none";
}