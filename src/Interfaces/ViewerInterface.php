<?php


namespace App\Interfaces;


use Symfony\Component\HttpFoundation\Response;

interface ViewerInterface
{
    public function render(string $template, array $options): string;
}