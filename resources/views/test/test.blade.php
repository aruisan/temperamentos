@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

               

                <div class="card-body">
                     <table class="table">
                        <thead>
                            <th>#</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                        </thead>
                        <tbody>
                            @foreach($preguntas as $pregunta)
                                <tr>
                                    <td>{{$pregunta->pregunta}}</td>
                                    @foreach($pregunta->palabras as $k => $palabra)
                                        <td>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="palabra[{{$k}}]" value="{{$palabra->id}}">
                                                <button class="form-check-label" class="btn btn-link" onclick="significado('{{$palabra->nombre}}')">{{$palabra->nombre}}</button>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="significado_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title_modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="body_modal">
            <table>
                <tbody>
                    <th>Titulo</th>
                </tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
    <script>
        const guardar = () => {
            document.getElementById("formulario").submit();
        }

        const significado = async palabra => {
            let res = await fetch(`https://es.wikipedia.org/w/api.php?action=query&list=search&srprop=snippet&format=json&origin=*&utf8=&srsearch=que%es%${palabra}`)
                             .then((response) => response.json())
                            .then(data => data);

            console.log('dd', res);

            resp.query.search.forEach(e => {

            });
            $(`#body_modal`).html(`<p class="text-justify">${res.snippet}</p>`);
            $(`#significado_modal`).modal();
        }
    </script>
@endsection
