<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="reroll-id" class="form-label">PONOVEN POSKUS?</label>
        <input name="reroll-id" type="hidden" value="<?php echo $projectResult['id'];?>">
        <button class="btn btn-primary" type="submit" name="reroll">DA!</button>
    </div>
</form>