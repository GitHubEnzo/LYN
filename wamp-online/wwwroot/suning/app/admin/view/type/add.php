<extend file='../master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">类型管理</a></li>
        <li class="active"><a href="{{u('add')}}">添加类型</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">类型管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">类型名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="tname" class="form-control" placeholder="请填写类型名称">
                    </div>
                </div>

            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>

