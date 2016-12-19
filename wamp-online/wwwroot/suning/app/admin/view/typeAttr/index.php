<extend file='../master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="{{u('index')}}"><i class="fa fa-cogs"></i>
                类型属性管理</a>
        </li>
        <li class="active">
            <a href="{{u('add',['tid'=>Q('get.tid')])}}">类型属性添加</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="{{u('index')}}">类型属性管理</a></li>
        <li><a href="{{u('add',['tid'=>Q('get.tid')])}}">类型属性添加</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="80">编号</th>
                        <th>属性名称</th>
                        <th>属性值</th>
                        <th>类型</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                    <tr>
                        <td>{{$v['taid']}}</td>
                        <td>{{$v['taname']}}</td>
                        <td>{{$v['tavalue']}}</td>
                        <td>
                            <if value="$v['class'] == 1">
                                规格
                            <else/>
                                属性
                            </if>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{u('edit',[taid=>$v['taid'],'tid'=>Q('get.tid')])}}">编辑</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{u('del',[taid=>$v['taid']])}}">删除</a></li>
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
        {{$page}}
    </div>
</block>