@extends('admin.app')


@section('content')
    <!-- Page content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <i class="fa fa-stream fa-2x"></i>
                            <h4 class="card-title">Kontakt formular</h4>    
                            <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Kontakt formular
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <i class="far fa-calendar-plus fa-2x"></i>
                            <h4 class="card-title">Kalender</h4>    
                            <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Kalender
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <h4 class="card-title">Placering</h4>    
                            <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Vælg Placering
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mt-4">
                        <div class="card-body">
                            <i class="fa fa-users fa-2x"></i>
                            <h4 class="card-title">Antal personer</h4>    
                            <p class="card-text">Kalenderen benyttes til at dine kunder kan booke en dato og tid til den service der udbydes af jer som firma</p>
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
@endsection