<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>列表 list</h2>

			<p>列表list是Python中最常用的資料類型，它用一個方括號內的逗號分隔值出現。</p>

			<p>列表list中的每個項目(item)，按照位置順序分配一個數字稱為索引index，第一個項目的索引是0，第二個項目的索引是1，依此類推。</p>

			<p>列表list可以進行的操作，包括索引、切片、加、乘、檢查成員。</p>

			<p>Python內建列表的長度以及確定最大和最小的元素的方法。</p>

			<p>列表內的資料項目不需要具有相同的類型</p>

			<p>建立一個列表，只要把逗號分隔的不同的資料項目使用方括號括起來即可。如下所示：</p>


			<pre data-enlighter-language="python">
list1 = ['Google', 'Runoob', 1997, 2000];
list2 = [1, 2, 3, 4, 5 ];
list3 = ["a", "b", "c", "d"];
			</pre>

			<p>與字串的索引一樣，列表的索引從0開始。也可以進行截取、組合等。</p>


			<h3>使用列表中的值</h3>
			<p>使用下標索引來訪問列表中的值，同樣你也可以使用方括號的形式截取字元，如下所示：</p>
			<pre data-enlighter-language="python">#!/usr/bin/python3 
list1 = ['Google', 'Runoob', 1997, 2000]
list2 = [1, 2, 3, 4, 5, 6, 7 ]
print ("list1[0]: ", list1[0]) 
print ("list2[1:5]: ", list2[1:5])
			</pre>

			<p>以上實例輸出結果：</p>
			<pre data-enlighter-language="python">
list1[0]:  Google
list2[1:5]:  [2, 3, 4, 5]
			</pre>

			<h3>更新項目內容</h3>
			<p>列表的資料項目可以進行修改或更新，也可以使用append()方法來添加列表項目，如下所示：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3
list = ['Google', 'Runoob', 1997, 2000]
print ("第三個元素為 : ", list[2])
list[2] = 2001
print ("更新後的第三個元素為 : ", list[2])
			</pre>

			<p>以上實例輸出結果：</p>
			<pre data-enlighter-language="python">
第三個元素為 :  1997
更新後的第三個元素為 :  2001
			</pre>


			<h3>刪除項目</h3>
			<p>可以使用 del 指令來刪除列表中的一個項目，如下實例：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3
list = ['Google', 'Runoob', 1997, 2000]
print ("原始列表 : ", list)
del list[2]
print ("刪除第三個元素 : ", list)
			</pre>

			<P>以上實例輸出結果：</P>
			<pre data-enlighter-language="python">
原始列表 :  ['Google', 'Runoob', 1997, 2000]
刪除第三個元素 :  ['Google', 'Runoob', 2000]
			</pre>

			<p>注意： 參考 remove() 方法的使用</p>


			<h3>運算功能</h3>
			<p>列表對 + 和 * 的運算符號與字串功能很相似。+ 號用於組合列表，* 號用於重複列表。</p>
			<p>如下所示：</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th width="35%">Python 運算式</th>
						<th>結果</th>
						<th width="37%">描述</th>
					</tr>
					<tr>
						<td>len([1, 2, 3])</td>
						<td>3</td>
						<td>長度</td>
					</tr>
					<tr>
						<td>[1, 2, 3] + [4, 5, 6]</td>
						<td>[1, 2, 3, 4, 5, 6]</td>
						<td>組合</td>
					</tr>
					<tr>
						<td>['Hi!'] * 4</td>
						<td>['Hi!', 'Hi!', 'Hi!', 'Hi!']</td>
						<td>重複</td>
					</tr>
					<tr>
						<td>3 in [1, 2, 3]</td>
						<td>True</td>
						<td>檢本項目是否存在於列表中</td>
					</tr>
					<tr>
						<td>for x in [1, 2, 3]: print(x, end=" ")</td>
						<td>1 2 3</td>
						<td>反覆運算</td>
					</tr>
				</thead>
			</table>


			<h3>擷取與拼接</h3>
			<P>列表擷取與字串操作類型，如下所示：</P>
			<pre data-enlighter-language="python">
L=['Google', 'Runoob', 'Taobao']
			</pre>

			<h4>實務操作：</h4>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th width="35%">Python 運算式</th>
						<th>結果</th>
						<th width="37%">描述</th>
					</tr>
					<tr>
						<td>L[2]</td>
						<td>'Taobao'</td>
						<td>讀取第三個元素</td>
					</tr>
					<tr>
						<td>L[-2]</td>
						<td>'Runoob'</td>
						<td>從右側開始讀取倒數第二個元素: count from the right</td>
					</tr>
					<tr>
						<td>L[1:]</td>
						<td>['Runoob', 'Taobao']</td>
						<td>輸出從第二個元素開始後的所有元素</td>
					</tr>

				</thead>
			</table>

			<p>執行範例如下:</p>
			<pre data-enlighter-language="python">
