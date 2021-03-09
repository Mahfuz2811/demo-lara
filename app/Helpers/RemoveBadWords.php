<?php


namespace App\Helpers;


use Closure;

class RemoveBadWords implements Pipe
{
    public function handle($content, Closure $next)
    {
        // TODO: Implement handle() method.

//        $content = str_replace("Bad","*",$content);

        return $next($content);
    }
}