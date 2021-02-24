<?php

namespace App\UserInterface\Viewer;

interface ViewerInterface
{
    public function render(string $template, array $options): string;
}
