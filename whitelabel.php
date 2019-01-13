<?php
require_once('whitelabeler.php');
$whitelabeler = new Whitelabeler;

$companyName = 'Tuple Technologies';

$version = '2.15.0';

$path = '/var/www/html';

$url = 'https://{{host}}:{{port}}';

$sidebarLogoPath = $path.'/media/images/tuple_logo.png';

//$sidebarLogo = fopen($sidebarLogoPath, "r") or die("Unable to open file!");

$loginLogoPath = $path.'/media/images/tuple_logo_only.png';

//$loginLogo = fopen($loginLogoPath, "r") or die("Unable to open file!");

$faviconPath = $path.'/media/images/tuple_logo_only.png';

//$favicon = fopen($faviconPath, "r") or die("Unable to open file!");

$whitelabeler->templateVersions($version);

$whitelabeler->clearMauticCache($path);

$whitelabeler->rebuildAssets($path);

$whitelabeler->replaceImages(
    $path,
    $url,
    $version,
    $sidebarLogoPath,
    150,
    array(
        'top' => 10,
        'right' => 0,
        'left' => -50
    ),
    $loginLogoPath,
    150,
    array(
        'top' => 20,
        'bottom' => 20
    ),
    $faviconPath
);

$whitelabeler->companyName(
    $path,
    $version,
    $companyName
);

$whitelabeler->clearMauticCache($path);