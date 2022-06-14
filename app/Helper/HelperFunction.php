<?php

namespace App\Helper;

class HelperFunction
{
    public static function statusOptions($selected_index = null)
    {
        $options = [
            ['id' => 0, 'name' => 'Approved'],
            ['id' => 1, 'name' => 'Confirm'],
            ['id' => 2, 'name' => 'Reject'],
            ['id' => 3, 'name' => 'Complete'],
        ];

        $options_str = '';
        foreach ($options as $each) {
            $selected = '';
            if ($selected_index) {
                $selected = $each['id'] == $selected_index ? 'selected' : '';
            }
            $options_str .= '<option value="' . $each['id'] . '" ' . $selected . '>' . $each['name'] . '</option>';
        }

        return $options_str;
    }

    public static function paymentStatusOptions($selected_index = null)
    {
        $options = [
            ['id' => 0, 'name' => 'Pending'],
            ['id' => 1, 'name' => 'Complete'],
            ['id' => 2, 'name' => 'Partial'],
        ];

        $options_str = '';
        foreach ($options as $each) {
            $selected = '';
            if ($selected_index) {
                $selected = $each['id'] == $selected_index ? 'selected' : '';
            }
            $options_str .= '<option value="' . $each['id'] . '" ' . $selected . '>' . $each['name'] . '</option>';
        }

        return $options_str;
    }

    public static function statusUI($status)
    {
        $output = '-';

        if ($status == 0) {
            $output = '<span class="text-warning">Approved</span>';
        } elseif ($status == 1) {
            $output = '<span class="text-success">Confirm</span>';
        } elseif ($status == 2) {
            $output = '<span class="text-danger">Reject</span>';
        } elseif ($status == 3) {
            $output = '<span class="text-info">Complete</span>';
        }

        return $output;
    }

    public static function paymentStatusUI($payment_status)
    {
        $output = '-';

        if ($payment_status == 0) {
            $output = '<span class="text-warning">Pending</span>';
        } elseif ($payment_status == 1) {
            $output = '<span class="text-success">Complete</span>';
        } elseif ($payment_status == 2) {
            $output = '<span class="text-danger">Partial</span>';
        }

        return $output;
    }
}
