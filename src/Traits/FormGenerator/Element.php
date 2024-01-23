<?php

namespace Schaefersoft\Base\Traits\FormGenerator;

class Element
{
    private string $name;

    private bool $sortable = false;
    private bool $showIndex = true;
    private bool $showCreate = true;
    private bool $showUpdate = true;


    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function isSortable(): bool
    {
        return $this->sortable;
    }

    public function setSortable(bool $sortable): static
    {
        $this->sortable = $sortable;
        return $this;
    }

    public function isShowIndex(): bool
    {
        return $this->showIndex;
    }

    public function setShowIndex(bool $showIndex): void
    {
        $this->showIndex = $showIndex;
    }

    public function isShowCreate(): bool
    {
        return $this->showCreate;
    }

    public function setShowCreate(bool $showCreate): static
    {
        $this->showCreate = $showCreate;
        return $this;
    }

    public function isShowUpdate(): bool
    {
        return $this->showUpdate;
    }

    public function setShowUpdate(bool $showUpdate): static
    {
        $this->showUpdate = $showUpdate;
        return $this;
    }


    public function onlyIndex(): static
    {
        $this->showCreate = false;
        $this->showUpdate = false;
        return $this;
    }

    public function onlyCreate(): static
    {
        $this->showIndex = false;
        $this->showUpdate = false;
        return $this;
    }

    public function onlyUpdate(): static
    {
        $this->showIndex = false;
        $this->showCreate = false;
        return $this;
    }
}
