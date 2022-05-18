<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>數字(Number)</h2>
			<p>Python 支援三種不同的數值類型： </p>
			<ul>
				<li>整數(Int) - 正或負整數，不帶小數點。Python3 整數是沒有限制大小的，可以當作 Long 類型使用，所以 Python3 沒有 Python2 的 Long 類型。 </li>
				<li>浮點型(float) - 浮點型由整數部分與小數部分組成，浮點型也可以使用科學計數法表示（2.5e2 = 2.5 x 102 = 250） </li>
				<li>複數( (complex)) - 複數由實數部分和虛數部分構成，可以用a + bj,或者complex(a,b)表示， 複數的實部a和虛部b都是浮點型。 </li>
			</ul>
			<p>整數可以使用十六進位制和八進位制來代表：</p>

			<pre data-enlighter-language="python">
>>> number = 0xA0F # 十六進制
>>> number
2575

>>> number=0o37 # 八進制
>>> number
31
			</pre>

			<h3>數字類型轉換</h3>

			<p>若需要進行數字類型進行轉換，可使用以下内建函數：</p>

			<ul>
				<li>int(x) - 將x轉換為一個整數</li>
				<li>float(x) - 將x轉換到一個浮點數</li>
				<li>complex(x) - 將x轉換到一個複數，實數部分為 x，虛數部分為 0</li>
				<li>complex(x, y) - 將 x 和 y 轉換到一個複數，實數部分為 x，虛數部分為 y</li>
			</ul>

			<h3>數字運算</h3>
			<p>表達式的語法很直白： +, -, * 和 /, 和其它語言裡一樣。例如:</p>

			<pre data-enlighter-language="python">
>>> 2 + 2
4
>>> 50 - 5*6
20
>>> (50 - 5*6) / 4
5.0
>>> 8 / 5  # 總是返回一個浮點數
1.6
			</pre>

			<p>在整數除法中，除法 / 總是返回一個浮點數，如果只想得到整數的結果，丟棄可能的分數部分，可以使用運算符 // ：</p>
			<pre data-enlighter-language="python">
>>> 17 / 3  # 整數除法返回浮點型
5.666666666666667
>>>
>>> 17 // 3  # 整數除法返回向下取整後的結果
5
>>> 17 % 3  # ％操作符返回除法的餘數
2
>>> 5 * 3 + 2
17
			</pre>

			<p>注意：// 得到的並不一定是整數類型的數，它與分母分子的數據類型有關係。</p>

			<pre data-enlighter-language="python">
>>> 7//2
3
>>> 7.0//2
3.0
>>> 7//2.0
3.0
			</pre>

			<p>等號 = 用於給變數賦值。賦值之後，除了下一個提示符，解釋器不會顯示任何結果。</p>
			<pre data-enlighter-language="python">
>>> width = 20
>>> height = 5*9
>>> width * height
900
			</pre>

			<p>Python 可以使用 ** 操作來進行冪運算：</p>
			<pre data-enlighter-language="python">
>>> 5 ** 2  # 5 的平方
25
>>> 2 ** 7  # 2的7次方
128
			</pre>

			<p>變數在使用前必須先"定義"（即賦予變數一個值），否則會出現錯誤：</p>
			<pre data-enlighter-language="python">
>>> n   # 嘗試訪問一個未定義的變數
Traceback (most recent call last):
  File "<stdin>", line 1, in <module>
NameError: name 'n' is not defined
			</pre>

			<p>不同類型的數混合運算時會將整數轉換為浮點數：</p>
			<pre data-enlighter-language="python">
>>> 3 * 3.75 / 1.5
7.5
>>> 7.0 / 2
3.5
			</pre>

			<p>在交互模式中，最後被輸出的表達式結果被賦值給變數 _ 。例如：</p>
			<pre data-enlighter-language="python">
