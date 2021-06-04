<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2" hidden>date</th>
            <th scope="col" class="col-2" hidden>pseudo</th>
            <th scope="col" class="col-8" hidden>message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($messages as $message) {
        ?>
            <tr class="table-light">
                <td class="col-2"><?= $message['date'] ?></td>
                <td class="col-2"><?= $message['pseudo'] ?></td>
                <td class="col-8"><?= $message['content'] ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>