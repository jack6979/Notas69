<x-layout>

  <h1>notas</h1>

  <form method="post" action="/imc/calcularImc">
    @csrf
    <div class="form-group">
      <label for="exampleInputnome">nome</label>
      <input type="text" class="form-control" id="exampleInputNome" aria-describedby="emailHelp" placeholder="nome">
    </div>
    <div class="form-group">
      <label for="exampleInputAltura">media</label>
      <input type="text" class="form-control" id="exampleInputMedia" placeholder="Altura">
    </div>
    <div class="form-group">
    <label for="exampleInputStatus">status</label>
      <input type=text class="form-control" id="exampleInputStatus">
    </div>
    <button type="submit" class="btn btn-primary">Calculer</button>
  </form>
  <label >RESULTADO</label><br>
  <label>notas: {{$resultado["notas"]}}</label><br>
  <label>FAIXA: {{$resultado["faixa"]}}</label><br>
  <br><br><br>
</x-layout>

