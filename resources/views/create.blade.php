@extends('layout')
@section('title', 'create proudact')
@section('content')

<div id="per" class="container-fluid">
   
    <h1>Nouvelle annonce</h1>

   

    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">titel</label><br>
        <input name="title" type="text"  ><br>
        <label for="">description</label><br>
        <input name="description" type="text"  ><br>
        <label for="">category_id</label><br>
        <input name="category_id" type="text"  ><br>
    
        <label for="">slug</label><br>
        <input name="slug" type="text"  ><br>
        {{-- <select name="niveau" id="">
            <option value="Débutant" >Débutant</option>
            <option value="Intermédiaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
        </select><br> --}}
        <label for="">stock</label><br>
        <input name="stock" type="text"  ><br>
        <label for="">price</label><br>
        <input name="price" type="text"  ><br>
        <label for="">old_price</label><br>
        <input name="old_price" type="text"  ><br>

      <label for="">categorie</label><br>
      <input type="text" name="cat"><br>
      
    <label for="">photo</label><br>
    <input type="file" name="image"><br>

<button class="btn btn-primary mt-2" type="submit">Ajouter</button>
    
    </form>
   </div>
   @endsection