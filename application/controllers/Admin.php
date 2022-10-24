<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('adminmodel');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_list');
        $this->load->view('admin/admin_footer');
    }

    public function login()
    {
        $this->load->view('admin/admin_login');
    }

    public function loginData() //로그인 데이터
    {
        $json = $this->adminmodel->loginData();
        $this->json($json);
    }

    public function logout()
    {
        //        session_destroy();
        setcookie('id', '', 0);
        setcookie('idx', '', 0);
        header("location: " . URL . 'admin/login');
    }

    ////////콜겟////////////
    //슬라이드//
    public function slideList($idx = 1)
    {
        $this->nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/admin/insertSlide";
        $url = URL . 'admin/slideList/';
        $col = ['번호', '정렬', '슬라이드 이름', '썸네일 이미지', ' URL 링크 주소', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->slidelistData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_slidelist', $data);
    }

    public function insertSlide()  //등록
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "메인 슬라이드 등록";
        $data = array('name' => $name);
        $this->load->view('admin/admin_slideinsert', $data);
    }

    public function slideinsertData()
    {
        $json = $this->adminmodel->slideinsertData();
        $this->json($json);
    }

    public function slideedit($idx) //보기
    {
        $this->nologin();
        $name = "메인 슬라이드 수정";
        $json = $this->adminmodel->slideData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_slideinsert', $data);
    }

    public function slideUpdate()
    {
        $json = $this->adminmodel->slideUpdate();
        $this->json($json);
    }

    public function slideIdxsUpdate()
    {
        $json = $this->adminmodel->slideIdxsUpdate();
        $this->json($json);
    }

    public function slidedel($idx)
    {
        $json = $this->adminmodel->slidedel($idx);
        $this->json($json);
    }
    public function slideCount()
    {
        $json = $this->adminmodel->slideCount();
        $this->json($json);
    }


      //이벤트//
      public function eventList($idx = 1)
      {
          $this->nologin();
          $name = "메인 슬라이드 관리";
          $insert = "/admin/insertevent";
          $url = URL . 'admin/eventList/';
          $col = ['번호', '정렬', '이벤트 이름', '썸네일 이미지', ' URL 링크 주소', '등록 시간', '수정', '삭제'];
          $button = $this->adminButton($col);
          $json = $this->adminmodel->eventlistData($idx);
          $this->paging($json, $url);
          $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);
  
          $this->load->view('admin/admin_header');
          $this->load->view('admin/admin_eventlist', $data);
      }
  
      public function insertevent()  //등록
      {
          $this->nologin();
          $this->load->view('admin/admin_header');
          $name = "메인 슬라이드 등록";
          $data = array('name' => $name);
          $this->load->view('admin/admin_eventinsert', $data);
      }
  
      public function eventinsertData()
      {
          $json = $this->adminmodel->eventinsertData();
          $this->json($json);
      }
  
      public function eventedit($idx) //보기
      {
          $this->nologin();
          $name = "메인 슬라이드 수정";
          $json = $this->adminmodel->eventData($idx);
          $data = array('name' => $name, 'data' => $json);
  
          $this->load->view('admin/admin_header');
          $this->load->view('admin/admin_eventinsert', $data);
      }
  
      public function eventUpdate()
      {
          $json = $this->adminmodel->eventUpdate();
          $this->json($json);
      }
  
      public function eventIdxsUpdate()
      {
          $json = $this->adminmodel->eventIdxsUpdate();
          $this->json($json);
      }
  
      public function eventdel($idx)
      {
          $json = $this->adminmodel->eventdel($idx);
          $this->json($json);
      }
      public function eventCount()
      {
          $json = $this->adminmodel->eventCount();
          $this->json($json);
      }


    //카테고리
    public function categoryList($idx = 1)
    {
        $this->nologin();
        $name = "카테고리 관리";
        $insert = "/admin/insertCategory";
        $url = URL . 'admin/categoryList/';
        $col = ['체크', '번호', '카테고리 이름', '카테고리 이미지', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->categoryListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_categorylist', $data);
    }

    public function insertCategory()  //등록
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "카테고리 등록";
        $data = array('name' => $name);
        $this->load->view('admin/admin_categoryinsert', $data);
    }

    public function categoryinsertData()
    {
        $json = $this->adminmodel->categoryinsertData();
        $this->json($json);
    }

    public function categoryedit($idx) //보기
    {
        $this->nologin();
        $name = "카테고리 수정";
        $json = $this->adminmodel->categoryData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_categoryinsert', $data);
    }

    public function categoryUpdate()
    {
        $json = $this->adminmodel->categoryUpdate();
        $this->json($json);
    }

    public function categorydel($idx)
    {
        $json = $this->adminmodel->categorydel($idx);
        $this->json($json);
    }

    //자주 묻는 질문
    public function faqList($idx = 1)
    {
        $this->nologin();
        $name = "자주 묻는 질문 관리";
        $insert = "/admin/insertFaq";
        $url = URL . 'admin/faqList/';
        $col = ['번호', '정렬', '질문', '답변', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->faqListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_faqlist', $data);
    }

    public function insertFaq()  //등록
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "자주 묻는 질문 등록";
        $data = array('name' => $name);
        $this->load->view('admin/admin_faqinsert', $data);
    }

    public function faqinsertData()
    {
        $json = $this->adminmodel->faqinsertData();
        $this->json($json);
    }

    public function faqedit($idx) //보기
    {
        $this->nologin();
        $name = "자주 묻는 질문 수정";
        $json = $this->adminmodel->faqData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_faqinsert', $data);
    }

    public function faqUpdate()
    {
        $json = $this->adminmodel->faqUpdate();
        $this->json($json);
    }

    public function faqIdxsUpdate()
    {
        $json = $this->adminmodel->faqIdxsUpdate();
        $this->json($json);
    }

    public function faqdel($idx)
    {
        $json = $this->adminmodel->faqdel($idx);
        $this->json($json);
    }

    public function faqCount()
    {
        $json = $this->adminmodel->faqCount();
        $this->json($json);
    }

    //상품 관리
    public function productList($idx = 1)
    {
        $this->nologin();
        $name = "상품 관리";
        $insert = "/admin/insertProduct";
        $url = URL . 'admin/productList/';
        $col = ['번호', '정렬', '카테고리', '제휴상품 명', '제휴 Call', '제휴사', '제휴사 로고', '제휴사 광고 영상', '상품사', '상품사 로고', '상품사 이미지', '상품명','상품상세이름', '해시태그', '남은기간', 'get한 수량', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->productListData($idx);

        //이전 페이지 마지막 데이터productList
        if ($idx > 1) {
            $temp = $this->adminmodel->productListData($idx - 1);
            $pre_one = [end($temp['list'])];
            $pre_one[0]->num = $json['list'][0]->num - 1;
        } else {
            $pre_one = [];
        }

        //다음 페이지 첫번째 데이터
        $next_one = $this->adminmodel->productListData($idx + 1);
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

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_productlist', $data);
    }

    public function insertProduct()
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "상품 등록";
        $category = $this->adminmodel->categorySelectData();
        $data = array('name' => $name, 'category' => $category);
        $this->load->view('admin/admin_productinsert', $data);
    }

    public function productinsertData()
    {
        $json = $this->adminmodel->productinsertData();
        $this->json($json);
    }

    public function productedit($idx) //보기
    {
        $this->nologin();
        $name = "상품 수정";
        $category = $this->adminmodel->categorySelectData();
        $json = $this->adminmodel->productData($idx);
        $data = array('name' => $name, 'data' => $json, 'category' => $category);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_productinsert', $data);
    }

    public function productUpdateData()
    {
        $json = $this->adminmodel->productUpdateData();
        $this->json($json);
    }

    public function productIdxUpdate()
    {
        $json = $this->adminmodel->productIdxUpdate();
        $this->json($json);
    }

    public function productdel($idx)
    {
        $json = $this->adminmodel->productdel($idx);
        $this->json($json);
    }

    public function productCount()
    {
        $json = $this->adminmodel->productCount();
        $this->json($json);
    }

    public function productShow()
    {
        $json = $this->adminmodel->productShow();
        $this->json($json);
    }

    //소식
    public function newsList($idx = 1)
    {
        $this->nologin();
        $name = "소식 관리";
        $insert = "/admin/newsInsert";
        $url = URL . 'admin/newsList/';
        $col = ['번호', '정렬', '제목', '썸네일', '등록날짜', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->newsListData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_newslist', $data);
    }

    public function newsInsert()
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "소식 등록";
        $data = array('name' => $name);
        $this->load->view('admin/admin_newsinsert', $data);
    }

    public function newsInsertData()
    {
        $json = $this->adminmodel->newsInsertData();
        $this->json($json);
    }

    public function newsShow()
    {
        $json = $this->adminmodel->newsShow();
        $this->json($json);
    }

    public function newsedit($idx) //보기
    {
        $this->nologin();
        $name = "소식 수정";
        $json = $this->adminmodel->newsData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_newsinsert', $data);
    }

    public function newsUpdate()
    {
        $json = $this->adminmodel->newsUpdate();
        $this->json($json);
    }

    public function newsDel($idx)
    {
        $json = $this->adminmodel->newsDel($idx);
        $this->json($json);
    }

    public function newsIdxsUpdate()
    {
        $json = $this->adminmodel->newsIdxsUpdate();
        $this->json($json);
    }

    public function newsCount()
    {
        $json = $this->adminmodel->newsCount();
        $this->json($json);
    }

    //슬라이드//
    public function yutubeList($idx = 1)
    {
        $this->nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/admin/yutubeInsert";
        $url = URL . 'admin/yutubeList/';
        $col = ['번호', '정렬', ' URL 링크 주소', '등록 시간', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->adminmodel->yutubelistData($idx);
        $this->paging($json, $url);
        $data = array('name' => $name, 'col' => $col, 'list' => $json['list'], 'adminbutton' => $button, 'insert' => $insert, 'page' => $idx);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_yutubelist', $data);
    }

    public function yutubeInsert()  //등록
    {
        $this->nologin();
        $this->load->view('admin/admin_header');
        $name = "메인 유투브 등록";
        $data = array('name' => $name);
        $this->load->view('admin/admin_yutubeinsert', $data);
    }

    public function yutubeinsertData()
    {
        $json = $this->adminmodel->yutubeinsertData();
        $this->json($json);
    }

    public function yutubeedit($idx) //보기
    {
        $this->nologin();
        $name = "메인 슬라이드 수정";
        $json = $this->adminmodel->yutubeData($idx);
        $data = array('name' => $name, 'data' => $json);

        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_yutubeinsert', $data);
    }

    public function yutubeUpdate()
    {
        $json = $this->adminmodel->yutubeUpdate();
        $this->json($json);
    }

    public function yutubeIdxsUpdate()
    {
        $json = $this->adminmodel->yutubeIdxsUpdate();
        $this->json($json);
    }

    public function yutubedel($idx)
    {
        $json = $this->adminmodel->yutubedel($idx);
        $this->json($json);
    }
    public function yutubeCount()
    {
        $json = $this->adminmodel->yutubeCount();
        $this->json($json);
    }
}
