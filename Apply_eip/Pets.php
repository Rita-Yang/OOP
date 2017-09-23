<?php
/**
 * Created by PhpStorm.
 * User: Rita Yang
 * Date: 2017/9/18
 * Time: 上午11:07
 */

class Pets implements Active{
    private $name;
    private $move;
    private $height;

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function move($x,$y){
        $this->move = array('x' => $x, 'y' => $y);
        if($this->move['x'] >= 0){
            if($this->move['y'] >= 0){
                echo "向右移動".$this->move['x']."公尺，往前移動".$this->move['y']."公尺";
            }else{
                echo "向右移動".$this->move['x']."公尺，往後移動".$this->move['y']."公尺";
            }
        }else{
            if($this->move['y'] >= 0){
                echo "向左移動".$this->move['x']."公尺，往前移動".$this->move['y']."公尺";
            }else{
                echo "向左移動".$this->move['x']."公尺，往後移動".$this->move['y']."公尺";
            }
        }
    }
    public function jump($height){
        $this->height = $height;
        return $this->height;
    }

    public function eatFood()
    {
        echo $this->getName()."吃飽了";
    }

    public function drinkWater()
    {
        echo $this->getName()."喝水了";
    }
}
?>