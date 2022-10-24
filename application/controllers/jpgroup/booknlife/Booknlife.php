<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booknlife extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('booknlifemodel');
        $this->load->model('booknlife_adminmodel');
    }

    public function index()
    {
        $json = $this->booknlifemodel->SlideData();
        $product = $this->booknlifemodel->mainList(1,null);
        $category = $this->booknlife_adminmodel->categorySelectData();

        $array = array(
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category);
        $this->load->view('booknlife/index',$array);
    }

    public function about()
    {
        $this->load->view('booknlife/about');
    }

    public function call($idx)
    {
        $json = $this->booknlifemodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('booknlife/call',$array);
    }

    public function contactus()
    {
        $this->load->view('booknlife/contactus');
    }

    public function faq()
    {
        $json = $this->booknlifemodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('booknlife/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->booknlifemodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('booknlife/get',$array);
    }

    public function SlideData()
    {
        $json = $this->booknlifemodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->booknlifemodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->booknlifemodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->booknlifemodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->booknlifemodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->booknlifemodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('booknlife/share');
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
        $json = $this->booknlifemodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->booknlifemodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('booknlife/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->booknlifemodel->newsDataView($idx);
        $this->load->view('booknlife/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->booknlifemodel->mainList(1,$category);

        $this->json($product);
    }

}
