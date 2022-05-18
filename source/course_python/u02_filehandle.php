<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>檔案處理</h2>
			<p>檔案就是存在輔助記憶體的文件，內容為連續的資料。依照內容型態可以分為兩種：</p>
			<ul>
				<li>文字檔：檔案內容由連續文字所組成，可以用純文字編輯器(記事本、notepadd++、VS code、...等)開啟，查看內容。其中包含換行符號，也是一個特殊文字。</li>
				<li>非文字檔：也可以稱為二進位格式檔，檔案內容經過編碼組成，例如:圖片檔、影片檔、聲音檔、執行檔、...等，必須要使用支援格式的軟體才能開啟，查看內容。</li>
			</ul>
			<p>讀寫檔案的步驟：</p>
			<ol>
				<li>開啟檔案</li>
				<li>寫入或讀出資料</li>
				<li>關閉檔案</li>
			</ol>

			<h3>基本語法</h3>
			<p>最基本的檔案讀寫方法只要設定兩個參數:檔名以及模式 mode。其中檔名包括檔案路徑，如果在同一個資料夾當中執行，可以直接寫檔案的名稱，如 "test.txt" 。模式 mode 代表開啟檔案的用途，Python
				提供了數種開啟檔案的模式，包含讀取、寫入、新增...等。</p>
			<pre data-enlighter-language="python">
f = open(檔名, mode)
			</pre>

			<p>例如，讀取一個文字檔案最簡單的方法：</p>
			<pre>
f = open("article.txt", mode="r", encoding="utf-8")
data = f.read()
print(data)
			</pre>

			<p>mode 代表讀寫模式，代碼意義如下:</p>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th nowrap>讀寫代碼</th>
						<th>功能說明</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<p>'r'</p>
						</td>
						<td>
							<p>用唯讀模式開啟檔案。只能夠讀取檔案內容，不能夠修改。檔案必須已經存在，否則會發生錯誤。這是預設模式。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'w'</p>
						</td>
						<td>
							<p>開啟檔案為寫入模式。如果指定的檔案不存在，會建立該檔案。如果檔案已經存在，原來的檔案內容會被清除。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'a'</p>
						</td>
						<td>
							<p>開啟檔案為寫入模式，原來的檔案內容不會被修改，新的內容會附加在檔案最後。如果指定的檔案不存在，會建立該檔案。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'x'</p>
						</td>
						<td>
							<p>建立新檔，如果檔案已經存在，會發生錯誤。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'+'</p>
						</td>
						<td>
							<p>可以對檔案進行讀和寫，而且可以修改原來檔案的內容。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'t'</p>
						</td>
						<td>
							<p>用文字模式讀取和寫入檔案資料，這是預設模式。</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>'b'</p>
						</td>
						<td>
							<p>用二進位模式讀取和寫入檔案資料。</p>
						</td>
					</tr>
				</tbody>
			</table>


			<h3>詳細語法</h3>
			<p>開啟檔案的完整語法，有許多相關參數可以設定，大部份都有預設值，在特定讀取需求時，可以調整修改。</p>
			<pre data-enlighter-language="python">
f =	open(file, mode='r', buffering=-1, encoding=None, errors=None, newline=None, closefd=True, opener=None)
</pre>

			<p>參數說明</p>
			<ul>
				<li>file: 檔案路徑（相對或者絕對路徑）。</li>
				<li>mode: 模式</li>
				<li>buffering: 設置緩衝</li>
				<li>encoding: 一般使用 utf8</li>
				<li>errors: 錯誤級別</li>
				<li>newline: 區分分行符號</li>
				<li>closefd: 傳入的file參數類型</li>
				<li>opener: 設置自訂開啟器，開啟器的返回值必須是一個打開的檔案描述。</li>
			</ul>

			<h3>關閉檔案</h3>
			<p>以上使用open開啟檔案時，必須在使用後關閉檔案，以避免消耗系統資源。</p>
			<pre data-enlighter-language="python">
file.close()
</pre>
			<h3>使用 with 語法</h3>
			<p>使用基本語法讀寫檔案時，為了避免錯誤異常狀況中斷程式，必須配合try...except...語法處理，以確保程式會呼叫 close 方法。with 語法可以精簡檔案的開啟，並且檔案若發生異常或跳出區塊時也會自動關閉，不必撰寫 close()，在使用上相較於基本語法方便而安全。</p>
			<p>語法結構如下:</p>
			<pre>
