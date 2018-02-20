<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 上午1:25
 */

abstract class abstractFactoryMethod
{
    public abstract function parseBySection($section);
}

class koreanFactory extends abstractFactoryMethod{

    private $htmlStr;

    public function parseBySection($section)
    {
        switch ($section){
            case 'new':
                $this->htmlStr = new koreanNewSection();
                break;
            case 'hot':
                $this->htmlStr = new koreanHotSection();
                break;
            default:
//                echo 'default section';
                break;
        }

        $this->htmlStr->parse();
    }

}