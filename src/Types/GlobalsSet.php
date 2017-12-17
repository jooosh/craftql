<?php

namespace markhuot\CraftQL\Types;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\InterfaceType;
use GraphQL\Type\Definition\EnumType;
use GraphQL\Type\Definition\Type;
use Craft;
use craft\elements\Entry;
use markhuot\CraftQL\Request;
use markhuot\CraftQL\Builders\Schema;

class GlobalsSet extends \markhuot\CraftQL\Builders\Schema {

    function boot() {
        foreach ($this->request->globals()->all() as $globalSet) {
            $this->addRawField($globalSet->getContext()->handle)
                ->type($globalSet);
        }
    }

}