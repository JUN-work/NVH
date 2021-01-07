<?php
$dsn = 'mysql:host=database-nvh.ceqdlqwfzd3m.us-east-2.rds.amazonaws.com;dbname=database-nvh;charset=utf8';
$user = 'JUN';
$pass = 'Niku6312';

try {
  // DBに接続する
  $dbh = new PDO($dsn, $user, $pass);

  // ここでクエリ実行する
  $query_result = $dbh->query('SELECT * FROM `Nutritional value List of Vegetables`.`Nutritional value`');
  // DBを切断する
  $dbh = null;
} catch (PDOException $e) {
    // 接続にエラーが発生した場合ここに入る
    print "DB ERROR: " . $e->getMessage() . "<br/>";
    die();
}
?>