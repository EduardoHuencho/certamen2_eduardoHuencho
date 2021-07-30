@extends("layouts.master")

@section('contenido')

    <div class="row mt-5">

        <div class="col-12 col-md-6 col-lg-5 mx-auto mb-5">
            <div class="card">

                <div class="card-header bg-primary text-dark">
                    <span>REGISTRAR LECTURAS</span>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="fecha-txt" class="form-label">Fecha</label>
                        <input type="date"  id="fecha-txt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="hora-txt" class="form-label">Hora</label>
                        <input type="time"  id="hora-txt" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label">Medidor</label>
                        <select class="form-select" id="medidor-selct">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                            <option value=8>8</option>
                            <option value=9>9</option>
                            <option value=10>10</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Direccion</label>
                        <input type="text"  id="direccion-txt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                        <input type="number"  id="valor-txt" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="medida-select" class="form-label">Tipo De Medida</label>
                        <select class="form-select" id="medida-selct">
                            <option value="kw">Kilowatts</option>
                            <option value="W">Watts</option>
                            <option value="C">Temperatura</option>
                        </select>
                    </div>

                </div>

                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-success">REGISTRAR</button>
                </div>

            </div>
        </div>

    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/lecturas.js')}}"></script>
@endsection