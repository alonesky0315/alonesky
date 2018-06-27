<script type="text/javascript">
	$(document).ready(function (){
		$(".tj").click(function (){
			var id = $(this).parent().first().children().val();//获取该属性父级的子类中第一个input的值
				//alert(id);return false;
			$.post("__APP__/Admin/Article/ajax_tj",{'id':id},function (data){
				if('1'==data){
					alert("成功！");
					window.location.reload();
				}else{
					alert("失败！");
				}
			})
		}),
		$(".ntj").click(function (){
			var id = $(this).parent().first().children().val();//获取该属性父级的子类中第一个input的值
				//alert(id);return false;
			$.post("__APP__/Admin/Article/ajax_ntj",{'id':id},function (data){
				if('1'==data){
					alert("取消成功！");
					window.location.reload();
				}else{
					alert("取消失败！");
				}
			})
		})
	});
</script>


<if condition="$vo.home_tj eq '0'">
	 <a href="javascript:;"  class="tj">推荐</a> 
<else />
	<a href="javascript:;"  class="ntj">取消推荐</a>
</if>
<?

public function ajax_tj(){
    //接收会员id
    $data['id']   = $_POST['id'];
    $data['home_tj']=1;
    $val = M("Article")->save($data);
    if(!empty($val)){
        echo "1";	
    }else{
        echo "2";	
    }
}
public function ajax_ntj(){
    //接收会员id
    $data['id']   = $_POST['id'];
    $data['home_tj']=0;
    $val = M("Article")->save($data);
    if(!empty($val)){
        echo "1";	
    }else{
        echo "2";	
    }
}





