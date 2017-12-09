<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2017/12/8
 * Time: 下午11:34
 */

class productState
{
    private $product;
    private $editBtn;
    private $checkBtn;
    private $publishBtn;
    private $removeBtn;

    public function __construct($state)
    {
        switch ($state){
            case 'edit':
                $this->product = new editState($this);
                break;
            case 'check':
                $this->product = new checkState($this);
                break;
            case 'publish':
                $this->product = new publishState($this);
                break;
            default:
                $this->product = new removeState($this);
                break;
        }
    }


    public function setDisable($editBtn, $checkBtn, $publishBtn, $removeBtn){
        $this->editBtn = $editBtn;
        $this->checkBtn = $checkBtn;
        $this->publishBtn = $publishBtn;
        $this->removeBtn = $removeBtn;
    }

    public function getEditBtn(){
        echo $this->editBtn;
    }

    public function getCheckBtn(){
        echo $this->checkBtn;
    }

    public function getPublishBtn(){
        echo $this->publishBtn;
    }

    public function getRemoveBtn(){
        echo $this->removeBtn;
    }
}