<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ad09 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('ad09model');
        $this->load->model('ad09_adminmodel');
    }

    public function index()
    {
        $json = $this->ad09model->SlideData();
        $product = $this->ad09model->mainList(1, null);
        $category = $this->ad09_adminmodel->categorySelectData();

        $yutube = $this->ad09model->yutubeData();

        $array = array(
            'slide' => $json['list'],
            'event'=>$json['list'],
            'product' => $product['list'],
            'count' => $product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('ad09/index', $array);
    }

    public function about()
    {
        $this->load->view('ad09/about');
    }

    public function event()
    {
        $json = $this->ad09model->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('ad09/event',$array);
    }

    public function eventData()
    {
        $json = $this->ad09model->eventData();
        $this->json($json);
    }
    
    public function call($idx)
    {
        $json = $this->ad09model->callData($idx);
        $array = array('data' => $json['data']);
        $this->load->view('ad09/call', $array);
    }

    public function contactus()
    {
        $this->load->view('ad09/contactus');
    }

    public function faq()
    {
        $json = $this->ad09model->faqData();
        $array = array('list' => $json['list']);
        $this->load->view('ad09/faq', $array);
    }

    public function get($idx)
    {
        $json = $this->ad09model->getData($idx);
        $slide = explode(',', $json['data']->product_slide);
        $array = array('data' => $json['data'], 'slide' => $slide);
        $this->load->view('ad09/get', $array);
    }

    public function SlideData()
    {
        $json = $this->ad09model->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->ad09model->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->ad09model->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->ad09model->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->ad09model->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->ad09model->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('ad09/share');
    }

    public function sendmail()
    {
        $json = $this->email();
        $this->json($json);
    }

    public function sendmail2()
    {
        $json = $this->email2();
        $this->json($json);
    }

    public function uploadimage()
    {
        $json = $this->upload('image');
        return $this->json($json);
    }

    public function updateGet($idx)
    {
        $json = $this->ad09model->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->ad09model->newsData($idx);
        $url = URL . 'main/news/';
        $this->pagings($json, $url);
        $this->load->view('ad09/news', array('list' => $json));
    }

    public function news_view($idx)
    {
        $json = $this->ad09model->newsDataView($idx);
        $this->load->view('ad09/news_view', array('data' => $json['data'], 'pre' => $json['pre'], 'next' => $json['next']));
    }

    public function getMainListCate($category)
    {
        $product = $this->ad09model->mainList(1, $category);

        $this->json($product);
    }
}
