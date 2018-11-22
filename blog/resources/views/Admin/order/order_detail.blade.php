﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<!-- <p class="f-20 text-success">欢迎使用H-ui.admin <span class="f-14">v3.1</span>后台模版！</p>
	<p>登录次数：18 </p>
	<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p> -->
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">
					<label>商品信息：</label>
					<label style="margin-right: 30px">{{$order->add_time}} </label>
					
					<label style="float: right;margin-right: 40px">总金额：{{$order->total_amount}}</label>
				</th>
			</tr>
			<tr class="text-c">
				<th colspan="2" >商品信息</th>
				<th width="100">单价</th>
				<th width="100">购买数量</th>
				<th width="100">金额</th>
				<th width="100">订单状态</th>
			</tr>
		</thead>
		<tbody>
			<?php $arr = ['未确定', '已确定', '等待买家确定收货', '交易成功', '无效订单', '退货', '交易成功'];?>
			<?php $pay = ['未支付', '已支付'] ?>
			@foreach($goods as $v)
			<tr class="text-c">
				<td width="50"><img src="{{url('/common/home/images/3412_183_24_30_27_27885.jpg')}}" width="50" height="50"></td>
				<td width="200">{{$v->goods_name}}</td>
				<td>{{$v->goods_price}}</td>
				<td>{{$v->goods_num}}</td>
				<td>{{$v->goods_num*$v->goods_price}}</td>
				<td>{{$arr[$order->order_status]}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">
					<label>订单信息：</label>
					<label style="margin-right: 40px">订单号：{{$order->order_sn}}</label> 
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="10%">收货地址</th>
				<td><span id="lbServerName">{{$order->consignee}}(收),{{$order->phone}},{{$order->address}}</span></td>
			</tr>
			<tr>
				<td>物流信息</td>
				<td>{{$order->shipping_name}}</td>
			</tr>
			<tr>
				<td>买家留言</td>
				<td>{{$order->user_note}}</td>
			</tr>
			<tr>
				<td>订单状态</td>
				<td>{{ $arr[$order->order_status] }}</td>
			</tr>
			<tr>
				<td>支付状态 </td>
				<td>{{$pay[$order->pay_status]}}</td>
			</tr>
			<tr>
				<td>使用积分兑换</td>
				<td>{{$order->integral_money}}</td>
			</tr>
			
			<!-- <tr>
				<td>服务器操作系统 </td>
				<td>Microsoft Windows NT 5.2.3790 Service Pack 2</td>
			</tr> -->
			<!-- <tr>
				<td>系统所在文件夹 </td>
				<td>C:\WINDOWS\system32</td>
			</tr>
			<tr>
				<td>服务器脚本超时时间 </td>
				<td>30000秒</td>
			</tr>
			<tr>
				<td>服务器的语言种类 </td>
				<td>Chinese (People's Republic of China)</td>
			</tr>
			<tr>
				<td>.NET Framework 版本 </td>
				<td>2.050727.3655</td>
			</tr>
			<tr>
				<td>服务器当前时间 </td>
				<td>2014-6-14 12:06:23</td>
			</tr>
			<tr>
				<td>服务器IE版本 </td>
				<td>6.0000</td>
			</tr>
			<tr>
				<td>服务器上次启动到现在已运行 </td>
				<td>7210分钟</td>
			</tr>
			<tr>
				<td>逻辑驱动器 </td>
				<td>C:\D:\</td>
			</tr>
			<tr>
				<td>CPU 总数 </td>
				<td>4</td>
			</tr>
			<tr>
				<td>CPU 类型 </td>
				<td>x86 Family 6 Model 42 Stepping 1, GenuineIntel</td>
			</tr>
			<tr>
				<td>虚拟内存 </td>
				<td>52480M</td>
			</tr>
			<tr>
				<td>当前程序占用内存 </td>
				<td>3.29M</td>
			</tr>
			<tr>
				<td>Asp.net所占内存 </td>
				<td>51.46M</td>
			</tr>
			<tr>
				<td>当前Session数量 </td>
				<td>8</td>
			</tr>
			<tr>
				<td>当前SessionID </td>
				<td>gznhpwmp34004345jz2q3l45</td>
			</tr>
			<tr>
				<td>当前系统用户名 </td>
				<td>NETWORK SERVICE</td>
			</tr> -->
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
			Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
			本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script> 
<!--此乃百度统计代码，请自行删除-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--/此乃百度统计代码，请自行删除-->
</body>
</html>