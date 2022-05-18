<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>集合 set</h2>
			<p>列集合（set）是一個無順序的不重複元素序列。</p>
			<p>可以使用大括弧 { } 或者 set() 函數創建集合，注意：建立一個空集合必須用 set() 而不是 { }，因為 { } 是用來建立一個空字典。</p>
			<p> 建立方法：</p>

			<pre data-enlighter-language="python">
parame = {value01, value02,...}
			</pre>

			<p>或者</p>
			<pre data-enlighter-language="python">
parame = set(value)
			</pre>

			<p>實例</p>
			<pre data-enlighter-language="python">
>>> basket = {'apple', 'orange', 'apple', 'pear', 'orange', 'banana'}
>>> print(basket)   # 重複項目自動去除
{'orange', 'banana', 'pear', 'apple'}

>>> 'orange' in basket  # 快速判斷元素是否在集合內
True

>>> 'crabgrass' in basket
False

>>>  # 以下展示兩個集合間的運算
...
>>> a = set('abracadabra')
>>> b = set('alacazam')
>>> a
{'a', 'r', 'b', 'c', 'd'}

>>> a - b 	# 差集：集合a中包含而集合b中不包含的元素
{'r', 'd', 'b'}

>>> a | b 	# 聯集：集合a或b中包含的所有元素
{'a', 'c', 'r', 'd', 'b', 'm', 'z', 'l'}

>>> a & b 	# 交集：集合a和b中都包含的元素
{'a', 'c'}

>>> a ^ b 	# 不同時包含於a和b的元素
{'r', 'd', 'b', 'm', 'z', 'l'}
			</pre>

			<P>類似清單推導式，同樣集合支援集合推導式(Set comprehension):</P>

			<p>實例</p>
			<pre data-enlighter-language="python">
>>> a = {x for x in 'abracadabra' if x not in 'abc'}
>>> a
{'r', 'd'}
		</pre>

			<h3>集合的基本操作</h3>

			<h4>1、增加元素</h4>

			<b>語法格式如下：</b>
			<pre data-enlighter-language="python">
s.add( x )
			</pre>

			<p>將元素 x 添加到集合 s 中，如果元素已存在，則不進行任何操作。</p>

			<p>實例</p>
			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> thisset.add("Facebook")
>>> print(thisset)
{'Taobao', 'Facebook', 'Google', 'Runoob'}
			</pre>

			<p>還有一個方法，也可以添加元素，且參數可以是清單，元組，字典等，語法格式如下：</p>
			<pre data-enlighter-language="python">
s.update( x )
			</pre>

			<p>x 可以有多個，用逗號分開。</p>

			<p>實例</p>

			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> thisset.update({1,3})
>>> print(thisset)
{1, 3, 'Google', 'Taobao', 'Runoob'}

>>> thisset.update([1,4],[5,6])
>>> print(thisset)
{1, 3, 4, 5, 6, 'Google', 'Taobao', 'Runoob'}
			</pre>

			<h4>2、移除元素</h4>

			<b>語法格式如下：</b>
			<pre data-enlighter-language="python">
s.remove( x )
			</pre>

			<p>將元素 x 從集合 s 中移除，如果元素不存在，則會發生錯誤。</p>

			<p>實例</p>

			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> thisset.remove("Taobao")
>>> print(thisset)
{'Google', 'Runoob'}

>>> thisset.remove("Facebook") 	# 不存在會發生錯誤
Traceback (most recent call last):
File "<stdin>", line 1, in <module>
KeyError: 'Facebook'
			</pre>

			<p>此外還有一個方法也是移除集合中的元素，且如果元素不存在，不會發生錯誤。格式如下所示：</p>
			<pre data-enlighter-language="python">
s.discard( x )
			</pre>

			<p>實例</p>

			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> thisset.discard("Facebook") 	# 不存在不會發生錯誤
>>> print(thisset)
{'Taobao', 'Google', 'Runoob'}
			</pre>

			<p>設置隨機刪除集合中的一個元素，語法格式如下：</p>
			<pre data-enlighter-language="python">
s.pop()
			</pre>

			<p>實例</p>
			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao", "Facebook"))
