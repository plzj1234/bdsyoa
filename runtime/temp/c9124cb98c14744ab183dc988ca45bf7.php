<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp64\bdsyoa\public/../application/index\view\eat_everyday\show.html";i:1517899066;}*/ ?>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#eattoday" aria-controls="eattoday" role="tab" data-toggle="tab">今天报餐</a></li>
    <li role="presentation"><a href="#eatsituation" aria-controls="eatsituation" role="tab" data-toggle="tab">报餐情况</a></li>
	<!-- 备用
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
	 -->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content" style="margin:10px">
    <div role="tabpanel" class="tab-pane active" id="eattoday">
	<div>
		<?php echo $tip; ?>
		<p><strong>当前时间：</strong><span id="time"><?php echo $today; ?></span></p>
		<p><strong>报餐情况：</strong>所属日期：<?php echo $effectiveday; ?>&#12288午餐：<?php echo $lunch; ?>&#12288晚餐：<?php echo $dinner; ?></p>
		<p><strong>报餐建议：</strong><?php echo $suggest; ?></p>
		<p><strong>报餐时间：</strong><?php echo $posttime; ?></p>
		<p><strong>报餐说明：</strong>报餐时间为昨天10点到今天10点，今天早上10点将收集报餐数据，请各位同事提前报餐，谢谢！</p></strong>
		<div id="lunchtype" class="alert alert-<?php echo $lscene; ?> text-center" role="alert">
		<div class="row">
		<div class="col-lg-4 column">
			<h3><i class="icon-food"></i>&#12288午餐&#12288&#12288</h3>
		</div>
			<div class="col-lg-4 column" style="margin-top:15px"><button type="button" class="btn btn-default btn-block" onclick="eatchange('lunch','1')">&#8194吃&#8194</button></div>
			<div class="col-lg-4 column" style="margin-top:15px"><button type="button" class="btn btn-default btn-block"  onclick="eatchange('lunch','0')">不吃</button></div>
		</div>
		</div>
		<div id="dinnertype" class="alert alert-<?php echo $dscene; ?> text-center" role="alert">
		<div class="row">
		<div class="col-lg-4">
			<h3><i class="icon-food"></i>&#12288晚餐&#12288&#12288</h3>
		</div>
			<div class="col-lg-4 column" style="margin-top:15px"><button type="button" class="btn btn-default btn-block"  onclick="eatchange('dinner','1')">&#8194吃&#8194</button></div>
			<div class="col-lg-4 column" style="margin-top:15px"><button type="button" class="btn btn-default btn-block" onclick="eatchange('dinner','0')">不吃</button></div>
		</div>
		</div>
		<div class="input-group" style="margin-bottom:10px">
			<span class="input-group-addon" id="basic-addon1"><i class="icon-edit"></i></span>
			<input id="eatsuggest" type="text" class="form-control" placeholder="若有建议，可在此填写！" aria-describedby="basic-addon1" value="<?php echo $eatsuggest; ?>">
		</div>
		<input type="hidden" id="lunch" name="lunch" value="<?php echo $lunchi; ?>">
		<input type="hidden" id="dinner" name="dinner" value="<?php echo $dinneri; ?>">
		<input type="hidden" id="checksignup" name="checksignup" value="<?php echo $checksignup; ?>">
		<button id="eatsignup" type="button" class="btn btn-<?php echo $pscene; ?> btn-lg btn-block" onclick="eatsignup()"><?php echo $ptext; ?></button>
	</div>
	<div>
	</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="eatsituation">
	<?php echo $eatcount; ?>
	<table class="table table-striped">
	 <caption class="text-center"><h3><?php echo $day; ?>报餐情况</h3></caption>
	<tr><th>报餐时间</th><th>姓名</th><th>午餐</th><th>晚餐</th><th>建议</th></tr>
	<?php echo $eatsituation; ?>
	</table>
	</div>
	<!-- 备用
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
	 -->
  </div>

</div>