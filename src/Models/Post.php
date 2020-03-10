<?php
declare(strict_types=1);

namespace Apteles\Acme\Models;

class Post{

    public function setTitle(string $title):Post{

        $this->title = $this->validadeArgument($title);
        return $this;
    }

    public function getTitle():string{
        return $this->title;
    }

    private function validadeArgument(string $attribute):string{
        if( empty($attribute) ){
            throw new \InvalidArgumentException("Content can´t be ampty or null");
        }
        return $attribute;
    }

}