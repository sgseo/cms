<? $this->magic_include(array('file' => "admin_head.html", 'vars' => array()));?>

			 <table  border="0"  cellspacing="1" bgcolor="#CCCCCC" width="100%">
			   <tr>
					<td colspan="4" bgcolor="#dddddd" class="main_td4" >
					<div class="main_title"><h1>品优建站欢迎你!</h1></div>
				</tr>
			   <tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">软件版本信息 </div>
					</td>
				</tr>

				<tr>
					<td class="main_td1" align="right" width="15%">系统名称:</td>
					<td class="main_td1" align="left">帝友借贷平台系统</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">系统版本:</td>
					<td class="main_td1" align="left">dyp2pcms1.0 gbk</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">开发团队:</td>
					<td class="main_td1" align="left">厦门帝网信息科技有限公司</td>
				</tr>
				
			  <tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">系统基本信息</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">php版本:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['phpv'])) $this->magic_vars['_A']['php_info']['phpv'] = ''; echo $this->magic_vars['_A']['php_info']['phpv']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">GD库版本:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_gd'])) $this->magic_vars['_A']['php_info']['sp_gd'] = ''; echo $this->magic_vars['_A']['php_info']['sp_gd']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">是否安全模式:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_safe_mode'])) $this->magic_vars['_A']['php_info']['sp_safe_mode'] = ''; echo $this->magic_vars['_A']['php_info']['sp_safe_mode']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">服务器操作系统:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_os'])) $this->magic_vars['_A']['php_info']['sp_os'] = ''; echo $this->magic_vars['_A']['php_info']['sp_os']; ?></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">服务器IP:</td>
					<td class="main_td1" align="left"><? if (!isset($this->magic_vars['_A']['php_info']['sp_host'])) $this->magic_vars['_A']['php_info']['sp_host'] = ''; echo $this->magic_vars['_A']['php_info']['sp_host']; ?></td>
				</tr>	
				<!--tr>
					<td colspan="2" bgcolor="#ffffff" class="main_td2" >
					<div class="main_title">使用帮助</div>
					</td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">官方网站:</td>
					<td class="main_td1" align="left"><a href="http://www.dyp2p.com/" target="_blank">www.dyp2p.com/a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">官方论坛:</td>
					<td class="main_td1" align="left"><a href="http://www.dyp2p.com/bbs" target="_blank">www.dyp2p.com/bbs/</a></td>
				</tr>
				<tr>
					<td class="main_td1" align="right" width="15%">系统帮助:</td>
					<td class="main_td1" align="left"><a href="http://www.dyp2p.com/" target="_blank">www.dyp2p.com</a></td>
				</tr-->
	      </table>
		
<? $this->magic_include(array('file' => "admin_foot.html", 'vars' => array()));?>