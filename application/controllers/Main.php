<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('mainmodel');
        $this->load->model('adminmodel');
    }

    public function index()
    {
        $json = $this->mainmodel->eventData();
        $json = $this->mainmodel->SlideData();
        $yutube = $this->mainmodel->yutubeData();

        $product = $this->mainmodel->mainList(1,null);
        $category = $this->adminmodel->categorySelectData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
            );

        $this->load->view('index',$array);
    }

    public function about()
    {
        $this->load->view('about');
    }

    public function event()
    {
        $json = $this->mainmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('event',$array);
    }

    public function call($idx)
    {
        $json = $this->mainmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('call',$array);
    }

    public function contactus()
    {
        $this->load->view('contactus');
    }

    public function faq()
    {
        $json = $this->mainmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('faq',$array);
    }

    public function get($idx)
    {
        $json = $this->mainmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('get',$array);
    }

    public function SlideData()
    {
        $json = $this->mainmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->mainmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->mainmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->mainmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->mainmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->mainmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('share');
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
        $json = $this->mainmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->mainmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->mainmodel->newsDataView($idx);
        $this->load->view('news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->mainmodel->mainList(1,$category);

        $this->json($product);
    }

}
