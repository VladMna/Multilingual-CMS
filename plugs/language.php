<?php

if(!empty($data['objLanguage'])){
  $languages = $data['objLanguage']->getAll();
    if(!empty($language)){
?>

<form method="post">
    <select name="language" id="language">
        <?php foreach($language as $row){ ?>
            <option value="<?php echo $row['id']; ?>"
                    <?php echo $row['id'] ==
                     $data['objLanguage']->language ? ' selected="selected"' : null; ?>>
            <?php echo $row['label']; ?>
            </option>
            <?php } ?>
    </select>
</form>

<?php
    }
}



?>