<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tmon extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('tmonmodel');
        $this->load->model('tmon_adminmodel');
    }

    public function index()
    {
        $json = $this->tmonmodel->SlideData();
        $product = $this->tmonmodel->mainList(1,null);
        $category = $this->tmon_adminmodel->categorySelectData();

        $yutube = $this->tmonmodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('tmon/index',$array);
    }

    public function about()
    {
        $this->load->view('tmon/about');
    }

    public function event()
    {
        $json = $this->tmonmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('tmon/event',$array);
    }

    public function eventData()
    {
        $json = $this->tmonmodel->eventData();
        $this->json($json);
    }
    public function call($idx)
    {
        $json = $this->tmonmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('tmon/call',$array);
    }

    public function contactus()
    {
        $this->load->view('tmon/contactus');
    }

    public function faq()
    {
        $json = $this->tmonmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('tmon/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->tmonmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('tmon/get',$array);
    }

    public function SlideData()
    {
        $json = $this->tmonmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->tmonmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->tmonmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->tmonmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->tmonmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->tmonmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('tmon/share');
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
        $json = $this->tmonmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->tmonmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('tmon/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->tmonmodel->newsDataView($idx);
        $this->load->view('tmon/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->tmonmodel->mainList(1,$category);

        $this->json($product);
    }

}
