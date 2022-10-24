<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad04 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('ad04model');
        $this->load->model('ad04_adminmodel');
    }

    public function index()
    {
        
        $json = $this->ad04model->SlideData();
        $product = $this->ad04model->mainList(1,null);
        $product2 = $this->ad04model->mainList2(1,null);
        $category = $this->ad04_adminmodel->categorySelectData();
        $category2 = $this->ad04_adminmodel->category2SelectData();

        $yutube = $this->ad04model->yutubeData();

        $array = array(
            
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'product2'=>$product2['list'],
            'count'=>$product['count'],
            'category' => $category,
            'category2' => $category2,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad04/index',$array);
    }

    public function index2()
    {
        
        $json = $this->ad04model->SlideData();
        $product = $this->ad04model->mainList(1,null);
        $product2 = $this->ad04model->mainList2(1,null);
        $category = $this->ad04_adminmodel->categorySelectData();
        $category2 = $this->ad04_adminmodel->category2SelectData();

        $yutube = $this->ad04model->yutubeData();

        $array = array(
           
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'product2'=>$product2['list'],
            'count'=>$product['count'],
            'category' => $category,
            'category2' => $category2,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad04/index2',$array);
    }

    public function index3()
    {
        
        $json = $this->ad04model->SlideData();
        $product = $this->ad04model->mainList(1,null);
        $product2 = $this->ad04model->mainList2(1,null);
        $category = $this->ad04_adminmodel->categorySelectData();
        $category2 = $this->ad04_adminmodel->category2SelectData();

        $yutube = $this->ad04model->yutubeData();

        $array = array(
            
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'product2'=>$product2['list'],
            'count'=>$product['count'],
            'category' => $category,
            'category2' => $category2,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad04/index3',$array);
    }
    public function index4()
    {
        
        $event = $this->ad04model->EventData();
        $json = $this->ad04model->SlideData();
        $product = $this->ad04model->mainList(1,null);
        $product2 = $this->ad04model->mainList2(1,null);
        $category = $this->ad04_adminmodel->categorySelectData();
        $category2 = $this->ad04_adminmodel->category2SelectData();

        $yutube = $this->ad04model->yutubeData();

        $array = array(
            'event'=>$event['list'],
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'product2'=>$product2['list'],
            'count'=>$product['count'],
            'category' => $category,
            'category2' => $category2,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad04/index4',$array);
    }
    public function index5()
    {
      
        $json = $this->ad04model->SlideData();
        $product = $this->ad04model->mainList(1,null);
        $product2 = $this->ad04model->mainList2(1,null);
        $category = $this->ad04_adminmodel->categorySelectData();
        $category2 = $this->ad04_adminmodel->category2SelectData();

        $yutube = $this->ad04model->yutubeData();

        $array = array(
            
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'product2'=>$product2['list'],
            'count'=>$product['count'],
            'category' => $category,
            'category2' => $category2,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad04/index5',$array);
    }

    public function about()
    {
        $this->load->view('ad04/about');
    }

    public function event()
    {
        $json = $this->ad04model->EventData();
        $array = array(
            'event'=>$json['list']
        );
        $this->load->view('ad04/index4',$array);
    }
    public function eventData()
    {
        $json = $this->ad04model->eventData();
        $this->json($json);
    }

    public function call($idx)
    {
        $json = $this->ad04model->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('ad04/call',$array);
    }

    public function contactus()
    {
        $this->load->view('ad04/contactus');
    }

    public function faq()
    {
        $json = $this->ad04model->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('ad04/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->ad04model->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('ad04/get',$array);
    }

    public function SlideData()
    {
        $json = $this->ad04model->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->ad04model->categoryData();
        $this->json($json);
    }
    public function category2Data()
    {
        $json = $this->ad04model->category2Data();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->ad04model->mainList($page, $idx);
        $this->json($json);
    }
    public function mainList2($page = 1, $idx = null)
    {
        $json = $this->ad04model->mainList2($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->ad04model->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->ad04model->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->ad04model->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('ad04/share');
    }

    public function sendmail() {
        $json = $this->email();
        $this->json($json);
    }

    public function sendmail2() {
        $json = $this->email2();
        $this->json($json);
    }

    public function uploadimage() {
      $json = $this->upload('image');
      return $this->json($json);
    }

    public function updateGet($idx)
    {
        $json = $this->ad04model->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->ad04model->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('ad04/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->ad04model->newsDataView($idx);
        $this->load->view('ad04/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->ad04model->mainList(1,$category);

        $this->json($product);
    }
    public function getMainListCate2($category2) {
        $product2 = $this->ad04model->mainList2(1,$category2);

        $this->json($product2);
    }

}
