
		<script type="text/javascript">
 function changeUserMenu(id){
    var mu = $("#user_title_"+id);
    var qe = $("#user_menu_"+id);
    if(qe.css('display')=='none'){
        mu.removeClass('title1').addClass('title');
        qe.css('display', 'block');
    }else{
        mu.removeClass('title').addClass('title1');
        qe.css('display', 'none');
    }
}
 </script>

 
<div class="user_menus">
	<div class="title" id="user_title_touzi"><span onclick="changeUserMenu('touzi')">&nbsp;</span>����Ͷ����</div>
	<div class="menu">
		<ul id="user_menu_touzi" style="display:block">
			<li><a href="/invest/index.html" target="_blank">��ҪͶ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/succes">�ѳɹ�Ͷ�ʵĽ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/bid">����Ͷ��Ľ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_vouch">�ҵ����Ľ��</a></li>
			<!--
			<li><a href="/index.php?user&q=code/borrow/appraisal">�ҵ�����</a></li>
			<li><a href="/index.php?user&q=code/borrow/attention">�ҹ�ע�Ľ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/tender_reply">�����߻ظ�</a></li>
			-->
		</ul>
	</div>
</div>
 

  
<div class="user_menus">
	<div class="title" id="user_title_jiekuan" ><span onclick="changeUserMenu('jiekuan')">&nbsp;</span>���ǽ����</div>
	<div class="menu">
		<ul id="user_menu_jiekuan">
			<li><a href="borrow/index.html" target="_blank">��Ҫ���</a></li>
			<li><a href="/index.php?user&q=code/borrow/publish">�����б�Ľ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/unpublish">��δ�����Ľ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/repayment">���ڻ���Ľ��</a></li>
			<li><a href="/index.php?user&q=code/borrow/loanermsg">Ͷ���߻ظ�</a></li>
			<li><a href="/index.php?user&q=code/borrow/limitapp">�������</a></li>
		</ul>
	</div>
</div>
 
 
<div class="user_menus">
	<div class="title" id="user_title_zijin" ><span onclick="changeUserMenu('zijin')">&nbsp;</span>�ʽ����</div>
	<div class="menu">
		<ul id="user_menu_zijin">
			<li><a href="/index.php?user&q=code/account">�ʻ�����</a></li>
			<li><a href="/index.php?user&q=code/account/bank">�����ʻ�</a></li>
			<li><a href="/index.php?user&q=code/account/cash_new">�ʻ�����</a></li>
			<li><a href="/index.php?user&q=code/account/recharge_new">�ʻ���ֵ</a></li>
			<li><a href="/index.php?user&q=code/account/cash">���ּ�¼</a></li>
			<li><a href="/index.php?user&q=code/account/recharge">��ֵ��¼</a></li>
			<li><a href="/index.php?user&q=code/account/log">�ʽ��¼</a></li>
		</ul>
	</div>
</div>
 
 <!--
<div class="user_menus">
	<div class="title" id="user_title_kefu" ><span onclick="changeUserMenu('kefu')">&nbsp;</span>�ͻ�����</div>
	<div class="menu">
		<ul id="user_menu_kefu">
			<li><a href="/index.php?user&q=view#info">��Ҫ����</a></li>
			<li><a href="/index.php?user&q=view#info">���߿ͻ�</a></li>
		</ul>
	</div>
</div> 
-->	

<div class="user_menus">
	<div class="title" id="user_title_shezhi" ><span onclick="changeUserMenu('shezhi')">&nbsp;</span>��������</div>
	<div class="menu">
		<ul id="user_menu_shezhi">
			<li><a href="/index.php?user&q=code/userinfo">��д��������</a></li>
			<li><a href="/index.php?user&q=code/user/avatar">����ͷ��</a></li>
			<li><a href="/index.php?user&q=code/user/privacy">������˽</a></li>
			<li><a href="/index.php?user&q=code/message">վ����</a></li>
			<li><a href="/index.php?user&q=code/remind">��������</a></li>
		</ul>
	</div>
</div>

<div class="user_menus">
	<div class="title" id="user_title_renzheng" ><span onclick="changeUserMenu('renzheng')">&nbsp;</span>��֤����</div>
	<div class="menu">
		<ul id="user_menu_renzheng">
			<li><a href="/index.php?user&q=code/user/realname">ʵ����֤</a></li>
			<li><a href="/index.php?user&q=code/user/email_status">������֤</a></li>
			<li><a href="/index.php?user&q=code/user/phone_status">�ֻ���֤</a></li>
			<li><a href="/index.php?user&q=code/user/video_status">��Ƶ��֤</a></li>
			<li><a href="/index.php?user&q=code/user/scene_status">�ֳ���֤</a></li>
			<li><a href="/index.php?user&q=code/attestation">����֤��</a></li>
		</ul>
	</div>
</div>


<div class="user_menus">
	<div class="title" id="user_title_haoyou" ><span onclick="changeUserMenu('haoyou')">&nbsp;</span>���ѹ���</div>
	<div class="menu">
		<ul id="user_menu_haoyou">
			<li><a href="/index.php?user&q=code/user/reginvite">�������</a></li>
			<li><a href="/index.php?user&q=code/user/request">��������</a></li>
			<li><a href="/index.php?user&q=code/user/myfriend">�ҵĺ���</a></li>
			<li><a href="/index.php?user&q=code/user/black">�ҵĺ�����</a></li>
		</ul>
	</div>
</div>



<div class="user_menus">
	<div class="title" id="user_title_safe" ><span onclick="changeUserMenu('safe')">&nbsp;</span>��ȫ����</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&q=code/user/userpwd">�޸ĵ�¼����</a></li>
			<li><a href="/index.php?user&q=code/user/paypwd">�޸�֧������</a></li>
			<li><a href="/index.php?user&q=code/user/protection">���뱣��</a></li>
		</ul>
	</div>
</div>

<? if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']='';if (!isset($this->magic_vars['_G']['user_result']['type_id'])) $this->magic_vars['_G']['user_result']['type_id']=''; ;if (  $this->magic_vars['_G']['user_result']['type_id']==3 ||  $this->magic_vars['_G']['user_result']['type_id']==7): ?>
<div class="user_menus">
	<div class="title" id="user_title_safe" ><span onclick="changeUserMenu('safe')">&nbsp;</span>�ͷ�����</div>
	<div class="menu">
		<ul id="user_menu_safe">
			<li><a href="/index.php?user&q=code/user/myuser">�ҵĿͻ�</a></li>
			<li><a href="/index.php?user&q=code/borrow/myuser">�ͻ����</a></li>
		</ul>
	</div>
</div>
<? endif; ?>
<!--
<div class="user_menus">
	<div class="title" id="user_title_jifen" ><span onclick="changeUserMenu('jifen')">&nbsp;</span>��Ʒ�ۿ�</div>
	<div class="menu">
		<ul id="user_menu_jifen">
			<li><a href="/index.php?user&q=view#info">������Ʒ</a></li>
			<li><a href="/index.php?user&q=view#info">�ۿ��̼�</a></li>
		</ul>
	</div>
</div>
-->
<div class="user_menus">
	<div class="title" id="user_title_shequ" ><span onclick="changeUserMenu('shequ')">&nbsp;</span>��������</div>
	<div class="menu">
		<ul id="user_menu_shequ">
			<li><a href="/index.php?user&q=view#info">�ҵĻ���</a></li>
		</ul>
	</div>
</div>