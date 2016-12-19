<extend file='../master'/>
<block name="content">
    <style>
        th{
            text-align: center;
        }
    </style>
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="{{u('index')}}"><i class="fa fa-cogs"></i>
                    订单管理</a>
        </li>
        <li class="active">
            <a href="{{u('index')}}">订单列表</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
    </ul>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="100">序号</th>                   	
                        <th width="200">订单号</th>
						<th width="100">下单时间</th>                        
                        <th width="100">总价</th>
                        <th width="100">状态</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                        <tr style="text-align: center">
                        	<td>{{$v['oid']}}</td>
                            <td>{{$v['number']}}</td> 
                            <td>{{date('Y-m-s,H:m:s',$v['time'])}}</td>                                                                                 
                            <td width="100">{{$v['total']}}.00</td>                            
                            <td width="100">
                            <select class="js-example-basic-single form-control" name="status" oid="{{$v['oid']}}">                                
                                <option value="未付款" <if value='$v["status"] == "未付款"'>selected</if> >未付款</option>
                                <option value="待发货" <if value='$v["status"] == "待发货"'>selected</if> >待发货</option>
                                <option value="已发货" <if value='$v["status"] == "已发货"'>selected</if> >已发货</option>
                                <option value="已完成" <if value='$v["status"] == "已完成"'>selected</if> >已完成</option>
                                <option value="退货中" <if value='$v["status"] == "退货中"'>selected</if> >退货中</option>                            
                            </select>
                            </td>                           
                            <td>
                                <div class="btn-group" width="200">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{u('edit',['glid'=>$v['glid'],'gid'=>Q('get.gid')])}}">编辑</a></li>
                                        <li><a href="{{u('del',['glid'=>$v['glid'],'gid'=>Q('get.gid')])}}">删除</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </foreach>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="pagination pagination-sm pull-right">
    	{{$page}}
    </div>
</block>
<script >
	$('select[name=status]').change(function(){
        //:selected抓到选中元素
        var status = $(this).find(':selected').val();
        var oid = $(this).attr('oid');					
        $.post("{{u('chenged')}}",{oid:oid,status:status},function(res){
        	alert('状态修改为 ['+status+'] 成功');
        },'json');
    })
</script>