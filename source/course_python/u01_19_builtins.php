<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">


			<h2>內建函式 Built-in functions</h2>

			<p>查看內建函式</p>
			<pre>
dir(__builtin__)
			</pre>
			<p>或</p>
			<pre>
import builtins
dir(builtins)
			</pre>
			<p>查看函式說明</p>
			<pre>
help("函式名稱")
			</pre>

			<p>Python 語言本身提供許多功能強大的內建函數，主要項目如下：</p>
<div class="row">
<div class="col-2">abs</div>
<div class="col-2">all</div>
<div class="col-2">any</div>
<div class="col-2">ascii</div>
<div class="col-2">bin</div>
<div class="col-2">bool</div>
<div class="col-2">breakpoint</div>
<div class="col-2">bytearray</div>
<div class="col-2">bytes</div>
<div class="col-2">callable</div>
<div class="col-2">chr</div>
<div class="col-2">classmethod</div>
<div class="col-2">compile</div>
<div class="col-2">complex</div>
<div class="col-2">copyright</div>
<div class="col-2">credits</div>
<div class="col-2">delattr</div>
<div class="col-2">dict</div>
<div class="col-2">dir</div>
<div class="col-2">display</div>
<div class="col-2">divmod</div>
<div class="col-2">enumerate</div>
<div class="col-2">eval</div>
<div class="col-2">exec</div>
<div class="col-2">filter</div>
<div class="col-2">float</div>
<div class="col-2">format</div>
<div class="col-2">frozenset</div>
<div class="col-2">get_ipython</div>
<div class="col-2">getattr</div>
<div class="col-2">globals</div>
<div class="col-2">hasattr</div>
<div class="col-2">hash</div>
<div class="col-2">help</div>
<div class="col-2">hex</div>
<div class="col-2">id</div>
<div class="col-2">input</div>
<div class="col-2">int</div>
<div class="col-2">isinstance</div>
<div class="col-2">issubclass</div>
<div class="col-2">iter</div>
<div class="col-2">len</div>
<div class="col-2">license</div>
<div class="col-2">list</div>
<div class="col-2">locals</div>
<div class="col-2">map</div>
<div class="col-2">max</div>
<div class="col-2">memoryview</div>
<div class="col-2">min</div>
<div class="col-2">next</div>
<div class="col-2">object</div>
<div class="col-2">oct</div>
<div class="col-2">open</div>
<div class="col-2">ord</div>
<div class="col-2">pow</div>
<div class="col-2">print</div>
<div class="col-2">property</div>
<div class="col-2">range</div>
<div class="col-2">repr</div>
<div class="col-2">reversed</div>
<div class="col-2">round</div>
<div class="col-2">set</div>
<div class="col-2">setattr</div>
<div class="col-2">slice</div>
<div class="col-2">sorted</div>
<div class="col-2">staticmethod</div>
<div class="col-2">str</div>
<div class="col-2">sum</div>
<div class="col-2">super</div>
<div class="col-2">tuple</div>
<div class="col-2">type</div>
<div class="col-2">vars</div>
<div class="col-2">zip</div>
</div>
			

			<h2>any() </h2>
			<p>如果任何一個項目為 True，則返回 true。 如果全部為空或全部為假，則返回假。 Any 可以被認為是對提供的可迭代對象的 OR 操作序列。它可以使執行走近路，即一旦知道結果就停止執行。 </p>

			<pre data-enlighter-language="python">
>>>any(['a', 'b', 'c', 'd'])  # 列表list，元素都不为空或0
True

>>> any(['a', 'b', '', 'd'])   # 列表list，存在一个为空的元素
True

>>> any([0, '', False])        # 列表list,元素全为0,'',false
False

>>> any(('a', 'b', 'c', 'd'))  # 元组tuple，元素都不为空或0
True

>>> any(('a', 'b', '', 'd'))   # 元组tuple，存在一个为空的元素
True

>>> any((0, '', False))        # 元组tuple，元素全为0,'',false
False

>>> any([]) # 空列表
False

>>> any(()) # 空元组
False
		</pre>

			<h2>all()</h2>
			<p>all() 函数用於判断给定的可迭代參數 iterable 中的所有元素是否都為 TRUE，如果是返回 True，否則返回 False。 元素除了是 0、空、None、False 外都算 True。</p>
			<pre data-enlighter-language="python">
>>> all(['a', 'b', 'c', 'd'])  # 列表list，元素都不为空或0
True

>>> all(['a', 'b', '', 'd'])   # 列表list，存在一个为空的元素
False

>>> all([0, 1，2, 3])          # 列表list，存在一个为0的元素
False

>>> all(('a', 'b', 'c', 'd'))  # 元组tuple，元素都不为空或0
True

>>> all(('a', 'b', '', 'd'))   # 元组tuple，存在一个为空的元素
False

>>> all((0, 1, 2, 3))          # 元组tuple，存在一个为0的元素
False

>>> all([])             # 空列表
True

