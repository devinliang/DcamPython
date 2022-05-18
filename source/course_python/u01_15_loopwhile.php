<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>迴圈 loop</h2>

			<p>Python中的迴圈語句有 for 和 while。其他語言中常見的 foreach 和 do-while，在 Python 裡沒有。</p>

			<p>Python 迴圈語句的控制結構圖如下所示：</p>

			<img src="assets/images/While-loop-diagram.png" alt="迴圈語句的控制結構圖" title="迴圈語句的控制結構圖">

			<h2>while 迴圈</h2>

			<p>while 語法形式：</p>

			<pre data-inlightre-language="python">
while 判斷條件：
    敍述...
			</pre>

			<p>注意：冒號和縮排</p>

			<p>以下實例使用了 while 來計算 1 到 100 的總和：</p>
			<pre data-inlightre-language="python">
n = 100
sum = 0
counter = 1
while counter <= n:
	sum = sum + counter
    counter += 1 
print(f"1 到 {n} 之和為 {sum}")
			</pre>

			<p>執行結果如下：</p>
			<pre data-inlightre-language="python">
1 到 100 之和為: 5050
			</pre>

			<h3>無限迴圈</h3>
			<p>通過設置條件運算式永遠不為 false 來實現無限迴圈，實例如下：</p>

			<p>實例</p>
			<pre data-inlightre-language="python">
#!/usr/bin/python3
var = 1
while var == 1 :   # 運算式永遠為 true
    num = int(input("輸入一個數字 :"))
    print ("你輸入的數位是: ", num)
print ("Good bye!")
			</pre>

			<p>執行以上程式，輸出結果如下：</p>
			<pre data-inlightre-language="python">
輸入一個數字  :5
你輸入的數位是:  5
輸入一個數字  :
			</pre>

			<p>使用 CTRL+C 可以退出當前的無限迴圈。</p>

			<p>無限迴圈在伺服器上用戶端的即時請求非常有用。</p>

			<h3>while...else 語句</h3>
			<p> 使用 while … else 語句時， else 必須與 while 配對且縮排位置對齊，在條件陳述式為 false 時，執行 else 的區塊敍述。</p>

			<p>實例</p>
			<pre data-inlightre-language="python">
#!/usr/bin/python3
count = 0
while count < 5:
    print (count, " 小於 5")
    count = count + 1
else:
    print (count, " 大於或等於 5")
			</pre>

			<p>執行以上程式，輸出結果如下：</p>
			<pre data-inlightre-language="python">
0  小於 5
1  小於 5
2  小於 5
3  小於 5
4  小於 5
5  大於或等於 5
			</pre>

			<h3>精簡語法</h3>
			<p>類似 if 語句的精簡語法，如果 while 循環體中只有一條語句，可以將該語句與while寫在同一行中， 如下所示：</p>

			<pre data-inlightre-language="python">
#!/usr/bin/python
flag = 1
while (flag): print ('Welcome to Wenzao!') 
print ("Good bye!")
			</pre>
			<p><strong>注意：</strong>以上的無限迴圈可以使用 CTRL+C 來中斷迴圈。</p>
			<p>執行以上語法，輸出結果如下：</p>
			<pre data-inlightre-language="python">
Welcome to Wenzao!
Welcome to Wenzao!
Welcome to Wenzao!
Welcome to Wenzao!
Welcome to Wenzao!
Welcome to Wenzao!
……
			</pre>

			<h3>練習實例</h3>
			<p>計算 1 加到多少可以大於 1000：</p>
			<pre>
count = 0
sum = 0

while sum <= 10000:
    count += 1
    sum += count
    
print(f"1 加到 {count} 總和為 {sum}")
			</pre>
			<p>輸入數字，直到輸入 0 結束:</p>
			<pre>
var = 1

while var != 0 :
    var = int(input("請輸入數字:"))
else:
    print("結束執行!")
			</pre>

			<p>剪刀石頭布遊戲，下列為比一次的實例：</p>
			<pre>
import random

print("比賽開始")
comp = random.choice(["剪刀","石頭","布"])

play = int(input("\n請問你要出什麼? 1.剪刀 2.石頭 3.布"))
print("電腦出的是:",comp)

if comp=="剪刀":
    if play==1:
        print("平手")
    elif play ==2: 
        print("你贏了")
    else:
        print("你輸了")
elif comp=="石頭":
    if play==1:
        print("你輸了")
    elif play ==2: 
        print("平手")
    else:
        print("你贏了")
else:
    if play==1:
        print("你贏了")
    elif play ==2: 
        print("你輸了")
    else:
        print("平手")
			</pre>

		</div>	<!--end of main-->
	</div>	<!--end of content-->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>