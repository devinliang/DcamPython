<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
	<div id="main">
		<h2>異常處理 Exception Handling</h2>

		<p>當程式執行時遇到錯誤，一般而言就會中斷跳出，然後結束，這些情形例如輸入不正確，IO設備功能不正常...等，這些情形會造成正常運行中的程式突然中斷，有時會造成系統資源受損。這些狀況在程式中被稱為Exception，可以翻做例外或異常。異常處理的用途就是設定程式捕抓執行期間的錯誤，讓程式能夠繼續執行。 </p>

		<p>Python 使用 try 和 except 兩個關鍵字搭配設定，進行程式異常時的處理 ，語法架構為：</p>
		<pre data-enlighter-language="python">
try:
    # 正常執行的程式碼
except:
    # 當程式出現異常時執行這邊的程式碼
		</pre>

		<p>實例1: 程式執行輸入時，應輸入數字但輸入文字，造成一個 ValueError 的錯誤，程式中斷跳出。</p>
		<pre data-enlighter-language="python">
a = int(input("請輸入一個數字："))
print(a)

請輸入一個數字：asdf
---------------------------------------------------------------------------
ValueError                                Traceback (most recent call last)
<ipython-input-1-39847dcb6d19> in <module>
----> 1 a = int(input("請輸入一個數字："))
      2 print(a)

ValueError: invalid literal for int() with base 10: 'asdf'
		</pre>

		<p>使用 try...except 處理</p>
		<pre data-enlighter-language="python">
try:
    a = int(input("請輸入一個數字："))
    print(a)
except:
    print("輸入不正常!")

請輸入一個數字：asd
輸入不正常!
		</pre>

		<h3>多重狀況</h3>
		<p>針對不同的異常狀況如果要分開處理，可以使用以下語法：</p>
		<pre data-enlighter-language="python">
try:
	正常執行的程式嗎
except [ (Error1, Error2, ... ) [as e] ]:
	處理異常的程式碼1
except [ (Error3, Error4, ... ) [as e] ]:
	處理異常的程式碼2
except  [Exception]:
	處理其它異常
		</pre>

		<p>說明</p>
		<ul>
			<li>(Error1, Error2,...) 、(Error3, Error4,...)：其中，Error1、Error2、Error3 和 Error4 都是具體的異常類型，一個 except 區塊可以同時處理多種異常。</li>
			<li>[as e]：作為可選參數，表示給異常類型起一個別名 e，這樣做的好處是方便在 except 區塊中呼叫異常類型。</li>
			<li>[Exception]：作為可選參數，可以代表程式可能發生的所有異常情況，通常會放在最後一個 except 區塊。</li>
		</ul>
		<p>從 try except 的基本語法格式可以看出，try 區塊有且僅有一個，但 except 局塊可以有多個，且每個 except 區塊都可以同時處理多種異常。</p>

		<p>當程式發生不同的意外情況時，會對應特定的異常類型，Python 解譯器會根據該異常類型選擇對應的 except 區塊來處理該異常。</p>

		<p>try except 的執行流程如下：</p>
		<ul>
			<li>首先執行 try 中的程式，如果執行過程中出現異常，系統會自動生成一個異常類型，並將該異常提交給 Python 解譯器，此過程稱為<span class="keyitem">捕獲異常</span>。</li>
			<li>當 Python 解譯器收到異常物件時，會尋找能處理該異常物件的 except 區塊，如果找到合適的 except 區塊，則把該異常物件交給該 except 區塊處理，這個過程被稱為<span class="keyitem">處理異常</span>。如果 Python 解譯器找不到處理異常的 except 塊，則程式運行終止，Python 解譯器也將退出。</li>
		</ul>
		<p>事實上，不管程式碼是否處於 try 塊中，甚至包括 except 區塊中的程式碼，只要執行該程式時出現了異常，系統都會自動生成對應類型的異常。但是，如果此段程式沒有用 try 包裹，又或者沒有為該異常配置處理它的 except 區塊，則 Python 解譯器將無法處理，程式就會停止運行；反之，如果程式發生的異常經 try 捕獲並由 except 處理完成，則程式可以繼續執行。</p>


		<p>實例</p>
		<pre data-enlighter-language="python">
try:
	a = int(input("輸入被除數："))
	b = int(input("輸入除數："))
	c = a / b
	print("您輸入的兩個數相除的結果是：", c )
except (ValueError, ArithmeticError):
	print("程式發生了數字格式異常、算術異常之一")
except :
	print("未知異常")

print("程式繼續運行")
		</pre>

		<h3>獲取訊息</h3>
		<p>如果要針對異常做進一步的處理，可以設定參數顥示捕獲異常的相關訊息。每種異常類型都提供了相關的屬性和方法，通過調用，就可以獲取當前處理異常類型的相關資訊：</p>
		<ul>
			<li>args：返回異常的錯誤編號和描述字串；</li>
			<li>str(e)：返回異常資訊，但不包括異常資訊的類型；</li>
			<li>repr(e)：返回較完整的異常資訊，包括異常資訊的類型。</li>
		</ul>
		<p>實例</p>
		<pre data-enlighter-language="python">
try:
    1/0
