<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>文數格式</h2>
			<p>文數格式指的是將文字字串和數字以指定的格式顯示出來, 例如:指定小數位數,加上千分位符號,...等。</p>

			<h3>設定格式的三個方法</h3>
			<p>Python設定文字數字格式,由舊而新,有以下三個方法：</p>
			<ul>
				<li>%-formatting - 百分比格式符號</li>
				<li>str.format() - 字串格式函式</li>
				<li>f-strings - F字串設定</li>
			</ul>

			<h3>方法一</h3>
			<p>%-formatting：使用 % (百分比)符號，在字串後面加上 % 符號，再加上指定參數。這個方法在 python 2.6 之前已被採用，但它可以接收的參數數量較受限制。這方法在 Python 3
				仍然可以使用，但未來可能會被棄用，儘管沒有時間表。</p>

			<pre data-enlighter-language="python">
pi = 3.14159
print(" pi = %1.2f " % pi)

s1 = "cats"
s2 = "dogs"
s3 = " %s and %s living together" % (s1, s2)
		</pre>

			<h4>字串格式化</h4>
			<p>Python 支援格式化字串的輸出。 這樣可能會用較複雜的表達式，但可以使用的變化較多。最基本的用法是將一個值插入到一個有字串格式符號 %s 的字串中。 它的格式使用與 C 中sprintf 函數一樣的語法。
			</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3
print ( " 我叫%s今年%d歲! " % ( '小明' , 10 ) )
			</pre>

			<p>以上範例輸出結果：</p>
			<pre data-enlighter-language="python">
我叫小明今年10歲!
			</pre>

			<h4>字串格式化符號</h4>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>符號</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>      %c</td>
						<td> 格式化字符及其ASCII碼</td>
					</tr>
					<tr>
						<td>      %s</td>
						<td> 格式化字串</td>
					</tr>
					<tr>
						<td>      %d</td>
						<td> 格式化整數</td>
					</tr>
					<tr>
						<td>      %u</td>
						<td> 格式化無符號整型</td>
					</tr>
					<tr>
						<td>      %o</td>
						<td> 格式化無符號八進制數</td>
					</tr>
					<tr>
						<td>      %x</td>
						<td> 格式化無符號十六進制數</td>
					</tr>
					<tr>
						<td>      %X</td>
						<td> 格式化無符號十六進制數（大寫）</td>
					</tr>
					<tr>
						<td>      %f</td>
						<td> 格式化浮點數字，可指定小數點後的精度</td>
					</tr>
					<tr>
						<td>      %e</td>
						<td> 用科學計數法格式化浮點數</td>
					</tr>
					<tr>
						<td>      %E</td>
						<td> 作用同%e，用科學計數法格式化浮點數</td>
					</tr>
					<tr>
						<td>      %g</td>
						<td> %f和%e的簡寫</td>
					</tr>
					<tr>
						<td>      %G</td>
						<td> %f 和%E 的簡寫</td>
					</tr>
					<tr>
						<td>      %p</td>
						<td> 用十六進制數格式化變量的地址</td>
					</tr>
				</tbody>
			</table>
			<h4>格式化操作符輔助指令:</h4>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>符號</th>
						<th>功能</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>*</td>
						<td>定義寬度或者小數點精度</td>
					</tr>
					<tr>
						<td>-</td>
						<td>用做左對齊</td>
					</tr>
					<tr>
						<td>+</td>
						<td>在正數前面顯示加號( + )</td>
					</tr>
					<tr>
						<td>&lt;sp&gt;</td>
						<td>在正數前面顯示空格</td>
					</tr>
					<tr>
						<td>#</td>
						<td>在八進制數前面顯示零('0')，在十六進制前面顯示'0x'或者'0X'(取決於用的是'x'還是'X')</td>
					</tr>
					<tr>
						<td>0</td>
						<td>顯示的數字前面填充'0'而不是默認的空格</td>
					</tr>
					<tr>
						<td>%</td>
						<td>'%%'輸出一個單一的'%'</td>
					</tr>
					<tr>
						<td>(var)</td>
						<td>映射變量(字典參數)</td>
					</tr>
					<tr>
						<td>mn</td>
						<td>m 是顯示的最小總寬度,n 是小數點後的位數(如果可用的話)</td>
					</tr>
				</tbody>
			</table>

			<h3>方法二</h3>

			<p>Python2.6 開始，新增了一種格式化字串的函數<strong>str.format()</strong>，它增強了字串格式化的功能。</p>

			<p>使用 str.format()：這是目前較普遍使用的方法，可以設定整數和浮點數的格式，也可以適用到字串的顯示方式。</p>

			<p>若要查看結果，可以使用以下的語法格式：</p>
			<pre data-enlighter-language="python">
