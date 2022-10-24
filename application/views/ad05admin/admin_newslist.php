<!-- page content -->
<div class="right_col faqlist" role="main">
  <div class="">

    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3><?=$name?></h3>
              <?if($insert) {?>
                  <a href = "<?=$insert?>"><button type="button" class="btn btn-info">등록하기</button></a>
              <?}?>
		          <button type="button" id="idxgo" class="btn btn-primary" data-url="/ad05/admin/newsIdxsUpdate" data-count="/ad05/admin/newsCount" data-page="<?=$page?>">저장하기</button></a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="table-responsive">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr class="headings">
                    <?foreach($col as $row) {?>
                      <th class="column-title"> <?=$row?> </th>
                    <?}?>
                  </tr>
                </thead>

                <tbody>
                <?for($i = 0; $i < count($list); $i++) {$j=0;?>
                    <tr class="even pointer" data-idx="<?=$list[$i]->news_idx?>">
        						<?foreach($list[$i] as $key => $value) {
                      if($key != "shows") {
                        if($j == 2) {
                          echo '<td> <button type="button" class="btn up"><i class="fa fa-caret-up"></i></button> <button type="button" class="btn down"><i class="fa fa-caret-down"></i></button> </td>';
                        }
                        if(!strpos($key,'idx')) {
          								if($key == 'image') {
                            if($value) {?>
                              <td class=" "><img src="<?=SURL?>/assets/uploads/<?=$value?>" style="width : 80px;"></td>
                            <?} else {?>
	                             <td class=" ">없음</td>
                            <?}?>
                          <?}else{?>
          									<td class=" "><?=$value?></td>
          								<?}
          							}
                      } else {?>
                          <td> <button type="button" class="btn btn-info btn-show" data-value="<?=$value?>" data-url="/ad05/admin/newsShow"> <?if($value == 1){ $text = "숨기기";} else { $text = "보이기";} echo $text;?> </button> </td>
                    <?}
            				$j++;}?>
                        <?=$adminbutton?>
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

<? require_once(APPPATH."views/ad05admin/admin_footer.php");?>
<script src="<?=base_url('assets/js/common.js')?>"></script>
<script src="<?=base_url('assets/js/ad05admin.js')?>"></script>

<script>
    $('body').on('click', '.adminedit', function() {
        var idx = $(this).parent().parent().attr('data-idx');
        location.href = '/ad05/admin/newsedit/'+idx;
    });
    $('body').on('click', '.admindel', function() {
        var con = confirm("정말 삭제하시겠습니까?");
        if(con) {
            var idx = $(this).parent().parent().attr('data-idx');
            var result = jsonreturn('/ad05/admin/newsdel/'+idx);
            if(result.return == true) {
                alert("삭제되었습니다");
                location.reload();
            }
        }
    });



</script>
