<?php 

    /**
     * Setup an input field
     *
     * @param string $name
     * @return void
     */
    function Input(string $name, string $type) {?>

    <div class="input-container">
        <label class="input-label" for=<?= $name ?>><?= $name?> : </label>
        <input class="input-field" type=<?= $type ?> name=<?php echo strtolower($name) ?> id=<?= $name ?> placeholder=<?php echo "$name..." ?>>
    </div>

<?php } ?>
