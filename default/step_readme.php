
<?php $info = \Services\Article::getReadMeBySchool($this->schoolInfo['sId'], 'return')?>
<div class="tab-content">
    <div class="tab-pane fade active in" id="step1">
		<h3><?=$info['title']?></h3>
		
		<div style="padding: 30px 0 0 0">
		<?=$info['content']?>
		</div>
		
		<p><a href="/step1" class="btn btn-primary pull-right">Next Step <i class="glyphicon glyphicon-chevron-right"></i></a></p>
    </div>
</div>