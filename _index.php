<?php
function parse_path() {
  $path = array();
  if (isset($_SERVER['REQUEST_URI'])) {
    $request_path = explode('?', $_SERVER['REQUEST_URI']);

    $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
    $path['call_utf8'] = substr(urldecode($request_path[0]), strlen($path['base']) + 1);
    $path['call'] = utf8_decode($path['call_utf8']);
    if ($path['call'] == basename($_SERVER['PHP_SELF'])) {
      $path['call'] = '';
    }
    $path['call_parts'] = explode('/', $path['call']);

    $path['query_utf8'] = urldecode($request_path[1]);
    $path['query'] = utf8_decode(urldecode($request_path[1]));
    $vars = explode('&', $path['query']);
    foreach ($vars as $var) {
      $t = explode('=', $var);
      $path['query_vars'][$t[0]] = $t[1];
    }
  }
return $path;
}

$path_info = parse_path();
//echo '<pre>'.print_r($path_info, true).'</pre>';

switch($path_info['call_parts'][0]) {
  case 'about': include 'about.php';
    break;
  case 'recent-work': include 'behindthescenes.php';
    break;
  case 'commercial': include 'commerical.php';
    break;
  case 'recent-work': include 'behindthescenes.php';
    break;
  case 'contact': include 'contact.php';
    break;
  case 'digital-and-web': include 'digital.php';
    break;
  case 'directors': include 'directors.php';
    break;
  case 'episodic': include 'episodic.php';
    break;
  case 'opens': include 'opens.php';
    break;
  case 'promos': include 'promos.php';
    break;
  case 'psa': include 'psa.php';
    break;
  case 'sizzle': include 'sizzle.php';
    break;
  case 'talent': include 'talent.php';
    break;
  case 'steve-cohen': include 'directors/steve-cohen.php';
    break;
  default:
    include 'home.php';
}
?>