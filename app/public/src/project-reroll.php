<form action="index.php" method="POST">
    <div>
        <label for="reroll-id">PONOVEN POSKUS?</label>
        <input name="reroll-id" type="hidden" value="<?php echo $projectResult['id'];?>">
        <button type="submit" name="reroll">DA!</button>
    </div>
</form>