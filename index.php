<?php
    require_once('../js-test/inc/classes/UserArray.php');
    $display = new UserArray('JS Test');
    extract($display->user());
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $display->title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">

</head>
<body>
    <form>
        <select name="users" id="select-user">
               <?php foreach($user as $key => $value) :?>

                    <option value="<?= $value; ?>">
                        <?= $value; ?>
                    </option>

                <?php endforeach; ?>
        </select>
       
            <select name="other" id="other" hidden>
                    <?php foreach($another as $key => $value) :?>
                        <option value="<?= $value; ?>">
                            <?= $value; ?>
                        </option>
                    <? endforeach;?>
            </select>
        
    </form>
</body>

<script src="../js-test/js/UserClass.js"></script>
<script>

    
        const user = new UserClass();
        user.getDropdownList();

    
</script>
</html>