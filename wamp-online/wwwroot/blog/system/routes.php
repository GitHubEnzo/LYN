<?php
Route::get('/foo', 'home/entry/add');

//分类跳转
Route::get('/show_{cid}.html', 'home/listpage/index');

//标签跳转
Route::get('/tag_{tid}.html', 'home/listpage/index');

//文章跳转
Route::get('/arc_{aid}.html', 'home/content/index');