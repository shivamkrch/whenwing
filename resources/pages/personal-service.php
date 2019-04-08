<?php $path = require $_SERVER['DOCUMENT_ROOT'].'/config/config-path.php';
require $path['root'] . '/includes/connect.inc.php';
    $profession = $_GET['v2'];
    $profession = str_replace("-"," ",$profession);
    if(isset($_POST['priceFilter']) && isset($_POST['locFilter']) && isset($_POST['prefFilter'])){
        $db = new DB();
        $db->query('SELECT * FROM `ww_provider` WHERE `profession`=:profession AND `price`<=:price');
        $db->queryError();
        $db->bind(':profession', $profession);
        $db->bind(':price', $_POST['priceFilter']);
        $exeRes = $db->resultset();
        $res_count = count($exeRes);
    }else{
        $db = new DB();
        $db->query('SELECT * FROM `ww_provider` WHERE `profession`=:profession');
        $db->queryError();
        $db->bind(':profession', $profession);
        $exeRes = $db->resultset();
        $res_count = count($exeRes);
    }
    $db->query('SELECT * FROM services WHERE service=:service');
    $db->bind(':service',$profession);
    $service_res = $db->resultset()[0];
    $db->terminate();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WhenWing Services | <?=ucwords($profession)?></title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="theme-color" content="#4885ed" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/logo.png">
<?php include 'includes/style.inc.php';?>
</head>
<body>
<?php include 'resources/templates/services-header-tmpl.php';?>
<div class="container-fluid row mt-5 p-3 pt-5 mr-3">
    <div class="col-sm-3 mt-3 p-4 pt-5 border-right" id="filters">
    <button class="btn bg-transparent float-right" type="button" data-toggle="collapse" data-target="#filterForm" aria-expanded="false" aria-controls="filterForm">
        <span class="badge badge-pill badge-primary" style="font-size: 1.2rem;"><i class="fa fa-chevron-down"></i></span>
    </button>
    <h2><i class="fas fa-sliders-h text-primary mr-2 align-middle mb-1" style="font-size: 1.5rem"></i>Filters</h2>
    <form class="collapse mt-3" id="filterForm" method="POST" action="?v1=services&v2=<?=$_REQUEST['v2']?>">
        <label for="priceFilter" style="font-weight: bold">Price</label>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-fill bd-highlight">₹ 100</div>
            <div class="p-2 flex-fill bd-highlight">
                <input type="range" class="custom-range" id="priceFilter" name="priceFilter" min="100" max="5000" step="50" value="<?php
                if(isset($_POST['priceFilter'])) echo $_POST['priceFilter'];
                else echo '100';
                ?>">
            </div>
            <div class="p-2 flex-fill bd-highlight">₹ 5000</div>
        </div>
        <div class="text-center" id="priceFilterVal" style="font-weight: bold"></div>
        <label for="locFIlter" style="font-weight: bold">Location</label>
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-fill bd-highlight">1 KM</div>
            <div class="p-2 flex-fill bd-highlight">
                <input type="range" class="custom-range" id="locFilter" name="locFilter" min="2" max="20" step="1" value="2">
            </div>
            <div class="p-2 flex-fill bd-highlight">20 KM</div>
        </div>
        <div class="text-center mb-3" id="locFilterVal" style="font-weight: bold"></div>
        <?php
        if(!($_GET['v2'] == 'personal-driver' || $_GET['v2'] == 'personal-gardener')){
        ?>
        <div class="mb-1" style="font-weight: bold">Preference</div class="mb-1">
        <div class="custom-control custom-radio ml-2">
            <input type="radio" class="custom-control-input" id="prefFilMen" name="prefFilter" value="male">
            <label class="custom-control-label" for="prefFilMen">Male</label>
        </div> 
        <div class="custom-control custom-radio ml-2">
            <input type="radio" class="custom-control-input" id="prefFilWomen" name="prefFilter" value="female">
            <label class="custom-control-label" for="prefFilWomen">Female</label>
        </div>
        <?php } ?>
        <input type="submit" value="Apply" class="btn btn-primary btn-sm mt-3 ml-2 col-sm-5">
        <input type="reset" value="Clear Filters" class="btn btn-danger ml-2 btn-sm mt-3 col-sm-5" id="resetFilterForm">
    </form>

    </div>
    <div class="col-sm-9">
        <div class="container m-3 p-4 shadow-sm">
            <h3>List of Providers <span id="res-count" class="badge badge-pill badge-<?php
            if($res_count > 0) echo 'success';
            else echo 'danger';
            ?>"><?=$res_count ?></span></h3>
            <?php
                if($db->rowCount() > 0){
                    foreach($exeRes as $res){
                        if(isset($_POST['firstoption'])){
                            $prov_service_types = explode(',',$res['service_types']);
                            if(array_search(strtolower($_POST['firstoption']), array_map('strtolower',$prov_service_types)) === FALSE) {
                                $res_count--;
                                continue;
                            }
                        }
                        if(isset($_POST['secondoption'])){
                            $prov_appl_types = explode(',',$res['appliance_types']);
                            if(array_search(strtolower($_POST['secondoption']), array_map('strtolower',$prov_appl_types)) === FALSE) {
                                $res_count--;
                                continue;
                            }
                        }
                        if(isset($_POST['prefFilter'])){
                            $prov_appl_types = explode(',',$res['prov_prefs']);
                            if(array_search(strtolower($_POST['prefFilter']), array_map('strtolower',$prov_appl_types)) === FALSE) {
                                $res_count--;
                                continue;
                            }
                        }
                        echo '<div class="card mt-3 shadow-sm">
                            <div class="card-header"><img src="https://via.placeholder.com/150" alt="'.$res['prov_name'].'" class="mr-3 rounded-circle" style="width:50px;">
                            <h4 style="display: inline-block">'.$res['prov_name'].'</h4></div>';
                            ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><b>Age: </b><?=$res['age']?></li>
                                            <li><b>Work Experience: </b><?=$res['workexp']?></li>
                                            <li><b>Record: </b><?=$res['prov_record']?></li>
                                            <li><b>About: </b><?=$res['about']?></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><b>Address: </b><?=$res['addr']?></li>
                                            <li><b>Speciality: </b><?=$res['speciality']?></li>
                                            <li><b>Contact: </b><?=$res['contact']?></li>
                                            <li><b>Price: </b>₹ <?=$res['price']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center p-0">
                                <button class="btn btn-primary mx-2 btn-sm">Select</>
                                <button class="btn btn-success mx-2 btn-sm">Book Now</button>
                            </div>
                        </div>
                        <?php
                    }
                }else{?>
                    <h4 class="text-center text-danger mt-3">Sorry, No providers for selected options.</h4>
                  <?php  
                }
                if($res_count <= 0){
                    ?>
                    <h4 class="text-center text-danger mt-3">Sorry, No providers for selected options.</h4>
                    <script>
                        var res_count=document.getElementById('res-count');
                        res_count.innerHTML= '<?=$res_count ?>';
                        res_count.classList.remove('badge-success');
                        res_count.classList.add('badge-danger');

                    </script>
                  <?php  
                }else{
                ?>
                    <script>
                        var res_count=document.getElementById('res-count');
                        res_count.innerHTML= '<?=$res_count ?>';
                        res_count.classList.remove('badge-danger');
                        res_count.classList.add('badge-success');

                    </script>
                    <?php
                }
            ?>
            
        </div>
    </div>
</div>
<?php include 'resources/templates/footer-tmpl.php';?>
<?php include 'includes/script.inc.php';?>
</body>
</html>