<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2014-网络工程班-科学考试说明书</title>
	<link rel="stylesheet" href="/style/bootstrap.css">
	<link rel="stylesheet" href="/style/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<span class="title">CPP</span>
		</div>
		<div class="content">
			<ul class="nonelist">
				<li><a href="">1.在C++中，参数传递方式 有？</a>
					<p><pre>值传递 地址传递</pre></p>
				</li>
				<li><a href="">2.写C++程序，源文件的扩展名是？</a>
					<p><pre>cpp</pre></p>
				</li>
				<li><a href="">3.int year = 2014, 判断year是否是闰年的逻辑判断表达式是？</a>
					<p>
<pre>
if((year%400==0)||(year%4==0&&year%100!=0))
{
	cout&#60;&#60;year&#60;&#60;&#60;&#60;“是闰年”;
}
</pre>
					</p>
				</li>
				<li><a href="">5.列举三个流程控制语句</a>
					<p><pre>if else while for()....</pre></p>
				</li>
				<li><a href="">6.字符串是用如何来表示的，如何来表示结尾？</a>
					<p><pre>C++中，用一个一维的字符数组表示字符串。数组的每一个元素保存字符串的一个字符，并附加一个空字符，表示为'\0'，添加在字符串的末尾，以识别字符的结束。</pre></p>
				</li>
				<li><a href="">7.十进制的9换算成二进制</a>
					<p><pre>00001001</pre></p>
				</li>
				<li><a href="">8.列举2种基本数据类型</a>
					<p><pre>int char float....</pre></p>
				</li>
				<li><a href="">9.写输出结果</a>
					<p>
<pre>int i = 3;
int k = 4;
double j = 2.0;
cout&#60;&#60;"i/k="&#60;&#60;i/k&#60;&#60;endl;
cout&#60;&#60;"i/j="&#60;&#60;i/j&#60;&#60;endl;
</pre></p>
<p>
<pre>
i/k=0
i/j=1.5
</pre>
</p>
				</li>
				<li><a href="">10.strcpy函数的函数原型和意义是？</a>
					<p><pre>函数原型：strcpy(char destination[], const char source[]);
