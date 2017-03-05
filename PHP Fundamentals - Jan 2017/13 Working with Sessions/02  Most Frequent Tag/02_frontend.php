<?php //
//sesion_start();
//?>

<form action="">
    <label for="tags" >Enter Tags:</label><br>
    <input type="text" name="tags" title="tags" id="tags"/>
    <input type="submit" name="submit" value="submit" title="submit"/>
    <input type="submit" name="clear"  value="clear" title="clear"/>
</form>

<?php if(isset($allTags, $mostFrequentTag)): ; ?>
    <?php foreach ($allTags as $tag => $count): ;?>
        <div><?= $tag ?> : <?= $count ?> times</div>
    <?php endforeach; ?>
    <div>Most frequent tag is: <?= $mostFrequentTag ?></div>
<?php endif; ?>
