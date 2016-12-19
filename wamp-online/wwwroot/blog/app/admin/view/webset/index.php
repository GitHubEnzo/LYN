<extend file='../master'/>
<block name="content">
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                站点管理</a>
        </li>
        <li class="active">
            <a href="">站点配置</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">站点管理</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="80">名称</th>
                        <th>值</th>
                        <th>标题</th>
                        <th>描述</th>
                    </tr>
                    </thead>
                    <tbody>
                    <foreach from="$oldData" key="$k" value="$v">
                    <tr>
                        <th width="80">{{$v['name']}}</th>
                        <td>
                            <input type="text" class="form-control" name="{{$v['name']}}" value="{{$v['value']}}">
                        </td>
                        <td>{{$v['title']}}</td>
                        <td>{{$v['desc']}}</td>
                    </tr>
                    </foreach>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
    <div class="pagination pagination-sm pull-right">
    </div>
</block>