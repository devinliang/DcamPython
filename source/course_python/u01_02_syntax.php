<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<div class="container" id="content">
		<div id="main">

			<h2>基本語法</h2>

			<h3>編碼</h3>

			<p>預設情況下，Python 原始程式文件是以 UTF-8 編碼，所有字串都是 unicode 字串，當然也可以將原始程式文件指定不同的編碼。</p>

			<h3>識別字</h3>
			<ul>
				<li>第一個字元必須是字母表中的字母或底線字 _ </li>
				<li>識別字其他的部分由字母、數字和底線字組成</li>
				<li>識別字將大小寫字母視為不同字</li>
				<li>Python 3 支援非 ASCII 識別字,但不建議使用</li>
			</ul>

			<h3>保留字</h3>
			<p>保留字即關鍵字，不能用作任何識別字名稱。Python 標準庫提供了一個 keyword 模組，可以列出當前版本的所有關鍵字：</p>
			<pre data-enlighter-language="python">
>>> import keyword
>>> keyword.kwlist
['False', 'None', 'True', 'and', 'as', 'assert', 'break', 'class', 'continue', 'def', 'del', 'elif', 'else', 'except', 'finally', 'for', 'from', 'global', 'if', 'import', 'in', 'is', 'lambda', 'nonlocal', 'not', 'or', 'pass', 'raise', 'return', 'try', 'while', 'with', 'yield']
			</pre>

			<h3>註解</h3>
			<p>Python中單行註解以 # 開頭，實例如下：</p>
			<pre data-enlighter-language="python">
#!/usr/bin/python3

# 第一個註解
print ("Hello, Python!") # 第二個註解
			</pre>

			<p>執行以上程式，輸出結果為：</p>

			<pre data-enlighter-language="python">
Hello, Python!
			</pre>

			<p>多行註解可以用多個 # 號，還有 ''' 和 """</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3

# 第一個註解
# 第二個註解

'''
第三註解
第四註解
'''

"""
第五註解
第六註解
"""
print ("Hello, Python!")
			</pre>
			<p>執行以上程式，輸出結果為：</p>
			<pre data-enlighter-language="python">
Hello, Python!
			</pre>

			<h3>行與縮排</h3>

			<p>python最具特色的就是使用縮排來表示程式區塊，而不是大多數程式所使用的大括號 {} </p>

			<p>縮排的空格數是可變的，但是同一個程式塊的語句必須包含相同的縮排空格數。實例如下：</p>

			<pre data-enlighter-language="python">
if True:
    print ("True")
else:
    print ("False")
</pre>

			<p>以下程式最後一行語句縮排數的空格數不一致，會導致運行錯誤：</p>

			<pre data-enlighter-language="python">
if True:
    print ("Answer")
    print ("True")
else:
    print ("Answer")
  print ("False")    # 縮排不一致，會導致運行錯誤
</pre>

			<p>以上程式由於縮排不一致，執行後會出現類似以下錯誤：</p>

			<pre data-enlighter-language="python">
 File "test.py", line 6
    print ("False")    # 縮排不一致，會導致運行錯誤
                                      ^
IndentationError: unindent does not match any outer indentation level
</pre>

			<h3>多行語句</h3>
			<p>Python 通常是一行寫完一條語句，但如果語句很長，可以使用反斜槓(\)來實現多行語句，例如：</p>
			<pre data-enlighter-language="python">
total = item_one + \
        item_two + \
        item_three
</pre>

			<p>在 [], {}, 或 () 中的多行語句，不需要使用反斜槓(\)，例如：</p>

			<pre data-enlighter-language="python">
total = ['item_one', 'item_two', 'item_three',
        'item_four', 'item_five']
</pre>

			<h3>空行</h3>
			<p>函數之間或類別的方法之間用空行分隔，表示一段新的程式代碼的開始。類別和函數入口之間也用一行空行分隔，以突出函數入口的開始。</p>

			<p>
				空行與代碼縮進不同，空行並不是Python語法的一部分。書寫時不插入空行，Python解釋器運行也不會出錯。但是空行的作用在於分隔兩段不同功能或含義的代碼，便於日後代碼的維護或重構。</p>

			<p>
				記住：空行也是程式代碼的一部分。
			</p>

			<h3>等待用戶輸入</h3>
			<p>執行下面的程式,再按輸入鍵後,就會等待用戶輸入：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3

input("\n\n按下 enter 键後退出。")
</pre>

			<p>以上代碼中 ，"\n\n"在結果輸出前會輸出兩個新的空行。一旦用戶按下 enter 鍵時，程式將退出。</p>

			<h3>同一行顯示多條語句</h3>

			<p>Python可以在同一行中使用多條語句，語句之間使用分號(;)分割，以下是一個簡單的實例：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3

import sys; x = 'wenzao'; sys.stdout.write(x + '\n')
</pre>

			<p>執行以上程式，輸出結果為：</p>

			<pre data-enlighter-language="python">
wenzao
</pre>



			<h3>輸出</h3>

			<p>print 預設輸出是換行的，如果要實現不換行需要在末尾加上 end=""：</p>

			<pre data-enlighter-language="python">
#!/usr/bin/python3

x="a"
y="b"
# 換行輸出
print( x )
print( y )

print('---------')
# 不換行輸出
print( x, end=" " )
print( y, end=" " )
print()
</pre>

			<p>以上實例執行結果為：</p>

			<pre data-enlighter-language="python">
a
b
---------
a b
</pre>

		</div>

	</div>


	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>