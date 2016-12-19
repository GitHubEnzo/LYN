<extend file='../master'/>
<block name="content">
    <style>
        th{
            text-align: center;
        }
    </style>
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href=""><i class="fa fa-cogs"></i>
                货品管理</a>
        </li>
        <li class="active">
            <a href="">货品添加</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="">货品列表</a></li>
        <li><a href="">货品添加</a></li>
    </ul>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <foreach from="$data" key="$k" value="$v">
                        <th width="200">{{$v['taname']}}</th>
                        </foreach>
                        <th width="100">库存</th>
                        <th width="100">货号</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="text-align: center">
                        <foreach from="$data" key="$k" value="$v">
                        <td width="200">
                            <select class="js-example-basic-single form-control" name="combine[]">
                                <option value="0">请选择</option>
                                <foreach from="$v['select']" key="$kk" value="$vv">
                                <option value="{{$vv['gtvalue']}}">{{$vv['gtvalue']}}</option>
                                </foreach>
                            </select>
                        </td>
                        </foreach>
                        <td>
                            <input type="text"  class="form-control" name="inventory" value="">
                        </td>
                        <td>
                            <input type="text"  class="form-control" name="number" value="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">确定</button>
    </form>
    <div class="pagination pagination-sm pull-right">
    </div>
</block>