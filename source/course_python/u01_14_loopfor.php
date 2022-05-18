<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>迴圈 loop</h2>

			<p>迴圈就是指重複執行同一區段的程式。</p>
			<p>程式語言中，常用的迴圈有以下兩種主類型：</p>

			<ul>
				<li>
					<p>for:適用於已知次數的重複動作。例如:計算1到100的總和, 計算全班每個人的成績...。</p>
				</li>
				<li>
					<p>while:適用於重複的次數未知或無法事先估計。例如:計算1+2+3+...到哪個數字會大於1000, 計算猜測數字到正確為止...。</p>
				</li>
			</ul>

			<h2>FOR</h2>

			<pre>
for &lt;item&gt; in &lt;sequence&gt;:
    &lt;statement 1&gt;
	&lt;statement 2&gt;
	...
			</pre>


			<p>在語法中，in 的後方就是for-loop要讀取的目標物，這個目標物為 Iterable (可疊代的)物件，一次讀取一個元素，然後用 item (自訂變數名稱) 來接收每次讀取到的元素，執行區塊中的運算。注意for-loop的結尾需加上冒號( : )及區塊中的運算式要有相同的縮排</p>

			<p>實例</p>

			<pre>
names = ["John", "Ann", "Robert", "Jeff"]

for x in names:
    print("hello", x)
</pre>
			<p>結果</p>
			<pre>
hello John
hello Ann
hello Robert
hello Jeff
</pre>

			<h3>for...else 語句</h3>
			<p> 使用 for … else 語句時， else 必須與 for 配對且縮排位置對齊，在for循環完成後，執行 else 的區塊敍述。若 for 迴圈中途以 break 跳出，else的敍述也不會執行。</p>
<pre>
for i in range(5):
	print(i)
else:
	print("Loop complete~!")

# 執行結果
# 0
# 1
# 2
# 3
# 4
# 5
# Loop complete~!
</pre>

<pre>
for i in range(1,5):
    print(i)
    if ( i%3 == 0): break;
else:
    print("Loop complete~!")

# 執行結果
# 0
# 1
# 2
# 3
</pre>

			<h3>實例練習</h3>

			<ul>
				<li>列出 1 到 10 數字</li>
				<li>計算 1 到 10 總和</li>
				<li>給予一個整數,找出其所有因數</li>
				<li>給予一個整數,判斷是否為質數</li>
				<li>列出九九乘法表</li>
				<li>找出三位數的水仙花數（Narcissistic number）
					<ul>
						<li><a href="https://www.itread01.com/content/1546767137.html"
								rel="nofollow">https://www.itread01.com/content/1546767137.html</a></li>
						<li><a href="http://goodprimes.eu5.org/NHNarcissistic1.htm"
								rel="nofollow">http://goodprimes.eu5.org/NHNarcissistic1.htm</a></li>
						<li><a href="https://www.chainnews.com/zh-hant/articles/113771830224.htm"
								rel="nofollow">https://www.chainnews.com/zh-hant/articles/113771830224.htm</a></li>
					</ul>
				</li>
			</ul>
			</article>
		</div>

	</div>
	</div>
	<!--end of main-->
	</div>
	<!--end of content-->
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>