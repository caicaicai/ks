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
  alert("搜索到关键词 "+cnt+" 处")
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
			<li>缩放</li>
<pre>
马丁：
你有空到我这里来聊一聊，好吗？我正在准备下个月举          行的演讲比赛，很想听听你的意见和建议。
                     吉姆        10月10日
                                  Oct.10
Martin,
Could you come and visit with me at your convenience? Your advice and suggestions are needed in my preparation for the Public Speaking Contest to be held next month..
                                         Jim
                                                         
留言人：张强（秘书）
首条人：王飞   事由：总经理办公室的电脑突然坏了，盼速来修理   日期：5月30日
                                                                        May 30th
Wang Fei,
The computer in the General Manager's office has suddenly stopped working.Hoping to be favored with your prompt attention..
                                                                             Zhang Qiang
2006年3月22日
亲爱的克拉克先生：
     我想知道我能否在这个星期五，也就是3月24日，请一条事假。
    今天早晨，我的医生打电话催我去拿我80岁老母亲的健康检查结果。这两个星期她一直遭受失眠的折磨，所以我必须尽快带她去看医生，否则情况会更糟糕。
    考虑到我的工作量，我想在这个星期五请一条假也许是最好的办法。我为自己请假所带来的不便感到抱歉。
谢谢你。我会在下午两点给你打电话，或者你也可随时打电话给我。  你忠实的    比利.王
                              March 22nd,2006
Dear Mr. Clark
I would like to know if I could ask for leave of absence for one day on Friday,March 24th.This morning I received  a telephone call from my doctor,urging me to pick up my 80-year-old mother's health report,who has been experiencing sleep problems during the past fortnight.I have to take her to see the doctor as soon as possible,or the situation could worsen.Concerning my workload,Ithink a one-day leave this Friday may be the best solution.I apologize for the inconvenience my absence from work may cause.
Thank you.I will call you at 2 p.m.,or you can call me at any time.
                             Yours faithfully
                               Billy Wang
张海：
本周集体备英语课，您看何时为宜？望告。本次备课活动将由您主持，特此提醒。      程文   8月12日
                                  August 12
Zhang Hai,
Will you please tell me what time this week will be convenient for us to get together to prepare our English Lessons?May Iremind you that you will be in charge this time?
                                    Cheng Wen
兹收到爱德华.辛普森先生承租南京中山南路164号公寓2002年四月份的房租人民币1000元整。此据。  张思聪   2002年5月18日
                      May 18th ,2002
Received from Mr.Edward Simpson the sum of one thousand yuan,being the rent for April of 2002 for the apartment occupied by him at 164 Zhongshan Road(S),Nangjing.
                             Zhang Sicong
英语系美籍教师Mr.Pender因参加国际学术会议，于2005年5月30日向张卫东借用IBM笔记本电脑一台，
                                        May 30th,2005
Borrowed from Zhang Wei an IBM laptop for an international academic conference.

</pre>
<pre>
   Pender
                            The English Department
请假人：Carl Zhang     收条人：Tom Li（Carl Zhang的老板）
请假原因：Carl Zhang患重感冒，想请一天病假（5月9日）去医院看病，并打算尽力在10号完成工作。
请假日期：2006年5月8日     最后表示：赐复为盼，十分感谢。
      A Request for Sick Leave
                                   May 8th,2006
Dear Mr. Tom Li
I wonder if I could ask for a leave of absence for one day on May 9th.
Ihave just come down with a bad cold.so I hope I can go to hospital tomorrow.I will try my best to finsih my work on May 10th.
Many thanks.I'm looking forward to your kind answer.
                                                                              Sincerely yours,
                                                                                     Carl Zhang
彼得：
见条后，请立即去布莱克教授的办公室。
               理查德   星期一上午
                                                       
                     Monday morning
Peter,
Upon receiving this note,pls go to Prof.Black's office.
                                 Richard
                                                                                                
                        2006年3月4日
亲爱的布莱克先生：
  非常抱歉，今天早上我因重感冒不能前来上课。现附上医生证明，医生担心我也许要几天才能康复。我能否请假三天？谢谢！   你忠实的   汤姆
 附件：医生证明
                               4th March,2006
