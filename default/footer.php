<div class="container" id="footer">
    <div class="row">
        <div class="col col-sm-12">
            <h1>Follow Us</h1>
            <div class="btn-group">
                <a class="btn btn-twitter btn-lg" href="#"><i class="fa fa-twitter fa-3" aria-hidden="true"></i> Twitter</a>
                <a class="btn btn-facebook btn-lg" href="https://www.facebook.com/HKTimeTable/" target="_blank"><i class="fa fa-facebook fa-3" aria-hidden="true"></i> Facebook</a>
            </div>
        </div>
    </div>
</div>
<hr>
<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li><i class="icon-facebook icon-2x"></i></li>
                    <li><i class="icon-twitter icon-2x"></i></li>
                </ul>
            </div>
            <div class="col-sm-6">
                <p class="pull-right"><a href="http://blog.uoke.org">Uoke Framework</a> v4.5;</p>      
            </div>
        </div>
    </div>
</footer>
<?= \SelfClass\Controller::loadTemplate('Common/import_js') ?>

<script>
$('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});
$('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});
</script>
<?php
echo $JsHtml;
?>
</body>
</html>