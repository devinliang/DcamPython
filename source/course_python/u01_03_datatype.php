<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>標準資料類型</h2>
			<p>在程式設計的過程中，資料類型是非常重要的觀念。變數可以儲存不同類型的資料，不同的資料可以做不同的事。Python 中有以下內建的標準資料類型：</p>
			<ul>
				<li>文字 - str </li>
				<li>數字 - int, float, complex </li>
				<li>有序列表 - list, tuple, range </li>
				<li>對映列表 - dict </li>
				<li>集合型態 - set, frozenset </li>
				<li>布林型態 - bool</li>
				<li>二進位型態 - bytes, bytearray, memoryview</li>
			</ul>

			<p>其中依照資料内容可變與不可變分為：</p>
			<ul>
				<li>資料不可變：Number（數字）、String（字串）、Tuple（元組）</li>
				<li>資料可變：List（列表）、Dictionary（字典）、Set（集合）</li>
			</ul>



			<h3>文字(String)</h3>
			<ul>
				<li>單引號和雙引號使用完全相同</li>
				<li>使用三引號('''或""")可以指定一個多行字串</li>
				<li>跳脫字元: '\'</li>
				<li>反斜線可以用來跳脫文字，使用r可以讓反斜線不發生轉義。 如 r"this is a line with \n" 則\n會顯示，並不是換行</li>
				<li>按字面意義級聯字元串，如"this " "is " "string"會被自動轉換為this is string</li>
				<li>字串可以用 + 運算符號連接在一起，用 * 運算符號重複</li>
				<li>字串有兩種索引方式，從左往右以 0 開始，從右往左以 -1 開始</li>
				<li>Python 中的字串內容不可更改</li>
				<li>Python 沒有單獨的字元類型，一個字元就是長度為 1 的字元串</li>
				<li>字串的截取語法格式：變數[開頭索引:結尾索引]</li>
			</ul>

			<pre data-enlighter-language="python">
word = '字元串'
sentence = "這是一個句子。"
paragraph = """這是一個段落，
可以由多行組成"""
            </pre>
			<pre data-enlighter-language="python">
#!/usr/bin/python3

str='Wenzao'

print(str)                 # 輸出字元串
print(str[0:-1])           # 輸出第一個到倒數第二個的所有字元
print(str[0])              # 輸出字元串第一個字元
print(str[2:5])            # 輸出從第三個開始到第五個的字元
print(str[2:])             # 輸出從第三個開始的後的所有字元
print(str * 2)             # 輸出字元串兩次
print(str + '你好')        # 連接字元串

print('------------------------------')

print('hello\nWenzao')      # 使用反斜槓(\)+n轉義特殊字元
print(r'hello\nWenzao')     # 在字元串前面添加一個 r，表示原始字元串，不會發生轉義
            </pre>
			<p> 說明：這裡的 r 指 raw，即 raw string。 </p>

			<p>輸出結果為：</p>
			<pre data-enlighter-language="python">
Wenzao
Wenza
W
nza
nzao
WenzaoWenzao
Wenzao你好
------------------------------
hello
Wenzao
hello\nWenzao
            </pre>

			<h3>數字(Number)</h3>
			<p>Python中數字有三種類型：整數、浮點數和複數。</p>
			<ul>
				<li>int (整數), 如 1,2,3... </li>
				<li>float (浮點數), 如 1.23、3E-2</li>
				<li>complex (複數), 如 1 + 2j、 1.1 + 2.2j</li>
			</ul>


			<h2>變數</h2>

			<p>Python 中的變數不需要事先宣告資料類型，在指定資料值後，即被建立。</p>
			<p>等號（=）的用途為：設定變數值。</p>
			<p>等號（=）左邊必須是一個變數名稱，右邊可以是運算式的組合。右邊運算後的結果會儲存在左邊的變數名稱裡。</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3

counter = 100          # 整數變數
miles   = 1000.0       # 浮點數數
name    = "wenzao"     # 字串

print (counter)
print (miles)
print (name)
			</pre>

			<p>以上運算會得到以下結果：</p>
			<pre data-enlighter-language="python">
100
1000.0
wenzao
			</pre>

			<p>内建的 type() 函數可以用來查詢變數所指定的資料類型</p>
			<p>del 可以將已建立的變數移除</p>

		</div>

	</div>


	<div id="footer">
		<p>Copyright &copy; 2020 Devin Liang. All right reserved.</p>
		<p>Department of Digital Content Application & Management, Wenzao Ursuline University of Languages</p>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>