<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td  {
            border: 1px solid;
        }
    </style>

</head>
<body>
    <h1><?=esc($title)?></h1>
    <table>
        <thead>
            <tr>
                <th colspan="3"><?=esc($heading)?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </tr>
            <?php foreach ( $todo_list as $key => $items) :?>
            <tr>
                <!-- esc = 後端傳過來就要（單單一個） -->
                <td> <?= esc ($key) ?></td>
                <?php foreach ( $items as $item) :?>
                    <td> <?= esc ($item) ?></td>
                <?php endforeach ?>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>