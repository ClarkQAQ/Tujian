$(function(){
	$('.hislist ').delegate('input:text','click',function(){
		$(this).select();
	});
	
	var H=$('.hislist');
	var hnum=0;
		
	for(var k in localStorage){
		if(k.indexOf("TTK") != 0) continue; 
        var v=localStorage[k];
        var str='<li id="'+k+'"><div class="img"><a href="'+v+'" target="_blank"><img src="'+v+'"></a></div><input class="hisinput" type="text" value="'+v+'"><button class="btnCopy" data-clip="'+v+'">复制</button><button class="reMoveBtn" onclick="reMove(\''+k+'\')">移除</button></li>';  
		H.prepend(str);
		hnum++;
    }
	if(hnum<1){
		$('.clearAll').hide();
		$('.nopic').show();
	}
	
	$('.hislist li').on('mouseover','.btnCopy',function(){
		if($(this).parent().find('.zclip').html()==undefined){
			$(this).zclip({
				path : siteurl+'static/ZeroClipboard.swf',
				beforeCopy : function(){
					$(this).css('background-color','#D8D8D8');
				},
				copy : function(){
					return $(this).attr('data-clip');
				},
				afterCopy:function(){
					layer.msg('复制成功',{offset: 0});
				}
			});
		}
	});
})

function clearHistory(){
	layer.msg('确定清除所有图片吗？', {
		time: 0 //不自动关闭
		,offset:0
		,btn: ['是的', '再想想']
		,yes: function(index){
			layer.close(index);
			if (localStorage) {
				for(var k in localStorage){
					if(k.indexOf("TTK") != 0) continue;
					localStorage.removeItem(k); 
				}
				// localStorage.clear(); 
			} else { 
				var c=document.cookie;
				for(var k in c){
					if(k.indexOf("TTK") != 0) continue;
					setCookie(k, "", -1);
				}
			}
			$('.hislist li').hide(200);
			$('.nopic').show(0);
			layer.msg('清除成功',{offset: 0});
		}
		
	});
	
}

function reMove(key){
	
	if (localStorage) { 
		localStorage.removeItem(key); 
	} else { 
		setCookie(key, "", -1);
	}
	$('#'+key).hide(200);
	layer.msg('移除成功',{offset: 0});
}
