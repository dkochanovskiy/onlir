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
$('#purse').click(function(){
    $("#home").removeClass('active');
    // $("#amend-contract").removeClass('active');
    // $("#ad-delivery").removeClass('active');
    // $("#settings").removeClass('active');

    $("#purse").addClass('active');
});
$("#checkbox-favorites").change(function(){
    if ($('#checkbox-favorites').prop('checked')==true){
        $("input[name='checkbox-favorites']").prop('checked',true);
        $("input[name='checkbox-favorites']").prop('checked',true);
    } else {
        $("input[name='checkbox-favorites']").prop('checked',false);
        $("input[name='checkbox-favorites']").prop('checked',false);
    }
});
$("#checkbox-active").change(function(){
    if ($('#checkbox-active').prop('checked')==true){
        $("input[name='checkbox-active']").prop('checked',true);
        $("input[name='checkbox-active']").prop('checked',true);
    } else {
        $("input[name='checkbox-active']").prop('checked',false);
        $("input[name='checkbox-active']").prop('checked',false);
    }
});
$("#checkbox-completed").change(function(){
    if ($('#checkbox-completed').prop('checked')==true){
        $("input[name='checkbox-completed']").prop('checked',true);
        $("input[name='checkbox-completed']").prop('checked',true);
    } else {
        $("input[name='checkbox-completed']").prop('checked',false);
        $("input[name='checkbox-completed']").prop('checked',false);
    }
});
function ShowActive(){
    $("#completed-title").removeClass('active');
    $("#active-title").addClass('active');

    $("#ads-completed").css('display', 'none');
    $("#ads-active").css('display', 'block');
}
function ShowCompleted(){
    $("#active-title").removeClass('active');
    $("#completed-title").addClass('active');

    $("#ads-active").css('display', 'none');
    $("#ads-completed").css('display', 'block');
}
