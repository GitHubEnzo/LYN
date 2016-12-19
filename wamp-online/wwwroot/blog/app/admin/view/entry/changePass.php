<extend file='../master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="javascript:;"><i class="fa fa-cogs"></i>
                密码管理</a>
        </li>
        <li class="active">
            <a href="javascript:;">修改密码</a>
        </li>
    </ol>
    <form onsubmit="return changePass()" class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">修改密码</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">原始密码</label>
                    <div class="col-sm-9">
                        <input required type="text" name="password"  class="form-control" placeholder="请填写原始密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">新密码</label>
                    <div class="col-sm-9">
                        <input required type="text" name="new_password"  class="form-control" placeholder="请填写新密码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">确认密码</label>
                    <div class="col-sm-9">
                        <input required type="text" name="confirm_password"  class="form-control" placeholder="请填写确认密码">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>
<script>
    function changePass(){
        var data = $('#form').serialize();
        //执行的方法，发送数据，返回结果，返回的数据类型
        //原生写法
        $.post("{{u('entry.changePass')}}",data,function(res){
            if(res.valid){
                util.message(res.message,'','success');
            }else{
                util.message(res.message,'','error');
            }
        },'json');
        return false;
    }
</script>

