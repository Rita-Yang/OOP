<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午1:02
 */

abstract class HTMLBuilder
{
    abstract function header();
    abstract function content();
    abstract function footer();
}
class indexBuilder extends HTMLBuilder{

    public function header(){
        echo "<h2>This is header.</h2>";
    }
    public function content(){
        echo "<p>This is banner.</p>";
        echo "<hr/>";
        echo "<p>This is content.</p>";
    }
    public function footer(){
        echo "<div>This is footer.</div>";
    }
}
class NewsBuilder extends HTMLBuilder{

    public function header(){
        echo "<div style='color: #666; font-size:16px;'>This is News Header.</div>";
    }
    public function content(){
        echo "<div style='color: #666; font-size:12px;'>This is News Content.</div>";
    }
    public function footer(){
        echo "<div style='color: #666; font-size: 10px;'>This is News Footer.</div>";

    }
}
class HTMLDirector{

    private $htmlBuilder;

    public function __construct(HTMLBuilder $htmlBuilder){
        $this->htmlBuilder =$htmlBuilder;
    }
    public function buildPage(){
        $this->htmlBuilder->header();
        $this->htmlBuilder->content();
        $this->htmlBuilder->footer();
    }
}