with open(filename, mode) as file:
	...
			</pre>

			<h3>讀取文字檔</h3>
			<p>Python 讀取文字檔可以使用三個方法:</p>
			<ul>
				<li>
					<file>.read()&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; # 讀取全部資料，結果為一個長字串
				</li>
				<li>
					<file>.readline()&nbsp; # 讀取一行資料，結果為一個字串
				</li>
				<li>
					<file>.readlines() # 讀取全部資料，結果為一個串列，每個元素都是一行資料
				</li>
			</ul>

			<p>方法一：一次讀取全部檔案內容，結果為一個字串</p>
			<pre>
with open('hello.txt', 'r') as infile:
    data = infile.read()
    print(type(data))
    print(data)
			</pre>

			<p>方法二：一次讀取一行文字</p>
			<pre>
with open('hello.txt', 'r') as infile:
    while True:
        line = infile.readline()     # 一次讀一行資料
        if not line:                 # 所有資料讀取完畢
            break
        print(line, end='')          # end='': 不要自動加斷行
			</pre>

			<p>方法三：一次讀取全部檔案內容，結果為一個文字串列</p>
			<pre>
with open('hello.txt', 'r') as infile:
    for line in infile.readlines():    # 一次讀取所有資料，再一行一行處理
        print(line, end='')
			</pre>

			<h3>寫入文字檔</h3>
			<p>開啟檔案時，指定模式 mode 為 w，並使用 write 寫入內容。以下實例為讀取A檔案後，加上額外一行，寫入B檔案。</p>
			<pre>
with open('hello.txt', 'r') as infile:
    data = infile.read()

with open('output.txt', 'w') as outfile:
    outfile.write('Add one more line.\n')
    outfile.write(data)
			</pre>

			<h2>相關模組</h2>
			<p>Python除了內建語法支援檔案外，其他與檔案使用的相關模組主要有以下：</p>
			<ul>
				<li>OS模組
					<ul>
						<li>os.getcwd() 獲取當前指令碼的工作路徑</li>
						<li>os.listdir() 返回指定目錄下的所有檔案和目錄名</li>
						<li>os.remove(filepath) 刪除一個檔案</li>
						<li>os.removedirs(path) 刪除多個目錄</li>
						<li>os.path.isfile(filepath) 檢驗給出的路徑是否是一個檔案</li>
						<li>os.path.isdir(filepath) 檢驗給出的路徑是否是一個目錄</li>
						<li>os.path.isabs() 判斷是否是一個目錄</li>
						<li>os.path.exists(path) 檢測是否有該路徑</li>
						<li>os.path.split(path) 分離path的目錄名和檔名</li>
						<li>os.path.splitext() 分離副檔名</li>
						<li>os.path.dirname(path) 獲取路徑名</li>
						<li>os.path.basename(path) 獲取檔名</li>
						<li>os.getenv() 讀取環境變數</li>
						<li>os.putenv() 設定環境變數</li>
						<li>os.linesep 給出當前平臺使用的行終止符，win：\r\n linux:\n mac:\r</li>
						<li>os.name 當前使用的平臺 win:nt linux/unix:posix</li>
						<li>os.rename(old,new) 重新命名檔案或目錄</li>
						<li>os.makedirs(path) 建立多級目錄</li>
						<li>os.makedir(path) 建立單級目錄</li>
						<li>os.stat(file) 獲取檔案屬性</li>
						<li>os.chmod(file) 修改檔案許可權與時間戳</li>
						<li>os.path.getsize(filename) 獲取檔案大小</li>
						<li>os.rmdir(dir) 刪除空目錄</li>
						<li>os.rmtree(dir) 刪除目錄</li>
					</ul>
				</li>
				<li>shutil模組
					<ul>
						<li>shutil.copytree(olddir,newdir) 複製資料夾</li>
						<li>shutil.copyfile(oldfile,newfile) 複製檔案</li>
						<li>shutil.move(oldpos,newpos) 移動檔案</li>
					</ul>
				</li>
			</ul>

			<h2>參考網站</h2>
			<ul>
				<li>python - <a href="https://www.python.org/" target="_blank">https://www.python.org/</a></li>
				<li>anaconda - <a href="https://www.anaconda.com/" target="_blank">https://www.anaconda.com/</a></li>
			</ul>

		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>