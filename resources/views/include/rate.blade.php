<div class="header-in-the-form">
    Арендная плата
</div>
<div class="form-group">
    <label for="pricePerMonth" class="col-md-3 control-label">Цена в месяц</label>
    <div class="col-md-2">
        <input type="text" name="pricePerMonth" class="form-control" id="pricePerMonth">
    </div>
    <div class="col-md-1">
        <div class="row">
            <div class="col-md-1">
                <label for="pricePerMonth" class="control-label">₽</label>
            </div>
        </div>
    </div>
    <div class="checkbox col-md-offset-3 col-md-9">
        <label>
            <input type="checkbox" name="includingUtilityBills" value="">
            включая коммунальные платежи
        </label>
    </div>
    <div class="checkbox col-md-offset-3 col-md-9">
        <label>
            <input type="checkbox" name="includingOperatingCosts" value="">
            включая эксплуатационные расходы
        </label>
    </div>
</div>
<div class="form-group">
    <label for="RatePerSquareMeter" class="col-md-3 control-label">Ставка за м<sup>2</sup></label>
    <div class="col-md-2">
        <input type="text" name="RatePerSquareMeter" class="form-control" id="RatePerSquareMeter">
    </div>
    <div class="col-md-1">
        <div class="row">
            <div class="col-md-1">
                <label for="RatePerSquareMeter" class="control-label">₽</label>
            </div>
        </div>
    </div>
    <div class="checkbox col-md-2">
        <label>
            <input type="checkbox" name="perMonth" value="">
            в месяц
        </label>
    </div>
    <div class="checkbox col-md-2">
        <label>
            <input type="checkbox" name="inYear" value="">
            в год
        </label>
    </div>
</div>
<div class="form-group">
    <div class="dropdown">
        <label class="col-md-3 control-label" for="prepayment">Предоплата</label>
        <div class="col-md-9">
            <button class="btn btn-default dropdown-toggle" type="button" id="prepayment" data-toggle="dropdown">
                1 месяц
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '1 месяц', 'inputPrepayment')">1 месяц</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '2 месяца', 'inputPrepayment')">2 месяца</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '3 месяца', 'inputPrepayment')">3 месяца</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', '4 месяца', 'inputPrepayment')">4 месяца</a>
                </li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:DropDownList('prepayment', 'До 12 месяцев', 'inputPrepayment')">До 12 месяцев</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<input type="hidden" id="inputPrepayment" name="inputPrepayment" value="1 месяц">