
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <span class="section"><?=$name?></span>

                    <form class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 카테고리 이름 <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12 req" name="name" value="<?=$data->category_name?>" required="required">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="file"> 카테고리 이미지 <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="slideimage" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="hidden" class="req" name="image" value="<?=$data->category_image?>">
                          <img src="<?=SURL?>/assets/uploads/<?=$data->category_image?>" <?if($data->category_image == "") {?> style="display : none;" <?}?> >
                        </div>
                      </div>
                      <input type="hidden" name="idx" value="<?=$data->category_idx?>">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                          <?if($data) { $id="categoryedit"; $text="수정하기"; } else { $id="categorygo"; $text="등록하기";}?>
                          <button id="<?=$id?>" type="button" class="btn btn-success"><?=$text?></button>
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

      <? require_once(APPPATH."views/admin/admin_footer.php");?>

      <script src="<?=base_url('assets/js/common.js')?>?<?=TESTING?>"></script>
      <script src="<?=base_url('assets/js/admin.js')?>?<?=TESTING?>"></script>
