<?php 
      $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WhenWing - Provider Profile</title>
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
<body>
<?php include 'resources/templates/header-tmpl.php';?>
<section class="order">
    <h3 class="order-title">All Providers
        <span class="order-title-count">3</span>
    </h3>

    <table class="table table-order">
        <thead>
            <tr>
                <th>Provider Name</th>
                <th>Service</th>
                <th>Experience</th>
                <th>Age</th>
                <th>Specialities</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >
                    <p class="order-name">Furniture</p>
                        <p class="order-desc">text</p>
                </td>
                <td>2 <p class="order-price-cur">text 2</p></td>
                <td>
                    <div class="order-price">
                        12 <p class="order-price-cur">hjkhjg</p>
                    </div>
                </td>
                <td>24 <p class="order-price-cur">trrrt</p></td>
                <td><i class="order-choose ">Select</i></td>
            </tr>
            
            <tr>
                <td >
                    <p class="order-name">Furniture</p>
                        <p class="order-desc">text</p>
                </td>
                <td>2 <p class="order-price-cur">text 2</p></td>
                <td>
                    <div class="order-price">
                        12 <p class="order-price-cur">hjkhjg</p>
                    </div>
                </td>
                <td>24 <p class="order-price-cur">trrrt</p></td>
                <td><i class="order-choose ">Select</i></td>
            </tr>
            <tr>
                <td >
                    <p class="order-name">Furniture</p>
                        <p class="order-desc">text</p>
                </td>
                <td>2 <p class="order-price-cur">text 2</p></td>
                <td>
                    <div class="order-price">
                        12 <p class="order-price-cur">hjkhjg</p>
                    </div>
                </td>
                <td>24 <p class="order-price-cur">trrrt</p></td>
                <td><i class="order-choose ">Select</i></td>
            </tr>
        </tbody>
    </table>
</section>
<?php include 'resources/templates/footer-tmpl.php';?>
<?php include 'includes/script.inc.php';?>
</body>
</html>