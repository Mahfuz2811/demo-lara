<?php


namespace App\Helpers;


use Closure;

class RemoveLinks implements Pipe
{
    public function handle($content, Closure $next)
    {
        // TODO: Implement handle() method.

//        $content = str_replace("Word","**",$content);

        return $next($content);
    }
}