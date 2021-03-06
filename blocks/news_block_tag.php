<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                  Copyright (c) 2000-2016 XOOPS.org                        //
//                       <http://xoops.org/>                             //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

if (file_exists(XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php')) {

    /**
     * @param $options
     *
     * @return array
     */
    function news_tag_block_cloud_show($options)
    {
        require_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
        if (!isset($moduleDirName)) {
            $moduleDirName = 'news';
        }

        return tag_block_cloud_show($options, $moduleDirName);
    }

    /**
     * @param $options
     *
     * @return string
     */
    function news_tag_block_cloud_edit($options)
    {
        require_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';

        return tag_block_cloud_edit($options);
    }

    /**
     * @param $options
     *
     * @return array
     */
    function news_tag_block_top_show($options)
    {
        require_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';
        if (!isset($moduleDirName)) {
            $moduleDirName = 'news';
        }

        return tag_block_top_show($options, $moduleDirName);
    }

    /**
     * @param $options
     *
     * @return string
     */
    function news_tag_block_top_edit($options)
    {
        require_once XOOPS_ROOT_PATH . '/modules/tag/blocks/block.php';

        return tag_block_top_edit($options);
    }
}
