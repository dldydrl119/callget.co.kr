<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jpgroup extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('jpgroupmodel');
        $this->load->model('jpgroup_adminmodel');
    }

    public function index()
    {
        $json = $this->jpgroupmodel->SlideData();
        $product = $this->jpgroupmodel->mainList(1,null);
        $category = $this->jpgroup_adminmodel->categorySelectData();

        $yutube = $this->jpgroupmodel->yutubeData();

        $array = array(
            'slide'=>$json['list'],
            'product'=>$product['list'],
            'count'=>$product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('jpgroup/index',$array);
    }

    public function about()
    {
        $this->load->view('jpgroup/about');
    }

    public function event()
    {
        $this->load->view('jpgroup/event');
    }

    public function call($idx)
    {
        $json = $this->jpgroupmodel->callData($idx);
        $array = array('data'=>$json['data']);
        $this->load->view('jpgroup/call',$array);
    }

    public function contactus()
    {
        $this->load->view('jpgroup/contactus');
    }

    public function faq()
    {
        $json = $this->jpgroupmodel->faqData();
        $array = array('list'=>$json['list']);
        $this->load->view('jpgroup/faq',$array);
    }

    public function get($idx)
    {
        $json = $this->jpgroupmodel->getData($idx);
        $slide = explode(',',$json['data']->product_slide);
        $array = array('data'=>$json['data'],'slide'=>$slide);
        $this->load->view('jpgroup/get',$array);
    }

    public function SlideData()
    {
        $json = $this->jpgroupmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->jpgroupmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->jpgroupmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->jpgroupmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->jpgroupmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->jpgroupmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('jpgroup/share');
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
        $json = $this->jpgroupmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->jpgroupmodel->newsData($idx);
        $url = URL.'main/news/';
        $this->pagings($json, $url);
        $this->load->view('jpgroup/news',array('list'=>$json));
    }

    public function news_view($idx)
    {
        $json = $this->jpgroupmodel->newsDataView($idx);
        $this->load->view('jpgroup/news_view',array('data'=>$json['data'],'pre'=>$json['pre'],'next'=>$json['next']));
    }

    public function getMainListCate($category) {
        $product = $this->jpgroupmodel->mainList(1,$category);

        $this->json($product);
    }

}
