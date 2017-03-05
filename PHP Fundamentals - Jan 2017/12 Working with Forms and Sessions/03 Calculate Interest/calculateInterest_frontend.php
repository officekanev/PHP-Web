<?php if(isset($sign, $calculatedMoney)): ?>
    <h1><?=$sign; ?> <?=$calculatedMoney; ?></h1>
<?php endif; ?>
<form>
    <div>
        <label for="money">
            Enter Amount:
        </label>
        <input id="money" type="number" name="money" value="<?=$money;?>"/>
    </div>
    <div>
        <?php foreach ($validCurrencies as $currencyKey => $currencySign):?>
            <input id="<?=$currencyKey;?>" type="radio" name="currency"
                <?= $currency == $currencyKey ? 'checked' : '';?> value="<?=$currencyKey;?>"/>
            <label for="usd">
                <?= $currencyKey; ?>
            </label>
        <?php endforeach; ?>

    </div>
    <div>
        <label for="interest">
            Compound Interst Amount:
        </label>
        <input id="interst" type="number" value="<?=$interest;?>" name="interest"/>
    </div>
    <div>
        <select name="period">
            <?php foreach ($validPeriods as $validPeriod => $userValue):?>
             <option value="<?= $validPeriod; ?>" <?= $period == $validPeriod ? 'selected' : ''?>>
                 <?= $userValue; ?>
             </option>
            <?php endforeach; ?>
<!--            <option value="6" --><?//= $period == 6 ? 'selected' : ''?><!--></option>-->
<!--            <option value="12" --><?//= $period == 12 ? 'selected' : ''?><!-->1 Year</option>-->
<!--            <option value="24" --><?//= $period == 24 ? 'selected' : ''?><!-->2 Years</option>-->
<!--            <option value="60" --><?//= $period == 60 ? 'selected' : ''?><!-->5 Years</option>-->
        </select>
        <input type="submit" name="Calculate" value="Calculate"/>
    </div>
</form>