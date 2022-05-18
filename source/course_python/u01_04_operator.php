<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>運算功能</h2>

			<p>進行各種計算功能的運算符號，稱為運算子。舉例 4 + 5 中，4 和 5 被稱為運算元(Operand)或操作數，"+" 稱為運算子。</p>

			<p>Python語言有以下類型的運算子:</p>
			<ul>
				<li>算術運算</li>
				<li>比較運算</li>
				<li>賦值運算</li>
				<li>邏輯運算</li>
				<li>位元運算</li>
				<li>成員運算</li>
				<li>身份運算</li>
			</ul>

			<h3>算術運算</h3>
			<p>以下假設變數a為10，變數b為21：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>運算符號</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>+</td>
						<td>加 - 兩個變數相加</td>
						<td>a + b 輸出結果 31</td>
					</tr>
					<tr>
						<td>-</td>
						<td>減 - 得到負數或是一個數減去另一個數</td>
						<td>a - b 輸出結果 -11</td>
					</tr>
					<tr>
						<td>*</td>
						<td>乘 - 兩個數相乘或是返回一個被重覆若幹次的字符串</td>
						<td>a * b 輸出結果 210</td>
					</tr>
					<tr>
						<td>/</td>
						<td>除 - x 除以 y</td>
						<td>b / a 輸出結果 2.1</td>
					</tr>
					<tr>
						<td>%</td>
						<td>取模 - 返回除法的余數</td>
						<td>b % a 輸出結果 1</td>
					</tr>
					<tr>
						<td>**</td>
						<td>冪 - 返回x的y次冪</td>
						<td>a**b 為10的21次方</td>
					</tr>
					<tr>
						<td>//</td>
						<td>取整除 - 返回商的整數部分</td>
						<td>9//2 輸出結果 4 , 9.0//2.0 輸出結果 4.0</td>
					</tr>
				</tbody>
			</table>



			<h3>比較運算</h3>
			<p>以下假設變量a為10，變量b為20：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th width="10%">運算符</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>==</td>
						<td>等於 - 比較對象是否相等</td>
						<td>(a == b) 返回 False。</td>
					</tr>
					<tr>
						<td>!=</td>
						<td>不等於 - 比較兩個對象是否不相等</td>
						<td>(a != b) 返回 True。</td>
					</tr>
					<tr>
						<td>&gt;</td>
						<td>大於 - 返回x是否大於y</td>
						<td>(a &gt; b) 返回 False。</td>
					</tr>
					<tr>
						<td>&lt;</td>
						<td>小於 - 返回x是否小於y。所有比較運算符返回1表示真，返回0表示假。這分別與特殊的變量True和False等價。註意，這些變量名的大寫。</td>
						<td>(a &lt; b) 返回 True。</td>
					</tr>
					<tr>
						<td>&gt;=</td>
						<td>大於等於 - 返回x是否大於等於y。</td>
						<td>(a &gt;= b) 返回 False。</td>
					</tr>
					<tr>
						<td>&lt;=</td>
						<td>小於等於 - 返回x是否小於等於y。</td>
						<td>(a &lt;= b) 返回 True。</td>
					</tr>
				</tbody>
			</table>

			<h3>賦值運算</h3>
			<p>以下假設變量a為10，變量b為20：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>運算符</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>=</td>
						<td>簡單的賦值運算符</td>
						<td>c = a + b 將 a + b 的運算結果賦值為 c</td>
					</tr>
					<tr>
						<td>+=</td>
						<td>加法賦值運算符</td>
						<td>c += a 等效於 c = c + a</td>
					</tr>
					<tr>
						<td>-=</td>
						<td>減法賦值運算符</td>
						<td>c -= a 等效於 c = c - a</td>
					</tr>
					<tr>
						<td>*=</td>
						<td>乘法賦值運算符</td>
						<td>c *= a 等效於 c = c * a</td>
					</tr>
					<tr>
						<td>/=</td>
						<td>除法賦值運算符</td>
						<td>c /= a 等效於 c = c / a</td>
					</tr>
					<tr>
						<td>%=</td>
						<td>取模賦值運算符</td>
						<td>c %= a 等效於 c = c % a</td>
					</tr>
					<tr>
						<td>**=</td>
						<td>冪賦值運算符</td>
						<td>c **= a 等效於 c = c ** a</td>
					</tr>
					<tr>
						<td>//=</td>
						<td>取整除賦值運算符</td>
						<td>c //= a 等效於 c = c // a</td>
					</tr>
				</tbody>
			</table>
			<h3>位元運算</h3>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>運算符</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&amp;</td>
						<td>按位與運算符：參與運算的兩個值,如果兩個相應位都為1,則該位的結果為1,否則為0</td>
						<td>(a &amp; b) 輸出結果 12 ，二進制解釋： 0000 1100</td>
					</tr>
					<tr>
						<td>|</td>
						<td>按位或運算符：只要對應的二個二進位有一個為1時，結果位就為1。</td>
						<td>(a | b) 輸出結果 61 ，二進制解釋： 0011 1101</td>
					</tr>
					<tr>
						<td>^</td>
						<td>按位異或運算符：當兩對應的二進位相異時，結果為1</td>
						<td>(a ^ b) 輸出結果 49 ，二進制解釋： 0011 0001</td>
					</tr>
					<tr>
						<td>~</td>
						<td>按位取反運算符：對數據的每個二進制位取反,即把1變為0,把0變為1。~x類似於 -x-1</td>
						<td>(~a ) 輸出結果 -61 ，二進制解釋： 1100 0011， 在一個有符號二進制數的補碼形式。</td>
					</tr>
					<tr>
						<td>&lt;&lt;</td>
						<td>左移動運算符：運算數的各二進位全部左移若幹位，由"&lt;&lt;"右邊的數指定移動的位數，高位丟棄，低位補0。</td>
						<td>a &lt;&lt; 2 輸出結果 240 ，二進制解釋： 1111 0000</td>
					</tr>
					<tr>
						<td>&gt;&gt;</td>
						<td>右移動運算符：把"&gt;&gt;"左邊的運算數的各二進位全部右移若幹位，"&gt;&gt;"右邊的數指定移動的位數</td>
						<td>a &gt;&gt; 2 輸出結果 15 ，二進制解釋： 0000 1111</td>
					</tr>
				</tbody>
			</table>

			<h3>邏輯運算</h3>
			<p>Python語言支持邏輯運算符，以下假設變量 a 為 10, b為 20:</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>運算符</th>
						<th nowrap>邏輯表達式</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>and</td>
						<td>x and y</td>
						<td>布爾"與" - 如果 x 為 False，x and y 返回 False，否則它返回 y 的計算值。</td>
						<td>(a and b) 返回 20。</td>
					</tr>
					<tr>
						<td>or</td>
						<td>x or y</td>
						<td>布爾"或" - 如果 x 是 True，它返回 x 的值，否則它返回 y 的計算值。</td>
						<td>(a or b) 返回 10。</td>
					</tr>
					<tr>
						<td>not</td>
						<td>not x</td>
						<td>布爾"非" - 如果 x 為 True，返回 False 。如果 x 為 False，它返回 True。</td>
						<td>not(a and b) 返回 False</td>
					</tr>
				</tbody>
			</table>

			<h3>成員運算</h3>
			<p>除了以上的一些運算符之外，Python還支持成員運算符，測試實例中包含了一系列的成員，包括字符串，列表或元組。</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>運算符號</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>in</td>
						<td>如果在指定的序列中找到值返回 True，否則返回 False。</td>
						<td>x 在 y 序列中 , 如果 x 在 y 序列中返回 True。</td>
					</tr>
					<tr>
						<td>not in</td>
						<td>如果在指定的序列中沒有找到值返回 True，否則返回 False。</td>
						<td>x 不在 y 序列中 , 如果 x 不在 y 序列中返回 True。</td>
					</tr>
				</tbody>
			</table>

			<h3>身分運算</h3>
			<p>身分運算用於比較兩個對象的儲存單元</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>運算符號</th>
						<th>描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>is</td>
						<td>is 是判斷兩個識別字是不是引用自一個對象</td>
						<td><strong>x is y</strong>, 類似 <strong>id(x) == id(y)</strong> , 如果引用的是同一個對象則返回 True，否則返回 False
						</td>
					</tr>
					<tr>
						<td>is not</td>
						<td>is not 是判斷兩個識別字是不是引用自不同對象</td>
						<td><strong>x is not y</strong> ， 類似 <strong>id(a) != id(b)</strong>。如果引用的不是同一個對象則返回結果 True，否則返回
							False。</td>
					</tr>
				</tbody>
			</table>


			<h2>運算優先順序</h2>
			<p>以下表格列出了從最高到最低優先順序的所有運算符號：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>運算符號</th>
						<th>描述</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>**</td>
						<td>指數(最高優先順序)</td>
					</tr>
					<tr>
						<td>~ + -</td>
						<td>按位翻轉, 正負符號</td>
					</tr>
					<tr>
						<td>* / % //</td>
						<td>乘，除，取模和取整除</td>
					</tr>
					<tr>
						<td>+ -</td>
						<td>加法減法</td>
					</tr>
					<tr>
						<td>&gt;&gt; &lt;&lt;</td>
						<td>右移，左移運算符號</td>
					</tr>
					<tr>
						<td>&amp;</td>
						<td>'AND'</td>
					</tr>
					<tr>
						<td>^ |</td>
						<td>位元運算符號</td>
					</tr>
					<tr>
						<td>&lt;= &lt; &gt; &gt;=</td>
						<td>比較運算符號</td>
					</tr>
					<tr>
						<td>&lt;&gt; == !=</td>
						<td>判斷是否相等或不相等</td>
					</tr>
					<tr>
						<td>= %= /= //= -= += *= **=</td>
						<td>赋值運算符號</td>
					</tr>
					<tr>
						<td>is is not</td>
						<td>身分運算符號</td>
					</tr>
					<tr>
						<td>in not in</td>
						<td>成員運算符號</td>
					</tr>
					<tr>
						<td>and or not</td>
						<td>邏輯運算符號</td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>