Dear Mr. Black,
I am sorry that I wasn't able to attend school this morning because of a bad cold. I am enclosing a certificate from my doctor as he fears I may need several days to recover.Could I take three days off?
                                Sincerely yours,
                                      Tom
Enclosure:Medical certificate
             借条
兹借到大卫.布朗先生美金四百元整，年息百分之四，自即日算起，一年内归还。
  玛格丽特.纽曼   英语系     2002年3月16日
                         March 16,2002
To Mr. David Brown
IOU four hundred U.Sdollars only,to be paid back within one year from this date with annual interest at four percent.
                              Margaret Newman
                           The English Department 
今收到展鹏下列书籍：
    马克.吐温著：《王子与贫儿》一本。
    威廉.莎士比亚著：《仲夏夜之梦》一本。  赵一磊       2005年11月20日
     NOV 20,2005
Received from Zhan Peng these two books:A copy of The Prince and the Pauper by Mark Twain and cpy of A Midsummer Night's Dream by William Shakespeare.
                              Zhao Yilei
借条
今借到语言文化学院语言实验室飞利浦牌录音机1台，索尼磁带8盒。 弗兰克.阿伦 中文系2001年7月26日
     July 26,2001
Borrowed from the Language Laboratory of the School of Language and Culture one tape recorder,PHILIPS brand and eight cassette tapes,SONY brand.
                                   Frank Alan
                           The Chinese Department

</pre>
<pre>
  阅读理解
一．American and British people both speak English,……but their French is different from the French spoken in France
1.According to this …in the following aspects Except(D origin) 2.American English and…letters EXCEPT(B f)    3.In British English ,..a kind of (A underwear)  4.In the United States…like of something?(C nice)  5.In Britain ,if an …likely to say,(C Have you got any change)  6.Accoeding to the author…and American English (D both time and place)
二so what is your screensaver today? Britney Spears?... stable and you’ll be saving electricity.
1.what is cathode-ray ..dermatitis? (C  Acreen problem…forever.) 2.what is the first …ever seen?(D After Dark) 3.What do most…screensavers?(A They can ..screen)  4.What does the writer…screensavers?(D They are…trouble-makers )  5.What problems do …to the write?(B They hold ..other programs)  6.Which of the…present screensavers?(C Install the most…program)
三、American  English and British ….Do not mix the two
1. Of the following …United States(D Financial Times)  2. Of the following statements，which one is TRUE？(B Webster’s reformation of t… certain sense)3. From Paragraph 7,wecan learn all the f…(D  this example is used …very significant)  4. Among the following …and British English(A  H.L.Mencken) 5. The writer's main point of view …(B we should stick to e…t very important)
四、At least once per day …disks to be scanned
1. The writer feels upset …(A his computer has some … solve them)  2. Some versions of Windows …show that(D Microsoft Company… reliable products)  3. How can the user… operating system?(D THE user … crayons)  4. In paragraph 5,by"planet …means…(B owing to the berakdown …found at all)  5. What is the writer's attitude towards Windows? (C The writer dislikes …without it.)
五、My  husband Mark and I moved to a small…CALLING,”kitty,kitty,litty!
1. At first the author called"Kitty,Kitty,Kitty"to(B call in the c… at night)  2. The author's …animals including (A deer,turkeys,and crows)  3. Which statement is TRUE according ro the passage? (C Both the authorand …turkeys respond)  4. From the passage,we may learn that the local man will later perhaps(D use the cat …in the woods)5.The author's …animals is(B  affectionate(挚爱的))
六、In my last year of high school……clan to graduate from university.
1. The writer at first …election because(C he thought …not win)  2. The writer may …reasons EXCEPT(D his good grades)  3. From the example of pa… mayleran that(C the father was right)
4. The chief reason why… was that(A his girlfriend broke up with him)  5. The writer's main purpose is to show(B how his father …many ways)
七、The male gender role is a complex…new male roles such as child rearing
1. How many disadvantages … in this article?(C 4)  2. Why must a man earn money to feel good about himself?(B Because his income …and successs)  3. What would …to their work?( D They can't …of their career)  4. According to some… "mew age"men?(B 5 to 10 percent)  5. Which one is NOT a stereotype of men?( A  Emotional)
八、My wife and I first met in a supermarket…and confessed that it was good
1. The author thought t… together because( B whatever she liked …shewanted too)  2. The author and …that they'd married( A The author and his …they'd married)  3. From the examples given… learn that(B the author… all the time)  4. Why did the author… was good?( C Because they realized …their life winderful)  5. The word "picture"in the title refers to(C their  understanding of marriage)
九、As infants ,we relate primarily to mother or other …rather ordinaryplace
1. Which of the following …early childhood.(C We remain completely …care-givers.)  2. In the following …children's safe use?( D A living room) 3. About the author's "secret homes",… NOT directly stated?( D Actually,… homes at all)  4. On her visits to her …because(B she did not want to destroy her beautiful …adult perceptions)  5. From the essay,we may learn that(D for some adults,their… of their childhood)

