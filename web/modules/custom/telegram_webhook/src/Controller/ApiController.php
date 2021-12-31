<?php

namespace Drupal\telegram_webhook\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ApiController.
 */
class ApiController extends ControllerBase {
  public static function test(Request $request) {

    $json = $request->getContent();
    $data = json_decode($json, TRUE);
    $status = 200;
    $headers = [];
    return JsonResponse::create($data, $status, $headers);
  }
}
