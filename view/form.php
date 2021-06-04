<form method="POST" action="index.php">
    <fieldset>
        <div class="row">
            <div class="form-group col-4">
                <label for="pseudo_fe" class="form-label mt-4" hidden>Pseudo</label>
                <input type="text" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" name="pseudo" class="form-control" id="pseudo_fe" aria-describedby="pseudo" placeholder="Entrez votre pseudo">
            </div>

            <div class="form-group col-8">
                <label for="message_fe" class="form-label mt-4" hidden>message</label>
                <textarea name="content" class="form-control" id="message_fe" rows="3" placeholder="Entrez votre message"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Envoyer</button>

        <?php
        if (isset($errors) && !empty($errors)) {
        ?>
            <div class="alert alert-dismissible alert-warning">
                <?php
                foreach ($errors as $error) {
                ?>
                    <p class="mb-0"><?= $error ?></p>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>

    </fieldset>
</form>