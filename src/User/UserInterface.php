<?php

namespace Lazyuu\LoveInterface\User;

interface UserInterface
{
    public function getUserInfoById(int $userId): array;
}
