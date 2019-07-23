<?php
namespace Blog\Model;

use RedBeanPHP\SimpleModel;

/**
 * Class Tag
 * @package Blog\Model
 */
class Tag extends SimpleModel implements TagInterface
{
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
}
