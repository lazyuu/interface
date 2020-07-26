<?php
/**
 * This file is part of Swoft.
 *
 * @link https://api.party.org
 * @contact garfield.li@foxmail.com
 */

namespace LoveInterface\User;

interface UserInterface
{
    public function getUserInfoById(int $userId): array;
}
