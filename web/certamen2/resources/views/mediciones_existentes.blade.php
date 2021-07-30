@extends("layouts.master")

@section('contenido')

    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto mb-5">
            <div class="card">

                <div class="card-header bg-primary text-dark">
                    <span>FILTRO</span>
                </div>

                <div class="card-body">
                    <select class="form-select" id="filtro-cbx">
                        <option value="kW">KW</option>
                        <option value="w">W</option>
                        <option value="c">C</option>
                    </select>
                </div>

            </div>

        </div>

    </div>

    <div class="row mt-5">

        <div class="col-12 col-md-12 col-lg-6 mx-auto mb-5">

            <table class="table table-hover table-bordered table-striped table-responsive">

                <thead class="bg-primary text-dark">

                    <tr>
                        <td>Fecha</td>
                        <td>Hora</td>
                        <td>Medidor</td>
                        <td>Valor</td>
                        <td>Accion</td>
                    </tr>

                </thead>

                <tbody id="tbody-lecturas">
                    
                </tbody>

            </table>

        </div>

    </div>

@endsection