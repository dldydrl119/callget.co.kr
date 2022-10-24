
			<div class="category">
				<ul>
					<li class="ad04_cate_list active" data-number="0">
						<a href="javascript:void(0);">
							<!-- <div class="sym" style="background-image: url('/assets/images/category/category_1.png');"></div> -->
							<p>전체</p>
						</a>
					</li>
					<? foreach ($category as $cate) : ?>
						<li class="ad04_cate_list" data-number="<?= $cate->category_idx ?>">
							<a href="javascript:void(0);">
								<!-- <di  class="sym" style="background-image: url('/assets/images/category/category_<?= $cate->category_idx + 1 ?>.png');"></di> -->
								<p><?= $cate->category_name ?></p>
							</a>
						</li>
					<? endforeach; ?>
				</ul>
			</div>

		
			
			<?php include('ad04.php'); ?>
 