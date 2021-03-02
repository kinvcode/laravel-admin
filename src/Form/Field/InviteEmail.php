<?php

namespace Dcat\Admin\Form\Field;

use Dcat\Admin\Admin;

class InviteEmail extends Text
{
    protected $rules = ['email'];

    public function render()
    {
        $html = '';
        $status = empty($this->data) ? 0 : $this->data->is_active;
        $status = $status === 0 ? '未接受' : '已接受';
        if ($this->value) {
            $html = '&nbsp;&nbsp;&nbsp;<button disabled class="btn bg-light">' . $status . '</button>&nbsp;&nbsp;&nbsp;<button class="resend btn bg-yellow">重新邀請</button>';
        }
        $this->prepend('<i class="feather icon-mail"></i>')
            ->append($html)
            ->type('email');

        return parent::render();
    }
}
