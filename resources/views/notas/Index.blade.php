<x-layout>

  <h1>notas</h1>

  <form method="post" action="/imc/calcularImc">
    @csrf
    <div class="form-group">
      <label for="exampleInputnome">nome</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nome">
    </div>
    <div class="form-group">
      <label for="exampleInputAltura">media</label>
      <input type="password" class="form-control" id="exampleInputAltura" placeholder="Altura">
    </div>
    <div class="form-nome">
      <input type=nome class="form-nome-input" id="nome">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-layout>

