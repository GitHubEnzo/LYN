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
                货品管理</a>
        </li>
        <li class="active">
            <a href="{{u('index')}}">货品列表</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('index')}}">货品列表</a></li>
        <li><a href="{{u('add',['gid'=>Q('get.gid')])}}">货品添加</a></li>
    </ul>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="100">货品ID</th>
                        <foreach from="$taname" key="$k" value="$v">
                             <th width="200">{{$v}}</th>
                        </foreach>
                        <th width="100">库存</th>
                        <th width="100">货号</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                        <tr style="text-align: center">
                            <td>{{$v['glid']}}</td>
                            <foreach from="$v['combine']" key="$kk" value="$vv">
                                <td width="200">{{$vv}}</td>
                            </foreach>
                            <td>{{$v['inventory']}}</td>
                            <td>{{$v['number']}}</td>
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
    </div>
</block>