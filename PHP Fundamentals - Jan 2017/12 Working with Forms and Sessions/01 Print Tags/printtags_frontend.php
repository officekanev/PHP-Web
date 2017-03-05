
<form>
    <lable for="input">
        Enter Tags:<br>
        <input type="text" id="input" name="input">
        <input type="submit"  name="Submit">
    </lable>
</form>


<?php if(isset($data)): ?>
    <?php foreach ($data as $word): ?>
        <?=$count++;?> <?=": "?><?=$word;?><?="<br>"?>
    <?php endforeach; ?>
<?php endif; ?>