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
function LoginThroughRegistration(){
    $("#popup-registration").css('visibility', 'hidden');
    $("#popup-login").css('visibility', 'visible');
}
function RegistrationThroughLogin(){
    $("#popup-login").css('visibility', 'hidden');
    $("#popup-registration").css('visibility', 'visible');
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
$(".timeMask").mask("8(999) 999-9999");
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
$('.contacts-inner-item').click(function(){
    var id_elem =(this.id);
    var text = $('#' + id_elem).text();
    $(".messages-inner-caption").text(text);
});
$("#address").keyup(function(){
    $(".to-metro").css('display', 'block');
});
function DropDownListPropertyType(propertyType, show, hide1, hide2, hide3, hide4, hide5, hide6, hide7, hide8,hide9){
    $("#propertyTypeMenu").html(propertyType + ' <span class="caret"></span>');
    $("#propertyType").val(propertyType);

    $("#" + hide1).css('display', 'none');
    $("#" + hide2).css('display', 'none');
    $("#" + hide3).css('display', 'none');
    $("#" + hide4).css('display', 'none');
    $("#" + hide5).css('display', 'none');
    $("#" + hide6).css('display', 'none');
    $("#" + hide7).css('display', 'none');
    $("#" + hide8).css('display', 'none');
    $("#" + hide9).css('display', 'none');

    $("#" + show).css('display', 'block');

    if (propertyType == 'Дом'
        || propertyType == 'Комната'
        || propertyType == 'Квартира'
        || propertyType == 'Коттедж'){
            $('#lease').css('display', 'none');
    } else if(propertyType == 'Готовый бизнес'
        || propertyType == 'Офис'
        || propertyType == 'Торговая площадь'
        || propertyType == 'Складское помещение'
        || propertyType == 'Помещение свободного назначения'){
            $('#lease').css('display', 'block');
    }
}
function Cosmetic(){
    $("#repairs").val('Косметический');
    $("#selectRepairs").html('Косметический <span class="caret"></span>');
}
function Designer(){
    $("#repairs").val('Дизайнерский');
    $("#selectRepairs").html('Дизайнерский <span class="caret"></span>');
}
function Euro(){
    $("#repairs").val('Евро');
    $("#selectRepairs").html('Евро <span class="caret"></span>');
}
function withoutRepair(){
    $("#repairs").val('Без ремонта');
    $("#selectRepairs").html('Без ремонта <span class="caret"></span>');
}
$(":radio[name='optionsRadios']").change(function(){
    var selected = $('input[name=optionsRadios]:checked').val();
    $("#selected-tariff").text(selected);

    if(selected == 'Бесплатное'){
        $("#cost").html('<b>' + $("#freeCost").text() + ' р/' + $("#freeDays").text() + 'день' + '</b>');
        $("#total").html('<b>' + $("#freeCost").text() + '</b>');
    }
    if(selected == 'Топ-3'){
        $("#cost").html('<b>' + $("#topCost").text() + ' р/' + $("#topDays").text() + 'дней' + '</b>');
        $("#total").html('<b>' + $("#topCost").text() + '</b>');
    }
    if(selected == 'Выделенное'){
        $("#cost").html('<b>' + $("#allottedCost").text() + ' р/' + $("#allottedDays").text() + 'дней' + '</b>');
        $("#total").html('<b>' + $("#allottedCost").text() + '</b>');
    }
});
$('#labelPossibleWithChildrenNo').on('click', function(){
    $('#labelPossibleWithChildrenNo').removeClass('btn-default');
    $('#labelPossibleWithChildrenNo').addClass('btn-primary');
    $('#labelPossibleWithChildrenYes').removeClass('btn-primary');
    $('#labelPossibleWithChildrenYes').addClass('btn-default');

    $('#inputPossibleWithChildren').val('Нет');
});
$('#labelPossibleWithChildrenYes').on('click', function(){
    $('#labelPossibleWithChildrenYes').removeClass('btn-default');
    $('#labelPossibleWithChildrenYes').addClass('btn-primary');
    $('#labelPossibleWithChildrenNo').removeClass('btn-primary');
    $('#labelPossibleWithChildrenNo').addClass('btn-default');

    $('#inputPossibleWithChildren').val('Да');
});
$('#labelPossibleWithAnimalsNo').on('click', function(){
    $('#labelPossibleWithAnimalsNo').removeClass('btn-default');
    $('#labelPossibleWithAnimalsNo').addClass('btn-primary');
    $('#labelPossibleWithAnimalsYes').removeClass('btn-primary');
    $('#labelPossibleWithAnimalsYes').addClass('btn-default');

    $('#inputPossibleWithAnimals').val('Нет');
});
$('#labelPossibleWithAnimalsYes').on('click', function(){
    $('#labelPossibleWithAnimalsYes').removeClass('btn-default');
    $('#labelPossibleWithAnimalsYes').addClass('btn-primary');
    $('#labelPossibleWithAnimalsNo').removeClass('btn-primary');
    $('#labelPossibleWithAnimalsNo').addClass('btn-default');

    $('#inputPossibleWithAnimals').val('Да');
});
$('#labelYouCanSmokeNo').on('click', function(){
    $('#labelYouCanSmokeNo').removeClass('btn-default');
    $('#labelYouCanSmokeNo').addClass('btn-primary');
    $('#labelYouCanSmokeYes').removeClass('btn-primary');
    $('#labelYouCanSmokeYes').addClass('btn-default');

    $('#inputYouCanSmoke').val('Нет');
});
$('#labelYouCanSmokeYes').on('click', function(){
    $('#labelYouCanSmokeYes').removeClass('btn-default');
    $('#labelYouCanSmokeYes').addClass('btn-primary');
    $('#labelYouCanSmokeNo').removeClass('btn-primary');
    $('#labelYouCanSmokeNo').addClass('btn-default');

    $('#inputYouCanSmoke').val('Да');
});
// ------------------------------------------------------------------------------------------------
$('#cosmetic').on('click', function(){
    $('#designer').removeClass('btn-primary');
    $('#designer').addClass('btn-default');

    $('#euro').removeClass('btn-primary');
    $('#euro').addClass('btn-default');

    $('#withoutRepair').removeClass('btn-primary');
    $('#withoutRepair').addClass('btn-default');

    $('#cosmetic').removeClass('btn-default');
    $('#cosmetic').addClass('btn-primary');

    $('#inputRepairs').val('Косметический');
});
$('#designer').on('click', function(){
    $('#euro').removeClass('btn-primary');
    $('#euro').addClass('btn-default');

    $('#withoutRepair').removeClass('btn-primary');
    $('#withoutRepair').addClass('btn-default');

    $('#cosmetic').removeClass('btn-primary');
    $('#cosmetic').addClass('btn-default');

    $('#designer').removeClass('btn-default');
    $('#designer').addClass('btn-primary');

    $('#inputRepairs').val('Дизайнерский');
});
$('#euro').on('click', function(){
    $('#withoutRepair').removeClass('btn-primary');
    $('#withoutRepair').addClass('btn-default');

    $('#cosmetic').removeClass('btn-primary');
    $('#cosmetic').addClass('btn-default');

    $('#designer').removeClass('btn-primary');
    $('#designer').addClass('btn-default');

    $('#euro').removeClass('btn-default');
    $('#euro').addClass('btn-primary');

    $('#inputRepairs').val('Евро');
});
$('#withoutRepair').on('click', function(){
    $('#cosmetic').removeClass('btn-primary');
    $('#cosmetic').addClass('btn-default');

    $('#designer').removeClass('btn-primary');
    $('#designer').addClass('btn-default');

    $('#euro').removeClass('btn-primary');
    $('#euro').addClass('btn-default');

    $('#withoutRepair').removeClass('btn-default');
    $('#withoutRepair').addClass('btn-primary');

    $('#inputRepairs').val('Без ремонта');
});
$('#A').on('click', function(){
    $('#B').removeClass('btn-primary');
    $('#B').addClass('btn-default');

    $('#C').removeClass('btn-primary');
    $('#C').addClass('btn-default');

    $('#D').removeClass('btn-primary');
    $('#D').addClass('btn-default');

    $('#doNotSpecify').removeClass('btn-primary');
    $('#doNotSpecify').addClass('btn-default');

    $('#A').removeClass('btn-default');
    $('#A').addClass('btn-primary');

    $('#inputBuildingClass').val('A');
});
$('#B').on('click', function(){
    $('#C').removeClass('btn-primary');
    $('#C').addClass('btn-default');

    $('#D').removeClass('btn-primary');
    $('#D').addClass('btn-default');

    $('#doNotSpecify').removeClass('btn-primary');
    $('#doNotSpecify').addClass('btn-default');

    $('#A').removeClass('btn-primary');
    $('#A').addClass('btn-default');

    $('#B').removeClass('btn-default');
    $('#B').addClass('btn-primary');

    $('#inputBuildingClass').val('B');
});
$('#C').on('click', function(){
    $('#D').removeClass('btn-primary');
    $('#D').addClass('btn-default');

    $('#doNotSpecify').removeClass('btn-primary');
    $('#doNotSpecify').addClass('btn-default');

    $('#A').removeClass('btn-primary');
    $('#A').addClass('btn-default');

    $('#B').removeClass('btn-primary');
    $('#B').addClass('btn-default');

    $('#C').removeClass('btn-default');
    $('#C').addClass('btn-primary');

    $('#inputBuildingClass').val('C');
});
$('#D').on('click', function(){
    $('#doNotSpecify').removeClass('btn-primary');
    $('#doNotSpecify').addClass('btn-default');

    $('#A').removeClass('btn-primary');
    $('#A').addClass('btn-default');

    $('#B').removeClass('btn-primary');
    $('#B').addClass('btn-default');

    $('#C').removeClass('btn-primary');
    $('#C').addClass('btn-default');

    $('#D').removeClass('btn-default');
    $('#D').addClass('btn-primary');

    $('#inputBuildingClass').val('D');
});
$('#doNotSpecify').on('click', function(){
    $('#A').removeClass('btn-primary');
    $('#A').addClass('btn-default');

    $('#B').removeClass('btn-primary');
    $('#B').addClass('btn-default');

    $('#C').removeClass('btn-primary');
    $('#C').addClass('btn-default');

    $('#D').removeClass('btn-primary');
    $('#D').addClass('btn-default');

    $('#doNotSpecify').removeClass('btn-default');
    $('#doNotSpecify').addClass('btn-primary');

    $('#inputBuildingClass').val('Не указывать');
});
// ------------------------------------------------------------------------------------------------
$('#taA').on('click', function(){
    $('#taB').removeClass('btn-primary');
    $('#taB').addClass('btn-default');

    $('#taC').removeClass('btn-primary');
    $('#taC').addClass('btn-default');

    $('#taD').removeClass('btn-primary');
    $('#taD').addClass('btn-default');

    $('#taDoNotSpecify').removeClass('btn-primary');
    $('#taDoNotSpecify').addClass('btn-default');

    $('#taA').removeClass('btn-default');
    $('#taA').addClass('btn-primary');

    $('#inputTABuildingClass').val('A');
});
$('#taB').on('click', function(){
    $('#taC').removeClass('btn-primary');
    $('#taC').addClass('btn-default');

    $('#taD').removeClass('btn-primary');
    $('#taD').addClass('btn-default');

    $('#taDoNotSpecify').removeClass('btn-primary');
    $('#taDoNotSpecify').addClass('btn-default');

    $('#taA').removeClass('btn-primary');
    $('#taA').addClass('btn-default');

    $('#taB').removeClass('btn-default');
    $('#taB').addClass('btn-primary');

    $('#inputTABuildingClass').val('B');
});
$('#taC').on('click', function(){
    $('#taD').removeClass('btn-primary');
    $('#taD').addClass('btn-default');

    $('#taDoNotSpecify').removeClass('btn-primary');
    $('#taDoNotSpecify').addClass('btn-default');

    $('#taA').removeClass('btn-primary');
    $('#taA').addClass('btn-default');

    $('#taB').removeClass('btn-primary');
    $('#taB').addClass('btn-default');

    $('#taC').removeClass('btn-default');
    $('#taC').addClass('btn-primary');

    $('#inputTABuildingClass').val('C');
});
$('#taD').on('click', function(){
    $('#taDoNotSpecify').removeClass('btn-primary');
    $('#taDoNotSpecify').addClass('btn-default');

    $('#taA').removeClass('btn-primary');
    $('#taA').addClass('btn-default');

    $('#taB').removeClass('btn-primary');
    $('#taB').addClass('btn-default');

    $('#taC').removeClass('btn-primary');
    $('#taC').addClass('btn-default');

    $('#taD').removeClass('btn-default');
    $('#taD').addClass('btn-primary');

    $('#inputTABuildingClass').val('D');
});
$('#taDoNotSpecify').on('click', function(){
    $('#taA').removeClass('btn-primary');
    $('#taA').addClass('btn-default');

    $('#taB').removeClass('btn-primary');
    $('#taB').addClass('btn-default');

    $('#taC').removeClass('btn-primary');
    $('#taC').addClass('btn-default');

    $('#taD').removeClass('btn-primary');
    $('#taD').addClass('btn-default');

    $('#taDoNotSpecify').removeClass('btn-default');
    $('#taDoNotSpecify').addClass('btn-primary');

    $('#inputTABuildingClass').val('Не указывать');
});
// ------------------------------------------------------------------------------------------------
$('#labelDisplayCasesYes').on('click', function(){
    $('#labelDisplayCasesNo').removeClass('btn-primary');
    $('#labelDisplayCasesNo').addClass('btn-default');

    $('#labelDisplayCasesYes').removeClass('btn-default');
    $('#labelDisplayCasesYes').addClass('btn-primary');

    $('#inputDisplayCases').val('Да');
});
$('#labelDisplayCasesNo').on('click', function(){
    $('#labelDisplayCasesYes').removeClass('btn-primary');
    $('#labelDisplayCasesYes').addClass('btn-default');

    $('#labelDisplayCasesNo').removeClass('btn-default');
    $('#labelDisplayCasesNo').addClass('btn-primary');

    $('#inputDisplayCases').val('Нет');
});
function DropDownList(name, text, input){
    $('#' + name).html(text + ' <span class="caret"></span>');
    $('#' + input).val(text);
}
$('#fromTheYard').on('click', function(){
    $('#fromTheStreet').removeClass('btn-primary');
    $('#fromTheStreet').addClass('btn-default');

    $('#fromTheYard').removeClass('btn-default');
    $('#fromTheYard').addClass('btn-primary');

    $('#inputEntrance').val('со двора');
});
$('#fromTheStreet').on('click', function(){
    $('#fromTheYard').removeClass('btn-primary');
    $('#fromTheYard').addClass('btn-default');

    $('#fromTheStreet').removeClass('btn-default');
    $('#fromTheStreet').addClass('btn-primary');

    $('#inputEntrance').val('с улицы');
});
$('#noLimits').on('click', function(){
    $('#except').prop('disabled',true);
});
$('#allExcept').on('click', function(){
    $('#except').prop('disabled',false);
});
$('#directLease').on('click', function(){
    $('#sublease').removeClass('btn-primary');
    $('#sublease').addClass('btn-default');

    $('#directLease').removeClass('btn-default');
    $('#directLease').addClass('btn-primary');

    $('#inputOfLease').val('Прямая аренда');
});
$('#sublease').on('click', function(){
    $('#directLease').removeClass('btn-primary');
    $('#directLease').addClass('btn-default');

    $('#sublease').removeClass('btn-default');
    $('#sublease').addClass('btn-primary');

    $('#inputOfLease').val('Субаренда');
});
$('#rentalHolidaysYes').on('click', function(){
    $('#rentalHolidaysNo').removeClass('btn-primary');
    $('#rentalHolidaysNo').addClass('btn-default');

    $('#rentalHolidaysYes').removeClass('btn-default');
    $('#rentalHolidaysYes').addClass('btn-primary');

    $('#inputRentalHolidays').val('Да');
});
$('#rentalHolidaysNo').on('click', function(){
    $('#rentalHolidaysYes').removeClass('btn-primary');
    $('#rentalHolidaysYes').addClass('btn-default');

    $('#rentalHolidaysNo').removeClass('btn-default');
    $('#rentalHolidaysNo').addClass('btn-primary');

    $('#inputRentalHolidays').val('Нет');
});
$('#furnitureYes').on('click', function(){
    $('#furnitureNo').removeClass('btn-primary');
    $('#furnitureNo').addClass('btn-default');

    $('#furnitureYes').removeClass('btn-default');
    $('#furnitureYes').addClass('btn-primary');

    $('#inputFurniture').val('Да');
});
$('#furnitureNo').on('click', function(){
    $('#furnitureYes').removeClass('btn-primary');
    $('#furnitureYes').addClass('btn-default');

    $('#furnitureNo').removeClass('btn-default');
    $('#furnitureNo').addClass('btn-primary');

    $('#inputFurniture').val('Нет');
});
// ------------------------------------------------------------------------------------------------
$('#openTypePlanning').on('click', function(){
    $('#closedTypePlanning').removeClass('btn-primary');
    $('#closedTypePlanning').addClass('btn-default');

    $('#mixedTypePlanning').removeClass('btn-primary');
    $('#mixedTypePlanning').addClass('btn-default');

    $('#openTypePlanning').removeClass('btn-default');
    $('#openTypePlanning').addClass('btn-primary');

    $('#inputPlanning').val('Открытого типа');
});
$('#closedTypePlanning').on('click', function(){
    $('#openTypePlanning').removeClass('btn-primary');
    $('#openTypePlanning').addClass('btn-default');

    $('#mixedTypePlanning').removeClass('btn-primary');
    $('#mixedTypePlanning').addClass('btn-default');

    $('#closedTypePlanning').removeClass('btn-default');
    $('#closedTypePlanning').addClass('btn-primary');

    $('#inputPlanning').val('Закрытого типа');
});
$('#mixedTypePlanning').on('click', function(){
    $('#openTypePlanning').removeClass('btn-primary');
    $('#openTypePlanning').addClass('btn-default');

    $('#closedTypePlanning').removeClass('btn-primary');
    $('#closedTypePlanning').addClass('btn-default');

    $('#mixedTypePlanning').removeClass('btn-default');
    $('#mixedTypePlanning').addClass('btn-primary');

    $('#inputPlanning').val('Смешанного типа');
});
// ------------------------------------------------------------------------------------------------
$('#internetYes').on('click', function(){
    $('#internetNo').removeClass('btn-primary');
    $('#internetNo').addClass('btn-default');

    $('#internetYes').removeClass('btn-default');
    $('#internetYes').addClass('btn-primary');

    $('#inputInternet').val('Да');
});
$('#internetNo').on('click', function(){
    $('#internetYes').removeClass('btn-primary');
    $('#internetYes').addClass('btn-default');

    $('#internetNo').removeClass('btn-default');
    $('#internetNo').addClass('btn-primary');

    $('#inputInternet').val('Нет');
});
// ------------------------------------------------------------------------------------------------
$('#oAccessFree').on('click', function(){
    $('#oAccesSystem').removeClass('btn-primary');
    $('#oAccesSystem').addClass('btn-default');

    $('#oAccessFree').removeClass('btn-default');
    $('#oAccessFree').addClass('btn-primary');

    $('#oInputAccess').val('Свободный');
});
$('#oAccesSystem').on('click', function(){
    $('#oAccessFree').removeClass('btn-primary');
    $('#oAccessFree').addClass('btn-default');

    $('#oAccesSystem').removeClass('btn-default');
    $('#oAccesSystem').addClass('btn-primary');

    $('#oInputAccess').val('Пропускная система');
});
// ------------------------------------------------------------------------------------------------
$('#oUnderground').on('click', function(){
    $('#oMultilevel').removeClass('btn-primary');
    $('#oMultilevel').addClass('btn-default');

    $('#oGround').removeClass('btn-primary');
    $('#oGround').addClass('btn-default');

    $('#oUnderground').removeClass('btn-default');
    $('#oUnderground').addClass('btn-primary');

    $('#oParkingPlace').val('Подземная');
});
$('#oMultilevel').on('click', function(){
    $('#oUnderground').removeClass('btn-primary');
    $('#oUnderground').addClass('btn-default');

    $('#oGround').removeClass('btn-primary');
    $('#oGround').addClass('btn-default');

    $('#oMultilevel').removeClass('btn-default');
    $('#oMultilevel').addClass('btn-primary');

    $('#oParkingPlace').val('Многоуровневая');
});
$('#oGround').on('click', function(){
    $('#oMultilevel').removeClass('btn-primary');
    $('#oMultilevel').addClass('btn-default');

    $('#oUnderground').removeClass('btn-primary');
    $('#oUnderground').addClass('btn-default');

    $('#oGround').removeClass('btn-default');
    $('#oGround').addClass('btn-primary');

    $('#oParkingPlace').val('Наземная');
});
$('#onTheStreet').on('click', function(){
    $('#inHome').removeClass('btn-primary');
    $('#inHome').addClass('btn-default');

    $('#onTheStreet').removeClass('btn-default');
    $('#onTheStreet').addClass('btn-primary');

    $('#outputBathroom').val('На улице');
});
$('#inHome').on('click', function(){
    $('#onTheStreet').removeClass('btn-primary');
    $('#onTheStreet').addClass('btn-default');

    $('#inHome').removeClass('btn-default');
    $('#inHome').addClass('btn-primary');

    $('#outputBathroom').val('В доме');
});
$('.carousel').carousel({
    interval: 5000
});
$('#residentialLocation').on('click', function(){
    $('#countrysideLocation').removeClass('btn-primary');
    $('#countrysideLocation').addClass('btn-default');

    $('#commercialLocation').removeClass('btn-primary');
    $('#commercialLocation').addClass('btn-default');

    $('#residentialLocation').removeClass('btn-default');
    $('#residentialLocation').addClass('btn-primary');

    $('#outputLocation').val('Жилая');
});
$('#countrysideLocation').on('click', function(){
    $('#residentialLocation').removeClass('btn-primary');
    $('#residentialLocation').addClass('btn-default');

    $('#commercialLocation').removeClass('btn-primary');
    $('#commercialLocation').addClass('btn-default');

    $('#countrysideLocation').removeClass('btn-default');
    $('#countrysideLocation').addClass('btn-primary');

    $('#outputLocation').val('Загородная');
});
$('#commercialLocation').on('click', function(){
    $('#residentialLocation').removeClass('btn-primary');
    $('#residentialLocation').addClass('btn-default');

    $('#countrysideLocation').removeClass('btn-primary');
    $('#countrysideLocation').addClass('btn-default');

    $('#commercialLocation').removeClass('btn-default');
    $('#commercialLocation').addClass('btn-primary');

    $('#outputLocation').val('Коммерческая');
});
function ShowHidePassword(){
    var input_p = $('#input_p');
    var span = $('#span');
    input_p.attr('type', input_p.attr('type') === 'password' ? 'text' : 'password');
    if(span.hasClass('glyphicon glyphicon-eye-close')){
        span.removeClass('glyphicon glyphicon-eye-close');
        span.addClass('glyphicon glyphicon-eye-open');
    }else if(span.hasClass('glyphicon glyphicon-eye-open')){
        span.removeClass('glyphicon glyphicon-eye-open');
        span.addClass('glyphicon glyphicon-eye-close');
    }
}
$("#allotted").mouseover(function () {
    $("#DescriptionOfTheWayOfAccommodation").text('Выделяется среди всех обычных объявлений');
});
$("#elevation").mouseover(function () {
    $("#DescriptionOfTheWayOfAccommodation").text('Раз в сутки Объявление поднимается на верхнюю строчку поиска');
});
$("#top").mouseover(function () {
    $("#DescriptionOfTheWayOfAccommodation").text('Входят в топ 3 популярный объявлений на главной странице');
});