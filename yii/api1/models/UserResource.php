<?php
use yii\base\Model;
use yii\helpers\Url; // represents a link object as defined in JSON Hypermedia API Language.
use yii\web\Link;
use yii\web\Linkable;

class UserResource extends Model implements Linkable
{
    public $id;
    public $email;

    //...

    public function fields()
    {
        return ['id', 'email'];
    }

    public function extraFields()
    {
        return ['profile'];
    }

    public function getLinks()
    {
        return [
            Link::REL_SELF => Url::to(['user/view', 'id' => $this->id], true),
            'edit'         => Url::to(['user/view', 'id' => $this->id], true),
            'profile'      => Url::to(['user/profile/view', 'id' => $this->id], true),
            'index'        => Url::to(['users'], true),
        ];
    }
}