>>> L=['Google', 'Runoob', 'Taobao']
>>> L[2]
'Taobao'

>>> L[-2]
'Runoob'

>>> L[1:]
['Runoob', 'Taobao']

>>>
</pre>

			<p>列表支援合併連接操作：</p>
			<pre data-enlighter-language="python">
>>> squares = [1, 4, 9, 16, 25]
>>> squares += [36, 49, 64, 81, 100]
>>> squares
[1, 4, 9, 16, 25, 36, 49, 64, 81, 100]
>>>
				</pre>

			<h3>嵌套列表</h3>
			<P>列表之中的項目也是列表，稱為嵌套列表，例如：</P>
			<pre data-enlighter-language="python">

>>> a = ['a', 'b', 'c']
>>> n = [1, 2, 3]
>>> x = [a, n]
>>> x
[['a', 'b', 'c'], [1, 2, 3]]

>>> x[0]
['a', 'b', 'c']

>>> x[0][1]
'b'
				</pre>

			<h3>列表的函式&方法</h3>

			<P>Python包含以下函式:</P>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th width="5%" nowrap>序號</th>
						<th width="20%">函數</th>
						<th width="%">說明</th>
					</tr>

					<tr>
						<td>1</td>
						<td>len(list)</td>
						<td>列表元素個數 </td>
					</tr>

					<tr>
						<td>2</td>
						<td>max(list)</td>
						<td>返回列表元素最大值</td>
					</tr>

					<tr>
						<td>3</td>
						<td>min(list)</td>
						<td>返回列表元素最小值 </td>
					</tr>

					<tr>
						<td>4</td>
						<td>list(seq)</td>
						<td>將元組轉換為列表</td>
					</tr>

				</thead>
			</table>

			<p>Python包含以下方法:</p>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>序號</th>
						<th nowrap>方法</th>
						<th nowrap>說明</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>list.append(obj)</td>
						<td>在列表末尾添加新的物件</td>
					</tr>
					<tr>
						<td>2</td>
						<td>list.count(obj)</td>
						<td>統計某個元素在列表中出現的次數</td>
					</tr>

					<tr>
						<td>3</td>
						<td>list.extend(seq)</td>
						<td>在列表末尾一次性追加另一個序列中的多個值（用新列表擴展原來的列表）</td>
					</tr>

					<tr>
						<td>4</td>
						<td>list.index(obj)</td>
						<td>從列表中找出某個值第一個匹配項的索引位置</td>
					</tr>

					<tr>
						<td>5</td>
						<td>list.insert(index, obj)</td>
						<td>將物件插入列表</td>
					</tr>

					<tr>
						<td>6</td>
						<td>list.pop([index=-1])</td>
						<td>移除列表中的一個元素（預設最後一個元素），並且返回該元素的值</td>
					</tr>

					<tr>
						<td>7</td>
						<td>list.remove(obj)</td>
						<td>移除列表中某個值的第一個匹配項</td>
					</tr>

					<tr>
					<td>8</td>
					<td>list.reverse()</td>
					<td>反向列表中元素</td>
					</tr>

					<tr>
					<td>9</td>
					<td>list.sort( key=None, reverse=False)</td>
					<td>對原列表進行排序</td>
					</tr>

					<tr>
					<td>10</td>
					<td>list.clear()</td>
					<td>清空列表</td>
					</tr>

					<tr>
					<td>11</td>
					<td>list.copy()</td>
					<td>複製列表</td>
					</tr>

				</tbody>
			</table>
			<h2>Exercises</h2>
			<pre>
有一排數字為 1,3,5,7,9,2,4,6,8,10

(1) 使用列表建立這個數列
(2) 使用數列的方法, 取出 1,3,5,7,9
(3) 使用數列的方法, 取出 2,4,6,8,10
(4) 使用數列的方法, 取出 1,5,9,4,8
(5) 使用數列的方法, 取出 1,5,9,4,8
(6) 使用數列的方法, 取出 1,2,3,4,5,6,7,8,9,10
(7) 使用數列的方法, 取出 10,9,8,7,6,5,4,3,2,1
			</pre>

			<h2>參考資料</h2>
			<ul>
				<li><a href="https://www.learncodewithmike.com/2019/12/python-list.html" target="_blank">[Python教學]Python List必學實作</a></li>
				<li><a href="https://www.learncodewithmike.com/2019/12/python-unpacking.html" target="_blank">[Python教學]Python Unpacking實用技巧分享</a></li>
			</ul>
		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>