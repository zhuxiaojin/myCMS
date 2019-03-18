<?php
/**
 * Created by PhpStorm.
 * User: storm 朱晓进 qhj1989@qq.com
 * Date: 2018/12/15
 * Time: 11:17 AM
 */
function say() {
    return 1235;
}

/**
 * @name:getFileUrl
 * @param $path
 * @return string
 * @author:Storm 朱晓进 <qhj1989@qq.com>
 */
function getFileUrl($path) {
    //如果是FTP上传
    if (config('filesystems.default') == 'ftp') {
        return config('filesystems.disks.ftp.host') . '/' . $path;
    }
    return Storage::url($path);
}