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
<pre>
Unit 7
1.Wolfgang Amadeus Mozart "was regarded as a musical genius" (被认为是一个音乐天才).
2.These students have learned to "adapt to the new environment"(适应这个新环境).
3.The audience "responded to his speech with thunderous applause"(对他的演讲报以雷鸣般的掌声).
4.As a matter of fact,happiness "is not equated with money"(不与金钱等同).

1.have positive self-concept:有积极的自我意识
2.put other concerns out of the picture:将其他事情置之度外
3.at the same speed:以同样速度
4.家庭的基本开支:the basic bill of the family
5.养育孩子:child rearing
6.自我感觉良好:to feel good about oneself
</pre>
<pre>
Unit 8
1.Because the exam is in two weeks'time,"my part-time job must give way to preparation for it"(我得暂时放下兼职工作，全力准备考试了).
2.After many years in the field of computer science, I now finally "have come to realize how important English is"(意识到英语是多么重要了).
3.He "pretended to be sick"(假装病了)so that he could stay at home instead of going to school.
4.The police broke into the house and "found out that there were two thieves"(发现有两个小偷)in the conrner of the kitchen.

1.a perfect match:天作之合
2.shed tears:流泪
3.sweet nothings:甜蜜的琐事
4.实实在在的生活:real business of living
5.婚姻纪念日:wedding anniversary
6.生活调味品:the spice of life
</pre>
<pre>
Unit 10
1.He "acted out his promise"(时间自己的诺言)by fulfilling the task in the limited time.
2.After her graduation,my daughter "prefers to go and study in the United States"(希望去美国读书).
3.He climbed to the top of the tower,"regardless of danger"(不顾危险).
4.The high winds "set off a lot of car alarms"(使得很多汽车的报警器响起来).

1.the protection of home:家庭的保护
2.under the watchful eyes of an adult:在成人的看管下
3.爱探究的大脑:a questioning mind
4.有利地形:a vantage point
5.还就之旅:a nostalgic visit
</pre>
<pre>
Unit 11
1.With such a weak heart,"she was lucky to come through the operation"(她幸运的过了手术关).
2."They decided to carry on their work" in spite of the bad weather(他们决定继续工作).
3.The freshman was "unable to adjust himself to the new college environment"(无法适应新的大学环境).
4.The people who love you "are worthbeing loved by you"(值得被你所爱).

1.all sorts of lines:各行各业
2.highly original work:高度创新的工作
3.a sturdy soul:坚定的人
4.宽广的见识:a broad view
5.以一定的速度:at a set speed
6.在职培训:on-the-job training
</pre>
		<li>阅读理解</li>
<pre>
Unit 1 
DO You Speak British or American?
[答案]D:origin,B:f,A:underwear,C:trousers,C:lovely,D:"Have any change?"

Unit 2
Friend or Foe(敌人)?
[答案]C:A screen problem...,D:After Dark,A:They can protect the screen.,D:They are rubbish and trouble-makers,B:They hole back the operation of other programs.,C:Install the most reliable...

Unit 4
Animal Factories
[答案]1.suffer 2.welfare 3.transporten 4.production 5.painfully 6.awareness 7.meat 8.destruction

Unit 5
A Boy and His Tree
[答案]
toys |apples
a house |branches
a boat |trunk
a place to lean on and rest |roots

Unit 7
I Want a Wife
[答案]F ,T ,T ,F ,F

Unit 8
Supermarket Proposal
[答案]
0.how romantically and suprisingly her husband proposed toher in the supermarket.
1.flowers
2.an engagement ring
3.a tuxedo
4.a guitar
5.a black dress
6.a string trio
7.candles and hors d'oeuvres

Unit 10
Why Do Some Babies Thoroughly Enjoy a Good Game of Peek-a-boo?
[答案]:答案太长了，懒得打，这题绝对不会考！！

Unit 11
Useless Homework
[答案]
1.D:The headmasters 2.C:parents... 3.B:it is often... 4.D:Tes of millions... 5.A:Puttion... 6.C:homework should...  
</pre>

<li>听力</li>
<pre>
Unit 6
A:He will go on with his studies.
B:In a supermarket
C:Because his eyesight is poor
A:He is planning to lose weight
D:He'll have a nice meal

Unit 9
C:English
D:A taxi
A:Taking some fresh air
B:Because he's ill
B:Go to see a film

In the United States,...
1.young 2.part 3.camping 4.twice 5.while


</pre>
</ul>

		</div>
	</div>

</body>
</html>