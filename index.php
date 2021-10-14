<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\Gallery;
use App\Controllers\MailController;
use Bramus\Router\Router;
use eftec\bladeone\BladeOne;

/**
 * function to render blade file
 */
function render($template, $params = []) {
  $views             = __DIR__ . '/views';
  $cache             = __DIR__ . '/storage/cache';
  $blade             = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
  $params['version'] = '1.0.2';
  exit($blade->run($template, $params));
}

/*----------------- Routes --------------------*/
$router = new Router();

/** show home page */
$router->get('/', function () {
  render('homepage');
});

/* services pages */
$router->get('/gallery/{type}', function ($type) {
  new Gallery($type);
});

/** Contact Us API */
$router->post('/contact_us', function () {

  try {
    $mail = new MailController();
    $mail->send();
  } catch (Exception $e) {
    http_response_code(500);
    exit(json_encode(array("status" => 'fail', "response" => $e->getMessage())));
  }
});

/** show 404 error */
$router->set404(function () {
  header('HTTP/1.1 404 Not Found');
  die();
});

$router->run();