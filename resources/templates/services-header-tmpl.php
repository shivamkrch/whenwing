<?php
$service_types = explode(',',$service_res['types']);
$appliance_types = explode(',',$service_res['appliance_types']);
?>
<header>
        <div class="logo-and-name">
            <a href="/">
                <img src="/images/icons/logo.png" class="site-logo">
                <span class="site-name">WhenWing</span>
            </a>
        </div>
        <div class="search-div form-inline mt-0 mb-0 p-0" style="background: inherit; display: inline-block">
            <form class="mt-3 mt-sm-0" action="/?v1=services&v2=<?=$_GET['v2']?>" method="POST">
            <select class="serv-inp-text firstoption custom-select mr-3 mb-2 mb-sm-0" name="firstoption" id="firstoption">
                <option disabled selected >Select service</option>
                <?php
                    foreach($service_types as $service_type){
                ?>
                <option value="<?=$service_type?>"><?=ucwords($service_type)?></option>
                <?php
                    }
                ?>
            </select>
            <select class="serv-inp-text secondoption custom-select mr-sm-3 mb-2 mb-sm-0" name="secondoption" id="secondoption" disabled >
                <option disabled selected >Select type</option>
                <?php
                    foreach($appliance_types as $appliance_type){
                ?>
                <option value="<?=$appliance_type?>"><?=ucwords($appliance_type)?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" value="Search" class="btn btn-danger" style="width: auto">
            </form>
        </div>
        <style>
            @media (min-width: 990px){
                .header-menu a {
                    display: block;           
                    margin: 10px;
                    float: none;
                }
            }
            @media (max-width: 576px){
                .form-inline .custom-select{
                    width: 45% !important;
                    display: inline;
                }
            }
            @media (min-width: 576px){
                .form-inline .custom-select{
                    width: 35% !important;
                    display: inline;
                }
            }
        </style>
        <div class="header-menu">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color: inherit;border:none">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Login/Sign Up</a>
                    <a class="dropdown-item" href="#">Cart</a>
                    <a class="dropdown-item" href="#">Become a Provider</a>
                    <a class="dropdown-item" href="#">About WhenWing</a>
                    <a class="dropdown-item" href="#">Contact Us</a>
                </div>
            </div>  
        </div>
</header>
