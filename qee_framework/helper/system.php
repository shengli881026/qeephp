<?php
/**
 * This file belongs to system.php
 * 
 * @link    www.blogdaren.com
 * @author  manon<lgh_2002@163.com>
 * @version 
 * @modify  2016-12-15 19:45:11
 */

class Helper_System
{
    /**
     * 检验一个数据项是否为正整数
     *
     * @param  string  $input
     *
     * @return boolean
     */
    static public function checkIsInt($input)
    {
        return preg_match('/^[1-9][0-9]*$/is', $input, $matches);
    }

    /**
     * 给数组降级
     *
     * @param  int  $input  原始数组
     * @param  int  $level  降到哪一级
     *
     * @return array        降级后的数组 
     */
    static function degradeArray($input = array(), $level = 1)
    {
        !Helper_System::checkIsInt($level) && $level = 1;

        $depth = Helper_System::getArrayDepth($input);

        if($depth <= $level) return $input;

        $diff = abs($depth - $level);

        for($i = 0; $i < $diff; $i++)
        {
            if(!is_array($input[0])) return $input;
            $input = array_shift($input);
        }

        return $input;
    }








}












