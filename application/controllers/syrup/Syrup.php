<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syrup extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('syrupmodel');
        $this->load->model('syrup_adminmodel');
    }

    public function index()
    {
        $json = $this->syrupmodel->SlideData();
        $product = $this->syrupmodel->mainList(1,null);
        $category = $this->syrup_adminmodel->categorySelectData();

        $yutube = $this->syrupmodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('syrup/index',$array);
    }

    public function about()
    {
        $this->load->view('syrup/about');
    }

    public function event()
    {
        $json = $this->syrupmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('syrup/event',$array);
    }

    public function eventData()
    {
        $json = $this->syrupmodel->eventData();
        $this->json($json);
    }

    public function call($idx)
    {
        $json = $this->syrupmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('syrup/call',$array);
    }

    public function contactus()
    {
        $this->load->view('syrup/contactus');
    }

    public function faq()
    {
        $json = $this->syrupmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('syrup/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->syrupmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('syrup/get',$array);
    }

    public function SlideData()
    {
        $json = $this->syrupmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->syrupmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->syrupmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->syrupmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->syrupmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->syrupmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('syrup/share');
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
        $json = $this->syrupmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->syrupmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('syrup/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->syrupmodel->newsDataView($idx);
        $this->load->view('syrup/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->syrupmodel->mainList(1,$category);

        $this->json($product);
    }

}
