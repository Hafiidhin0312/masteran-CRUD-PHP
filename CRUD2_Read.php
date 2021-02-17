<?php

include 'database.php';

//query untuk menampilkan database
$query = "SELECT * FROM data";
//memasukkan query kkedalam variabel
$sql = mysqli_query($database, $query);
//data berupa array
$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
</head>

<body>
    <form action="search.php" method="get">

        <input type="text" name="cari" placeholder="cari" value="<?php echo $_GET['cari'] ?>">
        <button type="submit">cari</button>

    </form>

    <table>

        <tr>
            <th>data1</th>
            <th>data2</th>
            <th>data3</th>
        </tr>

        <?php foreach ($data as $d) : ?>

            <tr>
                <td><?php echo $d['data1'] ?></td>
                <td><?php echo $d['data2'] ?></td>
                <td><?php echo $d['data3'] ?></td>
                <td><a href="UpdateUI.php?data1=<?php echo $d['data1'] ?>">edit</a>
                    || <a href="Delete.php?data1=<?php echo $d['data1'] ?>">Hapus</a>"></a></td>
            </tr>

        <?php endforeach; ?>



    </table>
</body>

    </html>
