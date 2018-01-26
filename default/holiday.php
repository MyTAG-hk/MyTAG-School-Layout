<?= \SelfClass\Controller::loadSTemplate('header') ?>
<style>
.tab-content {
	font-size: 20px;
	padding: 20px 10px;
}
.btnNext {
	margin-right: 49%;
	font-size: 18px;
	margin-top: 50px;
}
p {
	clear: both;
	overflow: hidden;
	
}
p a.pull-right {
	margin-right: 49%;
	font-size: 18px;
	margin-top: 50px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
				<ol class="breadcrumb">
				  <li class="active">校曆假期與活動</li>
				</ol>
                <div class="mytag-help">
					<h3>公衆假期</h3>
					
					<div id="public">
					<table class="table table-hover"> 
						<thead>
							<tr>
								<th width="50%">假期名稱</th>
								<th width="35%">日期</th>
								<th width="15%">公休</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($holidayList as $holiday): ?>
						<?php if($holiday['public'] !== '1') { continue; } ?>
							<tr>
								<td><?=$holiday['holidayName']?></td>
								<td><?=$holiday['startTime']?> To <?=$holiday['endTime']?></td>
								<td>是</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					</div>
					
					
					<h3>校園假期與活動</h3>
					
					<div id="schoolpublic">
					<table class="table table-hover"> 
						<thead>
							<tr>
								<th width="50%">假期名稱</th>
								<th width="35%">日期</th>
								<th width="15%">休息</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($holidayList as $holiday): ?>
						<?php if($holiday['public'] !== '0') { continue; }?>
							<tr>
								<td><?=$holiday['holidayName']?></td>
								<td><?=$holiday['startTime']?> To <?=$holiday['endTime']?></td>
								<td>否</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					</div>
                </div>
            </div>
        </div><!--/col-12-->
    </div>
</div>
<?= \SelfClass\Controller::loadSTemplate('footer') ?>