

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="url"> 유투브 링크 <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="url" name="link" value="<?=$data->yutube_link?>" class="form-control col-md-7 col-xs-12 req" required="required">
                        </div>
                      </div>
                      <input type="hidden" name="idx" value="<?=$data->yutube_idx?>">

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                          <?if($data) { $id="yutubeedit"; $text="수정하기"; } else { $id="yutubego"; $text="등록하기";}?>
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

        <? require_once(APPPATH."views/teventadmin/admin_footer.php");?>

    <script src="<?=base_url('assets/js/common.js')?>?<?=TESTING?>"></script>
    <script src="<?=base_url('assets/js/teventadmin.js')?>"></script>
