<?php

namespace App\Scopes\Tenant;

use App\Tenant\ManagerTenant;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class TenantScope implements Scope {
    public function apply(Builder $builder, Model $model) {
        $builder->where('tenant_id', App::make(ManagerTenant::class)->getTenantIdentity());
    }
}