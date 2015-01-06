<?php

class SV_XentagTrending_Listener
{
    const AddonNameSpace = 'SV_XentagTrending';
    
    public static function load_class($class, array &$extend)
    {
        switch ($class)
        {
            case 'XenForo_ControllerPublic_Forum':
                $extend[] = self::AddonNameSpace.'_'.$class;
                break;
        }
    }
}