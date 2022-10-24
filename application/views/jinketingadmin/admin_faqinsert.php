<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <span class="section"><?= $name ?></span>

            <form class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="question"> 질문 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="question" class="form-control col-md-7 col-xs-12 req" name="question" value="<?= $data->faq_question ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="answer"> 답변 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="answer" required="required" name="answer" class="form-control col-md-7 col-xs-12 req"><?= $data->faq_answer ?></textarea>
                </div>
              </div>

              <input type="hidden" name="idx" value="<?= $data->faq_idx ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                  <?if($data) { $id = "faqedit"; $text = "수정하기"; } else { $id = "faqgo"; $text = "등록하기";}?>
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

<? require_once(APPPATH."views/admin/admin_footer.php");?>

<script src="<?= base_url('assets/js/common.js') ?>?<?= TESTING ?>"></script>
<script src="<?= base_url('assets/js/jinketingadmin.js') ?>?<?= TESTING ?>"></script>