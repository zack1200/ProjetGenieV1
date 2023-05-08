@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des commandes</h1>

        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('orders.search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher par nom d'utilisateur">
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID de la commande</th>
                    <th>Utilisateur</th>
                    <th>Article</th>
                    <th>Couleur</th>
                    <th>Taille</th>
                    <th>Quantité</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->nom }}</td>
                        <td>{{ $order->item->nom }}</td>
                        <td>{{ $order->color->nom }}</td>
                        <td>{{ $order->taille->nom }}</td>
                        <td>{{ $order->quantite }}</td>
                        <td>{{ $order->statut }}</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
