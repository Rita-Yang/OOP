<?php
/**
 * Created by PhpStorm.
 * User: RitaYang
 * Date: 2019/1/5
 * Time: 13:40
 */

use PHPUnit\Framework\TestCase;
include_once ('ArticlePV.php');

class ArticlePvTest extends TestCase
{
    private $articlepv;

    public function setUp()
    {
        $jsonData = '[
          {
            "id": 315,
            "title": "於慢慢的結局。 “。",
            "summary": "們也就很有排斥異端之可慮就在他脊梁上用死勁的打了一種安分守己的兩個默默的站在洞外接東西了！” 阿Q便向著法場去的，後面的機關槍左近，所以瞞心昧己的飯碗去。 此後每逢揪住了看；還有閏土早晨，七斤沒有思。",
            "page_view": 4852,
            "show": 1,
            "created_at": "2019-01-03 06:21:22",
            "updated_at": "2019-01-03 06:21:22"
          },
          {
            "id": 88,
            "title": "外展開的嘴也說不出。",
            "summary": "那夜似的人物又鄙夷似的跳了三天，腫著眼，想些事。——一陣亂嚷，嚷道，“媽媽的……”阿Q蹌蹌踉踉出了決不開口。不料這卻還以為是叫小廝即刻撤銷了驅逐阿Q忽然尋到一種挾帶私心的不如此胡說此刻說，“內傳”。",
            "page_view": 5104,
            "show": 1,
            "created_at": "2019-01-03 06:21:21",
            "updated_at": "2019-01-03 06:21:21"
          },
          {
            "id": 220,
            "title": "飯，坐在身上也掛著。",
            "summary": "便要他熬夜，蚊子在那裏去；楊柳才吐出半句話，因為懶，還是先前不是正午，我的話，拔步便跑；我們又都是文章，纔踱回土穀祠，放下酒物了。我後無迴路，忽而似乎後來帶哭的聲音卻又形容不出口來，獨自發完議論可發。",
            "page_view": 9538,
            "show": 1,
            "created_at": "2019-01-03 06:21:21",
            "updated_at": "2019-01-03 06:21:21"
          }
        ]';
        $this->articlepv = new ArticlePV($jsonData);
    }

    public function testFormat()
    {
        $testData = array(
            array(
                'title' => '飯，坐在身上也掛著。',
                'summary' => '便要他熬夜，蚊子在那裏去；楊柳才吐出半句話，因為懶，還是先前不是正午，我的話，拔步便跑；我們又都是文章，纔踱回土穀祠，放下酒物了。我後無迴路，忽而似乎後來帶哭的聲音卻又形容不出口來，獨自發完議論可發。',
                'letter_count' => strlen('便要他熬夜，蚊子在那裏去；楊柳才吐出半句話，因為懶，還是先前不是正午，我的話，拔步便跑；我們又都是文章，纔踱回土穀祠，放下酒物了。我後無迴路，忽而似乎後來帶哭的聲音卻又形容不出口來，獨自發完議論可發。'),
                'page_view' => 9538
            ),
            array(
                'title' => '外展開的嘴也說不出。',
                'summary' => '那夜似的人物又鄙夷似的跳了三天，腫著眼，想些事。——一陣亂嚷，嚷道，“媽媽的……”阿Q蹌蹌踉踉出了決不開口。不料這卻還以為是叫小廝即刻撤銷了驅逐阿Q忽然尋到一種挾帶私心的不如此胡說此刻說，“內傳”。',
                'letter_count' => strlen('那夜似的人物又鄙夷似的跳了三天，腫著眼，想些事。——一陣亂嚷，嚷道，“媽媽的……”阿Q蹌蹌踉踉出了決不開口。不料這卻還以為是叫小廝即刻撤銷了驅逐阿Q忽然尋到一種挾帶私心的不如此胡說此刻說，“內傳”。'),
                'page_view' => 5104
            ),
            array(
                'title' => '於慢慢的結局。 “。',
                'summary' => '們也就很有排斥異端之可慮就在他脊梁上用死勁的打了一種安分守己的兩個默默的站在洞外接東西了！” 阿Q便向著法場去的，後面的機關槍左近，所以瞞心昧己的飯碗去。 此後每逢揪住了看；還有閏土早晨，七斤沒有思。',
                'letter_count' => strlen('們也就很有排斥異端之可慮就在他脊梁上用死勁的打了一種安分守己的兩個默默的站在洞外接東西了！” 阿Q便向著法場去的，後面的機關槍左近，所以瞞心昧己的飯碗去。 此後每逢揪住了看；還有閏土早晨，七斤沒有思。'),
                'page_view' => 4852
            )
        );
        $result = array(
            'highest_pv' => 9538,
            'avg_pv' => 6498,
            'articles' => $testData
        );
        $this->assertEquals($result, $this->articlepv->getDataFormat());

        $resultJson = json_encode($result);
        $this->assertEquals($resultJson, $this->articlepv->getJsonData($result));
    }
}