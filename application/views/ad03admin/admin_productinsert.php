<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <span class="section"><?= $name ?></span>

            <form class="form-horizontal form-label-left insu">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">카테고리 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control product" name="category_idx">
                    <?foreach($category as $row){?>
                    <option value="<?= $row->category_idx ?>" <? if($row->category_idx == $data->category_idx) { echo "selected";} ?>><?= $row->category_name ?></option>
                    <?}?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 제휴 상품 명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="name" class="form-control col-md-7 col-xs-12 req insure" name="insure_name" value="<?= $data->insure_name ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="call"> 제휴 Call <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="call" class="form-control col-md-7 col-xs-12 req insure" name="insure_call" value="<?= $data->insure_call ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company"> 제휴사 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="company" class="form-control col-md-7 col-xs-12 req insure" name="insure_company" value="<?= $data->insure_company ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logo"> 제휴사 로고 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="logo" value="<?= $data->insure_logo ?>">
                  <input type="hidden" name="insure_logo" value="<?= $data->insure_logo ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->insure_logo ?>" <?if($data->insure_logo == "") {?> style = "display : none;"
                  <?}?>>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="video"> 제휴사 광고 영상 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="video" class="form-control col-md-7 col-xs-12 req insure" name="insure_video" value="<?= $data->insure_video ?>" placeholder="유튜브 공유 URL" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> 영상 밑 심의필 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="insure_text2" class="form-control col-md-7 col-xs-12" name="insure_text2"><?= $data->insure_text2 ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> 광고 제한 설명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="insure_text" class="form-control col-md-7 col-xs-12" name="insure_text"><?= $data->insure_text ?></textarea>
                </div>
              </div>

              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> GET 하단 설명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="product_gettext" class="form-control col-md-7 col-xs-12" name="product_gettext"><?= $data->product_gettext ?></textarea>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="companys"> 상품사 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="companys" class="form-control col-md-7 col-xs-12 req product" name="product_company" value="<?= $data->product_company ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logos"> 상품사 로고 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="logos" value="">
                  <input type="hidden" name="product_logo" value="<?= $data->product_logo ?>">
                  <img src="<?= SURL ?>assets/uploads/<?= $data->product_logo ?>" <?if($data->product_logo == "") {?> style = "display : none;"
                  <?}?>>
                </div>
              </div> -->

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_thumb"> 상품 썸네일 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="product_thumb" value="<?= $data->product_thumb ?>">
                  <input type="hidden" name="product_thumb" value="<?= $data->product_thumb ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->product_thumb ?>" <?if($data->product_thumb == "") {?> style = "display : none;"
                  <?}?>>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slide"> 상품사 영상 or 이미지 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="slide" value="" multiple>
                  <input type="hidden" name="product_slide" value="<?= $data->product_slide ?>">
                  <?
                            $images = explode(',',$data->product_slide);
                            foreach($images as $row) {?>
                  <img src="<?= SURL ?>assets/uploads/<?= $row ?>" class="slidess" <?if($data->product_slide == "") {?> style = "display : none;"
                  <?}?>>
                  <?}?>

                  <input type="text" class="form-control col-md-7 col-xs-12 product youtubb req" name="product_slidevideo" placeholder="유튜브 공유 URL" value="<?= $data->product_slidevideo ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="names"> 상품명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="names" class="form-control col-md-7 col-xs-12 req product" name="product_name" value="<?= $data->product_name ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titlepop"> 팝업 제목 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="titlepop" class="form-control col-md-7 col-xs-12 req product" name="product_titlepop" value="<?= $data->product_titlepop ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namess"> 팝업 상품명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="namess" class="form-control col-md-7 col-xs-12 req product" name="product_namepop" value="<?= $data->product_namepop ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subpop"> 팝업 추가설명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="subpop" class="form-control col-md-7 col-xs-12 req product" name="product_subpop" value="<?= $data->product_subpop ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hashtag"> 해시태그 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="hashtag" class="form-control col-md-7 col-xs-12 req product" name="product_hashtag" value="<?= $data->product_hashtag ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time"> 남은 기간 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="time" class="form-control col-md-7 col-xs-12 req product" name="product_time" value="<?= $data->product_time ?>" required="required">
                </div>
              </div>

              <input type="hidden" name="product_idx" value="<?= $data->product_idx ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <?if($data) { $id = "productedit"; $text = "수정하기"; } else { $id = "productgo"; $text = "등록하기";}?>
                  <button id="<?= $id ?>" type="button" class="btn btn-success"><?= $text ?></button>
                  <button type="submit" style="display:none;"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<? require_once(APPPATH."views/ad03admin/admin_footer.php");?>

<script src="<?= base_url('assets/js/common.js') ?>?<?= TESTING ?>"></script>
<script src="<?= base_url('assets/js/ad03admin.js') ?>?<?= TESTING ?>"></script>