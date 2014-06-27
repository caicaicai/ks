<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2014-网络工程班-科学考试说明书</title>
	<link rel="stylesheet" href="/style/bootstrap.css">
	<link rel="stylesheet" href="/style/style.css">
	<script type="text/javascript">
function encode(s){
  return s.replace(/&/g,"&").replace(/</g,"<").replace(/>/g,">").replace(/([\\\.\*\[\]\(\)\$\^])/g,"\\$1");
}
function decode(s){
  return s.replace(/\\([\\\.\*\[\]\(\)\$\^])/g,"$1").replace(/>/g,">").replace(/</g,"<").replace(/&/g,"&");
}
function highlight(s){
  if (s.length==0){
    alert('搜索关键词未填写！');
    return false;
  }
  s=encode(s);
  var obj=document.getElementsByTagName("body")[0];
  var t=obj.innerHTML.replace(/<span\s+class=.?highlight.?>([^<>]*)<\/span>/gi,"$1");
  obj.innerHTML=t;
  var cnt=loopSearch(s,obj);
  t=obj.innerHTML
  var r=/{searchHL}(({(?!\/searchHL})|[^{])*){\/searchHL}/g
  t=t.replace(r,"<span class='highlight'>$1</span>");
  obj.innerHTML=t;
  alert("搜索到关键词"+cnt+"处")
}
function loopSearch(s,obj){
  var cnt=0;
  if (obj.nodeType==3){
    cnt=replace(s,obj);
    return cnt;
  }
  for (var i=0,c;c=obj.childNodes[i];i++){
    if (!c.className||c.className!="highlight")
      cnt+=loopSearch(s,c);
  }
  return cnt;
}
function replace(s,dest){
  var r=new RegExp(s,"g");
  var tm=null;
  var t=dest.nodeValue;
  var cnt=0;
  if (tm=t.match(r)){
    cnt=tm.length;
    t=t.replace(r,"{searchHL}"+decode(s)+"{/searchHL}")
    dest.nodeValue=t;
  }
  return cnt;
}
</script>
<style type="text/css">
.highlight{background:green;font-weight:bold;color:white;}
</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<span class="title">英语</span>
		</div>
		<div class="content">


			<ul class="nonelist">
			<form onsubmit="highlight(this.s.value);return false;">
			<input name="s" id="s" title="搜索内容："/><input type="submit" value="搜索"/>
			</form>
			<li>翻译部分</li>
<pre>
Unit 1

1.If you have much spare time when you are on business in Japan,you "can pick up some Japanese" .(可以学点日语)
2.Although you are the leader here,you cannot "lay down the rules totally according to your own will".(完全按照自己的医院制定规则)
3.They successede "by means of patience and carefulness".(通过耐心和细心)
4.New citizens are required to "conform to the local customs".(遵照当地的风俗)

1.the "slant" of the news :新闻的“观点”	
2.well-educated people:受过良好教育的人
3.win the day:获胜，占上风
4.旅行支票:Traveler's Check
5.乘电梯:take a lift
6.地区性变化:regional variation
</pre>
<pre>
Unit 2

1.Don't bother her.She "is busy writing a letter".(她正忙着写信呢)
2.Take the raincoat "in case it rains".(以防下雨)
3.The pointing press "has been shutdown for servicing".(已被关掉进行维修)
4.Voters are starting to "warm to the idea".(喜欢上这个主意)

1.emotional breakdown:情绪化故障
2.come out with a new version:推出新版本
3.quit drinking:戒酒
4.非正常关机:shut down the computer improperly
5.傲慢无礼的信息:a snippy noto
6.忠实的“视窗”用户:a loyal Windows man
</pre>
<pre>
Unit 4
1."Shortly after she arrived home"(她到家没多久),she started preparing the supper.
2.The team's success was largely "due to her efforts"(归功于她的努力).
3."To his amazement"(令他惊喜的是),Mike passed the final examination of physcs.

1.pucker one's lips:嘟起嘴唇
2.pump up one's chest:鼓起胸脯
3.high density:高密度
4.当地人:a local man
5.一大群:a large flock of
6.用甜美的嗓音:in a sweet voice
</pre>

<pre>
Unit 5
1.When my sister heard that she had failed the exam again,"she was beside herself"(她气坏了)
2.I feel sorry that you "have truned down the job offer again".(又一次拒绝这个工作机会)
3.He was very shy and "couldn't look me in the eye during our talk".(在我们谈话时不敢正视我)
4.The father told his son that people should be ready to "go through many difficulties in their lives".(经历人生中的许多磨难)

1.the in crows:时髦人群
2.election day:选举日
3.deliver a speech:发表一篇演说
4.写标语:write a slogan
5.修一门课:take a course
6.从大学毕业:graduate from university
</pre>
			</ul>

		</div>
	</div>

</body>
</html>