<?php


namespace App\Helpers;

use Closure;

interface Pipe
{
    public function handle($content, Closure $next);
}