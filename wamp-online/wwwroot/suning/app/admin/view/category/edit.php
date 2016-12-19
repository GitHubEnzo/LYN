<extend file='../master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="{{u('index')}}"><i class="fa fa-cogs"></i>
                分类管理</a>
        </li>
        <li class="active">
            <a href="{{u('edit')}}">添加编辑</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li><a href="{{u('index')}}">分类首页</a></li>
        <li class="active"><a href="{{u('edit')}}">编辑分类</a></li>
    </ul>
    <form class="form-horizontal" id="form" action="" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">分类管理</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类名称</label>
                    <div class="col-sm-9">
                        <input type="text" name="newcname"  class="form-control" value="{{$olddata['cname']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属分类</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="pid">
                            <option value="0">顶级分类</option>
                            <foreach from="$cateData" key="$k" value="$v">
                            <option value="{{$v['cid']}}" <if value=" $v['cid']==$olddata['pid']">selected</if>>{{$v['_cname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">所属类型</label>
                    <div class="col-sm-9">
                        <select class="js-example-basic-single form-control" name="tid">
                            <option value="0">顶级类型</option>

                            <foreach from="$typedata" key="$k" value="$v">
                            <option value="{{$v['tid']}}" <if value="$v['tid'] ==Q('get.tid')">selected</if>>{{$v['tname']}}</option>
                            </foreach>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">分类排序</label>
                    <div class="col-sm-9">
                        <input type="number" name="newsort"  class="form-control" value="{{$olddata['sort']}}">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
</block>
