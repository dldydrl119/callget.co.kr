
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="x_panel">
              <div class="x_title">
                <h3><?=$name?></h3>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3">제작 구분</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_type?></p>
                    </div>
                    <label class="control-label col-md-3">회사명</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_company?></p>
                    </div>
                    <label class="control-label col-md-3">담당자</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_manager?></p>
                    </div>
                    <label class="control-label col-md-3">연락처</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_tel?></p>
                    </div>
                    <label class="control-label col-md-3">휴대전화</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_phone?></p>
                    </div>
                    <label class="control-label col-md-3">이메일</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_email?></p>
                    </div>
                    <label class="control-label col-md-3">예산</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_money?> 만원</p>
                    </div>
                    <label class="control-label col-md-3">방문신청 여부</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?if($data->contact_come) echo '방문함'; else echo '방문 안함';?></p>
                    </div>
                    <label class="control-label col-md-3">현재 사이트</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12">
                            <? if(strpos($data->contact_homepage,"http") !== false) $homepage = $data->contact_homepage; else $homepage = 'http://'.$data->contact_homepage;?>
                            <a href = "<?=$homepage?>" target="_blank"><?=$homepage?></a>
                        </p>
                    </div>
                    <label class="control-label col-md-3">예상 페이지 수</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12"><?=$data->contact_page?></p>
                    </div>
                    <label class="control-label col-md-3">참고 사이트1</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12">
                            <? if(strpos($data->contact_site1,"http") !== false) $site1 = $data->contact_site1; else $site1 = 'http://'.$data->contact_site1?>
                            <a href = "<?=$site1?>" target="_blank"><?=$site1?></a>
                        </p>
                    </div>
                    <label class="control-label col-md-3">참고 사이트2</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12">
                            <? if(strpos($data->contact_site2,'http') !== false) $site2 = $data->contact_site2; else $site2 = 'http://'.$data->contact_site2?>
                            <a href = "<?=$site2?>" target="_blank"><?=$site2?></a>
                        </p>
                    </div>
                    <label class="control-label col-md-3">파일 첨부1</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12">
                            <a href = "<?=SURL?>/assets/uploads/<?=$data->contact_file1?>" target="_blank"><?=$data->contact_file1?></a>
                        </p>
                    </div>
                    <label class="control-label col-md-3">파일 첨부2</label>
                    <div class="col-md-7">
                        <p class = "form-control col-md-7 col-xs-12">
                            <a href = "<?=SURL?>/assets/uploads/<?=$data->contact_file2?>"><?=$data->contact_file2?></a>
                        </p>
                    </div>
                  </div>
                  <label class="control-label col-md-3">기타 문의 첨부</label>
                  <div class="col-md-7">
                      <textarea class = "form-control col-md-7 col-xs-12"><?=$data->contact_question?></textarea>
                  </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
