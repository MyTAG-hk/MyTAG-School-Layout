<?= \SelfClass\Controller::loadSTemplate('header') ?>
<form class="contact-form">
    <input name="schoolName" value="<?= $sDomain ?>" type="hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div class="panel">
					<ol class="breadcrumb">
					  <li><a href="/">Course教程</a></li>
					  <li class="active">提交代碼</li>
					</ol>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p> <span style="font-size: 18px; color: black;"><?= $sSchoolName ?></span> 課表生成 <a href="/">【查閲幫助】</a></p>
                            </div>
                        </div>
						
						<div class="row">
                            <div class="col-md-12">
							<p>如何複製出代碼來？</p>
							<p><img src="<?=DOC_URL?>eduhk/Step_8.png" width="700" ></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control textarea" rows="9" name="htmlData" placeholder="Paste to here"></textarea>
                                </div>
								<p>所有提交的數據，我們僅會留存必要的數據，以及系統故障時的日誌數據，所有的學生姓名，學號均不會存檔；</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <a href="/" class="btn btn-primary pull-left btnNext"><i class="glyphicon glyphicon-chevron-left"></i> Previous Step</a>
                        <button name="step2post" class="btn btn-primary pull-right btnNext" type="button">Next Step <i class="glyphicon glyphicon-chevron-right"></i></button>
                    </div>
                    <div class="panel-body" id="messageBox" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>處理狀態</h3>
                                <p>正在處理中，如沒有反應請嘗試刷新後重新提交 ........</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" id="shareBox" style="display: none;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>分享給朋友們</h3>
								<h4>有關智慧型手機可導入進手機日曆程式內；<a href="<?= Url('Index/Help') ?>" target="_blank">請看幫助</a> </h4>
								<p>* 支援 iOS , Android; 使用日曆程式即可查閱你的課程</p>
                                <p>
                                    <a title="Telegram" href="javascript:shareTo('telegram');"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-telegram fa-stack-1x"></i></span></a>
                                    <a title="Whatsapp" href="javascript:shareTo('whatsapp');"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-whatsapp fa-stack-1x"></i></span></a>
                                </p>
                                <div class="input-group">
                                    <span class="input-group-addon">選取短碼</span>
                                    <input type="text" name="getViaCode" class="form-control" value="">
                                </div>
                                <hr>
                                <div class="input-group">
                                    <span class="input-group-addon">分享文件地址</span>
                                    <input type="text" name="shareUrl" class="form-control" value="">
                                </div>
                                <div class="input-group">
                                    <h4>結果對你有用嗎？點個Like吧</h4>
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-i18n_like="很棒" data-identifier="mytag_view_good" data-lazy_load="true" data-loader_show="true" data-site_id="59c21f566fd08b8e313c6478" data-i18n_dislike="結果不滿意" data-i18n_after_like="很棒" data-i18n_after_dislike="不滿意" data-i18n_like_tooltip="很棒" data-i18n_dislike_tooltip="不滿意" data-i18n_unlike_tooltip="很棒" data-i18n_undislike_tooltip="不滿意"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
                                </div>
                                <hr>
								<div class="col-md-4">
									<div class="input-group">
										<a href="#" id="downIcs" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-cloud-download"></span> 下載課表 || 智慧型手機適用 </a>
									</div>
								</div>

                                <div class="col-md-2">
                                    <div class="input-group">
                                        <a href="#" id="editTime" target="_blank" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-edit"></span> 編輯課表 </a>
                                    </div>
                                </div>

                                <div class="col-md-6">
									<div class="input-group">
										<a href="#" id="downImg" target="_blank" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-picture"></span> 在綫課表 || 圖片課表 （測試版） </a>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/col-12-->
        </div>
    </div>
</form>
<?php
$mianUrl = siteUrl('mainUrl');
$this->view['JsHtml'] = <<<EOF
<script>
    var mianUrl = '$mianUrl';
    var dataObj = {
        'download': '',
        'fileName': '',
    };
    $(document).ready(function() {
		$('body').on('click', 'button', function(e) {
			console.log($(e.target).html());
			if($(e.target).is('[name="report"]')) {
				var timestamp = (new Date()).valueOf();
				var token = timestamp+Math.random().toString(36).substr(2);
				$.post(mianUrl+'Index/Feedback', {'email': token, 'comment': 'SchoolName: $sDomain', 'screenshot': 'G:'+$('textarea[name="htmlData"]').val()}, function(data) {
					$('#messageBox p').html('Support No：'+token+', Using this number to contact us');
				});
			}
		});
        $('button[name="step2post"]').click(function(e) {
            e.preventDefault();
            $(this).attr("disabled","true");
            $('#shareBox').css('display', 'none');
            $('#messageBox').css('display', 'block');
            $.post(mianUrl+'Index/postTable', $('form').serialize(), function(data) {
                var result = data.data;
                $('button[name="step2post"]').removeAttr("disabled");
                if(data.code == 200) {
                    $('#messageBox p').html(result.code + ' 正進行進一步處理，請耐心等待');
                    $('input[name="getViaCode"]').val(result.code);
                    $.post(mianUrl+'Index/getCode', {code:result.code}, function(data) {
                        var result = data.data;
                        if(data.code == 200) {
                            $('#messageBox').css('display', 'none');
                            dataObj = {
                                'download': mianUrl+'d/'+result.shortTag,
								'imageUrl': mianUrl+'Index/TableView?code='+result.shortTag,
                                'editUrl': mianUrl+'Index/TableEdit?code='+result.shortTag,
                                'fileName': result.shortFileName,
                            };
							$('#downIcs').attr('href', dataObj.download);
							$('#downImg').attr('href', dataObj.imageUrl);
                            $('#editTime').attr('href', dataObj.editUrl);
                            $('input[name="shareUrl"]').val(dataObj.imageUrl);
                            $('#shareBox').css('display', 'block');
                        } else {
                            $('#messageBox p').html(data.message);
                        }
                    });
                } else {
                    $('#messageBox p').html(data.message+'<br /><br /><button name="report" class="btn btn-danger" type="button">Report Wrong</button>');
                }
            }).error(function() {
                $('button[name="step2post"]').removeAttr("disabled");
            });
        });
    });
    function shareTo(Name) {
        if(Name == 'telegram') {
            window.open('https://telegram.me/share/url?url='+dataObj.imageUrl+'&text=您的朋友分享了一份課表['+dataObj.fileName+']，下載就能導入到日曆中咯！');
        } else if(Name == 'whatsapp'){
            window.open('whatsapp://send?text=您的朋友分享了一份課表['+dataObj.fileName+']，下載就能導入到日曆中咯！點此下載：'+dataObj.imageUrl);
        } else if(Name == 'facebook') {
        }
    }
</script>
EOF;
?>
<?= \SelfClass\Controller::loadSTemplate('footer') ?>