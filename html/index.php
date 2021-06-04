<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>TOP</title>
</head>
<body>
    <div class="container w-80">
    <h1>スコア表</h1>
    <table class="table">
        <thead class="table-dark">
            <th>日付</th>
            <th>曲名</th>
            <th>スコア</th>
            <th>GREAT</th>
            <th>GOOD</th>
            <th>BAD</th>
        </thead>
<?php
ini_set('display_errors', "On");
//phpinfo();
include "./pdo_connect.php";
$sql = "SELECT * FROM score JOIN music WHERE score.id = music.id";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
        <tbody>
            <td><?=date('Y年m月d日 H:i',strtotime($row['datetime']))?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['score']?></td>
            <td><?=$row['great']?></td>
            <td><?=$row['good']?></td>
            <td><?=$row['bad']?></td>
        </tbody>
<?php
}
?>
    </table>
    </div>
</body>
</html>