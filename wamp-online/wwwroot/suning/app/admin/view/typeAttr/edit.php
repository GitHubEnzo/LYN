<extend file='../master'/>
<block name="content">
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">类型属性管理</a></li>
        <li class="active"><a href="{{u('edit')}}">编辑属性类型</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">类型属性管理管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">类型属性名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="newname"  class="form-control" value="{{$olddata['taname']}}">
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">类型属性值</label>
                    <div class="col-sm-9">
                        <input type="text" name="newvalue"  class="form-control" value="{{$olddata['tavalue']}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">类型</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" value="1" name="newclass" <if value="$olddata['class'] == 1">checked</if>><i></i> 规格
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="2" name="newclass" <if value="$olddata['class'] == 2">checked</if> ><i></i> 属性
                    </label>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>

