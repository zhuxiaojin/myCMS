<?php
/**
 * Created by PhpStorm.
 * User: storm 朱晓进 qhj1989@qq.com
 * Date: 2019/1/24
 * Time: 1:32 PM
 */

namespace App\Services\MediaLibrary;


use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\BasePathGenerator;

class PathGenerator extends BasePathGenerator
{
    /*
     * Get the path for the given media, relative to the root storage path.
     */
    public function getPath(Media $media): string {
        return md5($media->id . config('app.key')) . '/';
    }

    /*
 * Get the path for conversions of the given media, relative to the root storage path.
 */
    public function getPathForConversions(Media $media): string {
        return md5($media->id . config('app.key')). '/conversions/';
    }

    /*
     * Get the path for responsive images of the given media, relative to the root storage path.
     */
    public function getPathForResponsiveImages(Media $media): string {
        return md5($media->id . config('app.key')) . '/responsive-images/';
    }

    /*
     * Get a unique base path for the given media.
     */
    protected function getBasePath(Media $media): string {
        return $media->getKey();
    }
}