<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h3><?= $name ?></h3>
          <?if($insert) {?>
          <a href="<?= $insert ?>"><button type="button" class="btn btn-primary">등록하기</button></a>
          <?}?>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <div class="table-responsive">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr class="headings">
                  <?foreach($col as $row) {?>
                  <th class="column-title"> <?= $row ?> </th>
                  <?}?>
                </tr>
              </thead>

              <tbody>
                <?for($i = 0; $i < count($list); $i++) {?>
                <tr class="even pointer" data-idx="<?= $list[$i]->category_idx ?>">
                  <?foreach($list[$i] as $key => $value) {
              							if(!strpos($key,'idx') {
              								if(strpos($key,'image')) {?>
                  <td class=" "><img src="<?= SURL ?>/assets/uploads/<?= $value ?>" style="width : 80px;"></td>
                  <?}else{?>
                  <td class=" "><?= $value ?></td>
                  <?}							
              							}
              						}?>
                  <?= $adminbutton ?>
                </tr>
                <?}?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div style="margin-top: 20px; text-align: center;">
    <?echo $this->pagination->create_links();?>
  </div>
</div>
<!-- /page content -->

<? require_once(APPPATH."views/admin/admin_footer.php");?>

<script>
  $('body').on('click', '.adminedit', function() {
    var idx = $(this).parent().parent().attr('data-idx');
    location.href = '/admin/categoryedit/' + idx;
  });
  $('body').on('click', '.admindel', function() {
    var con = confirm("정말 삭제하시겠습니까?");
    if (con) {
      var idx = $(this).parent().parent().attr('data-idx');
      var result = jsonreturn('/admin/categorydel/' + idx);
      if (result.return == true) {
        alert("삭제되었습니다");
        location.reload();
      }
    }
  });
</script>