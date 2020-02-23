<?php

namespace xiaodi\Facade;

use think\Facade;

/**
 * @see \xiaodi\Jwt
 * @package xiaodi\facade
 * @mixin \xiaodi\Jwt
 */
class Jwt extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'jwt';
    }
}
