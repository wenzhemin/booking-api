@extends('admin.app')


@section('content')
    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <i class="fa fa-stream fa-2x"></i>
                                <div class="card-body">
                                    <h4>Kontakt formular</h4>    
                                    <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Kontakt formular
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <i class="far fa-calendar-plus fa-2x"></i>
                                <div class="card-body">
                                    <h4>Kalender</h4>    
                                    <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Kalender
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                <div class="card-body">
                                    <h4>Placering</h4>    
                                    <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Placering
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <i class="fa fa-users fa-2x"></i>
                                <div class="card-body">
                                    <h4>Antal personer</h4>    
                                    <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Antal Personer
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection