<?php

namespace App\Infrastructure\Entities;

enum Architecture: string
{
    case X86 = 'x86';
    case Arm = 'arm';
}