>>> all(())             # 空元组
True
		</pre>


			<h2>zip()</h2>
			<p>zip() 函式是 python
				的內建函式，它聚合來自兩個或多個可迭代對象的對應元素，創建了一個迭代器。使用迭代器的好處就是可以更有效率的處理大量的資料。這個函式可以使用生成的迭代器快速且一致地解決常見的程式問題，例如建立字典。</p>

			<pre data-enlighter-language="python">
>>> letters = ['a', 'b', 'c']
>>> numbers = [1, 2, 3]
>>> zipped = zip(letters, numbers)
>>> a = list(zipped)
>>> a
Out: [('a', 1), ('b', 2), ('c', 3)]

>>> b = dict(a)
Out: {'a': 1, 'b': 2, 'c': 3}
		</pre>
			<p>zip 的參數若是不同長度，會以長度最短的 list 為準，超過長度的部分就會被捨棄：。下列範例的結果將與前面相同。</p>

			<pre data-enlighter-language="python">
>>> letters = ['a', 'b', 'c', 'd']
>>> numbers = [1, 2, 3]
>>> zip(letters, numbers)

>>> letters = ['a', 'b', 'c']
>>> numbers = [1, 2, 3, 4]
>>> zip(letters, numbers)
		</pre>

			<p>多個list</p>
			<pre data-enlighter-language="python">
>>> names = ["A", "B", "C"]
>>> values = [11, 23, 46]
>>> ages = [45, 67, 82]
>>> a = zip(names, values, ages)
>>> a
Outs: [('A', 11, 45), ('B', 23, 67), ('C', 46, 82)]
		</pre>

			<h3>unzip</h3>

			<pre data-enlighter-language="python">
>>> pairs = [(1, 'a'), (2, 'b'), (3, 'c'), (4, 'd')]
>>> numbers, letters = zip(*pairs)
>>> numbers
Outs: (1, 2, 3, 4)
>>> letters
Outs: ('a', 'b', 'c', 'd')
		</pre>


			<h2>repr()</h2>
			<p>repr(object) - 回傳物件的字串表達形式</p>
			<p>在 Python 中要將某一類型的變數或者常數轉換為字串物件，通常有兩種方法，即 str()或者 repr() 。</p>
			<p>str() 的輸出追求可讀性，輸出格式要便於理解，適合用於輸出內容到使用者終端。 repr() 的輸出追求明確性，除了物件內容，還需要展示出物件的資料類型資訊，適合開發和調試階段使用。</p>
			<p>repr()產生的物件可以再用 eval()產生結果</p>

			<pre data-enlighter-language="python">
>>> from datetime import datetime
>>> now = datetime.now()

# Prints readable format for date-time object
>>> print(str(now))
Outs: 2021-09-08 21:53:54.157305

# prints the official format of date-time object
print(repr(now))
Outs: datetime.datetime(2021, 9, 8, 21, 53, 54, 157305)
			</pre>

			<p>repr() 函式可以傳回物件的可列印模式</p>
			<pre data-enlighter-language="python">
numbers = [1, 2, 3, 4, 5]
# create a printable representation of the list
printable_numbers = repr(numbers)

print(printable_numbers)
# Output: [1, 2, 3, 4, 5]
			</pre>



			<h2>map()</h2>
			<p>map() 會根據提供的函數對指定序列做映射。 第一個參數 function 以參數序列中的每一個元素調用 function 函數，返回包含每次 function 函數返回值的新清單。</p>

			<pre data-enlighter-language="python">
>>> def square(x) :       # 計算平方
...     return x ** 2
...
>>> map(square, [1,2,3,4,5])    # 計算清單各個元素的平方
&lt;map object at 0x100d3d550&gt;     # 返回反覆運算器

>>> list(map(square, [1,2,3,4,5]))   # 使用 list() 轉換為列表
[1, 4, 9, 16, 25]

>>> list(map(lambda x: x ** 2, [1, 2, 3, 4, 5]))   # 使用 lambda 匿名函數
[1, 4, 9, 16, 25]
			</pre>


			<h2>filter()</h2>
			<p>filter() 函式用於過濾序列。
				和map()類似，filter()也接收一個函式和一個序列。和map()不同的是，filter()把傳入的函式依次作用於每個元素，然後根據返回值是True還是False決定保留還是丟棄該元素。</p>

			<p>例如，在一個list中，刪掉偶數，只保留奇數，可以這麼寫：</>
				<pre data-enlighter-language="python">
def is_odd(n):
    return n % 2 == 1

list(filter(is_odd, [1, 2, 4, 5, 6, 9, 10, 15]))

# 執行結果: [1, 5, 9, 15]
			</pre>

			<h2>參考資料</h2>
			<ul>
				<li><a href="https://docs.python.org/3/library/functions.html">Built-in Functions - Python 3.9.7 Documents</a></li>
				<li><a href="https://www.runoob.com/python/python-built-in-functions.html">Python内置函式</a></li>
				<li><a href="https://www.w3schools.com/python/python_ref_functions.asp">w3schools - Python Built in Functions</a></li>
				<li><a href="https://www.programiz.com/python-programming/methods/built-in">Python Built-in Functions</a></li>
			</ul>

		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>