except Exception as e:
    print(e.args)
    print(str(e))
    print(repr(e))
		</pre>
		<p>結果如下:</p>
		<pre data-enlighter-language="python">
('division by zero',)
division by zero
ZeroDivisionError('division by zero')
		</pre>

		<h3>詳細語法</h3>
		<pre data-enlighter-language="python">
try:
	正常執行的程式
except:
	處理異常的程式
else:
	異常未發生時執行的程式
finally:
	無論異常是否發生都會執行的程式
		</pre>
		<p>else 區塊可以設定若程式正常完成，未發生任何異常時所執行的程式。 finally 區塊則可以設定無論異常是否發生都會執行的程式，通常用來作為try區塊中最後的處理工作，例如在try中開啟資料庫，進行動作，finally可以設定關閉資料庫。</p>

		<p>實例</p>
		<pre data-enlighter-language="python">
try:
	result = 20 / int(input('請輸入除數:'))
	print(result)
except:
	print("發生異常！")
else:
	print("程式未發生異常") 
finally :
	print("程式完成")

print("程式繼續運行")
		</pre>

		<h3>指定異常</h3>
		<p>除了系統預設的異常，如果在程式中要自行定義異常，可以使用 raise 設定。</p>
		<p>實例:在網站上註冊帳號，要求密碼長度要介於8~16個字元之間(包含)，如果密碼長度小於8或大於16丟給異常處理。由於系統並未內建這種異常狀況，因此必須自行指定為異常，做抛出動作給異常處理。</p>

		<pre data-enlighter-language="python">
try:
    pwd = input("請輸入您的密碼: ")
    if len(pwd)<8:
        raise Exception("密碼長度不足")
    if len(pwd)>16:
        raise Exception("密碼長度太長")
except Exception as e:
    print("密碼長度檢查異常: " + e)
		</pre>

		<p>執行結果</p>
		<pre data-enlighter-language="python">
請輸入您的密碼: abc123
密碼長度檢查異常:  密碼長度不足
		</pre>


		<h3>常見異常類型</h3>
		<table class="table">
        <tbody>
            <tr>
                <th>異常類型</th>
                <th>說明</th>
                <th>實例</th>
            </tr>
            <tr>
                <td>
                    AssertionError</td>
                <td>
                    當 assert 關鍵字後的條件為假時，程式運行會停止並拋出 AssertionError 異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; demo_list = ['Wenzao']
&gt;&gt;&gt; assert len(demo_list) &gt; 0
&gt;&gt;&gt; demo_list.pop()
'Wenzao'<br>
&gt;&gt;&gt; assert len(demo_list) &gt; 0<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#6&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; assert len(demo_list) &gt; 0<br>
AssertionError
				</pre>
				</td>
            </tr>
            <tr>
                <td>
                    AttributeError</td>
                <td>
                    當試圖使用的物件屬性不存在時拋出的異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; demo_list = ['Wenzao']<br>
&gt;&gt;&gt; demo_list.len<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#10&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; demo_list.len<br>
AttributeError: 'list' object has no attribute 'len'
				</pre>
				</td>
            </tr>
            <tr>
                <td>
                    IndexError</td>
                <td>
                    索引超出範圍會引發此異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; demo_list = ['Wenzao']<br>
&gt;&gt;&gt; demo_list[3]<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#8&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; demo_list[3]<br>
IndexError: list index out of range
				</pre>
				</td>
            </tr>
            <tr>
                <td>
                    KeyError</td>
                <td>
                    字典中查找一個不存在的關鍵字時引發此異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; demo_dict={'Wenzao':"www.wzu.edu.tw"}<br>
&gt;&gt;&gt; demo_dict["Wenz"]<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#12&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; demo_dict["Wenz"]<br>
KeyError: 'Wenz'
				</pre>
				</td>
            </tr>
            <tr>
                <td>
                    NameError</td>
                <td>
                    嘗試參照一個未聲明的變數時，引發此異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; Wenzao<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#15&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; Wenzao<br>
NameError: name 'Wenzao' is not defined
				</pre>
				</td>
            </tr>
            <tr>
                <td>
                    TypeError</td>
                <td>
                    不同類型資料之間的無效操作</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; 1+'Wenzao'<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#17&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; 1+'Wenzao'<br>
TypeError: unsupported operand type(s) for +: 'int' and 'str'
				</pre>
				</td>
            </tr>
            <tr>
                <td>ZeroDivisionError</td>
                <td>除法運算中除數為 0 引發此異常</td>
                <td>
				<pre data-enlighter-language="python">
&gt;&gt;&gt; a = 1/0<br>
Traceback (most recent call last):<br>
&nbsp; File "&lt;pyshell#2&gt;", line 1, in &lt;module&gt;<br>
&nbsp;&nbsp;&nbsp; a = 1/0<br>
ZeroDivisionError: division by zero
				</pre>
				</td>
            </tr>
        </tbody>
    </table>

		<h2>參考網站</h2>
		<ul>
			<li>Python Built-in Exceptions <a href="https://docs.python.org/3/library/exceptions.html" target="_blank">https://docs.python.org/3/library/exceptions.html</a></li>
		</ul>

	</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>