print("FORMAT".format(NUMBER));
			</pre>

			<p>例如：</p>
			<pre data-enlighter-language="python">
print("{:.2f}".format(3.1415926));
			</pre>

			<p>使用format配置參數有三種方式</p>
			<ol>
				<li>使用 {} - 依照順序配置
					<pre data-enlighter-language="python">
txt1 = "My name is {}, I'm {}".format("John",36)
</pre>
				</li>
				<li>使用 {編號} - 編號由0開始,可以設定使用參數的順序
					<pre data-enlighter-language="python">
txt2 = "My name is {0}, I'm {1}".format("John",36)
</pre>
				</li>
				<li>使用 {變數} - 設定使用參數的變數, format的參數中必須指定參數名稱
					<pre data-enlighter-language="python">
txt3 = "My name is {fname}, I'm {age}".format(fname = "John", age = 36)
			</pre>
				</li>
			</ol>

			<h4>參考資料</h4>
			<ul>
				<li><a href="https://www.programiz.com/python-programming/methods/string/format"
						target="_blank">Programiz - Python String format()</a></li>
				<li><a href="https://www.w3schools.com/python/ref_string_format.asp" target="_blank">w3schools - Python
						String format() Method</a></li>
			</ul>

			<p>以下是數字格式常見的設定方法：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>數字</th>
						<th>格式</th>
						<th>輸出</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>3.1415926</td>
						<td>{:.2f}</td>
						<td>3.14</td>
						<td>保留小數點後兩位</td>
					</tr>
					<tr>
						<td>3.1415926</td>
						<td>{:+.2f}</td>
						<td>+3.14</td>
						<td>帶符號保留小數點後兩位</td>
					</tr>
					<tr>
						<td>-1</td>
						<td>{:+.2f}</td>
						<td>-1.00</td>
						<td>帶符號保留小數點後兩位</td>
					</tr>
					<tr>
						<td>2.71828</td>
						<td>{:.0f}</td>
						<td>3</td>
						<td>不帶小數</td>
					</tr>
					<tr>
						<td>5</td>
						<td>{:0&gt;2d}</td>
						<td>05</td>
						<td>數字補零 (填充左邊, 寬度為2)</td>
					</tr>
					<tr>
						<td>5</td>
						<td>{:x&lt;4d}</td>
						<td>5xxx</td>
						<td>數字補x (填充右邊, 寬度為4)</td>
					</tr>
					<tr>
						<td>10</td>
						<td>{:x&lt;4d}</td>
						<td>10xx</td>
						<td>數字補x (填充右邊, 寬度為4)</td>
					</tr>
					<tr>
						<td>1000000</td>
						<td>{:,}</td>
						<td>1,000,000</td>
						<td>以逗號分隔的數字格式</td>
					</tr>
					<tr>
						<td>0.25</td>
						<td>{:.2%}</td>
						<td>25.00%</td>
						<td>百分比格式</td>
					</tr>
					<tr>
						<td>1000000000</td>
						<td>{:.2e}</td>
						<td>1.00e+09</td>
						<td>指數記法</td>
					</tr>
					<tr>
						<td>13</td>
						<td>{:10d}</td>
						<td>        13</td>
						<td>右對齊 (默認, 寬度為10)</td>
					</tr>
					<tr>
						<td>13</td>
						<td>{:&lt;10d}</td>
						<td>13</td>
						<td>左對齊 (寬度為10)</td>
					</tr>
					<tr>
						<td>13</td>
						<td>{:^10d}</td>
						<td>    13</td>
						<td>中間對齊 (寬度為10)</td>
					</tr>
				</tbody>
			</table>

			<p>使用這個方法，也可以顯示不同的數字進位。例如：</p>
			<pre>
'{:b}'.format(11)
'{:d}'.format(11)
'{:o}'.format(11)
'{:x}'.format(11)
'{:#x}'.format(11)
'{:#X}'.format(11)
			</pre>
			<p>結果為：</p>
			<pre>
