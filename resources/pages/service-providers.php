<?php
$path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';
require $path['root'] . '/includes/connect.inc.php';
   
  if (isset($_POST['ord-type1']) && isset($_POST['ord-type2']) && isset($_POST['ord-type3']) && isset($_POST['ord-type4'])) {
            $orderType1 = htmlspecialchars($_POST['ord-type1']);
            $orderType2 = htmlspecialchars($_POST['ord-type2']);
            $orderType3 = htmlspecialchars($_POST['ord-type3']);
            $orderType4 = htmlspecialchars($_POST['ord-type4']);
            $profession = '';
            if($orderType4 != '-'){
                $profession = $orderType3;
            }else  if($orderType3 != '-'){
              $profession = $orderType3;
            }else  if($orderType2 != '-'){
              $profession = $orderType2;
            }
            $db = new DB();
            $db->query('SELECT `prov_name`, `age`, `profession`, `workexp`, `speciality` FROM `ww_provider` WHERE `profession` = :profession ');
            $db->bind(':profession', $profession);
            $exeRes = $db->resultset();
                $db->terminate();
            
  }
    else if (isset($post_get_v2) ) {
           
            $orderType1 = $post_get_v2;
            $profession = $orderType1;
            $profession = str_replace("-"," ",$profession);
            $db = new DB();
            $db->query('SELECT `prov_name`, `age`, `profession`, `workexp`, `speciality` FROM `ww_provider` WHERE `profession` = :profession');
            $db->bind(':profession', $profession);
            $exeRes = $db->resultset();
            $db->terminate();

        
    }



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WhenWing - Service Providers </title>
<link rel="icon" href="images/logo.png">
<?php include 'includes/style.inc.php';?>
<style>


.table {
  width: 100%;
}
.table tr td,
.table tr th {
  vertical-align: middle;
}
.table.table-order {
  margin-top: 10px;
}
.table.table-order thead tr {
  border: 1px solid #E9ECF2;
  border-left: none;
  border-right: none;
  background: #F9FBFC;
  color: #67676C;
  min-height: 52px;
  line-height: 30px;
  font-size: 12px;
  font-weight: 700;
}
.table.table-order thead tr th {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.table.table-order tbody tr {
  text-align: center;
  border-bottom: 1px dashed #ddd;
}
.table.table-order tbody tr td:last-child {
  padding-right: 15px;
}
.order {
  position: relative;
  width: 90%;
  margin: 5% auto;
  background: #fff;
  padding: 10px 0;
  box-shadow: 0 0px 12px rgba(0, 0, 0, 0.1);
  color: #444;
}

.order .order-title {
  font-size: 1.6rem;
  line-height: 2rem;
  font-weight: 700;
  padding: 0 15px;
}
.order .order-title-count {
  display: inline-block;
  height: 30px;
  line-height: 30px;
  margin-top: -2px;
  background: #eee;
  vertical-align: middle;
  padding: 0 14px;
  border-radius: 100px;
  color: #bbb;
  font-size: 1rem;
}

.order .order-name {
  margin-top: 12px;
  font-size: 1.4rem;
  font-weight: 400;
}
.order .order-desc {
  color: #ccc;
  margin: 8px 0 0 0;
  font-size: 0.8rem;
}
.order .order-time {
  font-weight: 700;
  color: #777;
  border-bottom: 1px solid;
}
.order .order-price-cur {
  font-size: 0.6rem;
  color: #777;
}
.order .order-choose {
  display: block;
  width: 30%;
  margin: 0 auto;
  padding: 3% 5%;
  color: #fff;
  border-radius: 3px;
  background: #CCC;
  cursor: pointer;
}
.order-choos:hover{

}
@media only screen and (max-width: 768px) {

  .table.table-order thead tr {
    font-size: 0.5rem;
  }
  .table.table-order tbody tr td {
    padding: 0 6px;
  }

  .order .order-title {
    font-size: 1.2rem;
  }
  .order .order-title-count {
    font-size: 0.8rem;
    padding: 0 10px;
    margin-top: -1px;
    height: 22px;
    line-height: 22px;
  }
}

</style>
</head>
<body class="pt-5">
<?php include 'resources/templates/services-header-tmpl.php';?>
<section class="order pt-5">
    <h3 class="order-title">List of Providers
        <span class="order-title-count"><?php if(isset($exeRes)) echo count($exeRes);?></span>
    </h3>

    <table class="table table-order">
        <thead>
            <tr>
                <th>Provider Name</th>
                <th>Age</th>
                <th>Profession</th>
                <th>Address</th>
                <th>Specialities</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php

          if(isset($exeRes)){
          foreach ($exeRes as $exeResVal){
            echo '<tr>
            <td >'.$exeResVal['prov_name'].'</td>
            <td>'.$exeResVal['age'].'</td>
            <td>'.$exeResVal['profession'].'</td>
            <td>'.$exeResVal['workexp'].'</td>
            <td>'.$exeResVal['speciality'].'</td>
            <td><i class="order-choose ">Select</i></td>
        </tr>';
          }
        }
        else{
          echo '<p style="text-align:center;">SomethingWent Wrong.<p>';
        }
          ?>
        </tbody>
    </table>
</section>
<?php include 'resources/templates/footer-tmpl.php';?>
<?php include 'includes/script.inc.php';?>
</body>
</html>