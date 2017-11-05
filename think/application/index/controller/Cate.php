<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Cate extends Controller
{
  public function cate()
  {
    $cateid = input('cateid');
    $cates = Db::name('cate') -> find($cateid); 

    $articles = Db::name('article')-> where(array('cateid' => $cateid)) -> select();//
    $this -> assign('articles',$articles);

    $this -> assign('cates',$cates);
    $tags = Db::name('tags') -> select();
    $this -> assign('tags',$tags);
    return $this -> fetch('cate');
  }
}
