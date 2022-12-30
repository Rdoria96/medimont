@extends('adminlte::page')

@section('content_header')
    <div class="card shadow mb-4 ">
        <div class="card-header py-3">
            <button title="Nueva" class="btn btn-success pull-right" style="margin-bottom: 5px" data-toggle="modal"
                data-target="#solN"><span class="fa fa-plus"></span> Nueva</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover border-left-info " id="table_solic" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>
                                <h6>Fecha</h6>
                            </th>
                            <th>
                                <h6>Hora</h6>
                            </th>
                            <th>
                                <h6>Servicio</h6>
                            </th>
                            <th>
                                <h6>Descripción</h6>
                            </th>
                            <th>
                                <h6>Estado</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="v-error">

                </div>
            </div>
            <div id="solN" class="modal fade" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registro de Solicitud</h4>
                        <button type="button" class="close"
                            data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form role="form" id="Registro_sol" method="post">

                            <input type="hidden" class="form-control" name="id"
                                placeholder="identificación" value="">

                            <div class="form-group col-md-6">
                                <label for="nom">Fecha</label><sup>*</sup>
                                <input type="date" class="form-control" name="fecha"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ap">Hora</label><sup>*</sup>
                                <input type="time" class="form-control" name="tm"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dir">Servicio</label><sup>*</sup>
                                <select name="dp" id="sv" class="form-control"
                                    required>

                                </select>
                            </div>


                            <input type="hidden" name="RG" value="true">
                            <div class="form-group col-md-10">
                                <label for="tele">Descripción</label><sup>*</sup>
                                <textarea name="desc" class="form-control" rows="5" cols="17" maxlength="400" required></textarea>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit"
                            class="btn btn-success submitBtn">Registrar</button>

                        </form>
        @stop

        @section('content')
            <p>Welcome to this beautiful admin panel.</p>
        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script>
                console.log('Hi!');
            </script>
        @stop
