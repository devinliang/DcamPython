<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>圖形化使用介面</h2>
			<p>GUI(Graphic User Interface) – 圖形化使用介面，通常是指視窗操作畫面。 Python 開發 GUI 有兩個套件較常被使用：Tkinter 與 PyQt。兩者的差別為：PyQt為第三方套件，功能較多；Tkinter為 Python 內建的 GUI 套件，功能簡單但效能好。本單元將以 tkinter 為主，介紹如何設計桌面應用程式。</p>

			<h2>Tkinter 套件</h2>
			<p>Tkinter 套件是 Python 內建的標準 GUI 設計介面，使用 Tcl/Tk GUI 工具程式，可以用來開發桌面應用程式。</p>
			<p>Tkinter 包括了以下幾個主要的模組(Moudle)：</p>
			<ul>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.html">tkinter</a></span>:主要模組</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.colorchooser.html">tkinter.colorchooser</a></span>:提供選擇顏色的對話框</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/dialog.html">tkinter.smpledialog</a></span>:提供基本對話視窗</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/dialog.html">tkinter.commondialog</a></span>:提供一般對話視窗</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/dialog.html">tkinter.filedialog</a></span>:提供檔案開啟或存檔的對話視窗</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.font.html">tkinter.font</a></span>:處理字型</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.messagebox.html">tkinter.messagebox</a></span>:訊息對話視窗</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.scrolledtext.html">tkinter.scrolledtext</a></span>:具有垂直捲軸的文字元件</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/tkinter.ttk.html">tkinter.ttk</a></span>: Themed widget set 提供進階元件</li>
				<li><span class="keyitem"><a href="https://docs.python.org/3/library/turtle.html#module-turtle">turtle</a></span>:Turtle graphics 繪圖模組</li>

			</ul>

			<h3>檢查 tkinter</h3>
			<p>開始使用 tkinter 之前，要確認是否可以使用 tkinter 模組，可以在系統的命令列中執行以下指令，若已經安裝好的話，會出現一個簡單的 Tk 示範視窗，並且顯示 tkinter 的版本：</p>
			<pre data-enlighter-language="python">
# 測試 Python 的 tkinter 模組
>>> python -m tkinter
</pre>
			<div>
				<img src="./assets/images/tkinter001.png" alt="tkinter window"></div>

			<h3>建立步驟</h3>
			<p>撰寫 Tkinter GUI 程式主要有以下三個步驟：</p>
			<ol>
				<li>建立主視窗：設定視窗大小、位置和視窗名稱等</li>
				<li>放入元件：將元件（如：按鈕、文字方塊、選單等）放入視窗中</li>
				<li>實作事件處理函式：設計使用者互動時的事件處理函式（event handler）。例如：當使用者點擊某個按鈕時要觸發什麼行為。</li>
			</ol>

			<h3>基本視窗範例</h3>
			<p>首先，建構一個最基本的視窗範例，如下：</p>
			<pre data-enlighter-language="python">
# 引入 tkinter 模組
import tkinter as tk

# 建立主視窗 Frame
win = tk.Tk()

# 執行主程式
win.mainloop()
		</pre>
			<ul>
				<li>設定標題
					<p>win.title(“我的視窗標題”)</p>
				</li>
				<li>設定視窗大小
					<p>win.geometry(‘500x300’)</p>
				</li>
				<li>設定視窗大小與位置
					<p>win.geometry(‘500x300+250+150’)</p>
				</li>
			</ul>
			<h4>實做練習</h4>
			<p>建立一個高400寬600的視窗，標題顯示你的學號姓名。</p>

			<h2>視窗元件(widget)</h2>

			<p>視窗的主要組成元素稱為元件(widget)，例如:選單、按鈕...等。tkinter 常用的元件(widget)如下：</p>


			<p>參考：<a href="https://tkdocs.com/tutorial/widgets.html">Basic Widgets</a>、<a href="https://tkdocs.com/tutorial/morewidgets.html">More Widgets</a></p>


			<ul>
				<li>容器框架 <a href="https://tkdocs.com/tutorial/widgets.html#frame">frame</a></li>

				<li>文字標籤 <a href="https://tkdocs.com/tutorial/widgets.html#label">label</a>
				<pre>
