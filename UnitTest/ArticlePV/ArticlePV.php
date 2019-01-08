<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2019/1/5
 * Time: 13:54
 */

class ArticlePV
{
    private $datas;
    private $highest_pv;
    private $avg_pv;
    private $articles;
    private $articleFormat;

    public function __construct($jsonData)
    {
        $this->datas = json_decode($jsonData,true);
    }

    private function getHighest_pv()
    {
        foreach($this->datas as $data) {
            $pvArray[] = $data['page_view'];
        }
        rsort($pvArray);
        return $pvArray[0];
    }

    private function getAvg_pv()
    {
        $pvTotal = 0;
        foreach($this->datas as $data) {
            $pvTotal += $data['page_view'];
        }
        $avg_pv = ceil($pvTotal / count($this->datas));
        return $avg_pv;
    }

    private function getArticlesBySort()
    {
        foreach ($this->datas as $key => $article) {
            $this->articleFormat[$key]['title'] = $article['title'];
            $this->articleFormat[$key]['summary'] = $article['summary'];
            $this->articleFormat[$key]['letter_count'] = strlen($article['summary']);
            $this->articleFormat[$key]['page_view'] = $article['page_view'];
        }
        usort($this->articleFormat, function($a, $b){
            if($a['page_view'] == $b['page_view']) return 0;
            return ($a['page_view'] < $b['page_view']) ? 1 : -1;
        });
        return $this->articleFormat;
    }

    public function getDataFormat()
    {
        $result = array(
            'highest_pv' => $this->getHighest_pv(),
            'avg_pv' => $this->getAvg_pv(),
            'articles' => $this->getArticlesBySort()
        );
        return $result;
    }

    public function getJsonData($result)
    {
        return json_encode($result);
    }
}