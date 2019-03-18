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
                            <div class="col-md-10  offset-lg-1">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="姓名">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10  offset-lg-1">
                                <input type="text" class="form-control form-control-lg" name="volunteer" placeholder="义工编号">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary btn-lg">搜索</button>
                        </div>
                      </form>
                        @if($volunteer)
                        <div class="col-sm-10 offset-lg-1" style="margin-top: 40px; background-color: #f3f3f3; font-family: 'Nunito', sans-serif; font-size: 16px;">
                            <div class="form-group" style="padding-top: 20px;">
                                <label class="control-label col-sm-4">用户：{{ $volunteer['name'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">会员识别号：{{ $volunteer['member'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">义工编号：{{ $volunteer['volunteer'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">身份证号码：{{ $volunteer['idcard'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">第一年度累计总积分：{{ $volunteer['first_total_integral'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">第一年有效期：{{ $volunteer['first_validity'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">第二年度累计总积分：{{ $volunteer['second_total_integral'] }}</label>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">第二年有效期：{{ $volunteer['second_validity'] }}</label>
                            </div>
                            <div class="form-group" style="padding-bottom: 20px; text-align: center;">
                                <div class="col-sm-offset-6 col-sm-3">
                                    <button type="button" class="btn btn-primary"><a href="{{ route('maike') }}" style="color: #ffffff;">报 名</a></button>
                                </div>
                            </div>
                        </div>
                        @endif
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