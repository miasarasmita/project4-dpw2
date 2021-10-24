<?php  
namespace App\Http\Controllers;


class HomeController extends controller{


   function showberanda(){
       return view('admin.beranda');
   }

   function showproduk(){
    return view('admin.produk.index');
   }

   function showtemplate(){
    return view('admin.template.base');
   }

   function showkategori(){
    return view('admin.kategori.index');
   }

   function showuser(){
    return view('admin.user.index');
   }

}