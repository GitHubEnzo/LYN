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
                分类管理</a>
        </li>
        <li class="active">
            <a href="{{u('add')}}">添加分类</a>
        </li>
        <li class="active">
            aaa
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('index')}}">分类管理</a></li>
        <li><a href="{{u('add')}}">添加分类</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">编号</th>
                        <th style="text-align: left">分类名称</th>
                        <th width="100">显示顺序</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                        <tr style="text-align: center">
                            <td>{{$v['cid']}}</td>
                            <td width="80" style="text-align: left">
                                {{$v['_cname']}}
                            </td>
                            <td>
                                <input type="text"  class="form-control" name="" value="{{$v['sort']}}">
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{u('addson',['cid'=>$v['cid']])}}">添加子集分类</a></li>
                                        <li><a href="{{u('edit',['cid'=>$v['cid'],'tid'=>$v['tid']])}}">编辑</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{u('del',['cid'=>$v['cid']])}}">删除</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </foreach>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    <div class="pagination pagination-sm pull-right">
    </div>
</block>