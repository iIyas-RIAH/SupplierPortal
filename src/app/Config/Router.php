<?php

namespace app\Config;

class Router
{

    private array $handlers;
    private $NotFoundHandler;
    private const METHOD_POST = 'POST';
    private const METHOD_GET = 'GET';

    public function get(string $path, $handlers): void
    {
        $this->addHandler(self::METHOD_GET, $path, $handlers);
    }

    public function post(string $path, $handlers): void
    {
        $this->addHandler(self::METHOD_POST, $path, $handlers);
    }

    private function addHandler(string $method, string $path, $handlers): void
    {
        $this->handlers[$method . $path] = [
            'path' => $path,
            'method' => $method,
            'handler' => $handlers
        ];

    }

    public function addNotFoundHandler($handler): void
    {
        $this->NotFoundHandler = $handler;
    }

    public function run()
    {
        $requestUri = parse_url($_SERVER['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $_SERVER['REQUEST_METHOD'];

        $callback = null;

        foreach ($this->handlers as $handler) {
            if ($handler['path'] === $requestPath && $handler['method'] === $method) {
                $callback = $handler['handler'];
            }
        }

        if (!$callback) {
            header("HTTP/1.0 404 Not Found");
            if (empty($this->NotFoundHandler)) {
                $callback = $this->NotFoundHandler;
            }
            return;
        }

        call_user_func_array($callback, [
            array_merge($_GET, $_POST)
        ]);
    }
}
