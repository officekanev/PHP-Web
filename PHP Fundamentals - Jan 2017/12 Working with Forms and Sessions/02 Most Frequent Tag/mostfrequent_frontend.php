
<form>
    <lable for="input">
Enter Tags:<br>
        <input type="text" id="input" name="input">
        <input type="submit"  name="Submit">
        <input type="button"  name="Clear" value="Clear">
    </lable>
<!--    <div class="result"></div>-->
</form>


<?php if(isset($array)): ?>
    <?php foreach ($array as $key => $value): ?>
        <?=$key;?> <?=": "?><?=$value;?><?=" times"?><?="<br>"?>
    <?php endforeach; ?>
    <?="Most Frequent Tag is: ";?><?=$mostFreq;?>
<?php endif; ?>