<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('ad08_adminmodel');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_list');
        $this->load->view('ad08admin/admin_footer');
    }

    public function login()
    {
        $this->load->view('ad08admin/admin_login');
    }

    public function loginData() //로그인 데이터
    {
        $json = $this->ad08_adminmodel->loginData();
        $this->json($json);
    }

    public function logout()
    {
        setcookie('ad08_id', '', 0);
        setcookie('ad08_idx', '', 0);
        header("location: " . URL . 'ad08/admin/login');
    }

    ////////콜겟////////////
    //슬라이드//
    public function slideList($idx = 1)
    {
        $this->ad08_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/ad08/admin/insertSlide";
        $url = URL . 'ad08/admin/slideList/';
        $col = ['번호', '정렬', '슬라이드 이름', '썸네일 이미지', ' URL 링크 주소', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->slidelistData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_slidelist', $data);
    }

    public function insertSlide()  //등록
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "메인 슬라이드 등록";
        $data = array('name' => $name);
        $this->load->view('ad08admin/admin_slideinsert', $data);
    }

    public function slideinsertData()
    {
        $json = $this->ad08_adminmodel->slideinsertData();
        $this->json($json);
    }

    public function slideedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "메인 슬라이드 수정";
        $json = $this->ad08_adminmodel->slideData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_slideinsert', $data);
    }

    public function slideUpdate()
    {
        $json = $this->ad08_adminmodel->slideUpdate();
        $this->json($json);
    }

    public function slideIdxsUpdate()
    {
        $json = $this->ad08_adminmodel->slideIdxsUpdate();
        $this->json($json);
    }

    public function slidedel($idx)
    {
        $json = $this->ad08_adminmodel->slidedel($idx);
        $this->json($json);
    }
    public function slideCount()
    {
        $json = $this->ad08_adminmodel->slideCount();
        $this->json($json);
    }

          //이벤트//
          public function eventList($idx = 1)
          {
              $this->ad08_nologin();
              $name = "메인 슬라이드 관리";
              $insert = "/ad08/admin/insertevent";
              $url = URL.'ad08/admin/eventList/';
              $col = ['번호','정렬','슬라이드 이름','썸네일 이미지',' URL 링크 주소', '등록 시간','수정', '삭제'];
              $button = $this->adminButton($col);
              $json = $this->ad08_adminmodel->eventlistData($idx);
              $this->paging($json, $url);
              $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);
      
              $this->load->view('ad08admin/admin_header');
              $this->load->view('ad08admin/admin_eventlist',$data);
          }
      
          public function insertevent()  //등록
          {
              $this->ad08_nologin();
              $this->load->view('ad08admin/admin_header');
              $name = "메인 슬라이드 등록";
              $data = array('name'=>$name);
              $this->load->view('ad08admin/admin_eventinsert',$data);
          }
      
          public function eventinsertData()
          {
              $json = $this->ad08_adminmodel->eventinsertData();
              $this->json($json);
          }
      
          public function eventedit($idx) //보기
          {
              $this->ad08_nologin();
              $name = "메인 슬라이드 수정";
              $json = $this->ad08_adminmodel->eventData($idx);
              $data = array('name'=>$name,'data'=>$json);
      
              $this->load->view('ad08admin/admin_header');
              $this->load->view('ad08admin/admin_eventinsert',$data);
          }
      
          public function eventUpdate()
          {
              $json = $this->ad08_adminmodel->eventUpdate();
              $this->json($json);
          }
      
          public function eventIdxsUpdate()
          {
              $json = $this->ad08_adminmodel->eventIdxsUpdate();
              $this->json($json);
          }
      
          public function eventdel($idx)
          {
              $json = $this->ad08_adminmodel->eventdel($idx);
              $this->json($json);
          }
          public function eventCount()
          {
              $json = $this->ad08_adminmodel->eventCount();
              $this->json($json);
          }

    //카테고리
    public function categoryList($idx = 1)
    {
        $this->ad08_nologin();
        $name = "카테고리 관리";
        $insert = "/ad08/admin/insertCategory";
        $url = URL . 'ad08/admin/categoryList/';
        $col = ['체크', '번호', '카테고리 이름', '카테고리 이미지', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->categoryListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_categorylist', $data);
    }

    public function insertCategory()  //등록
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "카테고리 등록";
        $data = array('name' => $name);
        $this->load->view('ad08admin/admin_categoryinsert', $data);
    }

    public function categoryinsertData()
    {
        $json = $this->ad08_adminmodel->categoryinsertData();
        $this->json($json);
    }

    public function categoryedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "카테고리 수정";
        $json = $this->ad08_adminmodel->categoryData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_categoryinsert', $data);
    }

    public function categoryUpdate()
    {
        $json = $this->ad08_adminmodel->categoryUpdate();
        $this->json($json);
    }

    public function categorydel($idx)
    {
        $json = $this->ad08_adminmodel->categorydel($idx);
        $this->json($json);
    }

    //자주 묻는 질문
    public function faqList($idx = 1)
    {
        $this->ad08_nologin();
        $name = "자주 묻는 질문 관리";
        $insert = "/ad08/admin/insertFaq";
        $url = URL . 'ad08/admin/faqList/';
        $col = ['번호', '정렬', '질문', '답변', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->faqListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_faqlist', $data);
    }

    public function insertFaq()  //등록
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "자주 묻는 질문 등록";
        $data = array('name' => $name);
        $this->load->view('ad08admin/admin_faqinsert', $data);
    }

    public function faqinsertData()
    {
        $json = $this->ad08_adminmodel->faqinsertData();
        $this->json($json);
    }

    public function faqedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "자주 묻는 질문 수정";
        $json = $this->ad08_adminmodel->faqData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_faqinsert', $data);
    }

    public function faqUpdate()
    {
        $json = $this->ad08_adminmodel->faqUpdate();
        $this->json($json);
    }

    public function faqIdxsUpdate()
    {
        $json = $this->ad08_adminmodel->faqIdxsUpdate();
        $this->json($json);
    }

    public function faqdel($idx)
    {
        $json = $this->ad08_adminmodel->faqdel($idx);
        $this->json($json);
    }

    public function faqCount()
    {
        $json = $this->ad08_adminmodel->faqCount();
        $this->json($json);
    }

    //상품 관리
    public function productList($idx = 1)
    {
        $this->ad08_nologin();
        $name = "상품 관리";
        $insert = "/ad08/admin/insertProduct";
        $url = URL . 'ad08/admin/productList/';
        $col = ['번호', '정렬', '카테고리', '제휴상품 명', '제휴 Call', '제휴사', '제휴사 로고', '제휴사 광고 영상', '상품사', '상품사 로고', '상품사 이미지', '상품명', '해시태그','call부제목', '남은기간', 'get한 수량', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->productListData($idx);

        //이전 페이지 마지막 데이터productList
        if ($idx > 1) {
            $temp = $this->ad08_adminmodel->productListData($idx - 1);
            $pre_one = [end($temp['list'])];
            $pre_one[0]->num = $json['list'][0]->num - 1;
        } else {
            $pre_one = [];
        }

        //다음 페이지 첫번째 데이터
        $next_one = $this->ad08_adminmodel->productListData($idx + 1);
        if (!empty($next_one['list'])) {
            $next_one['list'][0]->num = count($json['list']) + 1;
        }
        $this->paging($json, $url);
        $data = array(
            'name' => $name, 'col' => $col,
            'pre_one' => $pre_one,
            'list' => $json['list'],
            'next_one' => !empty($next_one['list']) ? [$next_one['list'][0]] : [],
            'adminbutton' => $button, 'insert' => $insert, 'page' => $idx
        );

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_productlist', $data);
    }

    public function insertProduct()
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "상품 등록";
        $category = $this->ad08_adminmodel->categorySelectData();
        $data = array('name' => $name, 'category' => $category);
        $this->load->view('ad08admin/admin_productinsert', $data);
    }

    public function productinsertData()
    {
        $json = $this->ad08_adminmodel->productinsertData();
        $this->json($json);
    }

    public function productedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "상품 수정";
        $category = $this->ad08_adminmodel->categorySelectData();
        $json = $this->ad08_adminmodel->productData($idx);
        $data = array('name' => $name, 'data' => $json, 'category' => $category);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_productinsert', $data);
    }

    public function productUpdateData()
    {
        $json = $this->ad08_adminmodel->productUpdateData();
        $this->json($json);
    }

    public function productIdxUpdate()
    {
        $json = $this->ad08_adminmodel->productIdxUpdate();
        $this->json($json);
    }

    public function productdel($idx)
    {
        $json = $this->ad08_adminmodel->productdel($idx);
        $this->json($json);
    }

    public function productCount()
    {
        $json = $this->ad08_adminmodel->productCount();
        $this->json($json);
    }

    public function productShow()
    {
        $json = $this->ad08_adminmodel->productShow();
        $this->json($json);
    }

    //소식
    public function newsList($idx = 1)
    {
        $this->ad08_nologin();
        $name = "소식 관리";
        $insert = "/ad08/admin/newsInsert";
        $url = URL . 'ad08/admin/newsList/';
        $col = ['번호', '정렬', '제목', '썸네일', '등록날짜', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->newsListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_newslist', $data);
    }

    public function newsInsert()
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "소식 등록";
        $data = array('name' => $name);
        $this->load->view('ad08admin/admin_newsinsert', $data);
    }

    public function newsInsertData()
    {
        $json = $this->ad08_adminmodel->newsInsertData();
        $this->json($json);
    }

    public function newsShow()
    {
        $json = $this->ad08_adminmodel->newsShow();
        $this->json($json);
    }

    public function newsedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "소식 수정";
        $json = $this->ad08_adminmodel->newsData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_newsinsert', $data);
    }

    public function newsUpdate()
    {
        $json = $this->ad08_adminmodel->newsUpdate();
        $this->json($json);
    }

    public function newsDel($idx)
    {
        $json = $this->ad08_adminmodel->newsDel($idx);
        $this->json($json);
    }

    public function newsIdxsUpdate()
    {
        $json = $this->ad08_adminmodel->newsIdxsUpdate();
        $this->json($json);
    }

    public function newsCount()
    {
        $json = $this->ad08_adminmodel->newsCount();
        $this->json($json);
    }

    public function hyunTest()
    {
        $json = $this->ad08_adminmodel->hyunTest();
        echo '<pre>';
        var_dump($json);
    }


    //슬라이드//
    public function yutubeList($idx = 1)
    {

        $this->ad08_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/ad08/admin/yutubeInsert";
        $url = URL . 'ad08/admin/yutubeList/';
        $col = ['번호', '정렬', ' URL 링크 주소', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->ad08_adminmodel->yutubelistData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_yutubelist', $data);
    }

    public function yutubeInsert()  //등록
    {
        $this->ad08_nologin();
        $this->load->view('ad08admin/admin_header');
        $name = "메인 유투브 등록";
        $data = array('name' => $name);
        $this->load->view('ad08admin/admin_yutubeinsert', $data);
    }

    public function yutubeinsertData()
    {
        $json = $this->ad08_adminmodel->yutubeinsertData();
        $this->json($json);
    }

    public function yutubeedit($idx) //보기
    {
        $this->ad08_nologin();
        $name = "메인 유투브 수정";
        $json = $this->ad08_adminmodel->yutubeData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('ad08admin/admin_header');
        $this->load->view('ad08admin/admin_yutubeinsert', $data);
    }

    public function yutubeUpdate()
    {
        $json = $this->ad08_adminmodel->yutubeUpdate();
        $this->json($json);
    }

    public function yutubeIdxsUpdate()
    {
        $json = $this->ad08_adminmodel->yutubeIdxsUpdate();
        $this->json($json);
    }

    public function yutubedel($idx)
    {
        $json = $this->ad08_adminmodel->yutubedel($idx);
        $this->json($json);
    }
    public function yutubeCount()
    {
        $json = $this->ad08_adminmodel->yutubeCount();
        $this->json($json);
    }
}
