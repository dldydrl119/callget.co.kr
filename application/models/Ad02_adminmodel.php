<?php
class Ad02_adminmodel extends CI_Model {
    function __construct(){
        parent::__construct();

        $this->load->database();
    }
    // 로그인
    public function insert_login() {
        // $_POST['id'] = 'ad02';
        // $_POST['pass'] = 'admin';
        foreach($_POST as $key => $value ){
            $key = 'admin_'.$key;
            if($key == "admin_pass") {
                $value = password_hash($value , PASSWORD_DEFAULT, ['cost'=>12]);
            }
            $array[$key] = $value;
        }
        $result = $this->db->insert('ad02_admin', $array);
        return array('return'=>$result);
    }

    public function loginData() {
        // $_POST['id'] = 'ad02';
        // $_POST['pass'] = 'admin';
        $sql="SELECT admin_idx, admin_id, admin_pass FROM ad02_admin WHERE admin_id = ?";
        $array = array($_POST['id']);
        $data = $this->db->query($sql, $array)->row();

        if (password_verify($_POST['pass'] ,$data->admin_pass) ) {

            setcookie('ad02_id', $_POST['id'], time() + 3600);
            setcookie('ad02_idx', $data->admin_idx, time() + 3600);
            return array('return'=>true);
        }
        else {
            return array('return'=>false);
        }
    }
//slide -----------------------------------------------------------------
    public function slideListData($page = 1) {
        $table = "ad02_slide";
        $limit=10;
        $offset=$limit*($page-1);
        $sql="SELECT slide_idx, @rownum:=@rownum+1 num, slide_name, slide_image, slide_link, slide_date
                FROM ad02_slide, (SELECT @rownum:=0) TMP
                ORDER BY slide_idxs DESC
              limit {$limit} offset {$offset}";
        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM $table";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function slideinsertData() {
        $table = "ad02_slide";

        $sql="SELECT slide_idxs FROM ad02_slide order by slide_idxs DESC LIMIT 1";
        $slide_idxs = $this->db->query($sql)->row()->slide_idxs + 1;
        foreach($_POST as $key => $value ){
            $key = 'slide_'.$key;
            $array[$key] = $value;
        }
        $array['slide_date'] = date('Y-m-d H:i:s');
        $array['slide_idxs'] = $slide_idxs;
        $result = $this->db->insert($table, $array);
        return array('return'=>$result);
    }

    public function slideData($idx) {
        $array = array($idx);
        $sql="SELECT slide_idx, slide_name, slide_image, slide_link
            FROM ad02_slide WHERE slide_idx = ?";
        return $this->db->query($sql, $array)->row();
    }

