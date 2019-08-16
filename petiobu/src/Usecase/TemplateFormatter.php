<?php
declare(strict_types=1);

namespace App\Usecase;

interface TemplateFormatter
{
    public function format($data);
}