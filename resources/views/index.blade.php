<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>中华遗嘱库</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-lg-1">
                    <div style="text-align: center; margin: 5px"><img src="./logo.png" width="100"></div>
                    <div class="card">
                    <div class="card-header">
                      <h2 class="text-center">
                        查询积分
                      </h2>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" role="form">
                          <div class="form-group">
                              <div class="col-sm-10  offset-lg-1">
                                <select name="order" class="form-control form-control-lg">
                                    <option value="">排序方式</option>
                                    <option value="member">会员识别号</option>
                                    <option value="idcard">身份证号码</option>
                                    <option value="phone">手机号码</option>
                                    <option value="volunteer">义工编号</option>
                                </select>
                              </div>
                          </div>
                        <div class="form-group">
                            <div class="col-md-10  offset-lg-1">
                                <input type="text" class="form-control form-control-lg" name="search" placeholder="搜索">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg">搜索</button>
                        </div>
                      </form>
                      <div role="tabpanel" class="tab-pane" id="product-reviews-tab" style="margin-top: 40px;">
                          <!-- 评论列表开始 -->
                          <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <td>用户</td>
                              <td>会员识别号</td>
                              <td>义工编号</td>
                              <td>身份证号码</td>
                              <td>第一年度累计总积分</td>
                              <td>第一年有效期</td>
                              <td>第二年度累计总积分</td>
                              <td>第二年有效期</td>
                            </tr>
                            </thead>
                            <tbody>
                            @if($volunteer)
                              <tr>
                                <td>{{ $volunteer['name'] }}</td>
                                <td>{{ $volunteer['member'] }}</td>
                                <td>{{ $volunteer['volunteer'] }}</td>
                                <td>{{ $volunteer['idcard'] }}</td>
                                <td>{{ $volunteer['first_total_integral'] }}</td>
                                <td>{{ $volunteer['first_validity'] }}</td>
                                <td>{{ $volunteer['second_total_integral'] }}</td>
                                <td>{{ $volunteer['second_validity'] }}</td>
                              </tr>
                            @endif
                            </tbody>
                          </table>
                          <!-- 评论列表结束 -->
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS 脚本 -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>