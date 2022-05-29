<?php

namespace App\Enums;

enum PluginStatus: string
{
    case Draft = 'draft';
    case Pending = 'pending';
    case Published = 'published';

    public function getLabel(): string
    {
        return str($this->value)->replace('_', ' ')->ucfirst()->toString();
    }
}
