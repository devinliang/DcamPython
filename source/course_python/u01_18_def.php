<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
	<div id="main">
		<h2>函式 Function</h2>

		<h3>什麼是函式</h3>

		<p>將相同並重複出現的程式語法，設定一個共同名稱。設計程式時若需要用到這段語法，則使用這個定義好的名稱來代替這段語法。換言之，就是定義一個名稱，來代表一群指令。</p>

		<p>使用函式可以將相同的程式重複使用，進而簡化語法，提高程式的可讀性，容易除錯，並使程式的內容更具一性性，讓程式變得模組化。</p>
		<p>程式設計觀念：DRY(Don't Repeat Yourself)，避免同樣的程式碼重複出現在不同地方。</p>

		<h3>函式語法</h3>
		<p>函式的使用包含了兩個部份，第一是<span class="keyitem">宣告 Defining a function</span>，第二是<span class="keyitem">呼叫 calling a function</span>。宣告就是將一群程式語法，設定一個名稱來代替。呼叫則是調用這個名稱，以執行函式所代表的程式。因此函式必須先被宣告後，才能呼叫。宣告函式只要設定一次，之後即可以隨程式的需要呼叫函式，不限次數。</p>

		<p>函式宣告的語法為:</p>
		<pre data-enlighter-language="python">
def 函式名稱(參數):
    程式碼
</pre>

		<p>函式宣告： 以 <span class="keyitem">def</span> 這個關鍵字做為開頭，定義函式名稱及所需要的參數</p>
		<p>程式碼： 將函式要執行的敍述放在這裡，程式碼開頭必須縮排。</p>

		<p>例如，宣告以下函式</p>
		<p>實例1：</p>
		<pre data-enlighter-language="python">
def train():
	print(" ___ |[]|_n__n_I_c")
	print("|___||__|###|____}")
	print("O-O--O-O+++--O-O")
		</pre>

		<p>宣告之後，若要顯示以上的文字圖案，只要呼叫 def 後面所定義的名稱即可，例如:</p>
		<pre data-enlighter-language="python">
>>> train()
___ |[]|_n__n_I_c
|___||__|###|____}
O-O--O-O+++--O-O
		</pre>
		<p>宣告函式時若無指定參數，呼叫函式時，名稱後面仍要加上小括號()，以便與變數區別。</p>
		<p>宣告函式的時候，如果需要有參照資料，參照資料可以放到小括號裡面的參數。若函式有定義參數，則呼叫函式時，也必須給予相對應的參數。</p>

		<p>實例2：設計一個函式，可以判斷數字為奇數或偶數</p>
		<p>函式宣告 Defining a function</p>
		<pre data-enlighter-language="python">
def evenodd(num):
	if (num % 2 == 0):
		print(num, "是一個偶數")
	else:
		print(num, "是一個奇數")
		</pre>
		<p>呼叫函式 Calling a function</p>
		<pre data-enlighter-language="python">
>>> oddeven(3)
3 是一個奇數

>>> oddeven(6)
6 是一個偶數
		</pre>
		<p>函式宣告時，定義了一個參數 num 做數字計算，因此在呼叫函式時，也必須給予一個相對應的真實數字。</p>

		<p>實例3：設計一個函式，傳入一個整數，代表公元年分，函式可判斷此年分為平年或閏年，判斷規則如下:</p>

		<ol>
			<li>年分除以 4 不可整除，為平年。</li>
			<li>年分除以 4 可整除，但除以100不可整除，為閏年。</li>
			<li>年分除 100 可整除，但除以400不可整除，為平年。</li>
		</ol>

		<p>說明: 年分除以4整除，但不是100的倍數，都是閏年。年分為100的倍數中，若是400的倍數為閏年，不是 400 的倍數為平年。例: 1700,1800,1900,2100為平年，1600,2000,2400為閏年。</p>

		<p>函式宣告 - 設定一個名稱，代表要做年分判斷的計算，並傳入一個整數參數，代表要被判斷的年分</p>
		<pre data-enlighter-language="python">
def check_leap_year(year):
    if (year % 400 == 0) or (year % 100 != 0 and year % 4 == 0):
        print("閏年")
    else:
        print("平年")
</pre>

		<p>呼叫函式 - 函式宣告後，即可被調用，因此要判斷某個年分是否為平年或閏年,只要輸入函式名稱，並將年分放入參數即可。例:</p>

		<pre data-enlighter-language="python">
>>> check_leap_year(1900)
平年

>>> check_leap_year(2000)
閏年

>>> check_leap_year(2022)
平年

>>> check_leap_year(2024)
閏年
		</pre>

		<h3>函式的種類</h3>
		<p>函式可以分為兩種類型: <span class="keyitem">有回傳值</span> 或 <span class="keyitem">無回傳值</span>。 有傳回值意謂函式執行後，要將結果回報，無傳回傳即不必回報，回傳的方法為: return。 函式被呼叫而執行時，如果遇到 return 敍述，將結束函式的執行，並將結果回傳。</p>

		<p>以年分判斷為例，上面的實例為無回傳的函式，若改為以下方式，程式執行後會結果回傳:</p>

		<pre data-enlighter-language="python">
def check_leap_yn(year):
    if (year % 400 == 0) or (year % 100 != 0 and year % 4 == 0):
		return True;
    else:
        return False;

y = int(input("請輸入年分"))
yn = check_leap_yn(y)
if (yn):
	print( y, "是閏年")
else
	print( y, "是平年")
</pre>

		<p>實例4:設計一個函式，傳入一個參數，代表圓半徑，函式可以計算並回傳圓面積，</p>
		<p>宣告函式</p>
		<pre data-enlighter-language="python">
def circle(r):
	a = r*r*3.1416
	return a
		</pre>
		<p>呼叫函式</p>
		<pre data-enlighter-language="python">
>>> m = circle(5)
>>> m
78.53999999999999

>>> n = circle(15)
>>> n
706.86

>>> print(m + n)
785.4
		</pre>

		<h3>變數的作用範圍</h3>
		<p>在程式語言中，當設定變數使用時，除了命名必須符合規則之外，也必須注意其有效使用的範圍。</p>
		<p>區域變數(local variable)：函式宣告中所定義的變數，只能在函式內使用，在函式以外的範圍不可以存取。</p>
		<p>實例5:</p>
		<pre data-enlighter-language="python">
def cal_num():
	x = 100

print(x)	# 將出現錯誤
		</pre>
		<p>上列程式 x 被定義在函式 cal_num 裡面，因此函式之外無法使用。</p>
		<p>實例6:</p>
		<pre data-enlighter-language="python">
x = 100

dev cal_num():
	x = 20

print(x)
		</pre>

		<p>以上程式執行時，將得到結果為 100</p>
		<p>全域變數(global variable)：函式若要存取宣告範圍外的變數，可以用 global 關鍵字。</p>
		<p>實例7:</p>
		<pre data-enlighter-language="python">
x = 100

dev cal_num():
	global x   # 宣告 x 為全域變數
	x = 20

print(x)
		</pre>
		<p>以上程式執行時，將得到結果為 20</p>

		<h3>參數的對應規則</h3>
		<p>在函式宣告裡面所使用的參數名稱，稱為形式參數(formal paramenter)，它們不必有真正的內容，它們的主要用途是給予函式內的程式碼，可以使用它們來進行計算的代表名稱。</p>

		<p>而在呼叫函式時，真正使用到的參數，稱為實際參數(actual parameter)或引數(argument)，它們必須是真實具備內容的項目，才能呼叫函式進行計算。</p>

		<p>在呼叫函式時，若有參數多於一個，則傳入的參數與函式定義的參數有以下對應的方式:</p>

		<p>1.<span class="keyitem">參數必備原則</span>：呼叫函式時，引數的項目必須與函式宣告的參數項目相同，否則將出現語法錯誤。例如，函式宣告時，指定兩個參數，則呼叫函式就必須相對給予兩個引數。</p>

		<p>2.<span class="keyitem">依序對應原則</span>：呼叫函式的引數項目與函式宣告的參數按順序一對一對應, 例如:</p>
		<ul>
			<li>宣告: def func(a,b,c)</li>
			<li>呼叫: func(10, 20, 30)</li>
		</ul>
		<p>則 a->10, b->20, c->30</p>

		<p>3.<span class="keyitem">關鍵字原則</span>：呼叫函式的引數可以使用參數的名稱對應, 如此可以不必依照順序對應，例如:</p>
		<ul>
			<li>宣告: def func(a,b,c)</li>
			<li>呼叫: func(b=10, c=20, a=30)</li>
		</ul>
		<p>則 a->30, b->10, c->20</p>

		<p>4.<span class="keyitem">預設值原則</span>：函式宣告時，可以設定參數的預設值，呼叫函式時若該參數未被設定，則以預設值代替，例如:</p>
		<ul>
			<li>宣告: def func(a,b,c=10)</li>
			<li>呼叫: func(10, 20)，則 a->10, b->20, c->10</li>
			<li>呼叫: func(10, 20, 30)，則 a->10, b->20, c->30</li>
			<li>呼叫: func(b=10, a=20)，則 a->20, b->10, c->10</li>
		</ul>
		<p>另外必須注意，無預設值之參數必須放在有預設值之參數之前，例如，以下是一個錯誤的例子:</p>
		<ul>
			<li>宣告: def(a, b=20, c) # error!</li>
		</ul>

		<p>5.<span class="keyitem">個數可變原則</span>：函式的參數個數如果不是固定的數目時，可以使用兩個方法處理: *args, **kwargs</p>
		<p>*args - 將參數以 tuple 方式傳入</p>
		<p>**kwargs - 將參數以 dictionary 方式傳入</p>

		<p>實例8:設計一個函式，可以將所有傳入的數字加總起來，並回傳加總結果</p>

		<p>宣告函式</p>
		<pre data-enlighter-language="python">
# 計算傳入數字的總和
def sum(*args):
	s = 0
	for i in args:
		s += i;
	return s
		</pre>

		<p>呼叫執行</p>
		<pre data-enlighter-language="python">
>>> print( sum(1, 3, 5) )
9

>>> print( sum(1,3,5,7,9) )
25
		</pre>

		<p>實例9:設計一個函式，可以接受所有的鍵值對照，列出所有的鍵值</p>
		<p>宣告函式</p>
		<pre data-enlighter-language="python">
def app(**info):
	print(info)
		</pre>

		<p>呼叫執行</p>
		<pre data-enlighter-language="python">
>>> app(name="devin",
		email="83011@ms.wzu.edu.tw",
		date="2021.12.10")
{'name': 'devin', 'email': '83011@ms.wzu.edu.tw', 'date': '2021.12.10'}
		</pre>

		<h3>傳值與傳址參照</h3>
		<p>Python呼叫函式時，會將參數複製傳遞到函式進行計算，因此在函式如果改變參數的值，也不會影響原來的變數值，這種方式稱為傳值呼叫(Call by value)。然而若是變數為可變物件(清單、字典)，變數所代表的數值是物件的參照位址，因此傳遞到函式時，即使複製參數，仍然參照到原物件的位址，因此若改變參照物件的內容，原變數所代表的內容，也會變更，這種方式稱為傳址呼叫(Call by address / call by reference)。</p>
		<p>Example 10</p>
		<pre data-enlighter-language="python">
# call by value

string = "Geeks"

def test(string):
	string = "GeeksforGeeks"
	print("Inside Function:", string)

# Driver's code
test(string)
print("Outside Function:", string)
		</pre>

		<p>Output</p>
		<pre data-enlighter-language="python">
Inside Function: GeeksforGeeks
Outside Function: Geeks
		</pre>

		<p>Example 11</p>

		<pre data-enlighter-language="python">
# call by reference

def add_more(list):
	list.append(50)
	print("Inside Function", list)

# Driver's code
mylist = [10,20,30,40]

add_more(mylist)
print("Outside Function:", mylist)
		</pre>

		<p>Output</p>
		<pre data-enlighter-language="python">
Inside Function [10, 20, 30, 40, 50]
Outside Function: [10, 20, 30, 40, 50]
		</pre>

		<h3>函式變數</h3>
		<p>...</p>

		<h3>遞迴函式 Recursion</h3>
		<p>...</p>

		<h3>無名稱函式 anomymous function</h3>
		<ul>
			<li>Python 使用 lambda 來建立無名稱函數</li>
			<li>lambda 由引數(arguments)和主體運算式(expression)構成,中間以冒號&quot;:&quot;隔開，引數可以設定多個，主體運算式只能一項。</li>
			<li>lambda 的主體是一個運算式，而不是一個程式碼區塊，因此僅能在 lambda 運算式中寫入少許語法。</li>
			<li>lambda 函式擁有自己的命名空間，且不能參照自有參數列表之外或全域命名空間裡的參數。</li>
		</ul>
		<p>lambda語法如下：</p>
		<pre data-enlighter-language="python">
lambda arguments : expression
# 或
lambda [arg1 [,arg2,.....argn]]:expression
		</pre>
		<p>應用實例</p>
		<pre data-enlighter-language="python">
#宣告函式
sum = lambda arg1, arg2: arg1 + arg2

#呼叫函式
print( "相加結果:", sum(10,20))
		</pre>
		<p>參考資料</p>
		<ul>
			<li><a href="https://www.learncodewithmike.com/2019/12/python-lambda-functions.html" target="_blank">[Python教學]Python Lambda Function應用技巧分享</a></li>
		</ul>

		<h2>實例練習</h2>
		<ul>
			<li>設計一個函式，接受一個整數參數，回傳判斷其是否為質數。</li>
			<li>設計一個函式，接受三個整數參數，回傳最大的數字。</li>
			<li>設計一個函式，接受三個整數參數，回傳大小居中的數字。</li>
		</ul>

		<h2>參考資料</h2>
		<ul>
			<li><a href="https://www.learncodewithmike.com/2019/12/python-function.html" target="_blank">[Python教學]5個必知的Python Function觀念整理</a></li>
		</ul>
	</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>