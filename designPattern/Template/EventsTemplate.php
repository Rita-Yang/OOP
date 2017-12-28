<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/28
 * Time: 下午7:16
 */

abstract class EventsTemplate
{
    public function showHTML()
    {
        $this->head();
        $this->contain();
        $this->footer();
    }
    public function head()
    {
        echo "=====HEAD=====<br>";
    }
    public abstract function contain();
    public function footer()
    {
        echo "<br>=====FOOTER=====<br>";
    }
}
class CarEvents extends EventsTemplate
{
    public function contain()
    {
        echo "CAR INFO.......";
    }
}