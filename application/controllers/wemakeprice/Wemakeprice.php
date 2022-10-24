<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wemakeprice extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('wemakepricemodel');
        $this->load->model('wemakeprice_adminmodel');
    }

    public function index()
    {
        $json = $this->wemakepricemodel->SlideData();
        $product = $this->wemakepricemodel->mainList(1,null);
        $category = $this->wemakeprice_adminmodel->categorySelectData();

        $yutube = $this->wemakepricemodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('wemakeprice/index',$array);
    }

    public function about()
    {
        $this->load->view('wemakeprice/about');
    }

    public function call($idx)
    {
        $json = $this->wemakepricemodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('wemakeprice/call',$array);
    }

    public function contactus()
    {
        $this->load->view('wemakeprice/contactus');
    }

    public function faq()
    {
        $json = $this->wemakepricemodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('wemakeprice/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->wemakepricemodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('wemakeprice/get',$array);
    }

    public function SlideData()
    {
        $json = $this->wemakepricemodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->wemakepricemodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->wemakepricemodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->wemakepricemodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->wemakepricemodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->wemakepricemodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('wemakeprice/share');
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
        $json = $this->wemakepricemodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->wemakepricemodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('wemakeprice/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->wemakepricemodel->newsDataView($idx);
        $this->load->view('wemakeprice/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->wemakepricemodel->mainList(1,$category);

        $this->json($product);
    }

}
