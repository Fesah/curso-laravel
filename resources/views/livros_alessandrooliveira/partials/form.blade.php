<!-- ###### partials/form.blade.php ###### -->
Título: <input type="text" name="titulo" value="{{ $livro->titulo }}">
Autor: <input type="text" name="autor" value="{{ $livro->autor }}">
ISBN: <input type="text" name="isbn" class="isbn" value="{{ $livro->isbn }}">
<button type="submit">Enviar</button>
