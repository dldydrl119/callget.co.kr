<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('syrup_adminmodel');
        $this->load->library('pagination');
    }

	public function index()
	{
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_list');
        $this->load->view('syrupadmin/admin_footer');
	}

    public function login()
    {
        $this->load->view('syrupadmin/admin_login');
    }

    public function loginData() //로그인 데이터
    {
        $json = $this->syrup_adminmodel->loginData();
        $this->json($json);
    }

    public function logout() {
        setcookie('syrup_id', '', 0);
        setcookie('syrup_idx', '', 0);
        header("location: ".URL.'syrup/admin/login');
    }

    ////////콜겟////////////
    //슬라이드//
    public function slideList($idx = 1)
    {
        $this->syrup_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/syrup/admin/insertSlide";
        $url = URL.'syrup/admin/slideList/';
        $col = ['번호','정렬','슬라이드 이름','썸네일 이미지',' URL 링크 주소', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->syrup_adminmodel->slidelistData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_slidelist',$data);
    }

    public function insertSlide()  //등록
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "메인 슬라이드 등록";
        $data = array('name'=>$name);
        $this->load->view('syrupadmin/admin_slideinsert',$data);
    }

    public function slideinsertData()
    {
        $json = $this->syrup_adminmodel->slideinsertData();
        $this->json($json);
    }

    public function slideedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "메인 슬라이드 수정";
        $json = $this->syrup_adminmodel->slideData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_slideinsert',$data);
    }

    public function slideUpdate()
    {
        $json = $this->syrup_adminmodel->slideUpdate();
        $this->json($json);
    }

	public function slideIdxsUpdate()
    {
        $json = $this->syrup_adminmodel->slideIdxsUpdate();
        $this->json($json);
    }

    public function slidedel($idx)
    {
        $json = $this->syrup_adminmodel->slidedel($idx);
        $this->json($json);
    }
    public function slideCount()
    {
        $json = $this->syrup_adminmodel->slideCount();
        $this->json($json);
    }


          //이벤트//
          public function eventList($idx = 1)
          {
              $this->syrup_nologin();
              $name = "메인 슬라이드 관리";
              $insert = "/syrup/admin/insertevent";
              $url = URL.'syrup/admin/eventList/';
              $col = ['번호','정렬','슬라이드 이름','썸네일 이미지',' URL 링크 주소', '등록 시간','수정', '삭제'];
              $button = $this->adminButton($col);
              $json = $this->syrup_adminmodel->eventlistData($idx);
              $this->paging($json, $url);
              $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);
      
              $this->load->view('syrupadmin/admin_header');
              $this->load->view('syrupadmin/admin_eventlist',$data);
          }
      
          public function insertevent()  //등록
          {
              $this->syrup_nologin();
              $this->load->view('syrupadmin/admin_header');
              $name = "메인 슬라이드 등록";
              $data = array('name'=>$name);
              $this->load->view('syrupadmin/admin_eventinsert',$data);
          }
      
          public function eventinsertData()
          {
              $json = $this->syrup_adminmodel->eventinsertData();
              $this->json($json);
          }
      
          public function eventedit($idx) //보기
          {
              $this->syrup_nologin();
              $name = "메인 슬라이드 수정";
              $json = $this->syrup_adminmodel->eventData($idx);
              $data = array('name'=>$name,'data'=>$json);
      
              $this->load->view('syrupadmin/admin_header');
              $this->load->view('syrupadmin/admin_eventinsert',$data);
          }
      
          public function eventUpdate()
          {
              $json = $this->syrup_adminmodel->eventUpdate();
              $this->json($json);
          }
      
          public function eventIdxsUpdate()
          {
              $json = $this->syrup_adminmodel->eventIdxsUpdate();
              $this->json($json);
          }
      
          public function eventdel($idx)
          {
              $json = $this->syrup_adminmodel->eventdel($idx);
              $this->json($json);
          }
          public function eventCount()
          {
              $json = $this->syrup_adminmodel->eventCount();
              $this->json($json);
          }
    //카테고리
    public function categoryList($idx = 1)
    {
        $this->syrup_nologin();
        $name = "카테고리 관리";
        $insert = "/syrup/admin/insertCategory";
        $url = URL.'syrup/admin/categoryList/';
        $col = ['체크','번호','카테고리 이름', '카테고리 이미지', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->syrup_adminmodel->categoryListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_categorylist',$data);
    }

    public function insertCategory()  //등록
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "카테고리 등록";
        $data = array('name'=>$name);
        $this->load->view('syrupadmin/admin_categoryinsert',$data);
    }

    public function categoryinsertData()
    {
        $json = $this->syrup_adminmodel->categoryinsertData();
        $this->json($json);
    }

    public function categoryedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "카테고리 수정";
        $json = $this->syrup_adminmodel->categoryData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_categoryinsert',$data);
    }

    public function categoryUpdate()
    {
        $json = $this->syrup_adminmodel->categoryUpdate();
        $this->json($json);
    }

    public function categorydel($idx)
    {
        $json = $this->syrup_adminmodel->categorydel($idx);
        $this->json($json);
    }

    //자주 묻는 질문
    public function faqList($idx = 1)
    {
        $this->syrup_nologin();
        $name = "자주 묻는 질문 관리";
        $insert = "/syrup/admin/insertFaq";
        $url = URL.'syrup/admin/faqList/';
        $col = ['번호','정렬', '질문', '답변','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->syrup_adminmodel->faqListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_faqlist',$data);
    }

    public function insertFaq()  //등록
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "자주 묻는 질문 등록";
        $data = array('name'=>$name);
        $this->load->view('syrupadmin/admin_faqinsert',$data);
    }

    public function faqinsertData()
    {
        $json = $this->syrup_adminmodel->faqinsertData();
        $this->json($json);
    }

    public function faqedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "자주 묻는 질문 수정";
        $json = $this->syrup_adminmodel->faqData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_faqinsert',$data);
    }

    public function faqUpdate()
    {
        $json = $this->syrup_adminmodel->faqUpdate();
        $this->json($json);
    }

    public function faqIdxsUpdate()
    {
        $json = $this->syrup_adminmodel->faqIdxsUpdate();
        $this->json($json);
    }

    public function faqdel($idx)
    {
        $json = $this->syrup_adminmodel->faqdel($idx);
        $this->json($json);
    }

    public function faqCount()
    {
        $json = $this->syrup_adminmodel->faqCount();
        $this->json($json);
    }

    //상품 관리
    public function productList($idx = 1)
    {
        $this->syrup_nologin();
        $name = "상품 관리";
        $insert = "/syrup/admin/insertProduct";
        $url = URL.'syrup/admin/productList/';
        $col = ['번호','정렬', '카테고리', '제휴상품 명', '제휴 Call', '제휴사', '제휴사 로고', '제휴사 광고 영상', '상품사', '상품사 로고', '상품사 이미지', '상품명', '해시태그', '남은기간', 'get한 수량','노출 여부','수정', '삭제'];
        $button = $this->adminButton($col);



        $json = $this->syrup_adminmodel->productListData($idx);

        //이전 페이지 마지막 데이터
        if($idx > 1) {
            $temp =$this->syrup_adminmodel->productListData($idx-1);
            $pre_one = [end($temp['list'])];
            $pre_one[0]->num = $json['list'][0]->num -1;
        } else {
            $pre_one = [];
        }

        //다음 페이지 첫번째 데이터
        $next_one = $this->syrup_adminmodel->productListData($idx + 1);
        if(!empty($next_one['list'])) {
            $next_one['list'][0]->num = count($json['list'])+1;
        }

        $this->paging($json, $url);
        $this->pagination->cur_page = $idx;
        $data = array(
            'name'=>$name,'col'=>$col,
            'pre_one' => $pre_one,
            'list'=>$json['list'],
            'next_one'=> !empty($next_one['list']) ? [$next_one['list'][0]] : [],
            'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx
        );


        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_productlist',$data);
    }

    public function insertProduct()
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "상품 등록";
        $category = $this->syrup_adminmodel->categorySelectData();
        $data = array('name'=>$name,'category'=>$category);
        $this->load->view('syrupadmin/admin_productinsert',$data);
    }

    public function productinsertData()
    {
        $json = $this->syrup_adminmodel->productinsertData();
        $this->json($json);
    }

    public function productedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "상품 수정";
        $category = $this->syrup_adminmodel->categorySelectData();
        $json = $this->syrup_adminmodel->productData($idx);
        $data = array('name'=>$name,'data'=>$json,'category'=>$category);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_productinsert',$data);
    }

    public function productUpdateData()
    {
        $json = $this->syrup_adminmodel->productUpdateData();
        $this->json($json);
    }

	public function productIdxUpdate()
    {
        $json = $this->syrup_adminmodel->productIdxUpdate();
        $this->json($json);
    }

    public function productdel($idx)
    {
        $json = $this->syrup_adminmodel->productdel($idx);
        $this->json($json);
    }

  	public function productCount()
    {
        $json = $this->syrup_adminmodel->productCount();
        $this->json($json);
    }

  	public function productShow()
    {
        $json = $this->syrup_adminmodel->productShow();
        $this->json($json);
    }

    //소식
    public function newsList($idx = 1)
    {
        $this->syrup_nologin();
        $name = "소식 관리";
        $insert = "/syrup/admin/newsInsert";
        $url = URL.'syrup/admin/newsList/';
        $col = ['번호','정렬', '제목', '썸네일', '등록날짜', '노출 여부', '수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->syrup_adminmodel->newsListData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_newslist',$data);
    }

    public function newsInsert()
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "소식 등록";
        $data = array('name'=>$name);
        $this->load->view('syrupadmin/admin_newsinsert',$data);
    }

    public function newsInsertData()
    {
        $json = $this->syrup_adminmodel->newsInsertData();
        $this->json($json);
    }

    public function newsShow()
    {
        $json = $this->syrup_adminmodel->newsShow();
        $this->json($json);
    }

    public function newsedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "소식 수정";
        $json = $this->syrup_adminmodel->newsData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_newsinsert',$data);
    }

    public function newsUpdate()
    {
        $json = $this->syrup_adminmodel->newsUpdate();
        $this->json($json);
    }

    public function newsDel($idx)
    {
        $json = $this->syrup_adminmodel->newsDel($idx);
        $this->json($json);
    }

    public function newsIdxsUpdate()
    {
        $json = $this->syrup_adminmodel->newsIdxsUpdate();
        $this->json($json);
    }

    public function newsCount()
    {
        $json = $this->syrup_adminmodel->newsCount();
        $this->json($json);
    }

	public function hyunTest() {
		$json = $this->syrup_adminmodel->hyunTest();
		echo '<pre>';
		var_dump($json);
	}


    //슬라이드//
    public function yutubeList($idx = 1)
    {

        $this->syrup_nologin();
        $name = "메인 슬라이드 관리";
        $insert = "/syrup/admin/yutubeInsert";
        $url = URL.'syrup/admin/yutubeList/';
        $col = ['번호','정렬',' URL 링크 주소', '등록 시간','수정', '삭제'];
        $button = $this->adminButton($col);
        $json = $this->syrup_adminmodel->yutubelistData($idx);
        $this->paging($json, $url);
        $data = array('name'=>$name,'col'=>$col,'list'=>$json['list'],'adminbutton'=>$button,'insert'=>$insert,'page'=>$idx);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_yutubelist',$data);
    }

    public function yutubeInsert()  //등록
    {
        $this->syrup_nologin();
        $this->load->view('syrupadmin/admin_header');
        $name = "메인 유투브 등록";
        $data = array('name'=>$name);
        $this->load->view('syrupadmin/admin_yutubeinsert',$data);
    }

    public function yutubeinsertData()
    {
        $json = $this->syrup_adminmodel->yutubeinsertData();
        $this->json($json);
    }

    public function yutubeedit($idx) //보기
    {
        $this->syrup_nologin();
        $name = "메인 유투브 수정";
        $json = $this->syrup_adminmodel->yutubeData($idx);
        $data = array('name'=>$name,'data'=>$json);

        $this->load->view('syrupadmin/admin_header');
        $this->load->view('syrupadmin/admin_yutubeinsert',$data);
    }

    public function yutubeUpdate()
    {
        $json = $this->syrup_adminmodel->yutubeUpdate();
        $this->json($json);
    }

    public function yutubeIdxsUpdate()
    {
        $json = $this->syrup_adminmodel->yutubeIdxsUpdate();
        $this->json($json);
    }

    public function yutubedel($idx)
    {
        $json = $this->syrup_adminmodel->yutubedel($idx);
        $this->json($json);
    }
    public function yutubeCount()
    {
        $json = $this->syrup_adminmodel->yutubeCount();
        $this->json($json);
    }
}
