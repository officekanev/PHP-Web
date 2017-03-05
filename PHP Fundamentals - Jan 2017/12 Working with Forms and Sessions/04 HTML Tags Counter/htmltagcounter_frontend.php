<form>
    <lable for="input">
        Enter HTML tags:<br>
        <input type="text" id="input" name="input">
        <input type="submit"  name="Submit">
    </lable>
</form>


<?php if(isset($output)): ?>

    <?=$output;?><?="<br>"?>
    <?="Score: ";?><?=$score;?><?="<br>"?>
<?php endif; ?>