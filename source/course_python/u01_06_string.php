<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>字串</h2>

			<p>文字字串是 Python 中最常用的資料類型。字串前後使用引號('或")來建立。 建立字串變數的方法很簡單，只要為變數分配一個值即可。例如：</p>

			<pre data-enlighter-language="python">
var1 = ' Hello World! '
var2 = " Wenzao "
			</pre>


			<h3>查看字串中的值</h3>

			<p>Python 沒有個別一個字的字元類型，字元類型在 Python 中也是使用字串。 查看子字串，可以使用方括號來截取字串，如下範例：</p>


			<pre data-enlighter-language="python">
#!/usr/bin/python3
var1 = ' Hello World! '
var2 = " Wenzao "
print ( " var1[0]: " , var1 [ 0 ] )
print ( " var2[1:5]: " , var2 [ 1 : 5 ] )
			</pre>

			<p>以上範例執行結果：</p>
			<pre data-enlighter-language="python">
var1 [ 0 ]: H
var2 [ 1 : 5 ]: enza
			</pre>


			<h3>字串串接</h3>

			<p>字串可以截取一部分與其他字串拼接，如下範例：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3
var1 = ' Hello World! '
print ( " 已更新字串: " , var1 [ : 6 ] + ' Wenzao! ' )
			</pre>

			<p>以上範例執行結果</p>

			<pre data-enlighter-language="python">
已更新字串: Hello Wenzao !
			</pre>


			<h3>跳脫字元</h3>

			<p>在需要在字元中使用特殊字元時，python用反斜線(\)跳脫字元。如下表：</p>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>跳脫字元</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>\(在行尾時)</td>
						<td>續行符號</td>
					</tr>
					<tr>
						<td>\\</td>
						<td>反斜線符號</td>
					</tr>
					<tr>
						<td>\'</td>
						<td>單引號</td>
					</tr>
					<tr>
						<td>\"</td>
						<td>雙引號</td>
					</tr>
					<tr>
						<td>\a</td>
						<td>響鈴</td>
					</tr>
					<tr>
						<td>\b</td>
						<td>退格(Backspace)</td>
					</tr>
					<tr>
						<td>\e</td>
						<td>轉義</td>
					</tr>
					<tr>
						<td>\000</td>
						<td>空</td>
					</tr>
					<tr>
						<td>\n</td>
						<td>換行</td>
					</tr>
					<tr>
						<td>\v</td>
						<td>縱向製表符</td>
					</tr>
					<tr>
						<td>\t</td>
						<td>橫向製表符</td>
					</tr>
					<tr>
						<td>\r</td>
						<td>Enter</td>
					</tr>
					<tr>
						<td>\f</td>
						<td>換頁</td>
					</tr>
					<tr>
						<td>\oyy</td>
						<td>八進制數，yy代表的字元，例如：\o12代表換行</td>
					</tr>
					<tr>
						<td>\xyy</td>
						<td>十六進制數，yy代表的字元，例如：\x0a代表換行</td>
					</tr>
					<tr>
						<td>\other</td>
						<td>其它的字元以普通格式輸出</td>
					</tr>
				</tbody>
			</table>


			<h3>字串運算符號</h3>

			<p>下表範例變數 a 值為字串 "Hello"， b 變數值為"Python"</p>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th width="10%">運算符號</th>
						<th>描述</th>
						<th width="20%">範例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>+</td>
						<td>字串連接</td>
						<td>a + b 輸出結果： HelloPython</td>
					</tr>
					<tr>
						<td>*</td>
						<td>重複輸出字串</td>
						<td>a*2 輸出結果：HelloHello</td>
					</tr>
					<tr>
						<td>[]</td>
						<td>通過索引獲取字串中字元</td>
						<td>a[1]輸出結果<strong>e</strong></td>
					</tr>
					<tr>
						<td>[ : ]</td>
						<td>截取字串中的一部分，遵循<strong>左閉右開</strong>原則，str[0:2]是不包含第3個字元的。</td>
						<td>a[1:4] 輸出結果 <strong>ell</strong></td>
					</tr>
					<tr>
						<td>in</td>
						<td>成員運算符號 - 如果字串中包含給定的字元, 返回 True</td>
						<td><strong>'H' in a</strong> 輸出結果 True</td>
					</tr>
					<tr>
						<td>not in</td>
						<td>成員運算符號 - 如果字串中不包含給定的字元返回True</td>
						<td><strong>'M' not in a</strong> 輸出結果 True </td>
					</tr>
					<tr>
						<td>r/R</td>
						<td>原始字串：所有的字串都是直接按照字面的意思來使用，沒有特殊或不能列印的字元。<br />原始字串除在字串的第一個引號前加上字母r（可以大小寫）以外，與普通字串有著幾乎完全相同的語法。
						</td>
						<td>print ( r '\n' )<br /> print ( R '\n' )</td>
					</tr>
					<tr>
						<td>%</td>
						<td>字串格式化</td>
						<td>參見以下表格</td>
					</tr>
				</tbody>
			</table>

			<p>範例</p>
			<pre data-enlighter-language="python">
#!/usr/bin/python3
a = "Hello"
b = "Python"
print ( " a + b輸出結果：" , a + b )
print ( " a * 2輸出結果：" , a * 2 )
print ( " a[1]輸出結果：" , a[1] )
print ( " a[1:4]輸出結果：" , a[1 : 4] )
if ( "H" in a ) :
	print ( "H在變數a中" )
else:
	print ( "H不在變數a中" )
if ( "M" not in a ) :
	print ( "M不在變數a中" )
else :
	print ( " M在變數a中" )
print ( r ' \n ')
print ( R ' \n ' )
			</pre>

			<p>以上範例輸出結果為：</p>
			<pre data-enlighter-language="python">
a + b 輸出結果：HelloPython
a * 2 輸出結果：HelloHello
a [ 1 ] 輸出結果：e
a [ 1 : 4 ] 輸出結果：ell
H在變數a中
M不在變數a中
\n  \n
	</pre>

			<h3>三引號</h3>

			<p>python三引號允許一個字串跨多行，字串中可以包含換行符號、表格符號以及其他特殊符號。實例如下</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3
para_str = """
這是一個多行字串的實例
多行字串可以使用製表符TAB ( \t )。
也可以使用換行符[ \n ]。
"""
print ( para_str )
			</pre>

			<p>以上實例執行結果為：</p>
			<pre data-enlighter-language="python">
這是一個多行字串的實例
多行字串可以使用製表符  TAB ( )。
也可以使用換行符[ ]。
</pre>
			<p>三引號讓程式從引號和特殊字串的泥潭裡面解脫出來，自始至終保持一小塊字串的格式，即是所謂的WYSIWYG（所見即所得）格式的。</p>

			<p>一個典型的用法是，需要HTML或者SQL語法時，這時用字串組合，特殊字串轉義將會非常的繁瑣。</p>

			<pre data-enlighter-language="python">
errHTML = '''
&lt;HTML&gt;
&lt;HEAD&gt;
	&lt;TITLE&gt; Friends CGI Demo&lt;/TITLE&gt;
&lt;/HEAD&gt;
&lt;BODY&gt;
	&lt;H3&gt;ERROR&lt;/H3&gt;
	&lt;B&gt;%s&lt;/B&gt;
	&lt;P&gt; &lt;FORM &gt;
		&lt;INPUT TYPE=button VALUE=Back ONCLICK="window.history.back()"&gt;
	&lt;/FORM&gt;
&lt;/BODY&gt;
&lt;/HTML&gt;
'''
cursor.execute ( '''
CREATE TABLE users (
	login VARCHAR( 8),
	uid INTEGER,
	prid INTEGER)
''' )
			</pre>

			<h2>原始字串</h2>
			<p>在Python的string前面加上‘r’， 是為了告訴編譯器這個string是個raw string，不要轉義跳脫字元'\' 。 例如，\n 在raw string中，是兩個字元，\和n， 而不會轉義為換行字元。由於正則表示式(regular express)和 \ 會有衝突，因此，當一個字串使用了正則表示式後，最好在前面加上'r'。 .</p>

			<pre data-enlighter-language="python">
my_raw_str =r’Hello\nWorld’
print(my_raw_str)
# 執行結果: Hello\nWorld
			</pre>

			<h2>Unicode 字串</h2>

			<p>在 Python2 中，普通字串是以 8 位 ASCII 碼儲存，而 Unicode 字串則存為 16 位 unicode 字串，
				這樣能夠表示更多的字符集。使用的語法是在字串前面加上前綴<strong>u</strong>。</p>

			<p>在 Python3 中，所有的字串都是 Unicode 字串。</p>

			<h3>字串內建函式</h3>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>序號</th>
						<th>方法</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>capitalize()</td>
						<td>將字串的第一個字符轉換為大寫</td>
					</tr>
					<tr>
						<td>2</td>
						<td>center(width, fillchar)</td>
						<td>返回一個指定的寬度width 居中的字串，fillchar 為填充的字符，默認為空格。</td>
					</tr>
					<tr>
						<td>3</td>
						<td>count(str, beg= 0,end=len(string))</td>
						<td>返回str 在string 裡面出現的次數，如果beg 或者end 指定則返回指定範圍內str 出現的次數</td>
					</tr>
					<tr>
						<td>4</td>
						<td>bytes.decode(encoding="utf-8", errors="strict")</td>
						<td>Python3 中沒有 decode 方法，但我們可以使用 bytes 對象的 decode() 方法來解碼給定的 bytes 對象，這個bytes 對象可以由str.encode()
							來編碼返回。</td>
					</tr>
					<tr>
						<td>5</td>
						<td>encode(encoding='UTF-8',errors='strict')</td>
						<td>以encoding 指定的編碼格式編碼字串，如果出錯默認報一個ValueError 的異常，除非errors 指定的是'ignore'或者'replace'</td>
					</tr>
					<tr>
						<td>6</td>
						<td>endswith(suffix, beg=0, end=len(string))</td>
						<td> 檢查字串是否以obj結束，如果beg或者end指定則檢查指定的範圍內是否以obj結束，如果是，返回True,否則返回False.</td>

					</tr>
					<tr>
						<td>7</td>
						<td>expandtabs(tabsize=8)
						</td>
						<td>
							把字串string 中的tab 符號轉為空格，tab 符號默認的空格數是8 。</td>
					</tr>
					<tr>
						<td>8</td>
						<td>
							<p>find(str, beg=0 end=len(string))</p>
						</td>
						<td>
							檢測str 是否包含在字串中，如果指定範圍beg 和end ，則檢查是否包含在指定範圍內，如果包含返回開始的索引值，否則返回-1</td>
					</tr>
					<tr>
						<td>9</td>
						<td>
							<p>index(str, beg=0, end=len(string))</p>
						</td>
						<td>
							跟find()方法一樣，只不過如果str不在字串中會報一個異常.</td>
					</tr>
					<tr>
						<td>10</td>
						<td>isalnum()
						</td>
						<td>
							如果字串至少有一個字符並且所有字符都是字母或數字則返回True,否則返回False</td>
					</tr>
					<tr>
						<td>11</td>
						<td>isalpha()
						</td>
						<td>
							如果字串至少有一個字符並且所有字符都是字母則返回True, 否則返回False</td>
					</tr>
					<tr>
						<td>12</td>
						<td>isdigit()
						</td>
						<td>
							如果字串只包含數字則返回True 否則返回False..</td>
					</tr>
					<tr>
						<td>13</td>
						<td>islower()
						</td>
						<td>
							如果字串中包含至少一個區分大小寫的字符，並且所有這些(區分大小寫的)字符都是小寫，則返回True，否則返回False</td>
					</tr>
					<tr>
						<td>14</td>
						<td>isnumeric()
						</td>
						<td>
							如果字串中只包含數字字符，則返回True，否則返回False</td>
					</tr>
					<tr>
						<td>15</td>
						<td>isspace()
						</td>
						<td>
							如果字串中只包含空白，則返回True，否則返回False.</td>
					</tr>
					<tr>
						<td>16</td>
						<td>istitle()
						</td>
						<td>
							如果字串是標題化的(見title())則返回True，否則返回False</td>
					</tr>
					<tr>
						<td>17</td>
						<td>isupper()
						</td>
						<td>
							如果字串中包含至少一個區分大小寫的字符，並且所有這些(區分大小寫的)字符都是大寫，則返回True，否則返回False</td>
					</tr>
					<tr>
						<td>18</td>
						<td>join(seq)
						</td>
						<td>
							以指定字串作為分隔符，將seq 中所有的元素(的字串表示)合併為一個新的字串</td>
					</tr>
					<tr>
						<td>19</td>
						<td>len(string)
						</td>
						<td>
							返回字串長度</td>
					</tr>
					<tr>
						<td>20</td>
						<td>ljust(width[, fillchar])
						</td>
						<td>
							返回一個原字串左對齊,並使用fillchar 填充至長度width 的新字串，fillchar 默認為空格。</td>
					</tr>
					<tr>
						<td>21</td>
						<td>lower()
						</td>
						<td>
							轉換字串中所有大寫字符為小寫.</td>
					</tr>
					<tr>
						<td>22</td>
						<td>lstrip()
						</td>
						<td>
							截掉字串左邊的空格或指定字符。</td>
					</tr>
					<tr>
						<td>23</td>
						<td>maketrans()
						</td>
						<td>
							創建字符映射的轉換錶，對於接受兩個參數的最簡單的調用方式，第一個參數是字串，表示需要轉換的字符，第二個參數也是字串表示轉換的目標。</td>
					</tr>
					<tr>
						<td>24</td>
						<td>max(str)
						</td>
						<td>
							返回字串str 中最大的字母。</td>
					</tr>
					<tr>
						<td>25</td>
						<td>min(str)
						</td>
						<td>
							返回字串str 中最小的字母。</td>
					</tr>
					<tr>
						<td>26</td>
						<td>replace(old, new [, max])
						</td>
						<td>
							把將字串中的str1 替換成str2,如果max 指定，則替換不超過max 次。</td>
					</tr>
					<tr>
						<td>27</td>
						<td>rfind(str, beg=0,end=len(string))
						</td>
						<td>
							類似於find()函數，不過是從右邊開始查找.</td>
					</tr>
					<tr>
						<td>28</td>
						<td>rindex( str, beg=0, end=len(string))
						</td>
						<td>
							類似於index()，不過是從右邊開始.</td>
					</tr>
					<tr>
						<td>29</td>
						<td>rjust(width,[, fillchar])
						</td>
						<td>
							返回一個原字串右對齊,並使用fillchar(默認空格）填充至長度width 的新字串</td>
					</tr>
					<tr>
						<td>30</td>
						<td>rstrip()
						</td>
						<td>
							刪除字串字串末尾的空格.</td>
					</tr>
					<tr>
						<td>31</td>
						<td>split(str="", num=string.count(str))
						</td>
						<td>
							num=string.count(str)) 以str 為分隔符截取字串，如果num 有指定值，則僅截取num 個子字串</td>
					</tr>
					<tr>
						<td>32</td>
						<td>splitlines([keepends])
						</td>
						<td>
							按照行('\r', '\r\n', \n')分隔，返回一個包含各行作為元素的列表，如果參數keepends 為False，不包含換行符，如果為True，則保留換行符。</td>
					</tr>
					<tr>
						<td>33</td>
						<td>startswith(str, beg=0,end=len(string))
						</td>
						<td>
							檢查字串是否是以obj 開頭，是則返回True，否則返回False。如果beg 和end 指定值，則在指定範圍內檢查。</td>
					</tr>
					<tr>
						<td>34</td>
						<td>strip([chars])</td>
						<td>
							在字串上執行lstrip()和rstrip()</td>
					</tr>
					<tr>
						<td>35</td>
						<td>swapcase()
						</td>
						<td>
							將字串中大寫轉換為小寫，小寫轉換為大寫</td>
					</tr>
					<tr>
						<td>36</td>
						<td>title()</td>
						<td>返回"標題化"的字串,就是說所有單詞都是以大寫開​​始，其餘字母均為小寫(見istitle())</td>
					</tr>
					<tr>
						<td>37</td>
						<td>translate(table, deletechars="")
						</td>
						<td>
							根據str 給出的表(包含256 個字符)轉換string 的字符, 要過濾掉的字符放到deletechars 參數中</td>
					</tr>
					<tr>
						<td>38</td>
						<td>upper()
						</td>
						<td>
							轉換字串中的小寫字母為大寫</td>
					</tr>
					<tr>
						<td>39</td>
						<td>zfill(width)
						</td>
						<td>
							返回長度為width 的字串，原字串右對齊，前面填充0</td>
					</tr>
					<tr>
						<td>40</td>
						<td>isdecimal()
						</td>
						<td>
							檢查字串是否只包含十進製字符，如果是返回true，否則返回false。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>