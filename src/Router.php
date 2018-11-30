<?php

namespace CodeBlog\Router;

/**
 * Class CodeBlog Router
 *
 * @author Whallysson Avelino <https://github.com/whallysson>
 * @package CodeBlog\Router
 */
class Router extends Dispatch {
    /**
     * Router constructor.
     *
     * @param string $projectUrl
     * @param null|string $separator
     */
    public function __construct(string $projectUrl, ?string $separator = ":") {
        parent::__construct($projectUrl, $separator);
    }

    /**
     * @param string $route
     * @param string|callable $handler
     */
    public function post(string $route, $handler): void {
        $this->add("POST", $route, $handler);
    }

    /**
     * @param string $route
     * @param string|callable $handler
     */
    public function get(string $route, $handler): void {
        $this->add("GET", $route, $handler);
    }

    /**
     * @param string $route
     * @param string|callable $handler
     */
    public function put(string $route, $handler): void {
        $this->add("PUT", $route, $handler);
    }

    /**
     * @param string $route
     * @param string|callable $handler
     */
    public function patch(string $route, $handler): void {
        $this->add("PATCH", $route, $handler);
    }

    /**
     * @param string $route
     * @param string|callable $handler
     */
    public function delete(string $route, $handler): void {
        $this->add("DELETE", $route, $handler);
    }
}