lb_1 = tk.Label(window, text='Hello World', bg='yellow', fg='#263238', font=('Arial', 12))
lb_1.pack()
				</pre>
				</li>

				<li>按鈕 <a href="https://tkdocs.com/tutorial/widgets.html#button">Button</a></li>

				<li>核取按鈕 <a href="https://tkdocs.com/tutorial/widgets.html#checkbutton">Checkbutton</a></li>

				<li>單選按鈕 <a href="https://tkdocs.com/tutorial/widgets.html#radiobutton">Radiobutton</a></li>

				<li>文字輸入欄位 <a href="https://tkdocs.com/tutorial/widgets.html#entry">Entry</a></li>

				<li>組合選項欄位 <a href="https://tkdocs.com/tutorial/widgets.html#combobox">Combobox</a></li>

				<li>列表選項 <a href="https://tkdocs.com/tutorial/morewidgets.html#listbox">Listbox</a></li>
				<li>捲軸 <a href="https://tkdocs.com/tutorial/morewidgets.html#scrollbar">Scrollbar</a></li>
				<li>區域文字欄位 <a href="https://tkdocs.com/tutorial/morewidgets.html#text">text</a></li>
				<li>尺規量表 <a href="https://tkdocs.com/tutorial/morewidgets.html#scale">Scale</a></li>
				<li>數字捲軸 <a href="https://tkdocs.com/tutorial/morewidgets.html#text">Spinbox</a></li>
				<li>進度條<a href="https://tkdocs.com/tutorial/morewidgets.html#progressbar">Progressbar</a></li>

			</ul>


			<h2>佈局管理</h2>
			<p>佈局管理(layout managers 或 geometry managers)為設定視窗裡面的元件擺放方式，有以下功能：</p>
			<ul>
				<li>將元件放置到視窗上,包括元件的位置及大小</li>
				<li>將元件註冊到視窗系統中</li>
				<li>管理元件在螢幕上的顯示</li>
			</ul>

			<p>tkinter 有以下三種佈局管理方式:</p>
			<ul>
				<li>pack - 流水式排版</li>
				<li>place - 指定絕對或相對座標排版</li>
				<li>grid - 網格式排版</li>
			</ul>

			<p>這三種佈局管理在同一個主視窗裡，不可以混用! </p>

			<h3>Pack 佈局管理</h3>

			<p>pack 是三種佈局管理中最常用的. 另外兩種佈局需要精確指定元件具體的顯示位置, 而 pack 佈局可以指定相對位置, 精確的位置會由 pack 系統自動完成。 這也使得 pack 佈局沒有另外兩種佈局方式靈活，所以 pack 是簡單應用的首選佈局, 比如只是想要將元件水準或垂直的逐個放在一起。</p>

			<p>pack() 方法的參數全部都是可有可無的, 沒有傳入參數時, 加入版面的元件以預設值排版, 常用參數如下:</p>

			<table class="table table-striped table-hover">
				<tbody>
					<tr>
						<td>
							<p>參數</p>
						</td>
						<td>
							<p>說明</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>side</p>
						</td>
						<td>
							<p>排列方向 : TOP (預設), BOTTOM, LEFT, RIGHT</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>fill</p>
						</td>
						<td>
							<p>填滿所分配空間之方向 : NONE (預設), X, Y, BOTH</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>expand</p>
						</td>
						<td>
							<p>填滿容器 : True/False (預設)</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>padx/pady</p>
						</td>
						<td>
							<p>元件邊框與容器之距離 (px,預設=0)</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>ipadx/ipady</p>
						</td>
						<td>
							<p>元件內容 (文字/圖像) 與其邊框之距離 (px,預設=0)</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>anchor</p>
						</td>
						<td>
							<p>元件在容器中的錨定位置 : e, w, s, n, center (預設), ne, se, sw, nw</p>
						</td>
					</tr>
				</tbody>
			</table>


			<h3>Place 佈局管理</h3>
			<p>Place 佈局管理可以明確指定元件的絕對位置或相對於其他元件的位置. 要使用 Place 佈局, 呼叫元件的 place() 方法就可以了。</p>
			<p>此排版法是指定以父容器左上角為原點之座標位置來精確放置元件, 但使用的機會較少, 因為只要某個元件的位置更改, 整個版面中的元件可能都要隨之調整, 通常是用來製作客製化的版面管理員之用。使用語法如下：</p>
			<pre>
