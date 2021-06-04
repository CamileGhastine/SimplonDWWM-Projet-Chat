<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2" hidden>date</th>
            <th scope="col" class="col-2" hidden>pseudo</th>
            <th scope="col" class="col-7" hidden>message</th>
            <th scope="col" class="col-1" hidden>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($messages as $message) {
        ?>
            <tr class="table-light">
                <td class="col-2"><?= $message['date'] ?></td>
                <td class="col-2"><?= htmlspecialchars($message['pseudo']) ?></td>
                <td class="col-7"><?= nl2br(htmlspecialchars($message['content'])) ?></td>
                <td class="col-1"><a href="index.php?delete=<?= $message['id'] ?>&pseudo=<?= $message['pseudo'] ?>" ><?= isset($_POST['pseudo']) && $_POST['pseudo'] === $message['pseudo'] ? '❌' : '' ?></a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>