<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 上午1:40
 */

abstract class abstractSectionMethod
{
    public abstract function parse();
}

class koreanNewSection extends abstractSectionMethod {

    public function parse()
    {
        echo "韓國藝人最新商品區塊.....";
    }

}

class koreanHotSection extends abstractSectionMethod {

    public function parse()
    {
        echo "韓國藝人熱門商品區塊.....";
    }

}
