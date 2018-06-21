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
    $("#elevator").val('Нет');
    $("#selectElevator").html('Нет <span class="caret"></span>');
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
    if(selected == 'Топ-3 (Популярные объявления)'){
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



