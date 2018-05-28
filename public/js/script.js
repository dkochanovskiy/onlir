function PopupLoginShow(){
    $("#popup-login").css('visibility', 'visible');
}
function PopupLoginHide(){
    $("#popup-login").css('visibility', 'hidden');
}
function PopupRegistrationShow(){
    $("#popup-registration").css('visibility', 'visible');
}
function PopupRegistrationHide(){
    $("#popup-registration").css('visibility', 'hidden');
}
function EditPhoneForm(){
    $("#show-phone").css('visibility', 'hidden');
    $("#edit-phone").css('visibility', 'visible');
}
function ShowPhoneForm(){
    $("#edit-phone").css('visibility', 'hidden');
    $("#show-phone").css('visibility', 'visible');
}
$(document).mouseup(function (e) {
    var container = $(".panel-body");
    if (container.has(e.target).length === 0){
        PopupLoginHide();
        PopupRegistrationHide();
    }
});
$(function(){
    $("#phone").mask("8(999) 999-9999");
});