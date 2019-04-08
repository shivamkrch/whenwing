<?php $path = require $_SERVER['DOCUMENT_ROOT'] . '/config/config-path.php';

if (isset($_GET['v1']) && isset($_GET['v2']) && isset($_GET['v3']) && isset($_GET['v4']) && isset($_GET['v5'])) {
    $post_get_v1 = $_GET['v1'];
    $post_get_v2 = $_GET['v2'];
    $post_get_v3 = $_GET['v3'];
    $post_get_v4 = $_GET['v4'];
    $post_get_v5 = $_GET['v5'];
    switch ($post_get_v1) {
        case 'service-providers':
            require $path['pages'] . '/service-providers.php';
            break;

        default:require $path['pages'] . '/404.php';
    }
} elseif (isset($_GET['v1']) && isset($_GET['v2'])) {
    $post_get_v1 = $_GET['v1'];
    $post_get_v2 = $_GET['v2'];
    switch ($post_get_v1) {
        case 'become-a-provider':
            require $path['pages'] . '/become-provider.php';
            break;
        case 'service-providers':
            require $path['pages'] . '/service-providers.php';
            break;
        case 'services':
            switch($post_get_v2){
                // Appliance Service routes
                case 'ac-service-repair-and-installation':
                case 'referigerator-repair':
                case 'washing-machine-repair':
                case 'water-purifier-repair':
                case 'microwave-repair':
                case 'tv-repair-and-installation':
                case 'air-cooler-repair':
                case 'geyser-repair':
                case 'computer-repair':
                case 'mobile-repair':
                    require $path['pages'] . '/appliance-repair.php';
                    break;
                // Personal Service routes
                case 'personal-cook':
                case 'personal-driver':
                case 'personal-yoga-trainer':
                case 'personal-dietician':
                case 'personal-choreographer':
                case 'personal-security-guard':
                case 'personal-home-maid':
                case 'personal-gardener':
                    require $path['pages'] . '/personal-service.php';
                    break;
                default:require $path['pages'] . '/404.php';
            }
            break;
        //Dont delete following line
        //Handles calling of form handle
        // case 'handlers':
        //      if($post_get_v2 == 'formhandle')
        //      require $path['root'].'/handlers/formhandle/index.php';
        // break;

        default:require $path['pages'] . '/404.php';
    }
} elseif (isset($_GET['v1'])) {

    $post_get = $_GET['v1'];
    switch ($post_get) {
        case 'become-a-provider':
            require $path['pages'] . '/become-provider.php';
            break;
        case 'register-service':
            require $path['pages'] . '/become-provider-form1.php';
            break;
        case 'register-shop':
            require $path['pages'] . '/become-provider-form2.php';
            break;
        case 'reg-successful':
            require $path['pages'] . '/reg-successful.php';
            break;
        case 'reg-provider-successful':
            require $path['pages'] . '/reg-prov-successful.php';
            break;
        case 'fb-login':
            require 'fb.html';
            break;
        case 'login':
            require $path['pages'] . '/cust-login.php';
            break;
        case 'logout':
            require $path['pages'] . '/logout.php';
            break;
        case 'order':
            require $path['pages'] . '/order.php';
            break;
        case 'profile':
            require $path['pages'] . '/cust-profile.php';
            break;
        case 'provider-profile':
            require $path['pages'] . '/provider-profile.php';
            break;
        case 'sign-up':
            require $path['pages'] . '/cust-signup.php';
            break;
        case 'service-providers':
            require $path['pages'] . '/service-providers.php';
            break;
        default:require $path['pages'] . '/404.php';
    }
} else {
    require $path['pages'] . '/home.php';
}