>>> x = thisset.pop()
>>> print(x)
Taobao
			</pre>
			<p>存檔執行後,多次執行測試結果都不一樣。</p>

			<p>然而在交互模式，pop 是刪除集合的第一個元素（排序後的集合的第一個元素）。</p>


			<p>實例</p>
			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao", "Facebook"))
>>> thisset.pop()
'Facebook'

>>> print(thisset)
{'Google', 'Taobao', 'Runoob'} >>>
			</pre>

			<h4>3、計算集合元素個數</h4>

			<p>語法格式如下：</p>
			<pre data-enlighter-language="python">
len(s)
			</pre>

			<p>計算集合 s 元素個數。</p>
			<p>實例(Python 3.0+)</p>
			<pre data-enlighter-language="python">
>>>thisset = set(("Google", "Runoob", "Taobao"))
>>> len(thisset)
3
		</pre>

			<h4>4、清空集合</h4>
			<p>語法格式如下：</p>
			<pre data-enlighter-language="python">
s.clear()
			</pre>

			<p>清空集合 s。</p>
			<p>實例</p>
			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> thisset.clear()
>>> print(thisset)
set()
		</pre>

			<h4>5、判斷元素是否在集合中存在</h4>
			<p>語法格式如下：</p>
			<pre data-enlighter-language="python">
x in s
			</pre>

			<p>判斷元素 x 是否在集合 s 中，存在返回 True，不存在返回 False。</p>

			<p>實例</p>
			<pre data-enlighter-language="python">
>>> thisset = set(("Google", "Runoob", "Taobao"))
>>> "Runoob" in thisset True
>>> "Facebook" in thisset False
			</pre>

			<h3>集合方法</h3>
			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th>方法</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>add()</td>
						<td>為集合添加元素</td>
					</tr>
					<tr>
						<td>clear()</td>
						<td>移除集合中的所有元素</td>
					</tr>
					<tr>
						<td>copy()</td>
						<td>拷貝一個集合</td>
					</tr>
					<tr>
						<td>difference()</td>
						<td>返回多個集合的差集</td>
					</tr>
					<tr>
						<td>difference_update()</td>
						<td>移除集合中的元素，該元素在指定的集合也存在。</td>
					</tr>
					<tr>
						<td>discard()</td>
						<td>刪除集合中指定的元素</td>
					</tr>
					<tr>
						<td>intersection()</td>
						<td>返回集合的交集</td>
					</tr>
					<tr>
						<td>intersection_update()</td>
						<td>返回集合的交集。</td>
					</tr>
					<tr>
						<td>isdisjoint()</td>
						<td>判斷兩個集合是否包含相同的元素，如果沒有返回 True，否則返回 False。</td>
					</tr>
					<tr>
						<td>issubset()</td>
						<td>判斷指定集合是否為該方法參數集合的子集。</td>
					</tr>
					<tr>
						<td>issuperset()</td>
						<td>判斷該方法的參數集合是否為指定集合的子集</td>
					</tr>
					<tr>
						<td>pop()</td>
						<td>隨機移除元素</td>
					</tr>
					<tr>
						<td>remove()</td>
						<td>移除指定元素</td>
					</tr>
					<tr>
						<td>symmetric_difference()</td>
						<td>返回兩個集合中不重複的元素集合。</td>
					</tr>
					<tr>
						<td>symmetric_difference_update()</td>
						<td>移除當前集合中在另外一個指定集合相同的元素，並將另外一個指定集合中不同的元素插入到當前集合中。</td>
					</tr>
					<tr>
						<td>runion()</td>
						<td>返回兩個集合的並集</td>
					</tr>
					<tr>
						<td>update()</td>
						<td>給集合添加元素</td>
					</tr>
				</tbody>
			</table>

			<h3>實做練習</h3>
			<ul>
				<li>找出一篇英文文章，移除標點符號與無特定意義的用詞，列出該文章所使用到的用詞。</li>
				<li>找出兩篇英文文章，比較兩篇文章所使用到的用詞。</li>
			</ul>
		</div>
	</div>

	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>