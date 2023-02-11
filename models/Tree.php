<?php

namespace app\models;

/**
 * Class Tree
 * @package app\models
 */
class Tree
{

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getTree(): array
    {

        if (empty($this->data))
            return [];

        $tree = [];
        $parentIds = array_column($this->data, 'parent_id');
        foreach ($parentIds as $parentId) {
            $tree[] = $this->buildTree($parentId);
        }

        return $tree;
    }

    private function buildTree(int $parentId): array
    {
        foreach ($this->data as $key => $item) {
            if ($item['parent_id'] == $parentId) {
                if ($children = $this->buildTree($item['id'])) {
                    $item['childs'] = $children;
                }
                return $item;
            }
        }

        return [];
    }

}