<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jinketing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('pagination');
        $this->load->model('jinketingmodel');
        $this->load->model('jinketing_adminmodel');
    }

    public function index()
    {
        $json = $this->jinketingmodel->SlideData();
        $product = $this->jinketingmodel->mainList(1, null);
        $category = $this->jinketing_adminmodel->categorySelectData();

        $yutube = $this->jinketingmodel->yutubeData();

        $array = array(
            'slide' => $json['list'],
            'event'=>$json['list'],
            'product' => $product['list'],
            'count' => $product['count'],
            'category' => $category,
            'yutube' => $yutube['list']
        );
        $this->load->view('jinketing/index', $array);
    }

    public function about()
    {
        $this->load->view('jinketing/about');
    }
    public function event()
    {
        $json = $this->jinketingmodel->eventData();
        $array = array('list'=>$json['list']);
        $this->load->view('jinketing/event',$array);
    }

    public function eventData()
    {
        $json = $this->jinketingmodel->eventData();
        $this->json($json);
    }

    public function call($idx)
    {
        $json = $this->jinketingmodel->callData($idx);
        $array = array('data' => $json['data']);
        $this->load->view('jinketing/call', $array);
    }

    public function contactus()
    {
        $this->load->view('jinketing/contactus');
    }

    public function faq()
    {
        $json = $this->jinketingmodel->faqData();
        $array = array('list' => $json['list']);
        $this->load->view('jinketing/faq', $array);
    }

    public function get($idx)
    {
        $json = $this->jinketingmodel->getData($idx);
        $slide = explode(',', $json['data']->product_slide);
        $array = array('data' => $json['data'], 'slide' => $slide);
        $this->load->view('jinketing/get', $array);
    }

    public function SlideData()
    {
        $json = $this->jinketingmodel->SlideData();
        $this->json($json);
    }

    public function categoryData()
    {
        $json = $this->jinketingmodel->categoryData();
        $this->json($json);
    }

    public function mainList($page = 1, $idx = null)
    {
        $json = $this->jinketingmodel->mainList($page, $idx);
        $this->json($json);
    }

    public function getData($idx)
    {
        $json = $this->jinketingmodel->getData($idx);
        $this->json($json);
    }

    public function callData($idx)
    {
        $json = $this->jinketingmodel->callData($idx);
        $this->json($json);
    }

    public function faqData()
    {
        $json = $this->jinketingmodel->faqData();
        $this->json($json);
    }

    public function share() //보기
    {
        $this->load->view('jinketing/share');
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
        $json = $this->jinketingmodel->updateGet($idx);
        $this->json($json);
    }

    public function news($idx = 1) //보기
    {
        $json = $this->jinketingmodel->newsData($idx);
        $url = URL . 'main/news/';
        $this->pagings($json, $url);
        $this->load->view('jinketing/news', array('list' => $json));
    }

    public function news_view($idx)
    {
        $json = $this->jinketingmodel->newsDataView($idx);
        $this->load->view('jinketing/news_view', array('data' => $json['data'], 'pre' => $json['pre'], 'next' => $json['next']));
    }

    public function getMainListCate($category)
    {
        $product = $this->jinketingmodel->mainList(1, $category);

        $this->json($product);
    }
}
