<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">

            <form class="form-horizontal form-label-left form-group news">
              <span class="section"><?= $name ?></span>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 제목 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="name" class="form-control col-md-7 col-xs-12 req" name="news_title" value="<?= $data->news_title ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image"> 내용 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="news_text" name="news_content"><?= $data->news_content ?></textarea>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image"> 썸네일 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="images">
                  <img src="<?= SURL . 'assets/uploads/' . $data->news_thumb; ?>" <?if(!$data->news_thumb) {?> style="display:none;
                  <?}?>">
                  <input type="hidden" name="news_thumb" value="<?= $data->news_thumb ?>">
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <?if($data){ $id = "newsedit"; $text = "수정하기";} else { $id = "newsgo"; $text = "등록하기"; }?>
                  <button type="button" id="<?= $id ?>" class="btn btn-success"><?= $text ?></button>
                  <button type="submit" style="display:none;"></button>
                </div>
              </div>
              <input type="hidden" id="idx" name="news_idx" value="<?= $data->news_idx ?>">
              <input type="hidden" name="admin_idx" value="<?= $_SESSION['idx'] ?>">
              <input type="file" id="imagesUpload" style="display:none;">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Copyright © radon Dr. All rights reserved.
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


<!-- jQuery -->
<script src="/assets/template/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/template/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom Theme Scripts -->
<script src="/assets/js/common.js"></script>
<script src="/assets/js/jinketingadmin.js"></script>
<script src="/assets/template/buildjs/custom.min.js"></script>
<script src="/smarteditor/js/service/HuskyEZCreator.js" charset="utf-8"></script>
<script>
  oEditors = [];
  nhn.husky.EZCreator.createInIFrame({
    oAppRef: oEditors,
    elPlaceHolder: "news_text",
    sSkinURI: "/smarteditor/SmartEditor2Skin.html",
    fCreator: "createSEditor2"
  });
  $('#imagesUpload').change(function() {
    var json = uploadImage($(this));
    if (json) {
      if (json.return == 'true') {
        for (var variable in json.url) {
          if (json.url.hasOwnProperty(variable)) {
            if ($('textarea+iframe').length) {
              var sHTML = "<img style='max-width:100%' src='/assets/uploads/" + json.url[variable] + "' />";
              oEditors.getById['news_text'].exec("PASTE_HTML", [sHTML]);
            }
          }
        }
        $(this).val('');
      }
    } else {
      alert('서버 에러');
    }
  });
  $('#images').change(function() {
    var json = uploadImage($(this));
    $(this).next().attr('src', '/assets/uploads/' + json.url[0]).css('display', 'block');
    $(this).next().next().val(json.url[0]);

  });
</script>

</body>

</html>