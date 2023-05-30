<?php

namespace App\Actions;

class UpdateMailSendAtCompanyAction
{
    public function __invoke($company): void
    {
        $company->update([
            'mail_send_at' => now(),
        ]);

    }
}