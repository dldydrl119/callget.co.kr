<?php
class ad03model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function yutubeData()
    {   //메인 슬라이드
        $sql = "SELECT yutube_idx, yutube_link
         FROM ad03_yutube ORDER BY yutube_idxs DESC";
        $list = $this->db->query($sql)->result();
        return array('return' => true, 'list' => $list);
    }


    public function SlideData()
    {   //메인 슬라이드
        $sql = "SELECT slide_idx, slide_image, slide_link, slide_name
         FROM ad03_slide ORDER BY slide_idxs DESC";
        $list = $this->db->query($sql)->result();
        return array('return' => true, 'list' => $list);
    }

    public function EventData()
    {   //이벤트
        $sql = "SELECT event_idx, event_image, event_link, event_name
         FROM ad03_event ORDER BY event_idxs DESC";
        $list = $this->db->query($sql)->result();
        return array('return' => true, 'list' => $list);
    }

    public function categoryData()
    {   //메인 카테고리
        $sql = "SELECT category_idx, category_name, category_image
                FROM ad03_category";
        $list = $this->db->query($sql)->result();
        return array('return' => true, 'list' => $list);
    }

    public function mainList($page = 1, $idx = null)
    {  //메인 리스트
        $limit = 6;
        $offset = $limit * ($page - 1);
        $where = '';
        if ($idx) {
            $where = " AND category_idx = " . $idx;
        }
        //        $sql="SELECT product_idx, TO_DAYS(CAST(product_time AS DATE)) -
        //                TO_DAYS(CAST(now() AS DATE)) AS dates,
        //                product_get, product_logo, insure_logo, product_thumb,
        //                product_company, insure_company, insure_name, product_name, product_slide,
        //                product_hashtag FROM ad03_product
        //                JOIN ad03_insure USING(product_idx)
        //                WHERE CURDATE() <= product_time ".$where."
        //                AND product_show = 1
        //                ORDER BY product_idxs DESC
        //                limit {$limit} offset {$offset} ";

        $sql = "SELECT product_idx, TO_DAYS(CAST(product_time AS DATE)) -
                TO_DAYS(CAST(now() AS DATE)) AS dates,
                product_get, product_logo, insure_logo, product_thumb,
                product_company, insure_company, insure_name, product_name,
                product_slide,product_numget,product_idx2,product_counttext,product_countcolor,
                product_hashtag FROM ad03_product
                JOIN ad03_insure USING(product_idx)
                WHERE CURDATE() <= product_time " . $where . "
                AND product_show = 1
                ORDER BY product_idxs DESC";
        $list = $this->db->query($sql)->result();

        $sql = "SELECT COUNT(*) count FROM ad03_product
                JOIN ad03_insure USING(product_idx)
                WHERE CURDATE() <= product_time" . $where;
        $count = $this->db->query($sql)->row()->count;
        return array('return' => true, 'list' => $list, 'count' => ceil($count / 6));
    }

    ///////////////////// 겟 페이지

    public function  getData($idx)
    {   //겟 데이터
        $sql = "SELECT product_idx, CONCAT_WS(',',IF(product_slidevideo='',null,product_slidevideo),product_slide) product_slide,
                product_company, insure_company, product_logo, insure_logo, product_name,product_namepop, product_titlepop,product_subpop,
                product_get, TO_DAYS(CAST(product_time AS DATE)) -
                TO_DAYS(CAST(now() AS DATE)) AS dates, product_hashtag, product_gettext
                 FROM ad03_product JOIN ad03_insure
                USING(product_idx) WHERE product_idx = ?";
        $array = array($idx);
        $data = $this->db->query($sql, $array)->row();
        return array('return' => true, 'data' => $data);
    }
    /////////////콜 페이지
    public function  callData($idx)
    {
        $sql = "SELECT product_idx, product_slide, product_name, insure_call,
                insure_logo, insure_company, insure_name, insure_video,product_namepop, product_titlepop,product_subpop,
                TO_DAYS(CAST(product_time AS DATE)) -
                TO_DAYS(CAST(now() AS DATE)) AS dates, insure_text,insure_text2,
                product_thumb,
                product_get FROM ad03_product JOIN ad03_insure
                USING(product_idx) WHERE product_idx = ?";
        $array = array($idx);
        $data = $this->db->query($sql, $array)->row();
        return array('return' => true, 'data' => $data);
    }
    //////// faq 페이지
    public function  faqData()
    {
        $sql = "SELECT faq_idx, faq_question, faq_answer FROM ad03_faq ORDER BY faq_idxs DESC";
        $list = $this->db->query($sql)->result();
        return array('return' => true, 'list' => $list);
    }
    public function  updateGet($idx)
    {
        $array = array($idx);
        $sql = "SELECT product_get FROM ad03_product WHERE product_idx = ?";
        $count = $this->db->query($sql, $array)->row()->product_get;
        $count += 1;
        $array = array($count, $idx);
        $sql = "UPDATE ad03_product SET product_get = ? WHERE product_idx = ?";
        $result = $this->db->query($sql, $array);
        if ($result) {
            return array('return' => true);
        }
    }
    ////소식 페이지
    public function newsData($page)
    {
        $limit = 6;
        $offset = $limit * ($page - 1);
        $sql = "SELECT news_idx, news_title, news_content, news_thumb, news_date
       FROM ad03_news
       WHERE news_show = 1
        ORDER BY news_idxs DESC
       limit {$limit} offset {$offset}";
        $list = $this->db->query($sql)->result();

        $sql = "SELECT COUNT(*) count FROM ad03_news";
        $count = $this->db->query($sql)->row()->count;

        return array('return' => true, 'list' => $list, 'count' => $count);
    }

    public function  newsDataView($idx)
    {
        $sql = "SELECT news_idx, news_title, news_content, news_date
              FROM ad03_news WHERE news_idx = ?";
        $array = array($idx);
        $data = $this->db->query($sql, $array)->row();

        $sql = "SELECT * FROM ad03_news WHERE news_idx = (SELECT MIN(news_idx) min FROM ad03_news WHERE news_idx > ? AND news_show = 1)";
        $array = array($idx);
        $min = $this->db->query($sql, $array)->row()->news_idx;

        $sql = "SELECT * FROM ad03_news WHERE news_idx = (SELECT MAX(news_idx) FROM ad03_news WHERE news_idx < ? AND news_show = 1)";
        $array = array($idx);
        $max = $this->db->query($sql, $array)->row()->news_idx;

        return array('data' => $data, 'next' => $max, 'pre' => $min);
    }
}