元件.place([options])
</pre>

			<p>place 函式的常用參數如下 :</>
				<table class="table table-hover table-striped">
					<tbody>
						<tr>
							<td>
								<p>place() 參數</p>
							</td>
							<td>
								<p>說明</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>x</p>
							</td>
							<td>
								<p>相對於視窗左上角之 x 座標</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>y</p>
							</td>
							<td>
								<p>相對於視窗左上角之 y 座標</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>width</p>
							</td>
							<td>
								<p>指定元件寬度 (px)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>height</p>
							</td>
							<td>
								<p>指定元件高度 (px)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>relx</p>
							</td>
							<td>
								<p>相對於父容器寬度之比率 x 座標 (0~1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>rely</p>
							</td>
							<td>
								<p>相對於父容器高度之比率 y 座標 (0~1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>relwidth</p>
							</td>
							<td>
								<p>相對於父容器寬度之比率 (0~1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>relheight</p>
							</td>
							<td>
								<p>相對於父容器高度之比率(0~1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>anchor</p>
							</td>
							<td>
								<p>元件在容器中的錨定位置 : E, W, S, N, CENTER (預設), NE, SE, SW, NW</p>
							</td>
						</tr>
					</tbody>
				</table>
				<p>其中 (x, y) 或 (relx, rely) 是必須傳入之定位參數, 雖然沒有傳入任何參數也不會出現錯誤訊息, 但因為缺乏定位資訊, 因此元件也不會出現在視窗上. place() 的詳細介面可輸入下列指令查詢 :</p>
				<pre>
	>>> import tkinter
	>>> help(tkinter.Place)
</pre>
				<p>place() 提供兩種定位法 :</p>
				<ol>
					<li>絕對定位<p>以(x, y) 參數指定絕對座標，以 (width, height) 指定絕對大小</p></li>
					<li>相對定位<p>
					以 (relx, rely) 參數指定相對座標，
					以 (relwidth, relheight) 參數指定相對大小
				</p></li>
				</ol>

				<p>兩者的差別是, 在視窗縮放時, 以絕對定位法放置的元件不會改變其位置與大小; 而以相對定位法放置的元件則會依照相對比率隨之縮放。</p>

				<h3>Grid 佈局管理</h3>
				<p>Grid 佈局管理方式是為各個元件指定行號和列號的過程. 不需要為每個格子指定大小, Grid 佈局會自動設置一個合適的大小。 Grid 排版是最容易理解也最好用版面管理員, 適合用來處理較複雜的版面,
					它使用類似網頁表格或二維陣列的索引方式來放置元件, 每個網格只能放置一個元件, 但多個網格可用 rowspan 與 columnspan 參數合併鄰近的多個網格來放置一個元件, 其介面如下 :</p>
				<pre>
元件.grid([options])
</pre>
				<p>常用參數如下表 :</p>

				<table class="table table-striped table-hover">
					<tbody>
						<tr>
							<td>
								<p>&nbsp;grid() 參數</p>
							</td>
							<td>
								<p>&nbsp;說明</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;row</p>
							</td>
							<td>
								<p>&nbsp;列索引</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;column</p>
							</td>
							<td>
								<p>&nbsp;行索引</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;rowspan</p>
							</td>
							<td>
								<p>&nbsp;儲存格合併列數</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;columnspan</p>
							</td>
							<td>
								<p>&nbsp;儲存格合併行數</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;padx/pady</p>
							</td>
							<td>
								<p>&nbsp;元件邊框與容器之距離 (px,&nbsp;預設=1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;ipadx/ipady</p>
							</td>
							<td>
								<p>&nbsp;元件內容 (文字/圖像) 與其邊框之距離 (px,&nbsp;預設=1)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>&nbsp;sticky</p>
							</td>
							<td>
								<p>&nbsp;元件於網格中的錨定位置 : E, W, S, N, CENTER (預設)</p>
							</td>
						</tr>
					</tbody>
				</table>


				<p>其中 row 與 column 都是 0 起始的索引. 一般來說，元件呼叫 grid() 將自己放進容器時應該傳入 row 與 column 參數指定網格索引位置, 否則預設是以 1 行網格來擺放元件. 參數 padx/pady/ipadx/ipady 用法與上面 pack() 的一樣。</p>

				<p>grid() 的詳細參數可輸入下列指令查詢 :</>
					<pre>
>>> import tkinter
>>> help(tkinter.Grid)
	</pre>


					<h2>參考網站</h2>
					<ul>
						<li>TkDocs - <a
								href="https://tkdocs.com/tutorial/index.html">https://tkdocs.com/tutorial/index.html</a>
						</li>
						<li>tkinter - <a href="https://docs.python.org/3/library/tkinter.html">Python interface to
								Tcl/Tk</a>
						</li>
						<li>TutorialsTeacher - <a
								href="https://www.tutorialsteacher.com/python/create-gui-using-tkinter-python">Create UI
								in
								Python-Tkinter</a></li>
						<li>DesignSpark - <a
								href="https://www.rs-online.com/designspark/python-tkinter-cn">為應用程式設計圖形化介面，使用Python
								Tkinter
								模組</a></li>
					</ul>

		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>