函数功能：将字符串source拷贝到字符串destination中</pre></p>
				</li>
				<li><a href="">11.int a,b,c. 用三目运算符？：求abc中最小值的表达式写法</a>
					<p><pre>if(a&#60;b){
return a&#60;c?a:c;
}
else{
return b&#60;c?b:c;
}
</pre><pre>
(a&#60;b)?(a&#60;c?a:c):(b&#60;c?b:c)</pre></p>
				</li>
				<li><a href="">12.写出两种能够交换的swap函数</a>
					<p><pre>void Swap (int *x, int *y) 
{ //引用传递（指针）
	int temp = *x;  *x = *y;　*y = temp;
}</pre>
<pre>
void Swap (int &x, int &y)
{ //引用传递
	int temp = x;　x = y;　y = temp;
}
</pre>
</p>
				</li>
				<li><a href="">13.简述结构化的程序设计、面向对象的程序设计的基本思想。</a>
					<p><pre>结构化:把完成某一个任务的复杂的过程分解为子过程,子过程再分解,一直到某些相对简单的过程.
面向对象:将一个复杂的系统分解为一些合适实体，由这些实体共同提供系统的功能.</pre></p>
				</li>
				<li><a href="">14.简述关键字static的作用。</a>
					<p><pre>第一个作用：隐藏。
当我们同时编译多个文件时，所有未加static前缀的全局变量和函数都具有全局可见性。
第二个作用：保持变量内容的持久。
第三个作用：默认初始化为0</pre></p>
				</li>
				<li><a href="">15画出for循环的流程图</a>
				<img src="/imgs/for.jpg" alt="">
				</li>
				<li><a href="">16.请简述C++的特点</a>
					<p><pre>C++的主要特点有两个方面：全面支持C语言与面向对象。</pre></p>
				</li>
				<li><a href="">17.打印图形</a>
					<p><pre>
*
**
***</pre></p>
<p>
<pre>
#include &lt;stdio.h&gt;
void main(void) {
 int m = 0;
 for(int i = 0;i&lt;3;i++)
 {
   m = i;
   do{
   cout&lt;&lt;"*";
   }while(m!=0)
   cout&lt;&lt;endl;
 }
}
</pre>
</p>
				</li>
				<li><a href="">18.打印fib数列</a>
					<p><pre>1,1,2,3,5,8...
求菲波那契数列</pre></p>
<p>
<pre>
#include &lt;stdio.h&gt;
void main(void) {
 const int NUM = 20;
 const int COL = 5; 
 int f[NUM + 1],i;
 f[1] = 1;
 f[2] = 1;
 for(i=3;i&lt;=NUM;i++)
  f[i]=f[i-2]+f[i-1];
 for(i=1;i&lt;=NUM;i++){　
  printf("%10d",f[i]);
  if(i%COL==0)
   printf("\n");
　}
}	
</pre>
</p>
				</li>
				<li><a href="">19.写一段完整可以编译的程序，编程求矩阵的加法，并打印输出结果矩阵：</a>
					<p><pre>
5  7  8   4 -2  3
2 -2  4 + 3  9  4 = ？
1  1  1   8 -1  2</pre></p>
<p>
	<pre>
#include&lt;stdio.h&gt;
#include&lt;iostream.h&gt;
void main()
{
 int a[][3] = 
  {
   {5,7,8},
   {2,-2,4},
   {1,1,1}
  };
 int b[][3] = 
  {
   {4,-2,3},
   {3,9,4},
   {8,-1,2}
  };
  int c[3][3];
  for(int i=0;i&lt;3;i++){
   for(int j=0;j&lt;3;j++){
    c[i][j]=a[i][j]+b[i][j];
    cout&lt;&lt;c[i][j]&lt;&lt;"  ";
   }
  cout&lt;&lt;endl;
 }
 getchar();
}</pre>
</p>
				</li>
				<li><a href="">20.递归：10级台阶。一头猪一次只能上1级或2级，不能下台阶。问一头猪在台阶下上完10级台阶，有几种方法。</a>
					<p><pre>
class Solution {
public:
 int climbStairs(int n){
  if(n&lt;=1)
  return 1;
  else if(n == 2)
  return 2;
  else{
    int a = 1;
    int b = 2;
    int i=n;
    int sum = 0;
    for(int i=3;i&lt;=n;i++)
    {
        sum =a+b;
        a = b;
        b = sum;
    }
        return sum;
   }
 }
}</pre></p>
				</li>
				<li><a href="">21.字符串逆序</a>
					<p><pre>使用C/C++编写函数，实现字符串反转，要求不使用任何系统函数，且时间复杂度最小，函数原型：
char* reverse_str(char* str)。</pre></p>
<p>
<pre>
#include &lt;iostream.h&gt;
#include &lt;string.h&gt;
#define LENGTH 80
//反序一个字符串
void reverse(char s[]){
　char c;
　int i,j;
　j = strlen(s) - 1;
　for(i = 0;i &lt; j;i ++){
　　c = s[i];
　　s[i] = s[j];
　　s[j] = c;
　　j --;
　}
}
void main(void) {
 char str[LENGTH + 1];
 cout&lt;&lt;"Input a string:";
 cin&gt;&gt;str;
 reverse(str);
 cout&lt;&lt;"The string is reversed:"&lt;&lt;str&lt;&lt;endl;
}</pre>
</p>
				</li>
				<li><a href="">22.链表去重</a>
					<p><pre>Given 1->1->2, return 1->2.
Given 1->1->2->3->3, return 1->2->3.</pre></p>
<p>
<pre>
class Solution {
public:
 ListNode *deleteDuplicates(ListNode *head) {
  if(head == NULL){
   return head;
  }
  ListNode* phead= head;
  while(phead!=NULL&&phead->next != NULL){
  while(phead!=NULL&&phead->next != NULL&&phead->val == phead->next->val){
   ListNode* p= phead->next;
   phead->next = phead->next->next;
   delete p;
  }
  phead = phead->next;
 }
  return head;
 }
};
</pre>
</p>
				</li>
				<li><a href="">23.整数123转换成整数321</a>
					<p><pre>
class Solution {
 public:
  int reverse(int x) {
  int tag = x>0?1:-1;
  int a = 0;
  if(x<0){
   x = -x;
  }
  while(x!=0) {
   a = a*10 + x%10;
   x /= 10;
  }
  return a*tag;
 }
}</pre></p>
				</li>
				<li><a href="">24.给你一个整型数组a[n]，完成一个小程序代码（20行之内），使得a[n]逆向，即原数组为1，2，3，4，逆向之后为4，3，2，1</a>
					<p><pre> 
int a[], int * a;
void reverse(int * a,int n){
 int  c;
 int i,j;
 j =n- 1;
 for(i = 0;i < j;i ++){
  c = s[i];
  s[i] = s[j];
  s[j] = c;
  j --;
 }
}</pre></p>
				</li>
				<li><a href="">25.对13，24,转换成2进制，再做 </a>
					<p><pre>
13&lt;&lt;1,
13&24,
13^24
</pre></p>
<p>
<pre>
13(10) = 1101(2);
24(10) = 11000(2)
</pre>
</p>
<p>
<pre>
13&lt;&lt;1=11010;
13&24 = 01101&11000 =1000;
13^24 = 01101&11000 = 10101;
</pre>
</p>
				</li>

			</ul>

		</div>
	</div>
</body>
</html>