    public function slideUpdate() {
        $array = array($_POST['name'], $_POST['image'], $_POST['link'], $_POST['idx']);
        $sql= "UPDATE ad02_slide SET slide_name = ?, slide_image = ?,
                slide_link = ? WHERE slide_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function slideIdxsUpdate() {
        $idxs = $_POST['idxs'];
        $idx = $_POST['idx'];
        $table = "ad02_slide";
        for($i=0; $i<count($idxs); $i++) {
            $sql= "UPDATE ad02_slide SET slide_idxs = ? WHERE slide_idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return'=>$result);
    }

    public function slidedel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_slide WHERE slide_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function slideCount() {
        $sql="SELECT COUNT(*) count  FROM ad02_slide";
        return $this->db->query($sql, $array)->row()->count;
    }

        //이벤트 -----------------------------------------------------------------
        public function eventListData($page = 1) {
            $table = "ad02_event";
            $limit=10;
            $offset=$limit*($page-1);
            $sql="SELECT event_idx, @rownum:=@rownum+1 num, event_name, event_image, event_link, event_date
                    FROM ad02_event, (SELECT @rownum:=0) TMP
                    ORDER BY event_idxs DESC
                  limit {$limit} offset {$offset}";
            $result = $this->db->query($sql)->result();
    
            $sql="SELECT COUNT(*) count FROM $table";
            $count = $this->db->query($sql)->row();
    
            return array('return'=>true,'list'=>$result,'count'=>$count->count);
        }
    
        public function eventinsertData() {
            $table = "ad02_event";
    
            $sql="SELECT event_idxs FROM ad02_event order by event_idxs DESC LIMIT 1";
            $event_idxs = $this->db->query($sql)->row()->event_idxs + 1;
            foreach($_POST as $key => $value ){
                $key = 'event_'.$key;
                $array[$key] = $value;
            }
            $array['event_date'] = date('Y-m-d H:i:s');
            $array['event_idxs'] = $event_idxs;
            $result = $this->db->insert($table, $array);
            return array('return'=>$result);
        }
    
        public function eventData($idx) {
            $array = array($idx);
            $sql="SELECT event_idx, event_name, event_image, event_link
                FROM ad02_event WHERE event_idx = ?";
            return $this->db->query($sql, $array)->row();
        }
    
        public function eventUpdate() {
            $array = array($_POST['name'], $_POST['image'], $_POST['link'], $_POST['idx']);
            $sql= "UPDATE ad02_event SET event_name = ?, event_image = ?,
                    event_link = ? WHERE event_idx = ?";
            $result = $this->db->query($sql, $array);
            return array('return'=>$result);
        }
    
        public function eventIdxsUpdate() {
            $idxs = $_POST['idxs'];
            $idx = $_POST['idx'];
            $table = "ad02_event";
            for($i=0; $i<count($idxs); $i++) {
                $sql= "UPDATE ad02_event SET event_idxs = ? WHERE event_idx = ?";
                $array = array($idxs[$i], $idx[$i]);
                $result = $this->db->query($sql, $array);
            }
            return array('return'=>$result);
        }
    
        public function eventdel($idx) {
            $array = array($idx);
            $sql= "DELETE FROM ad02_event WHERE event_idx = ?";
            $result = $this->db->query($sql, $array);
            return array('return'=>$result);
        }
    
        public function eventCount() {
            $sql="SELECT COUNT(*) count  FROM ad02_event";
            return $this->db->query($sql, $array)->row()->count;
        }
    

//-------------------------------------------------------------------------

    //카테고리
    public function categoryListData($page = 1) {
        $table = "ad02_category";
        $limit=10;
        $offset=$limit*($page-1);
        $sql="SELECT category_idx, @rownum:=@rownum+1 num, category_name, category_image, category_date
                FROM ad02_category, (SELECT @rownum:=0) TMP
                ORDER BY category_idx DESC ";
        // limit {$limit} offset {$offset}
        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM $table";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function categoryinsertData() {
        $table = "ad02_category";
        foreach($_POST as $key => $value ){
            $key = 'category_'.$key;
            $array[$key] = $value;
        }
        $array['category_date'] = date('Y-m-d H:i:s');
        $result = $this->db->insert($table, $array);
        return array('return'=>$result);
    }

    public function categoryData($idx) {
        $array = array($idx);
        $sql="SELECT category_idx, category_name, category_image
            FROM ad02_category WHERE category_idx = ?";
        return $this->db->query($sql, $array)->row();
    }

    public function categoryUpdate() {
        $array = array($_POST['name'], $_POST['image'], $_POST['idx']);
        $sql= "UPDATE ad02_category SET category_name = ?, category_image = ?
                WHERE category_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function categorydel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_category WHERE category_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    //faq
    public function faqinsertData() {
        $table = "ad02_faq";
        $sql="SELECT faq_idxs FROM ad02_faq order by faq_idxs DESC LIMIT 1";
        $faq_idxs = $this->db->query($sql)->row()->faq_idxs + 1;
        foreach($_POST as $key => $value ){
            $key = 'faq_'.$key;
            $array[$key] = $value;
        }
        $array['faq_idxs'] = $faq_idxs;
        $array['faq_date'] = date('Y-m-d H:i:s');
        $result = $this->db->insert($table, $array);
        return array('return'=>$result);
    }

    public function faqListData($page = 1) {
        $table = "ad02_faq";
        $limit=10;
        $offset=$limit*($page-1);
        $sql="SELECT faq_idx, @rownum:=@rownum+1 num, faq_question, faq_answer
                FROM ad02_faq, (SELECT @rownum:=0) TMP
                ORDER BY faq_idxs DESC
                limit {$limit} offset {$offset}";
        // limit {$limit} offset {$offset}
        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM $table";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function faqData($idx) {
        $array = array($idx);
        $sql="SELECT faq_idx, faq_question, faq_answer
            FROM ad02_faq WHERE faq_idx = ?";
        return $this->db->query($sql, $array)->row();
    }

    public function faqUpdate() {
        $array = array($_POST['question'], $_POST['answer'], $_POST['idx']);
        $sql= "UPDATE ad02_faq SET faq_question = ?, faq_answer = ?
                WHERE faq_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function faqIdxsUpdate() {
        $idxs = $_POST['idxs'];
        $idx = $_POST['idx'];
        $table = "ad02_faq";
        for($i=0; $i<count($idxs); $i++) {
            $sql= "UPDATE ad02_faq SET faq_idxs = ? WHERE faq_idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return'=>$result);
    }

    public function faqdel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_faq WHERE faq_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function faqCount() {
        $sql="SELECT COUNT(*) count  FROM ad02_faq";
        return $this->db->query($sql, $array)->row()->count;
    }

    //상품 관리
    public function productinsertData() {
        $producttable = "ad02_product";
        $insuretable = "ad02_insure";

        $sql="SELECT product_idxs FROM ad02_product order by product_idxs DESC LIMIT 1";
        $product_idxs = $this->db->query($sql)->row()->product_idxs + 1;

        $product['category_idx'] = $_POST['category_idx'];

        foreach($_POST as $key => $value ){
            if($value != "") {
                if(strpos($key,'product') !== false) {
                    $product[$key] = $value;
                }
                else {
                    if($key != "category_idx")
                        $insure[$key] = $value;
                }
            }
        }
        $product['product_idxs'] = $product_idxs;
        $product['product_date'] = date('Y-m-d H:i:s');
        $result = $this->db->insert($producttable, $product);

        $insert_id = $this->db->insert_id();

        $insure['product_idx'] = $insert_id;
        $result_ = $this->db->insert($insuretable, $insure);
        if($result && $result_) {
            return array('return'=>true);
        }
        else {
            return array('return'=>false);
        }
    }

    public function categorySelectData() {
        $sql="SELECT category_idx, category_name FROM ad02_category";
        return $this->db->query($sql)->result();
    }

    public function productListData($page = 1) {
        $limit=200;
        $offset=$limit*($page-1);
        $sql="SELECT @rownum := @rownum+1 AS num, A.*
        FROM (
        SELECT product_idx
            , category_name, insure_name, insure_call,
        				insure_company,insure_logo, insure_video, product_company,
        				product_logo, product_slide, product_name, product_hashtag,
        				CONCAT(TO_DAYS(CAST(product_time AS DATE)) -
        						TO_DAYS(CAST(now() AS DATE)),'일') AS dates
        				,CONCAT(product_get,'개') product_get, product_idxs,
                product_show shows
                 FROM ad02_product
        				JOIN ad02_insure USING(product_idx)
        				LEFT JOIN ad02_category
        				USING(category_idx)  JOIN ( SELECT @rownum := 0) R
          ) A ORDER BY product_idxs DESC
              limit {$limit} offset {$offset}";
        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM ad02_product
        JOIN ad02_insure USING(product_idx) JOIN ad02_category
        USING(category_idx)";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function productData($idx) {
        $sql="SELECT product_idx, category_idx, insure_name, insure_call,
              insure_company, insure_logo, insure_video, product_company,
              product_logo, product_slide, product_name, product_hashtag,
              product_time, product_slidevideo, insure_text,insure_text2,
              product_gettext, product_thumb,product_namepop,product_titlepop,
              product_numget,product_subpop
              FROM ad02_product JOIN ad02_insure
              USING(product_idx) WHERE product_idx = ?";
        $array = array($idx);
        return $this->db->query($sql, $array)->row();
    }

    public function productUpdateData() {
        $producttable = "ad02_product";
        $insuretable = "ad02_insure";
        foreach($_POST as $key => $value ){
            if(strpos($key,'product') !== false || strpos($key,'category') !== false) {
                $product[$key] = $value;
            }
            else {
                $insure[$key] = $value;
            }
        }

        $this->db->where('product_idx', $_POST['product_idx']);
        $result = $this->db->update($producttable, $product);

        $this->db->where('product_idx', $_POST['product_idx']);
        $result_ = $this->db->update($insuretable, $insure);
        if($result && $result_) {
            return array('return'=>true);
        }
        else {
            return array('return'=>false);
        }
    }

    public function productIdxUpdate() {
        $idxs = $_POST['idxs'];
        $idx = $_POST['idx'];
        $table = "ad02_product";
        for($i=0; $i<count($idxs); $i++) {
            $sql= "UPDATE ad02_product SET product_idxs = ? WHERE product_idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return'=>$result);
    }

    public function productdel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_product WHERE product_idx = ?";
        $result = $this->db->query($sql, $array);
        $sql= "DELETE FROM ad02_insure WHERE product_idx = ?";
        $result_ = $this->db->query($sql, $array);
        if($result && $result_) {
            return array('return'=>true);
        }
        else {
            return array('return'=>false);
        }
    }

    public function productCount() {
        $sql="SELECT COUNT(*) count  FROM ad02_product";
        return $this->db->query($sql, $array)->row()->count;
    }

    public function productShow() {
        if($_POST['show'] == 1) $show = 0; else $show = 1;

        $sql= "UPDATE ad02_product SET product_show = ?
          WHERE product_idx = ?";
        $array = array($show, $_POST['idx']);
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }
//소식---------------------------------------------------------
    public function newsListData($page = 1) {
        $limit=10;
        $offset=$limit*($page-1);
        $sql="SELECT news_idx, @rownum:=@rownum+1 num, news_title, news_thumb image,
                news_date, news_show shows
                FROM ad02_news, (SELECT @rownum:=0) TMP
                ORDER BY news_idxs DESC
                limit {$limit} offset {$offset}";
        // limit {$limit} offset {$offset}
        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM ad02_news";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function newsInsertData() {
        $sql = "INSERT INTO ad02_news (news_title, news_content, news_thumb, news_date) VALUES (?, ?, ?, now())";
        $array = array($_POST['news_title'],$_POST['news_content'],$_POST['news_thumb']);
        $result = $this->db->query($sql,$array);
        $insert_id = $this->db->insert_id();

        $sql="SELECT news_idxs FROM ad02_news order by news_idxs DESC LIMIT 1";
        $news_idxs = $this->db->query($sql)->row()->news_idxs + 1;

        $sql= "UPDATE ad02_news SET news_idxs = ? WHERE news_idx = ?";
        $array = array($news_idxs, $insert_id);
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function newsShow() {
        if($_POST['show'] == 1) $show = 0; else $show = 1;

        $sql= "UPDATE ad02_news SET news_show = ?
        WHERE news_idx = ?";
        $array = array($show, $_POST['idx']);
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function newsData($idx) {
        $sql="SELECT news_idx, news_title, news_content, news_thumb
            FROM ad02_news WHERE news_idx = ?";
        $array = array($idx);
        return $this->db->query($sql, $array)->row();
    }

    public function newsUpdate() {
        $array = array($_POST['news_title'], $_POST['news_content'], $_POST['news_thumb'],$_POST['news_idx']);
        $sql= "UPDATE ad02_news SET news_title = ?, news_content = ?, news_thumb = ?
              WHERE news_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function newsDel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_news WHERE news_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function newsIdxsUpdate() {
        $idxs = $_POST['idxs'];
        $idx = $_POST['idx'];
        $table = "ad02_news";
        for($i=0; $i<count($idxs); $i++) {
            $sql= "UPDATE ad02_news SET news_idxs = ? WHERE news_idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return'=>$result);
    }

    public function newsCount() {
        $sql="SELECT COUNT(*) count  FROM ad02_news";
        return $this->db->query($sql, $array)->row()->count;
    }


	public function hyunTest() {
        $sql="SELECT * FROM ad02_product";
        $result = $this->db->query($sql)->result();;
		return $result;
    }

    public function yutubelistData($page = 1) {
        $table = "ad02_yutube";
        $limit=10;
        $offset=$limit*($page-1);
        $sql="SELECT yutube_idx, @rownum:=@rownum+1 num, yutube_link, yutube_date
                FROM ad02_yutube, (SELECT @rownum:=0) TMP
                ORDER BY yutube_idxs DESC
              limit {$limit} offset {$offset}";

        $result = $this->db->query($sql)->result();

        $sql="SELECT COUNT(*) count FROM $table";
        $count = $this->db->query($sql)->row();

        return array('return'=>true,'list'=>$result,'count'=>$count->count);
    }

    public function yutubeinsertData() {
        $table = "ad02_yutube";

        $sql="SELECT yutube_idxs FROM ad02_yutube order by yutube_idxs DESC LIMIT 1";
        $yutube_idxs = $this->db->query($sql)->row()->yutube_idxs + 1;
        foreach($_POST as $key => $value ){
            $key = 'yutube_'.$key;
            $array[$key] = $value;
        }
        $array['yutube_date'] = date('Y-m-d H:i:s');
        $array['yutube_idxs'] = $yutube_idxs;
        $result = $this->db->insert($table, $array);
        return array('return'=>$result);
    }

    public function yutubeData($idx) {
        $array = array($idx);
        $sql="SELECT yutube_idx, yutube_name, yutube_image, yutube_link
            FROM ad02_yutube WHERE yutube_idx = ?";
        return $this->db->query($sql, $array)->row();
    }

    public function yutubeUpdate() {
        $array = array($_POST['name'], $_POST['image'], $_POST['link'], $_POST['idx']);
        $sql= "UPDATE ad02_yutube SET yutube_name = ?, yutube_image = ?,
                yutube_link = ? WHERE yutube_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function yutubeIdxsUpdate() {
        $idxs = $_POST['idxs'];
        $idx = $_POST['idx'];
        $table = "ad02_yutube";
        for($i=0; $i<count($idxs); $i++) {
            $sql= "UPDATE ad02_yutube SET yutube_idxs = ? WHERE yutube_idx = ?";
            $array = array($idxs[$i], $idx[$i]);
            $result = $this->db->query($sql, $array);
        }
        return array('return'=>$result);
    }

    public function yutubedel($idx) {
        $array = array($idx);
        $sql= "DELETE FROM ad02_yutube WHERE yutube_idx = ?";
        $result = $this->db->query($sql, $array);
        return array('return'=>$result);
    }

    public function yutubeCount() {
        $sql="SELECT COUNT(*) count  FROM ad02_yutube";
        return $this->db->query($sql, $array)->row()->count;
    }
}
