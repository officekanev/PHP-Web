
<form>
    <lable for="input">
        Enter Tags:<br>
        <input type="text" id="input" name="input">
        <input type="submit"  name="Submit">
    </lable>
</form>

<?php if(isset($elemnts) && count($elemnts) > 0): ?>
    <?php /** @var $elemnts string[] */; ?>
    <?php foreach ($elemnts as $i => $tag): ;?>
        <?= $i;?> : <?= $tag;?><?= PHP_EOL;?>
    <?php endforeach; ?>
<?php endif; ?>