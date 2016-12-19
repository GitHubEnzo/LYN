<extend file='../master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                商品管理</a>
        </li>
        <li class="active">
            <a href="">商品添加</a>
        </li>

    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">商品管理</a></li>
        <li><a href="">添加商品</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: left">
                        <th width="80">编号</th>
                        <th>商品名称</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$data" key="$k" value="$v">
                    <tr style="text-align: left">
                        <td>{{$v['gid']}}</td>
                        <td>{{$v['gname']}}</td>
                        <td>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{u('goodsList.index',['gid'=>$v['gid']])}}">货品列表</a></li>
                                    <li><a href="{{u('edit',['gid'=>$v['gid']])}}">编辑</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{u('del',['gid'=>$v['gid']])}}" >删除</a></li>
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