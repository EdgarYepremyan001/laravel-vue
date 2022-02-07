<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function getAll();
    public function getById($postId);
    public function delete($postId);
}
