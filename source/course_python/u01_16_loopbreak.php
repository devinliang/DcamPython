<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>Python 改變迴圈控制</h2>

			<p>在使用迴圈時，需要在提早結束迴圈的進行或是強制結束迴圈。 Python 提供 break、continue、pass 語句來改變正常迴圈的程序。
				先來簡單敘述一下 Python 中 break、continue、pass 的區別： </p>
			<ul>
				<li>break：強制跳出 ❮整個❯ 迴圈</li>
				<li>continue：強制跳出 ❮本次❯ 迴圈，繼續進入下一圈</li>
				<li>pass：不做任何事情，所有的程式都將繼續</li>
			</ul>

			<h3>Break</h3>
			<p>break：強制跳出 ❮整個❯ 迴圈</p>

			<pre data-enlighter-language="python">
for i in "Python":
    if i == "h":
        break
    print(i)
print("Outside for loop")

# 執行結果
# P
# y
# t
# Outside for loop
			</pre>

			<h3>Continue</h3>
			<p>continue：強制跳出 ❮本次❯ 迴圈，繼續進入下一圈</>
			<pre data-enlighter-language="python">
for i in "Python":
	if i == "h":
		continue
	print(i)
print("Outside for loop")

# 執行結果
# P
# y
# t
# o
# n
# Outside for loop
			</pre>

			<h3>Pass</h3>
			<p>pass：不做任何事情，所有的程式都將繼續</p>
			<p>使用 pass 語句執行程式後，會發現什麼事也沒做，完全不起任何作用，只是一個空運算而已，那問題就來了：如果什麼事都不做，就不用寫拉，那 pass 語句是要做什麼？</p>
			<p>其實，有時候是有需要使用的情況，例如：定義一個函數，但函數還沒實作出來之前，空著內容又會產生語法錯，這時就會使用 pass 來替代，當作是暫時執行的語法，等待之後完成。</p>
			<pre data-enlighter-language="python">
def myfunction():
    pass  #提醒之後要完成
			</pre>

			<h3>實例應用</h3>
			<ul>
				<li>給予一個整數，判斷其是否為質數</li>
				<li>計算1到100的總和，去掉3和7的倍數</li>
			</ul>




		</div>
		<!--end of main-->
	</div>
	<!--end of content-->
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>