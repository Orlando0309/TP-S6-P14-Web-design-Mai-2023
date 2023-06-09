<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="new Article">
        <title >Inserer Article</title>
        <script src="{{ secure_url('vendor/ckeditor/ckeditor.js') }}"></script>
        <link href="{{secure_url('vendor/ckeditor/contents.css') }}" rel="stylesheet">
        <link href="{{secure_url('assets/css/main.css') }}" rel="stylesheet">
    
    </head>
    <body class="font-sans antialiased">
        <h1>New Article</h1>
        <form action="/article/save" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row gtr-uniform">
                <div class="col-12 col-6-xsmall">
                    <label for="titre">Titre</label>
                    <input type="text"  name="titre" id="titre">
                </div>
                <div class="col-12 col-6-xsmall">
                    <label for="titre">Image</label>
                    <input type="file"  name="image" id="image" required>

                </div>
                <div class="col-12 col-6-xsmall">
                    <label for="titre">Categoire</label>
                    <select name="categorie" id="categorie" >
                        @foreach($listecategorie as $a)
                            <option value="{{ $a->id }}">{{ $a->nomcategorie }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-6-xsmall">
                    <label for="resume">Resume</label>
                    <textarea name="resume"></textarea>
                </div>
                <div class="col-12 col-6-xsmall">
                Contenu:<textarea name="contenu" id="editor"></textarea>
                     
<script>
    CKEDITOR.replace('contenu');
</script>
                </div>
                <input type="submit" class="button large" value="Save">
            </div>
        </form>
    </body>
</html>
