<?php

namespace Core;

/**
 * Base controller
 *
 * PHP version 7.0.2
 */
abstract class Controller
{
  /**
   * Parameters from the matched route
   * @var array
   */
  protected $route_params = [];

  /**
   * Class constructor
   *
   * @param array $route_params   Parameters for the route_params#
   * @return void
   */
   public function __construct($route_params)
   {
     $this->route_params = $route_params;
   }
}


 ?>
