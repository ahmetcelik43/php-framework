<?php section(); ?>
<?= $data["name"]; ?>
<?php $title = endsection(); ?>

<?php section(); ?>
<h1><?= $data["title"] ?></h1>
<a href="<?= baseurl("crud.get", ["name" => $data["name"]]) ?>">Add</a>
<table>
    <thead>
        <?php foreach ($data["labels"] as $key => $value) {
            echo '<th>' . $value . '</th>';
        } ?>
    </thead>
    <tbody>
        <?php foreach ($data["data"] as $key => $value) { ?>
            <tr>
                <?php foreach ($data["labelKeys"] as $keys) {
                ?>

                    <td><?= $value[$keys] ?></td>

                <?php } ?>
                <td> <a href="<?= baseurl("crud.get2", ["name" => $data["name"], "id" => $value[$data["id_column"]]]) ?>">Düzenle</a>
                    <a href="<?= baseurl("crud.delete", ["name" => $data["name"], "id" => $value[$data["id_column"]]]) ?>">Sil</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php
$main = endsection();
?>
<?php section(); ?>

<script>
    function showHide(e) {
        $(e).parents('.wrap').find('.verify-content').toggleClass('show')
    }
</script>
<?php
$js = endsection();
?>