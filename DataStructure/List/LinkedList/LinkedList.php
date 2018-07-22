<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2018/7/21
 * Time: 下午2:45
 */

require_once "Node.php";
require_once "AbstractLinkedList.php";

class LinkedList extends AbstractLinkedList
{
    public $list;

    public function create($arr)
    {
        $head = new Node();
        $pointer = $head; //不直接用$head是避免覆蓋掉首個節點
        foreach ($arr as $v)
        {
            $next = new Node();
            $next->data = $v;
            while($pointer->next)
            {
                $pointer = $pointer->next; //如果有下個地址，就把下個地址的新節點交給$pointer指標
            }
            $pointer->next = $next;
        }
        $this->list = $head;
    }

    public function printList()
    {
        $node = $this->list->next;
        if(!$node)
        {
            echo '<pre>Empty</pre>';
        }
        while($node!=null)
        {
            echo "<pre>";
            print_r($node->data);
            echo "</pre>";
            $node = $node->next;
        }
    }

    /**
     * @param $file
     * @param $key
     * @return bool
     * @description : 尋訪list 直到尋訪個數>$key，執行key值上下各一個元素的next變更，時間複雜度為O(1)~O(n)
     */
    public function insertElement($key, $file)
    {
        $p = $this->list;
        for($count=0; $p->next && $count<$key; $count++)
        {
            $p = $p->next;
        }
        $newNode = new Node();
        $newNode->data = $file;
        $newNode->next = $p->next;
        $p->next = $newNode;
    }

    public function deleteElement($key)
    {
        $p = $this->list;
        $count=0;
        while($p->next && $count<$key)
        {
            $p = $p->next;
            $count++;
        }
        $nextNode = $p->next;
        if(!$nextNode || $count > $key)
        {
            echo "<pre>第".$key."個鍵不存在任何元素</pre>";
        }
        $p->next = $nextNode->next;
        unset($nextNode);
    }

    public function getElement($key)
    {
        $p = $this->list->next;
        for($count = 1; $p && $count < $key; $count++)
        {
            $p = $p->next;
        }

        echo "<pre>".$p->data."</pre>";

    }

    public function clearList()
    {
        $this->list = null;
    }

}