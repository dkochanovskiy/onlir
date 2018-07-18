<div class="form-group">
    <label class="col-md-3 control-label">Тип аренды</label>
    <div class="col-md-9">
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="directLease">
                <input type="radio" name="typeOfLease" value="Прямая аренда">Прямая аренда
            </label>
            <label class="btn btn-default" id="sublease">
                <input type="radio" name="typeOfLease" value="Субаренда">Субаренда
            </label>
        </div>
    </div>
</div>
<input type="hidden" id="inputOfLease" value="Прямая аренда">
<div class="form-group">
    <label for="theMinimumPeasePeriodFrom" class="col-md-3 control-label">Минимальный срок аренды от</label>
    <div class="col-md-2">
        <input type="text" name="theMinimumPeasePeriodFrom" class="form-control" id="theMinimumPeasePeriodFrom">
    </div>
    <div class="col-md-1">
        <div class="row">
            <div class="col-md-1">
                <label for="theMinimumPeasePeriodFrom" class="control-label">мес.</label>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 control-label">Арендные каникулы</label>
    <div class="col-md-9">
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary" id="rentalHolidaysYes">
                <input type="radio" name="rentalHolidays" value="Да">Да
            </label>
            <label class="btn btn-default" id="rentalHolidaysNo">
                <input type="radio" name="rentalHolidays" value="Нет">Нет
            </label>
        </div>
    </div>
</div>
<input type="hidden" id="inputRentalHolidays" value="Да">