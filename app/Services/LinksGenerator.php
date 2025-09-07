<?php

namespace App\Services;

class LinksGenerator {

    private array $links = [];

    private function add(string $tipo, string $url, string $rel): void
    {
        $this->links[] = [
            'type' => $tipo,
            'url' => $url,
            'rel' => $rel
        ];
    }
    public function get(string $url, string $rel)   
    {
        $this->add('GET', $url, $rel);
    }
    public function post(string $url, string $rel)
    {
        $this->add('POST', $url, $rel);
    }
    public function put(string $url, string $rel)
    {
        $this->add('PUT', $url, $rel);
    }
    public function patch(string $url, string $rel)
    {
        $this->add('PATCH', $url, $rel);
    }
    public function delete(string $url, string $rel)
    {
        $this->add('DELETE', $url, $rel);
    }
}