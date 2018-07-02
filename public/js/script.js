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
    // $("#your-phone").mask("8(999) 999-9999");
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
$('.contacts-inner-item').click(function(){
    var id_elem =(this.id);
    var text = $('#' + id_elem).text();
    $(".messages-inner-caption").text(text);
});
$("#address").keyup(function(){
    $(".to-metro").css('display', 'block');
});
function House(){
    $("#propertyTypeMenu").html('Дом <span class="caret"></span>');
    $("#propertyType").val('Дом');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#house").css('display', 'block');
}
function Room(){
    $("#propertyTypeMenu").html('Комната <span class="caret"></span>');
    $("#propertyType").val('Комната');

    $("#house").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#room").css('display', 'block');
}
function Apartment(){
    $("#propertyTypeMenu").html('Квартира <span class="caret"></span>');
    $("#propertyType").val('Квартира');

    $("#room").css('display', 'none');
    $("#house").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#apartment").css('display', 'block');
}
function Cottage(){
    $("#propertyTypeMenu").html('Коттедж <span class="caret"></span>');
    $("#propertyType").val('Коттедж');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#house").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#cottage").css('display', 'block');
}
function ReadyBusiness(){
    $("#propertyTypeMenu").html('Готовый бизнес <span class="caret"></span>');
    $("#propertyType").val('Готовый бизнес');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#house").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#ready-business").css('display', 'block');
}
function Office(){
    $("#propertyTypeMenu").html('Офис <span class="caret"></span>');
    $("#propertyType").val('Офис');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#house").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#office").css('display', 'block');
}
function TradeArea(){
    $("#propertyTypeMenu").html('Торговая площадь <span class="caret"></span>');
    $("#propertyType").val('Торговая площадь');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#house").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#trade-area").css('display', 'block');
}
function WarehouseSpace(){
    $("#propertyTypeMenu").html('Складское помещение <span class="caret"></span>');
    $("#propertyType").val('Складское помещение');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#house").css('display', 'none');
    $("#free-destination-room").css('display', 'none');

    $("#warehouse-spacepace").css('display', 'block');
}
function FreeDestinationRoom(){
    $("#propertyTypeMenu").html('Помещение свободного назначения <span class="caret"></span>');
    $("#propertyType").val('Помещение свободного назначения');

    $("#room").css('display', 'none');
    $("#apartment").css('display', 'none');
    $("#cottage").css('display', 'none');
    $("#ready-business").css('display', 'none');
    $("#office").css('display', 'none');
    $("#trade-area").css('display', 'none');
    $("#warehouse-spacepace").css('display', 'none');
    $("#house").css('display', 'none');

    $("#free-destination-room").css('display', 'block');
}
function Studio(){
    $("#numberRooms").val('Студия');
    $("#selectNumberRooms").html('Студия <span class="caret"></span>');
}
function OneRoom(){
    $("#numberRooms").val('1');
    $("#selectNumberRooms").html('1 <span class="caret"></span>');
}
function TwoRooms(){
    $("#numberRooms").val('2');
    $("#selectNumberRooms").html('2 <span class="caret"></span>');
}
function ThreeRooms(){
    $("#numberRooms").val('3');
    $("#selectNumberRooms").html('3 <span class="caret"></span>');
}
function FourRooms(){
    $("#numberRooms").val('4');
    $("#selectNumberRooms").html('4 <span class="caret"></span>');
}
function FiveRooms(){
    $("#numberRooms").val('5');
    $("#selectNumberRooms").html('5 <span class="caret"></span>');
}
function SixRooms(){
    $("#numberRooms").val('6');
    $("#selectNumberRooms").html('6 <span class="caret"></span>');
}
function PassengerСargo(){
    $("#elevator").val('Пассажирский и грузовой');
    $("#selectElevator").html('Пассажирский и грузовой <span class="caret"></span>');
}
function Passenger(){
    $("#elevator").val('Пассажирский');
    $("#selectElevator").html('Пассажирский <span class="caret"></span>');
}
function Сargo(){
    $("#elevator").val('Грузовой');
    $("#selectElevator").html('Грузовой <span class="caret"></span>');
}
function Absent(){
    $("#elevator").val('Отсутствует');
    $("#selectElevator").html('Отсутствует <span class="caret"></span>');
}
    $('input[name=repairs]:checked').on('change', function() {
    alert( this.value);
});
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
$('#taCosmetic').on('click', function(){
    $('#taDesigner').removeClass('btn-primary');
    $('#taDesigner').addClass('btn-default');

    $('#taEuro').removeClass('btn-primary');
    $('#taEuro').addClass('btn-default');

    $('#taWithoutRepair').removeClass('btn-primary');
    $('#taWithoutRepair').addClass('btn-default');

    $('#taCosmetic').removeClass('btn-default');
    $('#taCosmetic').addClass('btn-primary');

    $('#taInputRepairs').val('Косметический');
});
$('#oCosmetic').on('click', function(){
    $('#oDesigner').removeClass('btn-primary');
    $('#oDesigner').addClass('btn-default');

    $('#oEuro').removeClass('btn-primary');
    $('#oEuro').addClass('btn-default');

    $('#oWithoutRepair').removeClass('btn-primary');
    $('#oWithoutRepair').addClass('btn-default');

    $('#oCosmetic').removeClass('btn-default');
    $('#oCosmetic').addClass('btn-primary');

    $('#oInputRepairs').val('Косметический');
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
$('#taDesigner').on('click', function(){
    $('#taEuro').removeClass('btn-primary');
    $('#taEuro').addClass('btn-default');

    $('#taWithoutRepair').removeClass('btn-primary');
    $('#taWithoutRepair').addClass('btn-default');

    $('#taCosmetic').removeClass('btn-primary');
    $('#taCosmetic').addClass('btn-default');

    $('#taDesigner').removeClass('btn-default');
    $('#taDesigner').addClass('btn-primary');

    $('#taInputRepairs').val('Дизайнерский');
});
$('#oDesigner').on('click', function(){
    $('#oEuro').removeClass('btn-primary');
    $('#oEuro').addClass('btn-default');

    $('#oWithoutRepair').removeClass('btn-primary');
    $('#oWithoutRepair').addClass('btn-default');

    $('#oCosmetic').removeClass('btn-primary');
    $('#oCosmetic').addClass('btn-default');

    $('#oDesigner').removeClass('btn-default');
    $('#oDesigner').addClass('btn-primary');

    $('#oInputRepairs').val('Дизайнерский');
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
$('#taEuro').on('click', function(){
    $('#taWithoutRepair').removeClass('btn-primary');
    $('#taWithoutRepair').addClass('btn-default');

    $('#taCosmetic').removeClass('btn-primary');
    $('#taCosmetic').addClass('btn-default');

    $('#taDesigner').removeClass('btn-primary');
    $('#taDesigner').addClass('btn-default');

    $('#taEuro').removeClass('btn-default');
    $('#taEuro').addClass('btn-primary');

    $('#taInputRepairs').val('Евро');
});
$('#oEuro').on('click', function(){
    $('#oWithoutRepair').removeClass('btn-primary');
    $('#oWithoutRepair').addClass('btn-default');

    $('#oCosmetic').removeClass('btn-primary');
    $('#oCosmetic').addClass('btn-default');

    $('#oDesigner').removeClass('btn-primary');
    $('#oDesigner').addClass('btn-default');

    $('#oEuro').removeClass('btn-default');
    $('#oEuro').addClass('btn-primary');

    $('#oInputRepairs').val('Евро');
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
$('#taWithoutRepair').on('click', function(){
    $('#taCosmetic').removeClass('btn-primary');
    $('#taCosmetic').addClass('btn-default');

    $('#taDesigner').removeClass('btn-primary');
    $('#taDesigner').addClass('btn-default');

    $('#taEuro').removeClass('btn-primary');
    $('#taEuro').addClass('btn-default');

    $('#taWithoutRepair').removeClass('btn-default');
    $('#taWithoutRepair').addClass('btn-primary');

    $('#taInputRepairs').val('Без ремонта');
});
$('#oWithoutRepair').on('click', function(){
    $('#oCosmetic').removeClass('btn-primary');
    $('#oCosmetic').addClass('btn-default');

    $('#oDesigner').removeClass('btn-primary');
    $('#oDesigner').addClass('btn-default');

    $('#oEuro').removeClass('btn-primary');
    $('#oEuro').addClass('btn-default');

    $('#oWithoutRepair').removeClass('btn-default');
    $('#oWithoutRepair').addClass('btn-primary');

    $('#oInputRepairs').val('Без ремонта');
});
// ------------------------------------------------------------------------------------------------
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