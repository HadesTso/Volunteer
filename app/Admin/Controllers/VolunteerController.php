<?php

namespace App\Admin\Controllers;

use App\Models\Volunteer;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class VolunteerController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('义工列表')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑义工信息')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Volunteer);

        $grid->id('ID')->sortable();
        $grid->address('地址');
        $grid->member('会员识别号');
        $grid->name('姓名');
        $grid->volunteer('义工编号');
        $grid->idcard('身份证号码');
        $grid->phone('联系方式');

        $grid->first_total_integral('第一年度累计总积分');
        $grid->second_total_integral('第二年度累计总积分');

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Volunteer::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Volunteer);

        $form->text('address', '地址');
        $form->text('member', '会员识别号');
        $form->text('name', '姓名');
        $form->text('volunteer', '义工编号');
        $form->text('idcard', '身份证号码');
        $form->text('first_total_integral', '第一年度累计总积分');
        $form->text('first_honored_integral', '第一年已兑奖积分');
        $form->text('first_prize_integral', '第一年已兑换奖品');
        $form->text('second_total_integral', '第二年度累计总积分');
        $form->text('second_honored_integral', '第二年已兑奖积分');
        $form->text('second_prize_integral', '第二年已兑换奖品');
        $form->text('phone', '联系方式');
        $form->text('company', '公司');
        $form->text('post', '职务');
        $form->text('department', '部门');
        $form->text('training_sessions', '参训场次');
        $form->text('first_validity', '第一年有效期');
        $form->text('first_certificate_type', '第一本证书类别');
        $form->text('second_validity', '第二年有效期');
        $form->text('second_certificate_type', '第二本证书类别');
        $form->text('third_validity', '第三年有效期');
        $form->text('third_certificate_type', '第三本证书类别');
        $form->text('welfare_count', '总-公益遗嘱预约次数');
        $form->text('welfare_subscribe_s_count', '总-公益遗嘱预约成功次数');
        $form->text('welfare_register_s_count', '总-公益遗嘱登记成功次数');
        $form->text('business_count', '总-商业遗嘱预约次数');
        $form->text('business_subscribe_s_count', '总-商业遗嘱预约成功次数');
        $form->text('business_register_s_count', '总-商业遗嘱登记成功次数');
        $form->text('propaganda_times_count', '总-一对一/内部短时分享/ 朋友圈宣传次数');
        $form->text('stall_consulting_count', '总-内部讲座/社区讲座/摆摊咨询次数');
        $form->text('sending_books_count', '总-赠书次数');
        $form->text('donation_points_count', '总-捐款积分');
        $form->text('special_count', '总-其他特殊情况积分');
        $form->text('first_welfare', '第一年公益遗嘱预约次数');
        $form->text('first_welfare_subscribe_s', '第一年公益遗嘱预约成功次数');
        $form->text('first_welfare_register_s', '第一年公益遗嘱登记成功次数');
        $form->text('first_business', '第一年商业遗嘱预约次数');
        $form->text('first_business_subscribe_s', '第一年商业遗嘱预约成功次数');
        $form->text('first_business_register_s', '第一年商业遗嘱登记成功次数');
        $form->text('first_propaganda_times', '第一年一对一/内部短时分享/ 朋友圈宣传次数/约面客户给遗嘱库工作人员');
        $form->text('first_stall_consulting', '第一年内部讲座/社区讲座/摆摊咨询次数');
        $form->text('first_sending_books', '第一年赠书次数');
        $form->text('first_donation_points', '第一年捐款积分');
        $form->text('first_special', '第一年-其他特殊情况积分');
        $form->text('volunteer_Points', '2017.12义工集赞积分');
        $form->text('second_welfare', '第二年公益遗嘱预约次数');
        $form->text('second_welfare_subscribe_s', '第二年公益遗嘱预约成功次数');
        $form->text('second_welfare_register_s', '第二年公益遗嘱登记成功次数');
        $form->text('second_business', '第二年商业遗嘱预约次数');
        $form->text('second_business_subscribe_s', '第二年商业遗嘱预约成功次数');
        $form->text('second_business_register_s', '第二年商业遗嘱登记成功次数');
        $form->text('second_propaganda_times', '第二年一对一/内部短时分享/ 朋友圈宣传次数');
        $form->text('second_stall_consulting', '第二年内部讲座/社区讲座/摆摊咨询次数');
        $form->text('second_sending_books', '第二年赠书次数');
        $form->text('second_donation_points', '第二年捐款积分');
        $form->text('second_special', '第二年-其他特殊情况积分');
        $form->text('special_remarks', '特殊情况备注');

        return $form;
    }
}
