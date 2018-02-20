<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/2/20
 * Time: 下午8:58
 */

abstract class BookListComposite
{
    abstract function getIdAndName();
    abstract function getBookById($id);
}
class Book extends BookListComposite{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getIdAndName(){
        echo $this->id."＿".$this->name."<br>";
    }
    public function getBookById($id){
        if($this->id == $id)
            return $this->id."＿".$this->name."<br>";
        else
            return NULL;
    }
}
class Categories extends BookListComposite{
    private $books = [];
    private $categoriesName;

    public function __construct($books, $categoriesName){
        $this->books = $books;
        $this->categoriesName = $categoriesName;
    }
    public function getIdAndName(){
        echo "Book List: ".$this->categoriesName."<br>";
        foreach ($this->books as $book){
            $book->getIdAndName();
        }
    }
    public function getBookById($id){
        $result = NULL;
        foreach($this->books as $book){
            $result = $book->getBookById($id);
            if($result != NULL){
                break;
            }
        }
        return $result;
    }
}