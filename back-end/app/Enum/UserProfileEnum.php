<?php

namespace App\Enum;

enum UserProfileEnum: string
{
    case Admin = 'admin';
    case SocialAction = 'social_action';
    case Voluntary = 'voluntary';
}
