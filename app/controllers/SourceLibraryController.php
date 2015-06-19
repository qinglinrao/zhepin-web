<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15-5-15
 * Time: 上午9:55
 */

class SourceLibraryController extends BaseController{

    public function getSourceList($type){
        $sources = SourceLibrary::whereSourceType($type)->get();

        return View::make('merchants.sources.list',compact('type','sources'));
    }

    public function getSharePage($id){
        $source = SourceLibrary::whereId($id)->first();
        $time = date("Y-m-d H:i",Input::get('t')?Input::get('t'):time());
        return View::make('merchants.sources.share',compact('source','time'));
    }

} 