1011
11
13
b
0xb
0XB</pre>

			<p>格式用法說明：</p>
			<p>: 號後面帶填充的字元，而且只能是一個字元，不指定則預設是用空格填充。</p>
			<p>^, &lt;, &gt; 分別是居中、左對齊、右對齊，後面帶寬度。</p>
			<p>+ 表示在正數前顯示 +，負數前顯示 -；　（空格）表示在正數前加空格</p>
			<p>b、d、o、x 分別是二進制、十進制、八進制、十六進制。</p>

			<p>此外可以使用大括號 {} 來轉義大括號，如下實例：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python
# -*- coding: UTF-8 -*-
print ("{} 對應的位置是 {{0}}".format("wenzao"))
			</pre>

			<p>輸出結果為：</p>

			<pre>
wenzao 對應的位置是 {0}
			</pre>
			<h4>參考資料</h4>
			<ul>
				<li><a href="https://www.python.org/dev/peps/pep-3101/" target="_blank">PEP 3101 -- Advanced String
						Formatting</a></li>
			</ul>

			<h3>方法三</h3>
			<p> F-Strings：這個方法是在 Python 3.6 之後導入使用，方法是在字串的引號前面加上 f 字元(大小寫皆可)，例如: f"string"，這方法使用較簡短的語法，使它更容易使用並且可以用樣板型式。 這個方法與str.format()設定變數的方式很類似，在文字字串裡面加入 {變數} 作為格式化的依據，但功能更多：</p>

			<p>實例 1</p>
			<pre data-enlighter-language="python">
age = 24
name = "John"
print(f"{name} is {age} years old.")

# outputs: John is 24 years old.
			</pre>

			<p>實例 2.加上 = (等於)符號</p>
			<pre data-enlighter-language="python">
book = "Lord of the Rings"
author = "J.R.R. Tolkien"
print( f"{book = } \n{author = }" )

# 執行結果
# book = 'Lord of the Rings' 
# author = 'J.R.R. Tolkien'
</pre>

			<p>實例 3.設定大數字格式</p>
			<pre data-enlighter-language="python">
number = 123454353453
print(f"The value of the company is {number:,d}")

# outputs: The value of the company is 123,454,353,453
</pre>
			<p>實例 4.設定日期格式</p>
			<pre data-enlighter-language="python">
from datetime import datetime
today = datetime.today().date()
print(f"Today is {today}")
print(f"Today is {today:%Y/%m/%d}")

# outputs: Today is 2021-09-07
# outputs: Today is 2021/09/07
			</pre>

			<p>實例 5.可以做數字計算，例如：</p>
			<pre data-enlighter-language="python">
print( f"Do math: 3 * 6 = {3 * 6}" )

# outputs: Do math: 3 * 6 = 18
</pre>

			<p>實例 6.可以呼叫函式，例如：</p>
			<pre data-enlighter-language="python">
verb = "runs"
print( f"The girl {verb.upper()} quickly." )

# outputs: The girl RUNS quickly.
			</pre>

			<p>實例 7.可以填充數字，例如：</p>
			<pre data-enlighter-language="python">
a = 4
b = 123
print(f"Product numbers are {a:03} and {b:03}")

# outputs: Product numbers are 004 and 123
			</pre>

			<p>實例 8.印出原始字串(!r)</p>
			<pre data-enlighter-language="python">
aaa = "Hello \n World"
print(f'The welcome string is {aaa!r}')

# outputs: The welcome string is 'Hello \n World'
			</pre>

			<p>字串三種引用符號均可使用，例如，以下三個方法所得到的結果相同：</p>
			<pre data-enlighter-language="python">
name = "Fred"
print( f'{name}' )
print( f"{name}" )
print( f"""{name}""" )
</pre>
			<h4>詳細設定參考</h4>
			<ul>
				<li><a href="https://www.python.org/dev/peps/pep-0498/" target="_blank">PEP 498 -- Literal String
						Interpolation</a></li>
				<li><a href="https://tw511.com/a/01/9107.html" target="_blank">Python格式化字串f-string詳細介紹</a></li>
				<li><a href="https://www.mlln.cn/2018/05/19/python3%20f-string格式化字符串的高级用法/" target="_blank">Python3
						f-string格式化字串的高级用法</a></li>
				<li><a href="https://realpython.com/python-f-strings/" target="_blank">Python 3's f-Strings: An Improved
						String Formatting Syntax (Guide)</a></li>
			</ul>
		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>