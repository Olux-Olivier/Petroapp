<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/options.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>PetroApp | Enregistre pompiste</title>
</head>
<body>
    <div class="container container-form">
        <header>
            <div class="title">
                <div class="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="image">
                    <img src="{{ asset('img/petrole.png') }}">
                </div>
                <h3>Petro<span>App</span></h3>
            </div>
            <div class="mood">
                <img src="{{ asset('img/mode-nuit.png') }}">
            <div>
        </header>
        <div class="content-body">
            <div class="aside-barre">
                <a href="{{ url('/pompiste/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un pompiste</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/client/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-plus" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4c.96 0 1.84 .338 2.53 .901" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un client</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/fournisseur/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                            <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                            <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un fournisseur</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/operation/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-trello" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            <path d="M7 7h3v10h-3z" />
                            <path d="M14 7h3v6h-3z" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer une operation</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/Commandes/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M8.2 9.8l7.6 -4.6" />
                            <path d="M12 12v9" />
                            <path d="M12 12l-8 -4.5" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Passer une commande</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/article/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M8.2 9.8l7.6 -4.6" />
                            <path d="M12 12v9" />
                            <path d="M12 12l-8 -4.5" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un article</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/pret/create') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5" />
                            <path d="M12 12l8 -4.5" />
                            <path d="M8.2 9.8l7.6 -4.6" />
                            <path d="M12 12v9" />
                            <path d="M12 12l-8 -4.5" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Enregistrer un pret</h4>
                        </div>
                    </div>
                </a>

                <a href="{{ url('/gerant/taches') }}">
                    <div class="card">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 12l14 0" />
                            <path d="M5 12l6 6" />
                            <path d="M5 12l6 -6" />
                            </svg>
                        </div>
                        <div class="text">
                            <h4>Retour</h4>
                        </div>
                    </div>
                </a>
            </div>

           <div class="table" cellpadding="0">
                <h3>Liste des prets</h3>
                <div class="div-table">
                    <div class="head" style="grid-template-columns:repeat(8,1fr)">
                        <div class="th"><h4>article preté</h4></div>
                        <div class="th"><h4>Quantite</h4></div>
                        <div class="th"><h4>Prix unitair</h4></div>
                        <div class="th"><h4>Prix total</h4></div>
                        <div class="th"><h4>Date paiement</h4></div>
                        <div class="th"><h4>Nom client</h4></div>
                        <div class="th"><h4>Actions</h4></div>
                        <div class="th"><h4>Etat</h4></div>
                    </div>
                    <div class="body" >
                        @foreach($prets as $pret)
                            <div class="ligne" style="grid-template-columns:repeat(8,1fr)">
                                <div class="td"><h4>{{$pret->id}}</h4></div>
                                <div class="td"><h4>{{$pret->qte}} Litres</h4></div>
                                <div class="td"><h4>{{$pret->prix_unitaire}} CDF</h4></div>
                                 @php
                                     $prix_total = $pret->prix_unitaire * $pret->qte;
                                 @endphp
                                <div class="td"><h4>{{$prix_total}} CDF</h4></div>
                                <div class="td"><h4>{{$pret->datepaiement}}</h4></div>
                                <div class="td"><h4>{{$pret->client_id}}</h4></div>
                                <div class="td"><h4>
                                    <form action="{{route('pret.valide')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$pret->id}}">
                                        <button>{{$pret->etat}}</button>
                                    </form>
                                </h4></div>
                                <div class="td options">
                                    <div class="opt"></div>
                                    <div class="opt"></div>
                                    <div class="opt"></div>
                                    <div class="card-options">
                                        <a href="/pret/{{$pret->id}}/edit">Modifier</a>
                                        <form action="{{route('pret.destroy',$pret)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
           </div>
        </div>
    </div>
    <script src="{{ asset('js/events.js') }}"></script>
    <script src="{{ asset('js/dark.js') }}"></script>
    <script src="{{ asset('js/hover.js') }}"></script>
</body>
</html>