</pre>
<pre>
  十、As you read this, there is a bad…of Yinglish speakers!
1. The Yinglish in the article refers to(C the English spoken …words in their Chinese)   2. According to …benhavior if(C a Chinese person says"Ni shi wo zui love de ren"你是我最love的人) 3. According to the author,the …speak Yinglish is that(B they lack confidence)  4. If the author inserts …native country,people( B will criticize him)  5. In the following …one is TRUE?( D English is… to the tathor)  6. The author …all the reasons EXCEPT(A English can …r to others)
十一、internet addiction has become…internet are great training
1. According to… Internet addiction?(A  If a person …with his/her partner.)  2. According to a recent …following EXCEPT(D bad health)   3. Who are more… the survey?( D Women)  4. How much time didi Mrs.Parker use to spend on Net each day?( B More than 10 …morning.)   5. What …time spent online?(C The huge expense on Internet)  6. What is the towards Internet?(D  Internet is addictive …it properly.)
十二、Of the thousands of different kinds of …spent on their health
1. What is the topic of the passage?( D The ways of dealing with domestic animals)  2. According to the …because they both(A do hard work for human beings)   3. According to the passage,which statement  is TRUE?( A Neither cats … call their own.)   4. Where should a big dog be kept?( D In a kennel)  5. The passage… in animal care,They are(C food,… treatment)
十三、when the good Lord…the angel shutteth  up
1. God created father tall in order that（C children can admire father）  2. The angel …thought they could not(A help with child care)   3. The angel disliked …because they(B may crush a child) 4. According to Para.12,father was made(D both authoritative and tolerant)   5. In the end,the angel(C was very satisfied with the result)  6. The article shows that father was created to be(B admirable,loving and protective)
十四、Newborn babies do not know if…the peer group ,and school
1. Which of the following does NOT s… their gender?( D Some parents… gender toles.)  2. Why do …a maccho image?( B Society and their… so.)   3. Girls turn out … environment because(C their parents …too much)   4. Some parents… way because(D there are somefactors … can't control)   5. The article …expected to be(D gentle and polite)
十五、A week after our daughter Lauren…there at her hour of need
1.Bonnie was taking painkillers because(B she had been injured during delivery)  2. When John went back …because(A she felt that she …cared)  3. Why did Bonnie …weather friend?(B Because John …she was happy)  4. In the end,… thought that(A real love was t… any time)  5. The article shows that(C a love in need is a love indeed)
十六、A woman named Emily renewing…Associate Research Assistants
1. According to the c… care of the family?( C Housewife)  2. What didi the weiter name her occupation as when she found herself was asked about that in the Town Hall one day?( B Research …Human Relations.)  3. In Paragraph 10,what …respectively refer to?( B The inside …of the house)  4. What was the clerk's reaction …in detail?( C The clerk was respectful)  5. Is the writer's …old is he/she?(A Female.Six months old)  6. What does "testing …mean?( C It means the …reason.)  7. What title does the writer give to grandmothers,great grandmothers and aunts respectively?(D Senior Research Associates,Executive …Research Assistants.)  8. What does the weiter think of motherhood?( D It's a glorious career)

</pre>
</ul>

		</div>
	</div>

</body>
</html>