<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
	<div id="main">
		<h2>模組 module</h2>

		<h3>什麼是模組</h3>
		<p>在python的定義中，模組 module 就是一個含有python函式和敍述的檔案，副檔名為.py。</p>

		<p>例如，建立以下內容，並存檔為 fibo.py。</p>
		<pre data-enlighter-language="python">
# Fibonacci numbers module

def fib(n):    # write Fibonacci series up to n
    a, b = 0, 1
    while a < n:
        print(a, end=' ')
        a, b = b, a+b
    print()

def fib2(n):   # return Fibonacci series up to n
    result = []
    a, b = 0, 1
    while a < n:
        result.append(a)
        a, b = b, a+b
    return result
		</pre>

		<p>檔案名稱為 fibo.py, 因此這個模組名稱就是fibo。存檔完成後，在同一個資料中，即可以使用以下指令:</p>
		<pre data-enlighter-language="python">
>>> import fibo

>>> fibo.fib(1000)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987

>>> fibo.fib2(100)
[0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]

>>> fibo.__name__
'fibo'

# 函式名稱可以指定給變數
>>> fib = fibo.fib
>>> fib(500)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377
		</pre>

		<p>每個模組檔案裡面可以匯入其他的模組，通常這些匯入的語法會寫在最前面，以便程式容易被了解，但不必一定得寫在開頭。</p>
		<p>匯入模組後，模組的名稱會變成全域變數，因此可以隨時呼叫模組及其函式。</p>

		<h3>匯入函式</h3>
		<p>另外一種匯入的方式，可以將函式直接匯入，而不必使用模組名稱，語法如下:</p>
		<pre data-enlighter-language="python">
>>> from fibo import fib, fib2

>>> fib(500)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377
		</pre>
		<p>使用 from ... import ... 語法匯入，模組名稱將不會被定義為變數，而載入的函式則如同一般函式使用。以上例而言， fibo 將是未定義的變數。</p>

		<p>若要將模組內所有的函式全部載入，可以使用以下語法：</p>
		<pre data-enlighter-language="python">
>>> from fibo import *

>>> fib(500)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377
		</pre>
		<h3>取別名</h3>
		<p>若要將模組名稱另取一個別名使用，可以使用 as ，語法如下：</p>
		<pre data-enlighter-language="python">
>>> import fibo as ffb
>>> ffb.fib(500)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377
		</pre>
		<p>在上例中,模組名稱將被命名為 ffb 。模組取名稱的方式同樣也可以適用於匯入函式，語法如下:</p>
		<pre data-enlighter-language="python">
>>> from fibo import fib as fibonacci
>>> fibonacci(500)
0 1 1 2 3 5 8 13 21 34 55 89 144 233 377
		</pre>

		<h3>指令模組</h3>
		<p>如果要將模組變成可以用python指令執行的程式，例如:</p>
		<pre data-enlighter-language="python">
python fibo.py &lt;arguments&gt;
		</pre>
		<P>模組內容必須在檔案的最後增加以下語法：</P>
		<pre data-enlighter-language="python">
if __name__ == "__main__":
    import sys
    fib(int(sys.argv[1]))
		</pre>
		<p>加入以上語法後，即可在指令列執行敍述：</p>
		<pre data-enlighter-language="python">
$ python fibo.py 50
0 1 1 2 3 5 8 13 21 34
		</pre>
		<p>上述語法不會影響模組被匯入時的使用。</p>

		<h3>Python 標準函式庫</h3>
		<p>Python 內建了許多模組可以直接使用，稱為 Python 標準函式庫，函式庫內容相當龐大，詳細內容可以查看：</p>
		<ul>
			<li><a href="https://python-doc-tw.github.io/library/index.html" target="_blank">Python 標準函式庫 (Standard Library) 官方文件</a></li>
			<li><a href="https://docs.python.org/zh-tw/3/tutorial/stdlib.html" target="_blank">Python 標準函式庫概覽</a></li>
		</ul>

		<h3>模組資訊</h3>
		<p>查看由哪些資料夾匯入模組，可以使用以下方法：</p>
		<pre data-enlighter-language="python">
import sys
sys.path
</pre>
		<p>查看某個模組的所在位置，可以使用：</p>
		<pre data-enlighter-language="python">
模組名稱.__file__
</pre>

		<p>查看有哪些內建模組</p>
		<pre data-enlighter-language="python">
import sys
sys.builtin_module_names
</pre>

		<p>查看模組有哪些函式</p>
		<pre data-enlighter-language="python">
import 模組名稱
dir(模組名稱)
</pre>

		<p> dir() 函式會回傳一個list，實例如下：</p>
		<pre data-enlighter-language="python">
>>> import fibo, random

>>> dir(fibo)
['__name__', 'fib', 'fib2']

>>> dir(random)
['BPF',  'LOG4', 'NV_MAGICCONST', 'RECIP_BPF', 'Random', 'SG_MAGICCONST', 'SystemRandom', 'TWOPI', '_Sequence', '_Set', '__all__', '__builtins__', '__cached__', '__doc__', '__file__', '__loader__', '__name__', '__package__', '__spec__', '_accumulate', '_acos', '_bisect', '_ceil', '_cos', '_e', '_exp', '_inst', '_log', '_os', '_pi', '_random', '_repeat', '_sha512', '_sin', '_sqrt', '_test', '_test_generator', '_urandom', '_warn', 'betavariate', 'choice', 'choices', 'expovariate', 'gammavariate', 'gauss', 'getrandbits', 'getstate', 'lognormvariate', 'normalvariate', 'paretovariate',  'randint', 'random', 'randrange', 'sample', 'seed', 'setstate', 'shuffle', 'triangular', 'uniform', 'vonmisesvariate', 'weibullvariate']
		</pre>

		<p>沒有給引數時，dir() 列出目前已定義的名稱：</p>
		<pre data-enlighter-language="python">
>>> a = [1, 2, 3, 4, 5]
>>> import fibo
>>> fib = fibo.fib
>>> dir()
['__builtins__', '__name__', 'a', 'fib', 'fibo', 'sys']
		</pre>

		<p>dir() 並未列出內建的函式和變數，如果要查看內容函式和變數，可以先匯入內建模組 builtins 。</p>
		<pre data-enlighter-language="python">
>>> import builtins
>>> dir(builtins)
['ArithmeticError', 'AssertionError', 'AttributeError', 'BaseException',
 ... (略) ]
		</pre>

		<h2>參考網站</h2>
		<ul>
			<li>Python Module Index - <a href="https://docs.python.org/3/py-modindex.html" target="_blank">https://docs.python.org/3/py-modindex.html</a></li>
			<li>官網教材 - <a href="https://docs.python.org/3/tutorial/modules.html" target="_blank">https://docs.python.org/3/tutorial/modules.html</a></li>
			<li><a href="https://www.tutorialsteacher.com/python/python-module" target="_blank">模組的說明與範例</a></li>
			<li><a href="https://www.tutorialsteacher.com/question-answer/python/module" target="_blank">模組的測驗題</a></li>
		</ul>

	</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>