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
				  <li class="active">現正提供 <?php echo $sSchoolTime['year'].$sSchoolTime['semName'] ?></li>
				</ol>
                <div class="mytag-help">
					
					<ul class="nav nav-tabs" style="display:none;">
						<li class="active"><a href="#step1" data-toggle="tab">步驟一</a></li>
						<li><a href="#step2" data-toggle="tab">步驟二</a></li>
						<li><a href="#step3" data-toggle="tab">步驟三</a></li>
					</ul>
                    <?= \SelfClass\Controller::loadSTemplate('step_readme') ?>
					
					<h3>請使用 Chrome 或 Firefox 瀏覽器</h3>
                </div>
            </div>
        </div><!--/col-12-->
    </div>
</div>
<?= \SelfClass\Controller::loadSTemplate('footer') ?>