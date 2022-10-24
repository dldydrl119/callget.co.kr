<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('booknlife_adminmodel');
        $this->load->library('pagination');
    }

	public function index()
	{
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_list');
        $this->load->view('booknlifeadmin/admin_footer');
	}

    public function login()
    {
        $this->load->view('booknlifeadmin/admin_login');
    }
    

    public function loginData() //로그인 데이터
    {
        $json = $this->booknlife_adminmodel->loginData();
        $this->json($json);
    }

    public function logout() {
        setcookie('booknlife_id', '', 0);
        setcookie('booknlife_idx', '', 0);
        header("location: ".URL.'booknlife/admin/login');
    }

    ////////콜겟////////////
    //슬라이드//
    public function slideList($idx = 1)
    {
        $this->booknlife_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/booknlife/admin/insertSlide";
        $url = URL.'booknlife/admin/slideList/';
        $col = ['번호','정렬','슬라이드 이름','썸네일 이미지',' URL 링크 주소', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->slidelistData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_slidelist',$data);
    }

    public function insertSlide()  //등록
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "메인 슬라이드 등록";
        $data = array('name'=>$name);
        $this->load->view('booknlifeadmin/admin_slideinsert',$data);
    }

    public function slideinsertData()
    {
        $json = $this->booknlife_adminmodel->slideinsertData();
        $this->json($json);
    }

    public function slideedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "메인 슬라이드 수정";
        $json = $this->booknlife_adminmodel->slideData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_slideinsert',$data);
    }

    public function slideUpdate()
    {
        $json = $this->booknlife_adminmodel->slideUpdate();
        $this->json($json);
    }

	public function slideIdxsUpdate()
    {
        $json = $this->booknlife_adminmodel->slideIdxsUpdate();
        $this->json($json);
    }

    public function slidedel($idx)
    {
        $json = $this->booknlife_adminmodel->slidedel($idx);
        $this->json($json);
    }
    public function slideCount()
    {
        $json = $this->booknlife_adminmodel->slideCount();
        $this->json($json);
    }
      //이벤트//
      public function eventList($idx = 1)
      {
          $this->booknlife_nologin();
          $name = "메인 슬라이드 관리";
          $insert = "/booknlife/admin/insertevent";
          $url = URL.'booknlife/admin/eventList/';
          $col = ['번호','정렬','슬라이드 이름','썸네일 이미지',' URL 링크 주소', '등록 시간','수정', '삭제'];
          $button = $this->adminButton($col);
          $json = $this->booknlife_adminmodel->eventlistData($idx);
          $this->paging($json, $url);
          $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);
  
          $this->load->view('booknlifeadmin/admin_header');
          $this->load->view('booknlifeadmin/admin_eventlist',$data);
      }
  
      public function insertevent()  //등록
      {
          $this->booknlife_nologin();
          $this->load->view('booknlifeadmin/admin_header');
          $name = "메인 슬라이드 등록";
          $data = array('name'=>$name);
          $this->load->view('booknlifeadmin/admin_eventinsert',$data);
      }
  
      public function eventinsertData()
      {
          $json = $this->booknlife_adminmodel->eventinsertData();
          $this->json($json);
      }
  
      public function eventedit($idx) //보기
      {
          $this->booknlife_nologin();
          $name = "메인 슬라이드 수정";
          $json = $this->booknlife_adminmodel->eventData($idx);
          $data = array('name'=>$name,'data'=>$json);
  
          $this->load->view('booknlifeadmin/admin_header');
          $this->load->view('booknlifeadmin/admin_eventinsert',$data);
      }
  
      public function eventUpdate()
      {
          $json = $this->booknlife_adminmodel->eventUpdate();
          $this->json($json);
      }
  
      public function eventIdxsUpdate()
      {
          $json = $this->booknlife_adminmodel->eventIdxsUpdate();
          $this->json($json);
      }
  
      public function eventdel($idx)
      {
          $json = $this->booknlife_adminmodel->eventdel($idx);
          $this->json($json);
      }
      public function eventCount()
      {
          $json = $this->booknlife_adminmodel->eventCount();
          $this->json($json);
      }

    //카테고리
    public function categoryList($idx = 1)
    {
        $this->booknlife_nologin();
        $name = "카테고리 관리";
        $insert = "/booknlife/admin/insertCategory";
        $url = URL.'booknlife/admin/categoryList/';
        $col = ['체크','번호','카테고리 이름', '카테고리 이미지', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->categoryListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_categorylist',$data);
    }

    public function insertCategory()  //등록
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "카테고리 등록";
        $data = array('name'=>$name);
        $this->load->view('booknlifeadmin/admin_categoryinsert',$data);
    }

    public function categoryinsertData()
    {
        $json = $this->booknlife_adminmodel->categoryinsertData();
        $this->json($json);
    }

    public function categoryedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "카테고리 수정";
        $json = $this->booknlife_adminmodel->categoryData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_categoryinsert',$data);
    }

    public function categoryUpdate()
    {
        $json = $this->booknlife_adminmodel->categoryUpdate();
        $this->json($json);
    }

    public function categorydel($idx)
    {
        $json = $this->booknlife_adminmodel->categorydel($idx);
        $this->json($json);
    }

    //자주 묻는 질문
    public function faqList($idx = 1)
    {
        $this->booknlife_nologin();
        $name = "자주 묻는 질문 관리";
        $insert = "/booknlife/admin/insertFaq";
        $url = URL.'booknlife/admin/faqList/';
        $col = ['번호','정렬', '질문', '답변','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->faqListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_faqlist',$data);
    }

    public function insertFaq()  //등록
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "자주 묻는 질문 등록";
        $data = array('name'=>$name);
        $this->load->view('booknlifeadmin/admin_faqinsert',$data);
    }

    public function faqinsertData()
    {
        $json = $this->booknlife_adminmodel->faqinsertData();
        $this->json($json);
    }

    public function faqedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "자주 묻는 질문 수정";
        $json = $this->booknlife_adminmodel->faqData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_faqinsert',$data);
    }

    public function faqUpdate()
    {
        $json = $this->booknlife_adminmodel->faqUpdate();
        $this->json($json);
    }

    public function faqIdxsUpdate()
    {
        $json = $this->booknlife_adminmodel->faqIdxsUpdate();
        $this->json($json);
    }

    public function faqdel($idx)
    {
        $json = $this->booknlife_adminmodel->faqdel($idx);
        $this->json($json);
    }

    public function faqCount()
    {
        $json = $this->booknlife_adminmodel->faqCount();
        $this->json($json);
    }

    //상품 관리
    public function productList($idx = 1)
    {
        $this->booknlife_nologin();
        $name = "상품 관리";
        $insert = "/booknlife/admin/insertProduct";
        $url = URL.'booknlife/admin/productList/';
        $col = ['번호','정렬', '카테고리', '제휴상품 명', '제휴 Call', '제휴사', '제휴사 로고', '제휴사 광고 영상', '상품사', '상품사 로고', '상품사 이미지', '상품명', '해시태그', '남은기간', 'get한 수량','노출 여부','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->productListData($idx);

        //이전 페이지 마지막 데이터
        if($idx > 1) {
            $temp =$this->booknlife_adminmodel->productListData($idx-1);
            $pre_one = [end($temp['list'])];
            $pre_one[0]->num = $json['list'][0]->num -1;
        } else {
            $pre_one = [];
        }

        //다음 페이지 첫번째 데이터
        $next_one = $this->booknlife_adminmodel->productListData($idx + 1);
        if(!empty($next_one['list'])) {
            $next_one['list'][0]->num = count($json['list'])+1;
        }

        $this->paging($json, $url);
        $data = array(
            'name'=>$name,'col'=>$col,
            'pre_one' => $pre_one,
            'list'=>$json['list'],
            'next_one'=> !empty($next_one['list']) ? [$next_one['list'][0]] : [],
            'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx
        );

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_productlist',$data);
    }

    public function insertProduct()
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "상품 등록";
        $category = $this->booknlife_adminmodel->categorySelectData();
        $data = array('name'=>$name,'category'=>$category);
        $this->load->view('booknlifeadmin/admin_productinsert',$data);
    }

    public function productinsertData()
    {
        $json = $this->booknlife_adminmodel->productinsertData();
        $this->json($json);
    }

    public function productedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "상품 수정";
        $category = $this->booknlife_adminmodel->categorySelectData();
        $json = $this->booknlife_adminmodel->productData($idx);
        $data = array('name'=>$name,'data'=>$json,'category'=>$category);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_productinsert',$data);
    }

    public function productUpdateData()
    {
        $json = $this->booknlife_adminmodel->productUpdateData();
        $this->json($json);
    }

	public function productIdxUpdate()
    {
        $json = $this->booknlife_adminmodel->productIdxUpdate();
        $this->json($json);
    }

    public function productdel($idx)
    {
        $json = $this->booknlife_adminmodel->productdel($idx);
        $this->json($json);
    }

  	public function productCount()
    {
        $json = $this->booknlife_adminmodel->productCount();
        $this->json($json);
    }

  	public function productShow()
    {
        $json = $this->booknlife_adminmodel->productShow();
        $this->json($json);
    }

    //소식
    public function newsList($idx = 1)
    {
        $this->booknlife_nologin();
        $name = "소식 관리";
        $insert = "/booknlife/admin/newsInsert";
        $url = URL.'booknlife/admin/newsList/';
        $col = ['번호','정렬', '제목', '썸네일', '등록날짜', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->newsListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_newslist',$data);
    }

    public function newsInsert()
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "소식 등록";
        $data = array('name'=>$name);
        $this->load->view('booknlifeadmin/admin_newsinsert',$data);
    }

    public function newsInsertData()
    {
        $json = $this->booknlife_adminmodel->newsInsertData();
        $this->json($json);
    }

    public function newsShow()
    {
        $json = $this->booknlife_adminmodel->newsShow();
        $this->json($json);
    }

    public function newsedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "소식 수정";
        $json = $this->booknlife_adminmodel->newsData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_newsinsert',$data);
    }

    public function newsUpdate()
    {
        $json = $this->booknlife_adminmodel->newsUpdate();
        $this->json($json);
    }

    public function newsDel($idx)
    {
        $json = $this->booknlife_adminmodel->newsDel($idx);
        $this->json($json);
    }

    public function newsIdxsUpdate()
    {
        $json = $this->booknlife_adminmodel->newsIdxsUpdate();
        $this->json($json);
    }

    public function newsCount()
    {
        $json = $this->booknlife_adminmodel->newsCount();
        $this->json($json);
    }

	public function hyunTest() {
		$json = $this->booknlife_adminmodel->hyunTest();
		echo '<pre>';
		var_dump($json);
	}


    //슬라이드//
    public function yutubeList($idx = 1)
    {

        $this->booknlife_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/booknlife/admin/yutubeInsert";
        $url = URL.'booknlife/admin/yutubeList/';
        $col = ['번호','정렬',' URL 링크 주소', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->booknlife_adminmodel->yutubelistData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_yutubelist',$data);
    }

    public function yutubeInsert()  //등록
    {
        $this->booknlife_nologin();
        $this->load->view('booknlifeadmin/admin_header');
        $name = "메인 유투브 등록";
        $data = array('name'=>$name);
        $this->load->view('booknlifeadmin/admin_yutubeinsert',$data);
    }

    public function yutubeinsertData()
    {
        $json = $this->booknlife_adminmodel->yutubeinsertData();
        $this->json($json);
    }

    public function yutubeedit($idx) //보기
    {
        $this->booknlife_nologin();
        $name = "메인 유투브 수정";
        $json = $this->booknlife_adminmodel->yutubeData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('booknlifeadmin/admin_header');
        $this->load->view('booknlifeadmin/admin_yutubeinsert',$data);
    }

    public function yutubeUpdate()
    {
        $json = $this->booknlife_adminmodel->yutubeUpdate();
        $this->json($json);
    }

    public function yutubeIdxsUpdate()
    {
        $json = $this->booknlife_adminmodel->yutubeIdxsUpdate();
        $this->json($json);
    }

    public function yutubedel($idx)
    {
        $json = $this->booknlife_adminmodel->yutubedel($idx);
        $this->json($json);
    }
    public function yutubeCount()
    {
        $json = $this->booknlife_adminmodel->yutubeCount();
        $this->json($json);
    }
}
