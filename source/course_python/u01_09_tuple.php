<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>元組 tuple</h2>
			<p>元組 tuple 與列表 list 類似，不同之處在於元組的元素不能修改。</p>
			<p>元組 tuple 使用小括弧()，列表 list 使用方括號[]。</p>
			<p>建立元組tuple：在括弧中添加元素，並使用逗號隔開即可。</p>

			<h3>實例</h3>

			<pre data-inlighter-language="python">
>>> tup1 = ('Google', 'Runoob', 1997, 2000)
>>> tup2 = (1, 2, 3, 4, 5 )
>>> tup3 = "a", "b", "c", "d"
# 不需要括弧也可以
>>> type(tup3)
&lt;class 'tuple'&gt;
			</pre>

			<p>創建一個空的元組</p>
			<pre data-inlighter-language="python">
tup1 = ()
			</pre>

			<p>元組中只包含一個元素時，需要在元素後面添加逗號，否則括弧會被當作運算子使用:</p>
			<pre data-inlighter-language="python">
>>> tup1 = (50)
>>> type(tup1)  # 不加逗號，類型為整型 
&lt;class 'int'&gt;
>>> tup1 = (50,)
>>> type(tup1)   # 加上逗號，類型為元組 
&lt;class 'tuple'&gt;
			</pre>

			<p>元組與字串類似，下標索引從0開始，可以進行截取，組合等。</p>



			<h3>列出元組的項目內容</h3>
			<p>元組可以使用索引來列出元組中的值，如下實例:</p>
			<pre data-inlighter-language="python">
#!/usr/bin/python3 
tup1 = ('Google', 'Runoob', 1997, 2000) 
tup2 = (1, 2, 3, 4, 5, 6, 7 ) 
print ("tup1[0]: ", tup1[0]) 
print ("tup2[1:5]: ", tup2[1:5])
			</pre>

			<p>以上實例輸出結果：</p>
			<pre data-inlighter-language="python">
tup1[0]:  Google
tup2[1:5]:  (2, 3, 4, 5)
			</pre>


			<h3>修改元組</h3>
			<p>元組中的元素值是不允許修改的，但可以對元組進行連接組合，建立新元組，如下實例:</p>
			<pre data-inlighter-language="python">
#!/usr/bin/python3
tup1 = (12, 34.56);
tup2 = ('abc', 'xyz')

# 以下修改元組元素操作是非法的。
#  tup1[0] = 100

# 創建一個新的元組
tup3 = tup1 + tup2
print (tup3)
			</pre>
			<p>以上實例輸出結果：</p>
			<pre data-inlighter-language="python">
(12, 34.56, 'abc', 'xyz')
			</pre>

			<h3>刪除元組</h3>
			<p>元組中個別的項目值是不允許刪除的，但可以使用del語句來刪除整個元組，如下實例:</p>
			<pre data-inlighter-language="python">
#!/usr/bin/python3

tup = ('Google', 'Runoob', 1997, 2000)

print (tup)
del tup
print ("刪除後的元組 tup : ")
print (tup)
			</pre>

			<p>以上實例元組被刪除後，輸出變數會有異常資訊，輸出如下所示：</p>
			<p>刪除後的元組 tup : </p>
			<pre data-inlighter-language="python">
Traceback (most recent call last):
  File "test.py", line 8, in &lt;module&gt;
    print (tup)
NameError: name 'tup' is not defined
			</pre>


			<h3>元組運算子</h3>
			<p>與字串一樣，元組之間可以使用 + 號和 * 號進行運算。這就意味著他們可以組合和複製，運算後會生成一個新的元組。</p>
			<table class="table" table-sm>
				<thead class="thead-dark">
					<tr>
						<th>Python 運算式</th>
						<th>結果</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>len((1, 2, 3))</td>
						<td>3</td>
						<td>計算元素個數</td>
					</tr>
					<tr>
						<td>(1, 2, 3) + (4, 5, 6)</td>
						<td>(1, 2, 3, 4, 5, 6)</td>
						<td>連接</td>
					</tr>
					<tr>
						<td>('Hi!',) * 4</td>
						<td>('Hi!', 'Hi!', 'Hi!', 'Hi!')</td>
						<td>複製</td>
					</tr>
					<tr>
						<td>3 in (1, 2, 3)</td>
						<td>True</td>
						<td>元素是否存在</td>
					</tr>
					<tr>
						<td>for x in (1, 2, 3): print (x,)</td>
						<td>1 2 3</td>
						<td>反覆運算</td>
					</tr>
				</tbody>
			</table>

			<h3>元組索引，截取</h3>
			<p>因為元組也是一個序列，所以我們可以列出元組中的指定位置的元素，也可以截取索引中的一段元素，如下所示：</p>
			<p>實例：</p>
			<pre data-inlighter-language="python">
L = ('Google', 'Taobao', 'Runoob')
			</pre>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>Python 運算式</th>
						<th>結果</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>L[2]</td>
						<td>'Runoob'</td>
						<td>讀取第三個元素</td>
					</tr>
					<tr>
						<td>L[-2]</td>
						<td>'Taobao'</td>
						<td>反向讀取；讀取倒數第二個元素</td>
					</tr>
					<tr>
						<td>L[1:]</td>
						<td>('Taobao', 'Runoob')</td>
						<td>截取元素，從第二個開始後的所有元素</td>
					</tr>
				</tbody>
			</table>


			<p>運行實例如下：</p>
			<pre data-inlighter-language="python">
>>> L = ('Google', 'Taobao', 'Runoob')
>>> L[2]
'Runoob'
>>> L[-2]
'Taobao'
>>> L[1:]
('Taobao', 'Runoob')
			</pre>

			<h3>元組內置函式</h3>
			<p>Python元組包含了以下內置函式</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>序號</th>
						<th>方法及描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>len(tuple)</br>計算元組元素個數</td>
						<td>
							<pre data-inlighter-language="python">
>>> tuple1 = ('Google', 'Runoob', 'Taobao')
>>> len(tuple1)
3
>>> 
							</pre>
						</td>
					</tr>

					<tr>
						<td>2</td>
						<td>max(tuple)</br>返回元組中元素最大值</td>
						<td>
							<pre data-inlighter-language="python">
>>> tuple2 = ('5', '4', '8')
>>> max(tuple2)
'8'
>>> 
							</pre>
						</td>
					</tr>

					<tr>
						<td>3</td>
						<td>min(tuple)</br>返回元組中元素最小值</td>
						<td>
							<pre data-inlighter-language="python">
>>> tuple2 = ('5', '4', '8')
>>> min(tuple2)
'4'
>>> 
						</pre>
						</td>
					</tr>

					<tr>
						<td>4</td>
						<td>tuple(seq)</br>將列表轉換為元組</td>
						<td>
							<pre data-inlighter-language="python">
>>> list1= ['Google', 'Taobao', 'Runoob', 'Baidu']
>>> tuple1=tuple(list1)
>>> tuple1
('Google', 'Taobao', 'Runoob', 'Baidu')
						</pre>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
		<!--end of id:main-->
	</div>
	<!--end of id:content-->
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>