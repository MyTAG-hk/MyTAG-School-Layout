<?= \SelfClass\Controller::loadSTemplate('header') ?>
<div class="container">
    <div class="row">
        <div id="login-overlay">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">提取你的課表</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding: 20px 0">
                        <div class="col-xs-6">
                            <div class="well">
                                <div class="form-group">
                                    <label for="password" class="control-label">提取碼</label>
                                    <input type="password" class="form-control" name="code" value="" required=""  placeholder="Please enter your timetable code">
                                    <span class="help-block"></span>
                                </div>
                                <div id="messageBox" class="alert alert-info" style="display: none;">
                                    
                                </div>
                                <button type="button" name="step2get" class="btn btn-success btn-block">提取</button>
                                <a href="/" class="btn btn-default btn-block">重新生成課表</a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p class="lead">生成一份時間表 <span class="text-success">免費</span></p>
                            <ul class="list-unstyled" style="line-height: 2">
                                <li><span class="fa fa-check text-success"></span> 快捷查閲課表信息</li>
                                <li><span class="fa fa-check text-success"></span> 方便導入各類智慧手機</li>
                                <li><span class="fa fa-check text-success"></span> 一人導入全班皆可用</li>
                            </ul>
                            <p><a href="#" class="btn btn-info btn-block">查閲更多幫助，點此處</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$mianUrl = siteUrl('mainUrl');
$this->view['JsHtml'] = <<<EOF
<script>
    var mianUrl = '$mianUrl';
    $(document).ready(function() {
        $('button[name="step2get"]').click(function(e) {
            e.preventDefault();
            $('#messageBox').css('display', 'block');
            $.post(mianUrl+'Index/getCode', {code:$('input[name="code"]').val()}, function(data) {
                var result = data.data;
                if(data.code == 200) {
                    $('#messageBox').html('下載鏈接已彈出，如被攔截請點擊允許');
                    window.open(mianUrl+'d/'+result.shortTag);
                } else {
                    $('#messageBox').html(data.message);
                }
            });
        });
    });
</script>
EOF;
?>


<?= \SelfClass\Controller::loadSTemplate('footer') ?>