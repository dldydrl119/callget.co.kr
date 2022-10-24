<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nsmall extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('nsmallmodel');
        $this->load->model('nsmall_adminmodel');
    }

    public function index()
    {
        $json = $this->nsmallmodel->SlideData();
        $product = $this->nsmallmodel->mainList(1,null);
        $category = $this->nsmall_adminmodel->categorySelectData();

        $yutube = $this->nsmallmodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'event'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('nsmall/index',$array);
    }

    public function about()
    {
        $this->load->view('nsmall/about');
    }

    public function event()
    {
        $json = $this->nsmallmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('nsmall/event',$array);
    }

    public function eventData()
    {
        $json = $this->nsmallmodel->eventData();
        $this->json($json);
    }

    public function call($idx)
    {
        $json = $this->nsmallmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('nsmall/call',$array);
    }

    public function contactus()
    {
        $this->load->view('nsmall/contactus');
    }

    public function faq()
    {
        $json = $this->nsmallmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('nsmall/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->nsmallmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('nsmall/get',$array);
    }

    public function SlideData()
    {
        $json = $this->nsmallmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->nsmallmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->nsmallmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->nsmallmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->nsmallmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->nsmallmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('nsmall/share');
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
        $json = $this->nsmallmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->nsmallmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('nsmall/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->nsmallmodel->newsDataView($idx);
        $this->load->view('nsmall/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->nsmallmodel->mainList(1,$category);

        $this->json($product);
    }

}
