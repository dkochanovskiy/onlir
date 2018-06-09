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
}
function Room(){
    $("#propertyTypeMenu").html('Комната <span class="caret"></span>');
    $("#propertyType").val('Комната');
}
function Apartment(){
    $("#propertyTypeMenu").html('Квартира <span class="caret"></span>');
    $("#propertyType").val('Квартира');
}
function Cottage(){
    $("#propertyTypeMenu").html('Коттедж <span class="caret"></span>');
    $("#propertyType").val('Коттедж');
}
function ReadyBusiness(){
    $("#propertyTypeMenu").html('Готовый бизнес <span class="caret"></span>');
    $("#propertyType").val('Готовый бизнес');
}
function Office(){
    $("#propertyTypeMenu").html('Офис <span class="caret"></span>');
    $("#propertyType").val('Офис');
}
function TradeArea(){
    $("#propertyTypeMenu").html('Торговая площадь <span class="caret"></span>');
    $("#propertyType").val('Торговая площадь');
}
function WarehouseSpace(){
    $("#propertyTypeMenu").html('Складское помещение <span class="caret"></span>');
    $("#propertyType").val('Складское помещение');
}
function FreeDestinationRoom(){
    $("#propertyTypeMenu").html('Помещение свободного назначения <span class="caret"></span>');
    $("#propertyType").val('Помещение свободного назначения');
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
$('input:radio[name=repairs]').on('change', function() {
    alert( this.value);
});
// function Cosmetic(){
//     $("#repairs").val('Косметический');
// }
// function Designer(){
//     $("#repairs").val('Дизайнерский');
// }
// function Euro(){
//     $("#repairs").val('Евро');
// }
// function withoutRepair(){
//     $("#repairs").val('Без ремонта');
// }



