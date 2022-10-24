<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3><?=$name?></h3>
            <?if($insert) {?>
              <ul class="nav navbar-left panel_toolbox">
                <li><a href = "<?=$insert?>"><button type="button" class="btn btn-primary">등록하기</button></a></li>
              </ul>
            <?}?>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <?foreach($col as $row) {?>
                      <th class="column-title"> <?=$row?> </th>
                    <?}?>
                  </tr>
                </thead>

                <tbody>
                <?for($i = 0; $i < count($list); $i++) {?>
                    <tr class="even pointer" data-idx = "<?=$list[$i]->contact_idx?>">
                        <?foreach($list[$i] as $key => $value) {?>
                            <td class=" "><?=$value?></td>
                        <?}?>
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
  <?echo $this->pagination->create_links();?>
</div>
<!-- /page content -->
