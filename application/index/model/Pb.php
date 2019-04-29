<?php
namespace app\index\model;

use think\Model;

class Pb extends Model
{
    //订阅号模型层
    protected static function init()
    {
        Pb::event('before_insert', function ($data) {
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $data['thumb'] = '/uploads/' . $info->getSaveName();
                }
            }
        });
        //添加前上传文件
        Pb::event('before_update', function ($data) {
            if ($_FILES['thumb']['tmp_name']) {
                $arts = Pb::find($data['id']);
                $thumbpath = $_SERVER["DOCUMENT_ROOT"] . $arts['thumb'];
                if (file_exists($thumbpath)) {
                    unlink($thumbpath);
                }
                $file = request()->file('thumb');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if ($info) {
                    $data['thumb'] = '/uploads/' . $info->getSaveName();
                }

            }
        });
        //编辑上传文件并对图片的删除
        Pb::event('before_delete', function ($data) {

            $arts = Pb::find($data['id']);
            $thumbpath = $_SERVER["DOCUMENT_ROOT"] . $arts['thumb'];
            if (file_exists($thumbpath)) {
                unlink($thumbpath);
            }

        });
        //删除前删除图片
    }
}
