<?php

namespace App\Tenant;

class ManagerTenant {
    public function getTenantIdentity(): int
    {
        return auth()->user()->tenant_id;
    }
}