<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ad06 extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('ad06model');
        $this->load->model('ad06_adminmodel');
    }

    public function index()
    {
        $json = $this->ad06model->SlideData();
        $product = $this->ad06model->mainList(1,null);
        $category = $this->ad06_adminmodel->categorySelectData();

        $yutube = $this->ad06model->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad06/index',$array);
    }

    public function about()
    {
        $this->load->view('ad06/about');
    }

    public function call($idx)
    {
        $json = $this->ad06model->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('ad06/call',$array);
    }

    public function contactus()
    {
        $this->load->view('ad06/contactus');
    }

    public function faq()
    {
        $json = $this->ad06model->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('ad06/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->ad06model->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('ad06/get',$array);
    }

    public function SlideData()
    {
        $json = $this->ad06model->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->ad06model->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->ad06model->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->ad06model->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->ad06model->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->ad06model->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('ad06/share');
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
        $json = $this->ad06model->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->ad06model->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('ad06/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->ad06model->newsDataView($idx);
        $this->load->view('ad06/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->ad06model->mainList(1,$category);

        $this->json($product);
    }

}
