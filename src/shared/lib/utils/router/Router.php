<?php
require_once ROOT . "shared/lib/utils/error/RouteNotFoundException.php";

class Router {
  private array $routes;

  public function routes(): array {
    return $this->routes;
  }

  public function register(string $requestMethod, string $route, callable|array $action): self {
    $this->routes[$requestMethod][$route] = $action;

    return $this;
  }

  public function get(string $route, callable|array $action): self {
    return $this->register('get', $route, $action);
  }

  public function post(string $route, callable|array $action): self {
    return $this->register('post', $route, $action);
  }

  public function resolve(string $requestUri, string $requestMethod) {
    $route = str_replace("/phphw/exam", "", explode("?", $requestUri)[0]);
    $action = $this->routes[$requestMethod][$route] ?? null;

    if (!$action) {
      throw new RouteNotFoundedException();
    }

    if (is_callable($action)) {
      return call_user_func($action);
    }

    if (is_array($action)) {
      [$class, $method] = $action;

      if (class_exists($class)) {
        $class = new $class();

        if (method_exists($class, $method)) {
          return call_user_func_array([$class, $method], []);
        }
      }
    }

    throw new RouteNotFoundedException();
  }
}