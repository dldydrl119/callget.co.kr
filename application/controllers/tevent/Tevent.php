<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tevent extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('teventmodel');
        $this->load->model('tevent_adminmodel');
    }

    public function index()
    {
        $json = $this->teventmodel->SlideData();
        $product = $this->teventmodel->mainList(1,null);
        $category = $this->tevent_adminmodel->categorySelectData();

        $yutube = $this->teventmodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('tevent/index',$array);
    }

    public function about()
    {
        $this->load->view('tevent/about');
    }

    public function event()
    {
        $json = $this->teventmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('tevent/event',$array);
    }

    public function eventData()
    {
        $json = $this->teventmodel->eventData();
        $this->json($json);
    }
    public function call($idx)
    {
        $json = $this->teventmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('tevent/call',$array);
    }

    public function contactus()
    {
        $this->load->view('tevent/contactus');
    }

    public function faq()
    {
        $json = $this->teventmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('tevent/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->teventmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('tevent/get',$array);
    }

    public function SlideData()
    {
        $json = $this->teventmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->teventmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->teventmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->teventmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->teventmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->teventmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('tevent/share');
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
        $json = $this->teventmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->teventmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('tevent/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->teventmodel->newsDataView($idx);
        $this->load->view('tevent/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->teventmodel->mainList(1,$category);

        $this->json($product);
    }

}
