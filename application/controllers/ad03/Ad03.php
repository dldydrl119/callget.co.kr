<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad03 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('ad03model');
        $this->load->model('ad03_adminmodel');
    }

    public function index()
    {
        $json = $this->ad03model->SlideData();
        $product = $this->ad03model->mainList(1,null);
        $category = $this->ad03_adminmodel->categorySelectData();

        $yutube = $this->ad03model->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad03/index',$array);
    }

    public function about()
    {
        $this->load->view('ad03/about');
    }
    public function event()
    {
        $json = $this->ad03model->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('ad03/event',$array);
    }

    public function eventData()
    {
        $json = $this->ad03model->eventData();
        $this->json($json);
    }

    public function call($idx)
    {
        $json = $this->ad03model->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('ad03/call',$array);
    }

    public function contactus()
    {
        $this->load->view('ad03/contactus');
    }

    public function faq()
    {
        $json = $this->ad03model->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('ad03/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->ad03model->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('ad03/get',$array);
    }

    public function SlideData()
    {
        $json = $this->ad03model->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->ad03model->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->ad03model->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->ad03model->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->ad03model->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->ad03model->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('ad03/share');
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
        $json = $this->ad03model->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->ad03model->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('ad03/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->ad03model->newsDataView($idx);
        $this->load->view('ad03/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->ad03model->mainList(1,$category);

        $this->json($product);
    }

}