>>> tax = 12.5 / 100
>>> price = 100.50
>>> price * tax
12.5625
>>> price + _
113.0625
>>> round(_, 2)
113.06
			</pre>

			<p>此處， _ 變數應被用戶視為唯讀變數。</p>


			<h3>數學函數</h3>
			<p>import math</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>函數</th>
						<th>返回值 ( 描述 )</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>abs(x)</td>
						<td>返回數字的絕對值，如abs(-10) 返回 10</td>
					</tr>
					<tr>
						<td>ceil(x)</td>
						<td>返回數字的上入整數，如math.ceil(4.1) 返回 5</td>
					</tr>
					<tr>
						<td>exp(x)</td>
						<td>返回e的x次冪(ex),如math.exp(1) 返回2.718281828459045</td>
					</tr>
					<tr>
						<td>fabs(x)</td>
						<td>返回數字的絕對值，如math.fabs(-10) 返回10.0</td>
					</tr>
					<tr>
						<td>floor(x)</td>
						<td>返回數字的下舍整數，如math.floor(4.9)返回 4</td>
					</tr>
					<tr>
						<td>log(x)</td>
						<td>如math.log(math.e)返回1.0,math.log(100,10)返回2.0</td>
					</tr>
					<tr>
						<td>log10(x)</td>
						<td>返回以10為基數的x的對數，如math.log10(100)返回 2.0</td>
					</tr>
					<tr>
						<td>max(x1, x2,...)</td>
						<td>返回給定參數的最大值，參數可以為序列。</td>
					</tr>
					<tr>
						<td>min(x1, x2,...)</td>
						<td>返回給定參數的最小值，參數可以為序列。</td>
					</tr>
					<tr>
						<td>modf(x)</td>
						<td>返回x的整數部分與小數部分，兩部分的數值符號與x相同，整數部分以浮點型表示。</td>
					</tr>
					<tr>
						<td>pow(x, y)</td>
						<td>x**y 運算後的值。</td>
					</tr>
					<tr>
						<td>round(x [,n])</td>
						<td>返回浮點數x的四捨五入值，如給出n值，則代表舍入到小數點後的位數。</td>
					</tr>
					<tr>
						<td>sqrt(x)</td>
						<td>返回數字x的平方根。</td>
					</tr>
				</tbody>
			</table>
			<h3>隨機數函數</h3>
			<p>隨機數可以用於數學，遊戲，安全等領域中，還經常被嵌入到算法中，用以提高算法效率，並提高程序的安全性。</p>
			<p>import random</p>
			<p>Python包含以下常用隨機數函數：</p>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>函數</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>choice(seq)</td>
						<td>從序列的元素中隨機挑選一個元素，比如random.choice(range(10))，從0到9中隨機挑選一個整數。</td>
					</tr>
					<tr>
						<td>randrange ([start,] stop [,step])</td>
						<td>從指定範圍內，按指定基數遞增的集合中獲取一個隨機數，基數缺省值為1</td>
					</tr>
					<tr>
						<td>random()</td>
						<td>隨機生成下一個實數，它在[0,1)範圍內。</td>
					</tr>
					<tr>
						<td>seed([x])</td>
						<td>改變隨機數生成器的種子seed。如果你不瞭解其原理，你不必特別去設定seed，Python會幫你選擇seed。</td>
					</tr>
					<tr>
						<td>shuffle(lst)</td>
						<td>將序列的所有元素隨機排序</td>
					</tr>
					<tr>
						<td>uniform(x, y)</td>
						<td>隨機生成下一個實數，它在[x,y]範圍內。</td>
					</tr>
				</tbody>
			</table>

			<h3>三角函數</h3>
			<p>import math</p>
			<table class="table table-sm">
				<thead class="thead-dark">


					<tr>
						<th>函數</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>acos(x)</td>
						<td>返回x的反餘弦弧度值。</td>
					</tr>
					<tr>
						<td>asin(x)</td>
						<td>返回x的反正弦弧度值。</td>
					</tr>
					<tr>
						<td>atan(x)</td>
						<td>返回x的反正切弧度值。</td>
					</tr>
					<tr>
						<td>atan2(y, x)</td>
						<td>返回給定的 X 及 Y 坐標值的反正切值。</td>
					</tr>
					<tr>
						<td>cos(x)</td>
						<td>返回x的弧度的餘弦值。</td>
					</tr>
					<tr>
						<td>hypot(x, y)</td>
						<td>返回歐幾里德范數 sqrt(x*x + y*y)。</td>
					</tr>
					<tr>
						<td>sin(x)</td>
						<td>返回的x弧度的正弦值。</td>
					</tr>
					<tr>
						<td>tan(x)</td>
						<td>返回x弧度的正切值。</td>
					</tr>
					<tr>
						<td>degrees(x)</td>
						<td>將弧度轉換為角度,如degrees(math.pi/2) ， 返回90.0</td>
					</tr>
					<tr>
						<td>radians(x)</td>
						<td>將角度轉換為弧度</td>
					</tr>
				</tbody>
			</table>

			<h3>數學常數</h3>
			<p>import math</p>
			<table class="table table-sm">
				<thead class="thead-dark">

					<tr>
						<th>常量</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>pi</td>
						<td>數學常量 pi（圓周率，一般以π來表示）</td>
					</tr>
					<tr>
						<td>e</td>
						<td>數學常量 e，e即自然常數（自然常數）。</td>
					</tr>
				</tbody>
			</table>
			<p>&nbsp;</p>
		</div>

	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>