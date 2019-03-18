<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public $table = 'volunteer';

    protected $fillable = [
        'address',
        'member',
        'name',
        'volunteer',
        'idcard',
        'phone',
        'first_total_integral',
        'first_honored_integral',
        'first_prize_integral',
        'second_total_integral',
        'second_honored_integral',
        'second_prize_integral',
        'company',
        'post',
        'department',
        'training_sessions',
        'first_validity',
        'first_certificate_type',
        'second_validity',
        'second_certificate_type',
        'third_validity',
        'third_certificate_type',
        'welfare_count',
        'welfare_subscribe_s_count',
        'welfare_register_s_count',
        'business_count',
        'business_subscribe_s_count',
        'business_register_s_count',
        'propaganda_times_count',
        'stall_consulting_count',
        'sending_books_count',
        'donation_points_count',
        'special_count',
        'first_welfare',
        'first_welfare_subscribe_s',
        'first_welfare_register_s',
        'first_business',
        'first_business_subscribe_s',
        'first_business_register_s',
        'first_propaganda_times',
        'first_stall_consulting',
        'first_sending_books',
        'first_donation_points',
        'first_special',
        'volunteer_Points',
        'second_welfare',
        'second_welfare_subscribe_s',
        'second_welfare_register_s',
        'second_business',
        'second_business_subscribe_s',
        'second_business_register_s',
        'second_propaganda_times',
        'second_stall_consulting',
        'second_sending_books',
        'second_donation_points',
        'second_special',
        'special_remarks',
    ];

    public $timestamps = false;

}